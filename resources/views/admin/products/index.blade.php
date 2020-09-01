@extends('admin.master')
@section('title', 'Productos')
@section('breadcrumb')
<li class="breadcrumb-item">
	<i class="fas fa-users-friends"></i><span>Dashboard </span> - Productos
</li>
@endsection
@section('buttons')
  <a href="{{ url('/admin/products/add') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Agregar Vestido</a>
@endsection

@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Vestido</th>
      <th scope="col">Descripción</th>
      <th scope="col">Precio</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($products as $product)
    <tr>
      <th scope="row">1</th>
      <td>{{$product->name}}</td>
      <td>{{$product->descripcion}}</td>
      <td>{{$product->price}}</td>
      <td>Editar</td>
    </tr>  
    @endforeach
  </tbody>
</table>
@endsection