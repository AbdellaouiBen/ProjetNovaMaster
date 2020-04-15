
@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Edit Service</h1>
@stop

@section('content')
    
<div class="card-body">
    <form action="{{route('service.update',$service->id)}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group row">
            <label for="icon" class="col-md-4 col-form-label text-md-right">Icon</label>
            <div class="col-md-6">
                <input id="icon" type="file" class=" @error('icon') is-invalid @enderror" name="icon" value="{{ old('icon',$service->icon) }}" >
                @error('icon')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="titre" class="col-md-4 col-form-label  text-md-right">Titre</label>
            <div class="col-md-6">
                <input id="titre" type="text" class="form-control @error('titre') is-invalid @enderror" name="titre" value="{{ old('titre',$service->titre) }}" >
                @error('titre')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
 
        <div class="form-group row">
            <label for="description" class="col-md-4 col-form-label  text-md-right">Description</label>
            <div class="col-md-6">
                
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" cols="30" rows="3">{{ old('description',$service->description) }}</textarea>
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-warning">Editer</button>
            <a href="{{route('service.index')}}" class="btn btn-danger">annuler</a>
        </div>
    </form>
</div>

@stop



