@extends('admin.master')
@section('title', 'Agregar Config')
@section('breadcrumb')
    <li class="breadcrumb-item">
        <i class="fas fa-users-friends"></i><span>Dashboard </span> - Agregar Config
    </li>
@endsection

@section('content')
<form id="form-article" role="form" method="POST" action="{{ route('products.storeConfig') }}" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="row">
        <div class="col-md-6 content-input">
            <label for="name">Tipo de Bretel</label>
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="col-md-6 content-input">
            <label for="price">Precio</label>
            {!! Form::number('price', null, ['class' => 'form-control', 'min' => '0.00', 'step' => 'any']) !!}
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-1">
            {!! Form::submit('Agregar', ['class' => 'btn btn-success']) !!}
        </div>
    </div>
</form>
<br>
<br>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Precio</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($products as $product)
      <tr>
        <th scope="row">{{$product->id}}</th>
        <td>{{$product->name}}</td>
        <td>{{$product->price}}</td>
        <td>Editar</td>
      </tr>  
      @endforeach
    </tbody>
  </table>
@endsection
