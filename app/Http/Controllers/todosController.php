<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class todosController extends Controller
{
    Public function index(){
        return view('todos');
    }
}
