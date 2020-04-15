

@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Add Pricing</h1>
@stop

@section('content')
    

<div class="container">

    <form action="{{route('pricing.store')}}" method="post" enctype="multipart/form-data">
        @csrf
 
        <div class="form-group">
            <label for="type" class="">Type de pricing</label>
            <input value="@if($errors->first('type'))@else{{old('type')}}@endif"
            type="text" name="type" class="form-control @error('type') is-invalid @enderror" id="type" >
            @error('type')
                <div  class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="prix" class="">prix</label>
            <input step="0.01" value="@if($errors->first('prix'))@else{{old('prix')}}@endif"
            type="number" name="prix" class="form-control @error('prix') is-invalid @enderror" id="prix" >
            @error('prix')
                <div  class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="avantageUn" class="">Avantage Un</label>
            <input value="@if($errors->first('avantageUn'))@else{{old('avantageUn')}}@endif"
            type="text" name="avantageUn" class="form-control @error('avantageUn') is-invalid @enderror" id="avantageUn" >
            @error('avantageUn')
                <div  class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="avantageDeux" class="">Avantage Deux(falcutatif)</label>
            <input value="@if($errors->first('avantageDeux'))@else{{old('avantageDeux')}}@endif"
            type="text" name="avantageDeux" class="form-control @error('avantageDeux') is-invalid @enderror" id="avantageDeux" >
            @error('avantageDeux')
                <div  class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="avantageTrois" class="">Avantage Trois(falcutatif)</label>
            <input value="@if($errors->first('avantageTrois'))@else{{old('avantageTrois')}}@endif"
            type="text" name="avantageTrois" class="form-control @error('avantageTrois') is-invalid @enderror" id="avantageTrois" >
            @error('avantageTrois')
                <div  class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="avantageQuatre" class="">Avantage Quatre(falcutatif)</label>
            <input value="@if($errors->first('avantageQuatre'))@else{{old('avantageQuatre')}}@endif"
            type="text" name="avantageQuatre" class="form-control @error('avantageQuatre') is-invalid @enderror" id="avantageQuatre" >
            @error('avantageQuatre')
                <div  class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>

@stop