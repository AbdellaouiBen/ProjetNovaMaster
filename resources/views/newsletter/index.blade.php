@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Newsletter list</h1>
@stop

@section('content')
<div class="row border border-dark">
    <div class="col-1 border">Id</div>
    <div class="col-3 border">Nom</div>
    <div class="col-4 border">email</div>
    <div class="col-4 border">action</div>
</div>
<div class="row border border-dark">
    @foreach ($newsletters as $newsletter)
    <div class="col-1 border">{{$newsletter->id}}</div>
    <div class="col-3 border">{{$newsletter->name}}</div>
    <div class="col-4 border">{{$newsletter->email}}</div>
    <div class="col-4 border d-flex justify-content-center">
                <a class="btn btn-warning mx-3" href="{{route('newsletter.edit',$newsletter)}}">Edit</a>
                <form action="{{route('newsletter.destroy',$newsletter)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger mx-3 " type="submit">Delete</button>
                </form>
    </div>
    @endforeach
</div>
@stop