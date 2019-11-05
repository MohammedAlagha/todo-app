<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class todosController extends Controller
{
    Public function index(){
        $todos = Todo::all();
        return view('todos.todos', compact('todos'));
    }
}
