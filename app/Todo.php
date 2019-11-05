<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Todo extends Model
{
    use Notifiable;

    protected $fillable = [
        'title','decription','completed',
    ];

}
