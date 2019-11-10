@extends('layouts.app')

@section('title','edit todo '.$todo->id)

@section('content')

    <div class="container pt-5">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card header pl-4">
                    <h2 style="font-family: 'Source Sans Pro', sans-serif;">Edit todo</h2>
                    </div>
                    <div class="card-body">
                        {!! Form::open(['url'=>route('todo.update',$todo->id),'method'=>'PUT']) !!}
                       <div class="form-group" >
                       <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="@if($errors->any()){{old('title')}}@else{{$todo->title}}@endif">
                       </div>
                           @error('title')
                             <div class="alert alert-danger">
                                {{$message}}
                             </div>
                            @enderror

                       <div class="form-group">
                           <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="3" >@if($errors->any()){{old('description')}} @else{{$todo->description}}@endif
                           </textarea>
                        </div>
                           @error('description')
                           <div class="alert alert-danger">
                                {{$message}}
                            </div>

                           @enderror

                       <div class="form-group text-center">
                           <button type="submit" class="btn btn-success" style="width: 40%">Update todo </button>
                       </div>

                       {!!Form::close()!!}

                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
