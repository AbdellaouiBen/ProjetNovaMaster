

@extends('adminlte::page')

@section('title', 'AdminNova')

@section('content_header')
    <h1 class="m-0 text-dark">Add Service</h1>
@stop

@section('content')
    

<div class="container">

    <form action="{{route('service.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="icon" class="">Icon</label> <br>
            <input value="@if($errors->first('icon'))@else{{old('icon')}}@endif"
            type="file" name="icon" class=" @error('icon') is-invalid @enderror" id="icon" >
            @error('icon')
                <div  class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="titre" class="">titre</label>
            <input value="@if($errors->first('titre'))@else{{old('titre')}}@endif"
            type="text" name="titre" class="form-control @error('titre') is-invalid @enderror" id="titre" >
            @error('titre')
                <div  class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description" class="">description</label>
            <input value="@if($errors->first('description'))@else{{old('description')}}@endif"
            type="text" name="description" class="form-control @error('description') is-invalid @enderror" id="description" >
            @error('description')
                <div  class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-dark btn-outline-warning">Submit</button>

    </form>
</div>

@stop