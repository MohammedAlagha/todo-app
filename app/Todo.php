<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Todo extends Model
{
    use Notifiable;

    protected $attributes = [
        'completed'=>false
    ];
    protected $fillable = [
        'title','description'
    ];

}
