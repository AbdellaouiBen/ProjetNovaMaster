
@extends('adminlte::page')

@section('title', 'AdminNova')

@section('content_header')
    <h1 class="m-0 text-dark">Edit team</h1>
@stop

@section('content')
    
<div class="card-body">
    <form action="{{route('team.update',$team->id)}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group row">
            <label for="img" class="col-md-4 col-form-label text-md-right">Photo</label>
            <div class="col-md-6">
                <input id="img" type="file" class=" @error('img') is-invalid @enderror" name="img" value="{{ old('img',$team->img) }}" >
                @error('img')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="job" class="col-md-4 col-form-label  text-md-right">Job</label>
            <div class="col-md-6">
                <input id="job" type="text" class="form-control @error('job') is-invalid @enderror" name="job" value="{{ old('job',$team->job) }}" >
                @error('job')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="full_name" class="col-md-4 col-form-label  text-md-right">Full name</label>
            <div class="col-md-6">
                <input id="full_name" type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" value="{{ old('full_name',$team->full_name) }}" >
                @error('full_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
 
        <div class="form-group row">
            <label for="description" class="col-md-4 col-form-label  text-md-right">Description</label>
            <div class="col-md-6">
                
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" cols="30" rows="3">{{ old('description',$team->description) }}</textarea>
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-warning">Editer</button>
            <a href="{{route('team.index')}}" class="btn btn-danger">annuler</a>
        </div>
    </form>
</div>

@stop



