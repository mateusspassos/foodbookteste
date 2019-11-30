<!--@extends('layouts.app')
@section('content')
<div class="row">
        <div class="col-lg-10 margin-tb">
            <div class="pull-right">
                <br/>
                <a class="btn btn-primary" href="{{ route('home') }}"> <i class="glyphicon glyphicon-arrow-left"></i></a>
            </div>
        </div>
    </div>
  <div class="row">
    <div class="col-md-4  col-md-offset-4">
      {{ Form::open(['route'=>'answer.store', 'method'=>'POST']) }}
        @include('form_master_admin')
      {{ form::close() }}
    </div>
  </div>
  
@endsection -->