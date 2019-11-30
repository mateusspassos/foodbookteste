@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel-body">
            @if (session('status'))
            <div class="alert alert-success">
              {{ session('status') }}
            </div>
            @endif
            <div class="row">
              <div class="col-md-6 col-md-offset-3">
              @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                {{ Form::open(['route'=>'posts.store', 'method'=>'POST']) }}
                  @include('posts.form_master')
                {{ form::close() }}                
              </div>
            </div> 
            <!-- You are logged in! <strong>User</strong>-->
        </div>
    </div>
</div>
@endsection
