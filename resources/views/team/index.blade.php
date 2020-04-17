
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
                    <h4 class="card-title"><b>job:</b>  {{$team->job}}</h4> <br>
                    <h4 class="card-title"><b>full_name:</b> {{$team->full_name}}</h4>
                    <p class="card-text"><b>description:</b> {{$team->description}}</p>
                    @if ($team->twitter)
                        <b>twitter: </b> <a href="{{$team->twitter}}">{{$team->twitter}}</a> <br>
                    @endif
                    @if ($team->facebook)
                        <b>facebook: </b><a href="{{$team->facebook}}">{{$team->facebook}}</a> <br>
                    @endif
                    @if ($team->googlePlus)
                        <b>google plus: </b><a href="{{$team->googlePlus}}">{{$team->googlePlus}}</a> <br>
                    @endif    
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