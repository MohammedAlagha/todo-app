@extends('layouts.app')

@section('title','Todo ' . $todo->id)

@section('content')
    <div class='container'>
        <h1 class="mt-5 text-center">{{$todo->title}} <h1>
        <div class='row pt-5 justify-content-center'>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <span style='font-size:30px'>Details</span>
                        <small class='badge badge-warning float-right' style='font-size:15px'>{{$todo->completed?'completed':'non-completed'}}</small>
                    </div>
                    <div class="card-body" style='font-size:20px'>
                        {{$todo->description}}
                    </div>
                </div>
            </div>
        </div>
        
       
    </div>
@endsection