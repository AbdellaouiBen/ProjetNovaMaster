
@extends('adminlte::page')

@section('title', 'AdminNova')

@section('content_header')
    <h1 class="m-0 text-dark">Services</h1>
@stop

@section('content')
<div class="row">
    @foreach ($services as $service)
        <div class="col-4 row container">
            <div class="card" style="width: 18rem;">
                <div class="text-center">

                    <img class="card-img-top w-25" src="{{asset('storage/'.$service->icon)}}" alt="icon">
                </div>
                <div class="card-body">
                    <h5 class="card-title"><b>titre:</b>  {{$service->titre}}</h5>
                    <p class="card-text"><b>description:</b> {{$service->description}}</p>
                </div>
                <a class="btn btn-warning" href="{{route('service.edit',$service)}}">Edit</a>
                <form action="{{route('service.destroy',$service)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger w-100" type="submit">Delete</button>
                </form>
     
            </div>
        </div>
    @endforeach
</div>
@stop