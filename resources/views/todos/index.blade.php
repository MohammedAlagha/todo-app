@extends('layouts.app')

@section('title','All todos')

@section('content')
    <div class='container'>
        <div class="row pt-5 justify-content-center">
            <div class="card" style='width:50%'>
                <div class='card-header text-center'>
                    <h1>All Todos</h1>
                </div>
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{session()->get('success')}}
                    </div>
                @endif
                <div class="card-body">
                    <ul class='list-group'>
                        @forelse($todos as $todo)
                            <li class='list-group-item text-muted'>
                            {{$todo->title}}
                            <span class='float-right mr-2'>
                                 {!! Form::open(['url'=>route('todo.destroy',$todo->id),'method'=>'DELETE']) !!}
                                     <a href="javascript:void(0)" style='color:#ff1313' class='submit'><i class='fa fa-trash-o' aria-hidden='true'></i></a>
                                 {!! Form::close() !!}
                                    </span>
                            <span class='float-right mr-2'>
                            <a href= "{{route('todo.edit', $todo->id)}}" style='color:#46ab4a'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>
                            </span>
                            <span class="float-right mr-2">
                            <a href="{{route('todo.show', $todo->id)}}" style='color:#1198d6'><i class="fa fa-eye" area-hidden='true'></i></a>
                            </span>
                            @if (!$todo->completed)
                            <span class="float-right mr-2">
                                <a href="{{route('todo.complete', $todo->id)}}" style='color:#00bcd4'><i class="fa fa-check-square" area-hidden='true'></i></a>
                            </span>
                            @endif
                            </li>
                        @empty
                            <p class='text-center'>No Todos.</p>

                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>

  <script>

      $('.submit').click(function (){
           $(this).closest('form').submit();

      });

  </script>

@endsection

