<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', compact('todos'));
     }


    public function create()
    {
        return view('todos.create');
    }


    public function store(TodoRequest $request)
    {

        Todo::create(['title'=>$request->title,'description'=>$request->description]);

        return redirect('todos');
    }


    public function show($id)
    {
        $todo = Todo::find($id);
        return view("todos.show",compact('todo'));
    }

    public function edit($id)
    {
        $todo= Todo::find($id);
        return view('todos.edit',compact('todo'));
    }

    public function update(TodoRequest $request, $id)
    {

        Todo::find($id)->update($request->all());
     
        return redirect('todos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Todo::destroy($id);
        return redirect('todos');
    }
}
