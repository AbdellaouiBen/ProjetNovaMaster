

@extends('adminlte::page')

@section('title', 'AdminNova')

@section('content_header')
    <h1 class="m-0 text-dark">Add a team member</h1>
@stop

@section('content')
    

<div class="container">

    <form action="{{route('team.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="img" class="">Photo</label> <br>
            <input value="@if($errors->first('img'))@else{{old('img')}}@endif"
            type="file" name="img" class=" @error('img') is-invalid @enderror" id="img" >
            @error('img')
                <div  class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="job" class="">Job</label>
            <input value="@if($errors->first('job'))@else{{old('job')}}@endif"
            type="text" name="job" class="form-control @error('job') is-invalid @enderror" id="job" >
            @error('job')
                <div  class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="full_name" class="">Full name</label>
            <input value="@if($errors->first('full_name'))@else{{old('full_name')}}@endif"
            type="text" name="full_name" class="form-control @error('full_name') is-invalid @enderror" id="full_name" >
            @error('full_name')
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
        <div class="form-group">
            <label for="twitter" class="">twitter (facultatif)</label>
            <input value="@if($errors->first('twitter'))@else{{old('twitter')}}@endif"
            type="text" name="twitter" class="form-control @error('twitter') is-invalid @enderror" id="twitter" >
            @error('twitter')
                <div  class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="facebook" class="">facebook (facultatif)</label>
            <input value="@if($errors->first('facebook'))@else{{old('facebook')}}@endif"
            type="text" name="facebook" class="form-control @error('facebook') is-invalid @enderror" id="facebook" >
            @error('facebook')
                <div  class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="googlePlus" class="">Google Plus (facultatif)</label>
            <input value="@if($errors->first('googlePlus'))@else{{old('googlePlus')}}@endif"
            type="text" name="googlePlus" class="form-control @error('googlePlus') is-invalid @enderror" id="googlePlus" >
            @error('googlePlus')
                <div  class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-dark btn-outline-warning">Submit</button>

    </form>
</div>
 
@stop