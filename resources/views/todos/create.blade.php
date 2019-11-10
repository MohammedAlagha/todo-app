@extends('layouts.app')

@section('title','Create todo')

@section('content')
<div class="container pt-5">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card header pl-4">
                    <h2 style="font-family: 'Source Sans Pro', sans-serif;">Create a new todo</h2>
                </div>
                <div class="card-body">
                   {!! Form::open(['url'=>route('todo.store'), 'method'=>'post']) !!}
                   <div class="form-group">
                    <input type="text" class="form-control" name="title" placeholder="Enter Todo Title">
                   </div>
                   <div class="form-group">
                       <textarea name="description" class="form-control" placeholder="Enter Description for your todo" rows="3" ></textarea>
                   </div>
                   <div class="form-group text-center">
                       <button type="submit" class="btn btn-success" style="width: 40%">Create todo </button>
                   </div>

                   {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>

</div>


@endsection
