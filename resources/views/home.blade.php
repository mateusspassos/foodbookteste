@extends('layouts.app')
@section('content')
<div class="container">
  @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
  @endif
<div class="row justify-content-around"style="margin-top: 6%;">
    <div class="col-2">
      <button href="{{route('login')}}"type="button" class="btn btn-light">Meus Pedidos</button>
    </div>
    <div class="col-2">
      <a href="{{route('posts.create')}}" type="button" class="btn btn-light">Fazer pedido</a>
    </div>
  </div>
</div>
@endsection
