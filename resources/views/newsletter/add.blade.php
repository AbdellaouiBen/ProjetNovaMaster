

@extends('adminlte::page')

@section('title', 'AdminNova')

@section('content_header')
    <h1 class="m-0 text-dark">Add a newsletter member</h1>
@stop

@section('content')
    

<div class="container">

    <form action="{{route('newsletter.store')}}" method="post" >
        @csrf

        <div class="form-group">
            <label for="name" class="">name</label>
            <input value="@if($errors->first('name'))@else{{old('name')}}@endif"
            type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" >
            @error('name')
                <div  class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email" class="">email</label>
            <input value="@if($errors->first('email'))@else{{old('email')}}@endif"
            type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" >
            @error('email')
                <div  class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>


        <button type="submit" class="btn btn-dark btn-outline-warning">Submit</button>

    </form>
</div>

@stop