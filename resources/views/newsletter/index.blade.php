@extends('adminlte::page')

@section('title', 'AdminNova')

@section('content_header')
    <h1 class="m-0 text-dark">Newsletter list</h1>
@stop

@section('content')

<div class="mb-5 container">
    <div class="text-center">

        <h1 class="text-white shadow-lg p-3 mt-3 mb- bg-warning rounded">Newsletter list </h1>
    </div>
    <table class="table table-striped table-secondary">
        <thead class="bg-dark text-warning">
            <tr>
                <th scope="col" class="text-center">Id</th>
                <th scope="col" class="text-center">Nom</th>
                <th scope="col" class="text-center">Email</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($newsletters as $newsletter)
            <tr>
                <th scope="row" class="text-center">{{$newsletter->id}}</th>
                <td class="text-center">{{$newsletter->name}}</td>
                <td class="text-center">{{$newsletter->email}}</td>
                
                <td class="d-flex justify-content-around ">  
                    <a class="btn btn-warning mx-3" href="{{route('newsletter.edit',$newsletter)}}">Edit</a>
                    <form action="{{route('newsletter.destroy',$newsletter)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger mx-3 " type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@stop