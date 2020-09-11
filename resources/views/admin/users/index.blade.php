@extends('admin.master')
@section('title', 'Usuarios')
@section('breadcrumb')
<li class="breadcrumb-item">
	<i class="fas fa-users-friends"></i><span>Dashboard </span> - Usuarios
</li>
@endsection

@section('content')

@if (session()->has('flash_notification.message'))
	<div class="alert alert-{{ session('flash_notification.level') }}">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		{!! session('flash_notification.message') !!}
	</div>
@endif

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
		@foreach($users as $user)
    <tr>
      <th scope="row">1</th>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td>
				{{-- <a class="icon-action" href="{{ route('users.show', $user->id) }}" data-toggle="tooltip" data-placement="top" title="Ver"><i class="fa fa-eye"></i></a> 
				<a class="icon-action" href="{{ route('users.edit', $user->id) }}" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-edit"></i></a>  --}}
				<a class="icon-action" href="{{ route('users.editpassword', $user->id) }}" data-toggle="tooltip" data-placement="top" title="Cambiar contraseña"><i class="fa fa-key"></i></a>
				<a class="icon-action" href="{{ route('users.destroy', $user->id) }}" onclick="return confirm('Â¿Desea eliminar el usuario?')" onkeypress="return confirm('Â¿Desea eliminar el usuario?')" data-toggle="tooltip" data-placement="top" title="Eliminar">
						<i class="fa fa-remove"></i>
				</a>
			</td>
		</tr>
		@endforeach
  </tbody>
</table>
<div class="text-center">{!! $users->render() !!}</div>

@endsection
