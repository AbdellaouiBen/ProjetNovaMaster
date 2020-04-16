
@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Presentation</h1>
@stop

@section('content')
<div class="row">
  
        
    <div class="card m-4 shadow-sm w-25 ">
        <img class="card-img-top " src="{{asset('storage/'.$presentation->img)}}" alt="">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">titre: {{$presentation->titre}}</h4>
        </div>
        
        <div class="card-body">
          <p  class="card-text">Text:{{$presentation->text}}</p>
          <a class="btn btn-warning" href="{{route('presentation.edit',$presentation)}}">edit</a>
          <form action="{{route('presentation.destroy',$presentation)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">delete</button>
            </form>
        </div>
    </div>


</div>
@stop
