@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
       <div class="panel-body">
        @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
        @endif
        @extends('layouts.app')
        <div class="row">
        <div class="col-md-12">
          <div class="d-flex justify-content-center "style="display: flex;justify-content: center;;margin-bottom: 4%;">
            <h2>Pedidos</h2>
          </div>
        </div>
        </div>
        @if ($message = Session::get('success'))
          <div class="alert alert-success">
            <p>{{ $message }}</p>
          </div>
        @endif
  <table class="table table-bordered">
    <tr>
      <th with="20px">Nº Pedido</th>
      <!--<th>Title</th>
      <th>Body</th>-->
      <th with="20px">Nome Cliente</th>
      <th with="20px" class="text-left">
        <a href="{{route('posts.create')}}" class="btn btn-success btn-sm">
          <i class="glyphicon glyphicon-plus"></i>
        </a>
      </th>
    </tr>
    <?php $no=1; ?>
    @foreach ($post as $key => $value)
      <tr>
        <td>{{$no++}}</td>
        <!--<td>{{ $value->title }}</td>
        <td>{{ $value->body }}</td>-->
        <td>{{ $value->name }}</td>
        <td>
          <a class="btn btn-info btn-sm" href="{{route('posts.show',$value->id)}}">
              <i class="glyphicon glyphicon-th-large"></i></a>
          <a class="btn btn-primary btn-sm" href="{{route('posts.edit',$value->id)}}">
              <i class="glyphicon glyphicon-pencil"></i></a>
            {!! Form::open(['method' => 'DELETE','route' => ['posts.destroy', $value->id],'style'=>'display:inline']) !!}
              <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></button>
            {!! Form::close() !!}
        </td>
      </tr>
    @endforeach
  </table>
        </div>
    </div>
</div>
@endsection
