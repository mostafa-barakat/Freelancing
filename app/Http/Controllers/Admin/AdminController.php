<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function freelancers()
    {
        $users = User::whereType('employee')->get();

        return view('admin.freelancers', compact('users'));
    }

    public function freelancers_destroy($id)
    {
        User::destroy($id);

        return redirect()->back()->with('msg', 'Freelancer deleted successfully')->with('type', 'danger');
    }
    public function settings()
    {
        return view('admin.settings');
    }
    public function settings_data(Request $request)
    {
        settings()->set('site_name', $request->site_name);
        settings()->save();
        return redirect()->route('admin.index');
    }
}
