@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">You are logged in as {{Auth::user()->name}}!</p>
                </div>
            </div>
        </div>
    </div>
  



    <div class="box box-warning">
        <div class="box-header with-border ">
          <h3 class="box-title">Default Box Example</h3>
          <div class="box-tools pull-right">
            <!-- Buttons, labels, and many other things can be placed here! -->
            <!-- Here is a label for example -->
            <span class="label label-primary">Label</span>
          </div>
          <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          The body of the box
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          The footer of the box
        </div>
        <!-- box-footer -->
    </div>
      <!-- /.box -->
@stop
 