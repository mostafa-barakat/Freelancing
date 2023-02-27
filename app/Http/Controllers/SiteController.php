<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Category;
use App\Models\Proposal;
use Illuminate\Http\Request;
use App\Notifications\NewProposal;
use Illuminate\Notifications\DatabaseNotification;

class SiteController extends Controller
{
    public function index()
    {
        $top_cats = Category::with('projects')->withCount('projects')->orderBy('projects_count' , 'desc')->take(4)->get();
        $latest_project = Project::latest()->paginate(2);
        return view('site.index' , compact('top_cats' , 'latest_project'));
    }
    public function category(Category $category)
    {
        $category->load('projects');

        $projects = $category->projects()->paginate(2);

        return view('site.jobs', compact('category', 'projects'));
    }
    public function project(Project $project)
    {
        return view('site.project', compact('project'));
    }
    public function apply_now(Project $project)
    {
        $user = $project->user;
        if($user->channel_type) {
            $msg = "There is new Proposal Submitted to '".$project->trans_name."'";
            $url = route('site.project', $project->slug);
            $user->notify(new NewProposal($msg, $url));
        }

        return view('site.apply_now', compact('project'));
    }

    public function apply_now_data(Request $request, Project $project)
    {
        $request->validate([
            'cost' => 'required',
            'time' => 'required',
            'content' => 'required',
        ]);

        Proposal::create([
            'employee_id' => $request->employee_id,
            'project_id' => $request->project_id,
            'content' => $request->content,
            'time' => $request->time,
            'cost' => str_replace('$', '', $request->cost)
        ]);
        return redirect()->route('site.project', $project->slug);
    }
    public function delete_proposal($id)
    {
        Proposal::destroy($id);

        return redirect()->back();
    }
    public function user_profile()
    {
        return view('site.user_profile');
    }
    public function read_notify($id)
    {
        $notify = DatabaseNotification::find($id);
        $notify->markAsRead();

        return redirect($notify->data['url']);
    }
}
