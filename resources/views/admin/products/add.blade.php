@extends('admin.master')
@section('title', 'Agregar Producto')
@section('breadcrumb')
    <li class="breadcrumb-item">
        <i class="fas fa-users-friends"></i><span>Dashboard </span> - Agregar Producto
    </li>
@endsection


@section('content')
    @if (session()->has('message'))
        <div class="alert alert-{{ session('typealert') }}">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {!! session('message') !!}
        </div>
    @endif


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
                <input 
                    onchange="document.getElementById('imgColor1').removeAttribute('hidden'); document.getElementById('imgColor1').required = true;" 
                    name="color1" type="color"
                    value="" />
                <div  class="custom-file">
                    <input multiple id="imgColor1" value="" hidden type="file" accept=".png, .jpg, .jpeg" name="imgColor1">
                </div>
            </div>
            <div class="col-md-3 content-input">
                <label for="color">Color 2</label>
                {!! Form::text('color2_a', null, ['class' => 'form-control']) !!}
                <input 
                  onchange="document.getElementById('imgColor2').removeAttribute('hidden'); document.getElementById('imgColor2').required = true;"
                  name="color2" 
                  type="color" 
                  value="" />
                <div  class="custom-file">
                  <input id="imgColor2" hidden type="file" accept=".png, .jpg, .jpeg" name="imgColor2">
                </div>
            </div>
            <div class="col-md-3 content-input">
                <label for="color3">Color 3</label>
                {!! Form::text('color3_a', null, ['class' => 'form-control']) !!}
                <input  
                  onchange="document.getElementById('imgColor3').removeAttribute('hidden'); document.getElementById('imgColor3').required = true;"
                  name="color3" type="color" 
                  value="" />
                  <div class="custom-file">
                    <input id="imgColor3" hidden  type="file" accept=".png, .jpg, .jpeg" name="imgColor3">
                  </div>
            </div>
            <div class="col-md-3 content-input">
                <label for="color4">Color 4</label>
                {!! Form::text('color4_a', null, ['class' => 'form-control']) !!}
                <input  
                  onchange="document.getElementById('imgColor4').removeAttribute('hidden'); document.getElementById('imgColor4').required = true;"
                  name="color4" type="color" 
                  value="" />
                  <div  class="custom-file">
                    <input  id="imgColor4" hidden type="file" accept=".png, .jpg, .jpeg" name="imgColor4">
                  </div>
            </div>
            <div class="col-md-3 content-input">
                <label for="color5">Color 5</label>
                {!! Form::text('color5_a', null, ['class' => 'form-control']) !!}
                <input  
                  onchange="document.getElementById('imgColor5').removeAttribute('hidden'); document.getElementById('imgColor5').required = true;"
                  name="color5" type="color" 
                  value="" />
                  <div  class="custom-file">
                    <input id="imgColor5" hidden type="file" accept=".png, .jpg, .jpeg" name="imgColor5">
                  </div>
            </div>
            <div class="col-md-3 content-input">
                <label for="color6">Color 6</label>
                {!! Form::text('color6_a', null, ['class' => 'form-control']) !!}
                <input  
                  onchange="document.getElementById('imgColor6').removeAttribute('hidden'); document.getElementById('imgColor6').required = true;"
                  name="color6" type="color" 
                  value="" />
                  <div class="custom-file">
                    <input id="imgColor6" hidden type="file" accept=".png, .jpg, .jpeg" name="imgColor6">
                  </div>
            </div>
            <div class="col-md-3 content-input">
                <label for="color7">Color 7</label>
                {!! Form::text('color7_a', null, ['class' => 'form-control']) !!}
                <input  
                  onchange="document.getElementById('imgColor7').removeAttribute('hidden'); document.getElementById('imgColor7').required = true;"
                  name="color7" type="color" 
                  value="" />
                  <div  class="custom-file">
                    <input id="imgColor7" hidden type="file" accept=".png, .jpg, .jpeg" name="imgColor7">
                  </div>
            </div>
            <div class="col-md-3 content-input">
                <label for="color8">Color 8</label>
                {!! Form::text('color8_a', null, ['class' => 'form-control']) !!}
                <input  
                  onchange="document.getElementById('imgColor8').removeAttribute('hidden'); document.getElementById('imgColor8').required = true;"
                  name="color8" type="color" 
                  value="" />
                  <div  class="custom-file">
                    <input id="imgColor8" hidden type="file" accept=".png, .jpg, .jpeg" name="imgColor8">
                  </div>
            </div>
            <div class="col-md-3 content-input">
                <label for="color9">Color 9</label>
                {!! Form::text('color9_a', null, ['class' => 'form-control']) !!}
                <input  
                  onchange="document.getElementById('imgColor9').removeAttribute('hidden'); document.getElementById('imgColor9').required = true;"
                  name="color9" type="color" 
                  value="" />
                  <div  class="custom-file">
                    <input id="imgColor9" hidden type="file" accept=".png, .jpg, .jpeg" name="imgColor9">
                  </div>
            </div>
            <div class="col-md-3 content-input">
                <label for="color10">Color 10</label>
                {!! Form::text('color10_a', null, ['class' => 'form-control']) !!}
                <input  
                  onchange="document.getElementById('imgColor10').removeAttribute('hidden'); document.getElementById('imgColor10').required = true;"
                  name="color10" type="color" 
                  value="" />
                  <div class="custom-file">
                    <input id="imgColor10" hidden type="file" accept=".png, .jpg, .jpeg" name="imgColor10">
                  </div>
            </div>
            <div class="col-md-3 content-input">
                <label for="color11">Color 11</label>
                {!! Form::text('color11_a', null, ['class' => 'form-control']) !!}
                <input  
                  onchange="document.getElementById('imgColor11').removeAttribute('hidden'); document.getElementById('imgColor11').required = true;"
                  name="color11" type="color" 
                  value="" />
                  <div class="custom-file">
                    <input id="imgColor11" hidden type="file" accept=".png, .jpg, .jpeg" name="imgColor11">
                  </div>
            </div>
            <div class="col-md-3 content-input">
                <label for="color12">Color 12</label>
                {!! Form::text('color12_a', null, ['class' => 'form-control']) !!}
                <input  
                  onchange="document.getElementById('imgColor12').removeAttribute('hidden'); document.getElementById('imgColor12').required = true;"
                  name="color12" 
                  type="color" 
                  value="" />
                  <div class="custom-file">
                    <input id="imgColor12" value="10" hidden type="file" accept=".png, .jpg, .jpeg" name="imgColor12">
                  </div>
            </div>
        </div>
        <!--Medidas-->
        <div class="row">
            <div class="col-md-3 content-input">
                <label for="cont_bust">Control de busto</label>
                {!! Form::checkbox('cont_bust', 'value') !!}
            </div>
            <div class="col-md-3 content-input">
                <label for="cont_cint">Contorno de cintura</label>
                {!! Form::checkbox('cont_cint', 'value') !!}
            </div>
            <div class="col-md-3 content-input">
                <label for="cont_cadera">Contorno de cadera</label>
                {!! Form::checkbox('cont_cadera', 'value') !!}
            </div>
            <div class="col-md-3 content-input">
                <label for="lar_cint">Largo desde cintura</label>
                {!! Form::checkbox('lar_cint', 'value') !!}
            </div>
            <div class="col-md-3 content-input">
                <label for="larg_mang">Largo mangas</label>
                {!! Form::checkbox('larg_mang', 'value') !!}
            </div>
            <div class="col-md-3 content-input">
                <label for="cont_bra">Contorno de Brazo</label>
                {!! Form::checkbox('cont_braz', 'value') !!}
            </div>
            <div class="col-md-3 content-input">
                <label for="larg_taj">Largo de tajo</label>
                {!! Form::checkbox('larg_taj', 'value') !!}
            </div>
            <div class="col-md-3 content-input">
                <label for="tip_bret">Tipo de bretel</label>
                {!! Form::checkbox('tip_bret', 'value') !!}
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
        <div class="row">
            <!--Imagen espalda-->
            <div class="col-md-6 content-input">
                <label for="name">Imagen espalda</label>
                <div class="custom-file">
                    <input id="imageEspalda" type="file" accept=".png, .jpg, .jpeg" name="imageEspalda" required>
                </div>
            </div>
            <!--descripcion-->
            <div class="col-md-6">
                <div class="md-form mb-3">
                    <label for="descripcion" class="">Descripción del servicio que presta:</label>
                    <textarea name="descripcion" id="descripcion" cols="30" rows="5" class="form-control"
                        required></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <!--Imagen lateral-->
            <div class="col-md-6 content-input">
                <label for="name">Imagen lateral</label>
                <div class="custom-file">
                    <input id="imageLateral" type="file" accept=".png, .jpg, .jpeg" name="imageLateral" required>
                </div>
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
