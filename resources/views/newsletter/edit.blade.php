
@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Edit newsletter member</h1>
@stop

@section('content')
    
<div class="card-body">
    <form action="{{route('newsletter.update',$newsletter->id)}}" method="post" >
        @method('PUT')
        @csrf

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label  text-md-right">name</label>
            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name',$newsletter->name) }}" >
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label  text-md-right">email</label>
            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email',$newsletter->email) }}" >
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
 

        <div class="text-center">
            <button class="btn btn-warning">Editer</button>
            <a href="{{route('newsletter.index')}}" class="btn btn-danger">annuler</a>
        </div>
    </form>
</div>

@stop



