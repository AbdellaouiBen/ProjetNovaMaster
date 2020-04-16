
@extends('adminlte::page')

@section('title', 'AdminNova')

@section('content_header')
    <h1 class="m-0 text-dark">Edit Pricing</h1>
@stop

@section('content')
    
<div class="card-body">
    <form action="{{route('pricing.update',$pricing->id)}}" method="post">
        @method('PUT')
        @csrf

        <div class="form-group row">
            <label for="type" class="col-md-4 col-form-label  text-md-right">Type de pricing</label>
            <div class="col-md-6">
                <input id="type" type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ old('type',$pricing->type) }}" >
                @error('type')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="prix" class="col-md-4 col-form-label  text-md-right">Prix</label>
            <div class="col-md-6">
                <input id="prix" type="number" step="0.01" class="form-control @error('prix') is-invalid @enderror" name="prix" value="{{ old('prix',$pricing->prix) }}" >
                @error('prix')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="avantageUn" class="col-md-4 col-form-label  text-md-right">Avantage Un</label>
            <div class="col-md-6">
                <input id="avantageUn" type="text" class="form-control @error('avantageUn') is-invalid @enderror" name="avantageUn" value="{{ old('avantageUn',$pricing->avantageUn) }}" >
                @error('avantageUn')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="avantageDeux" class="col-md-4 col-form-label  text-md-right">Avantage Deux</label>
            <div class="col-md-6">
                <input id="avantageDeux" type="text" class="form-control @error('avantageDeux') is-invalid @enderror" name="avantageDeux" value="{{ old('avantageDeux',$pricing->avantageDeux) }}" >
                @error('avantageDeux')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="avantageTrois" class="col-md-4 col-form-label  text-md-right">Avantage Trois</label>
            <div class="col-md-6">
                <input id="avantageTrois" type="text" class="form-control @error('avantageTrois') is-invalid @enderror" name="avantageTrois" value="{{ old('avantageTrois',$pricing->avantageTrois) }}" >
                @error('avantageTrois')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="avantageQuatre" class="col-md-4 col-form-label  text-md-right">Avantage Quatre</label>
            <div class="col-md-6">
                <input id="avantageQuatre" type="text" class="form-control @error('avantageQuatre') is-invalid @enderror" name="avantageQuatre" value="{{ old('avantageQuatre',$pricing->avantageQuatre) }}" >
                @error('avantageQuatre')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
 

        <div class="text-center">
            <button class="btn btn-warning">Editer</button>
            <a href="{{route('pricing.index')}}" class="btn btn-danger">annuler</a>
        </div>
    </form>
</div>

@stop



