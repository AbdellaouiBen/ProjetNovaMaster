
@extends('adminlte::page')

@section('title', 'AdminNova')

@section('content_header')
    <h1 class="m-0 text-dark">Services</h1>
@stop

@section('content')
<div class="row">
    @foreach ($pricings as $pricing)
        
    <div class="card m-4 shadow-sm border border-dark">
        <div class="card-header border border-dark">
          <h4 class="my-0 font-weight-normal"><u><b>type:</b></u>   {{$pricing->type}}</h4>
        </div>
        
        <div class="card-body ">
            <h1 class="card-title mb-3"><u><b>prix:</b></u> {{$pricing->prix}} <small class="text-muted">/ mois</small></h1>
            <hr>
            <ul class="list-unstyled mt-3 mb-4">
                <li><u><b>avantageUn:</b></u> {{$pricing->avantageUn}}</li>
                @if ($pricing->avantageDeux)
                    <li><u><b>avantageDeux:</b></u> {{$pricing->avantageDeux}}</li>
                @endif
                @if ($pricing->avantageTrois)
                    <li><u><b>avantageTrois:</b></u> {{$pricing->avantageTrois}}</li>
                @endif
                @if ($pricing->avantageQuatre)
                    <li><u><b>avantageQuatre:</b></u> {{$pricing->avantageQuatre}}</li>
                @endif
            </ul>
            <a class="btn btn-primary" href="{{route('pricing.download',$pricing)}}">download</a>
            <a class="btn btn-warning" href="{{route('pricing.edit',$pricing)}}">edit</a>
            <form class="d-inline" action="{{route('pricing.destroy',$pricing)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">delete</button>
            </form>
        </div>
    </div>


    @endforeach
</div>
@stop
