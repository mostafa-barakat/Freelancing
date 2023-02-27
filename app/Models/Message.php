<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use HasFactory , SoftDeletes;

    public function sender()
    {
        return $this->belongTo(User::class , 'sender_id');
    }
    public function receiver()
    {
        return $this->belongTo(User::class , 'receiver_id');
    }
}
