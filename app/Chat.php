<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $fillable = [
        'sender_user_id',
        'recipient_user_id',
        'message'
    ];
}
