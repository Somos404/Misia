@extends('admin.master')
@section('title', 'Agregar Producto')
@section('breadcrumb')
<li class="breadcrumb-item">
	<i class="fas fa-users-friends"></i><span>Dashboard </span> - Agregar Producto
</li>
@endsection


@section('content')
  <form id="form-article" role="form" method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="row">
      <div class="col-md-6 content-input">
        <label for="name">Nombre del Vestido</label>
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
      </div>
    </div>
    <!--Colores-->
    <div class="row">
      <div class="col-md-3 content-input">
        <label for="color1">Color 1</label>
        {!! Form::text('color1_a', null, ['class' => 'form-control']) !!}
        <input name="color1" type="color" value="#000000" />
      </div>
      <div class="col-md-3 content-input">
        <label for="color">Color 2</label>
        {!! Form::text('color2_a', null, ['class' => 'form-control']) !!}
        <input name="color2" type="color" value="#000000" />
      </div>
      <div class="col-md-3 content-input">
        <label for="color3">Color 3</label>
        {!! Form::text('color3_a', null, ['class' => 'form-control']) !!}
        <input name="color3" type="color" value="#000000" />
      </div>
      <div class="col-md-3 content-input">
        <label for="color4">Color 4</label>
        {!! Form::text('color4_a', null, ['class' => 'form-control']) !!}
        <input name="color4" type="color" value="#000000" />
      </div>
      <div class="col-md-3 content-input">
        <label for="color5">Color 5</label>
        {!! Form::text('color5_a', null, ['class' => 'form-control']) !!}
        <input name="color5" type="color" value="#000000" />
      </div>
      <div class="col-md-3 content-input">
        <label for="color6">Color 6</label>
        {!! Form::text('color6_a', null, ['class' => 'form-control']) !!}
        <input name="color6" type="color" value="#000000" />
      </div>
      <div class="col-md-3 content-input">
        <label for="color7">Color 7</label>
        {!! Form::text('color7_a', null, ['class' => 'form-control']) !!}
        <input name="color7" type="color" value="#000000" />
      </div>
      <div class="col-md-3 content-input">
        <label for="color8">Color 8</label>
        {!! Form::text('color8_a', null, ['class' => 'form-control']) !!}
        <input name="color8" type="color" value="#000000" />
      </div>    
      <div class="col-md-3 content-input">
        <label for="color9">Color 9</label>
        {!! Form::text('color9_a', null, ['class' => 'form-control']) !!}
        <input name="color9" type="color" value="#000000" />
      </div>
      <div class="col-md-3 content-input">
        <label for="color10">Color 10</label>
        {!! Form::text('color10_a', null, ['class' => 'form-control']) !!}
        <input name="color10" type="color" value="#000000" />
      </div>
      <div class="col-md-3 content-input">
        <label for="color11">Color 11</label>
        {!! Form::text('color11_a', null, ['class' => 'form-control']) !!}
        <input name="color11" type="color" value="#000000" />
      </div>
      <div class="col-md-3 content-input">
        <label for="color12">Color 12</label>
        {!! Form::text('color12_a', null, ['class' => 'form-control']) !!}
        <input name="color12" type="color" value="#000000" />
      </div>
    </div>
    <!--Medidas-->
    <div class="row">
      <div class="col-md-3 content-input">
        <label for="cont_bust">Control de busto</label>
        {!!  Form::checkbox('cont_bust', 'value') !!}
      </div>
      <div class="col-md-3 content-input">
        <label for="cont_cint">Contorno de cintura</label>
        {!!  Form::checkbox('cont_cint', 'value') !!}
      </div>
      <div class="col-md-3 content-input">
        <label for="cont_cadera">Contorno de cadera</label>
        {!!  Form::checkbox('cont_cadera', 'value') !!}
      </div>
      <div class="col-md-3 content-input">
        <label for="lar_cint">Largo desde cintura</label>
        {!!  Form::checkbox('lar_cint', 'value') !!}
      </div>
      <div class="col-md-3 content-input">
        <label for="larg_mang">Largo mangas</label>
        {!!  Form::checkbox('larg_mang', 'value') !!}
      </div>
      <div class="col-md-3 content-input">
        <label for="cont_bra">Contorno de Brazo</label>
        {!!  Form::checkbox('cont_braz', 'value') !!}
      </div>
      <div class="col-md-3 content-input">
        <label for="larg_taj">Largo de tajo</label>
        {!!  Form::checkbox('larg_taj', 'value') !!}
      </div>
      <div class="col-md-3 content-input">
        <label for="tip_bret">Tipo de bretel</label>
        {!!  Form::checkbox('tip_bret', 'value') !!}
      </div>
    </div>
    <!--Imagen-->
    <div class="row">
      <div class="col-md-6 content-input">
        <label for="name">Imagen Destacada</label>
        <div class="custom-file">
          <input id="image" type="file" accept=".png, .jpg, .jpeg" name="image" required>
        </div>
      </div>  
      <!--Precio-->
      <div class="col-md-6 content-input">
        <label for="price">Precio</label>
        {!! Form::number('price', null, ['class' => 'form-control', 'min' => '0.00', 'step' => 'any']) !!}
      </div>
    </div>
    <!-- Guardar -->
    <div class="row mt-3">
      <div class="col-md-1">
        {!! Form::submit('Agregar', ['class' => 'btn btn-success']) !!}
      </div>
    </div>
  </form>
@endsection