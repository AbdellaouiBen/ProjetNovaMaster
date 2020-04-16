
@extends('adminlte::page')

@section('title', 'AdminNova')

@section('content_header')
    <h1 class="m-0 text-dark">Team</h1>
@stop

@section('content')
<div class="row">
    @foreach ($teams as $team)
        <div class="col-4 row container">
            <div class="card" style="width: 18rem;">
                <div class="text-center">
                    <img class="card-img-top w-25" src="{{asset('storage/'.$team->img)}}" alt="icon">
                </div>
                <div class="card-body">
                    <h4 class="card-title">job: {{$team->job}}</h4> <br>
                    <h4 class="card-title">full_name: {{$team->full_name}}</h4>
                    <p class="card-text">description: {{$team->description}}</p>
                </div>
                <a class="btn btn-warning" href="{{route('team.edit',$team)}}">Edit</a>
                <form action="{{route('team.destroy',$team)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger w-100" type="submit">Delete</button>
                </form>
     
            </div>
        </div>
    @endforeach
</div>
@stop