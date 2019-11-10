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

        $request->session()->flash('success','Todo created successfully');
        return redirect('todos');
    }


    public function show(Todo $todo)
    {

        return view("todos.show",compact('todo'));
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit',compact('todo'));
    }

    public function update(TodoRequest $request, Todo $todo)
    {

        $todo->update($request->all());

        session()->flash('success','todo updated successfully');
        return redirect('todos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo)
    {
        Todo::destroy($todo->id);
        session()->flash('success','todo deleted successfully');
        return redirect('todos');
    }
}
