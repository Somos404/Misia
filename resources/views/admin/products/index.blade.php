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
    <tr>
      <th scope="row">1</th>
      <td>Guernica</td>
      <td>Vestido con corte en la cintura, escote profundo y espalda descubierta, ideal para estilizar y marcar la cintura.</td>
      <td>$14.700</td>
      <td>Editar</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Toro</td>
      <td>Vestido con mangas a la altura de los codos, escote profundo, corte a la altura de la cintura y un tajo frontal que deja ver parte de las piernas.</td>
      <td>$14700</td>
      <td>Editar</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Picasso</td>
      <td>Vestido con elástico en la cintura. Este vestido es REVERSIBLE, puedes utilizarlo de dos maneras, con el escote del nudo en el delantero y espalda cerrada , o la otra opción es con escote cerrado y espalda descubierta.</td>
      <td>$14.700</td>
      <td>Editar</td>
    </tr>
  </tbody>
</table>
@endsection