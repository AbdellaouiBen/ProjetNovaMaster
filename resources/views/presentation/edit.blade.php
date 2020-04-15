@extends('layouts.app')
@section('content')
    <div class="text-center">
        <h1 class="text-white shadow-lg p-3 mb-5 bg-danger rounded">Editer section Présentation </h1>
    </div>
    



    <div class="card-body">
        <form action="{{route('presentation.update',$presentation->id)}}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group row">
                <label for="titre" class="col-md-4 col-form-label  text-md-right">Titre</label>
                <div class="col-md-6">
                    <input id="titre" type="text" class="form-control @error('titre') is-invalid @enderror" name="titre" value="{{ old('titre',$presentation->titre) }}" required autocomplete="titre" autofocus>
                    @error('titre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="img" class="col-md-4 col-form-label text-md-right">Image</label>
                <div class="col-md-6">
                    <input id="img" type="file" class=" @error('img') is-invalid @enderror" name="img" value="{{ old('img',$presentation->img) }}" required autocomplete="img" autofocus>
                    @error('img')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
     
            <div class="form-group row">
                <label for="text" class="col-md-4 col-form-label  text-md-right">Text</label>
                <div class="col-md-6">
                    
                    <textarea class="form-control @error('text') is-invalid @enderror" name="text" id="text" cols="30" rows="3">{{ old('text',$presentation->text) }}</textarea>
                    @error('text')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-warning">Editer</button>
                <a href="{{route('home')}}" class="btn btn-danger">annuler</a>
            </div>
        </form>
    </div>

@endsection