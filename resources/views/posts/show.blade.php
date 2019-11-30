@extends('layouts.app')
@section('content')
<div class="container">
  @if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
  @endif
  <div class="row">
    <div class="col-lg-12 margin-tb">
      <div class="pull-left">
        <h2> Show Post</h2>
      </div>
      <div class="pull-right">
       <br/>
        <a class="btn btn-primary" href="{{ route('admin.dashboard') }}"> <i class="glyphicon glyphicon-arrow-left"></i></a>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Title : </strong>
          {{ $post->title}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Body : </strong>
        {{ $post->body}}
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Name : </strong>
        {{ $post->name}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Pedido criado em : </strong>
        {{ $post->created_at}}
      </div>
    </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
        {{ Form::open(['route'=>'posts.store', 'method'=>'POST']) }}
            @include('form_master_admin')
        {{ form::close() }}
      </div>
    </div>
  </div>
</div>
@endsection