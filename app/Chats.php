<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chats extends Model
{
    //
    protected $table = "chat_pesan";
    protected $guarded = [];
    public $timestamps = false;
}
