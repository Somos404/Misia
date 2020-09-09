@extends('layouts.layout')

@section('content')

    <section class="vestidos-a-medida">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5 h-condensed">
                    <h4 class="step"> CREA TU VESTIDO A MEDIDA * {{ $product->name }}</h4>
                    <h5 class="mb-5"> PASO 2: Selecciona el color de de tu vestido </h5>
                    <div class="row" id="card-container">
                        @foreach ($imagenes as $img)
                            <div class="col-2">
                                <div class="card-color" onclick="sliderHandler(`{{ $img['color'] }}`,`{{ $img['colorname'] }}`,{{ json_encode($img['img']) }}, `{{ $img['id'] }}`);">
                                    <div class="item-color" style="background-color: {{ $img['color'] }}"></div>
                                    <p class="parrafo" id="{{ $img['colorname'] }}">  {{ $img['colorname'] }} </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                            <h5 class="mt-5"> PASO 3: Selecciona tus medidas </h5>
                            <form id="myform2" action="detalle-de-compra">
                                <div class="form-group row mx-0">
                                    <label class="col-sm-6 col-form-label">Contorno de Busto</label>
                                    <div class="col-sm-6">
                                        {!! Form::selectRange('cont_bust', 60, 160, null, ['placeholder' => 'Seleccionar', $product->cont_bust == 0?'disabled':'required']) !!}
                                    </div>
                                </div>
                                <div class="form-group row mx-0">
                                    <label class="col-sm-6 col-form-label">Contorno de Cintura</label>
                                    <div class="col-sm-6">
                                      {!! Form::selectRange('cont_cint', 50, 160, null, ['placeholder' => 'Seleccionar', $product->cont_cint == 0?'disabled':'required']) !!}
                                    </div>
                                </div>
                                <div class="form-group row mx-0">
                                    <label class="col-sm-6 col-form-label">Contorno de Cadera</label>
                                    <div class="col-sm-6">
                                      {!! Form::selectRange('cont_cadera', 60, 160, null, ['placeholder' => 'Seleccionar', $product->cont_cadera == 0?'disabled':'required']) !!}
                                    </div>
                                </div>
                                <div class="form-group row mx-0">
                                    <label class="col-sm-6 col-form-label">Estatura Total</label>
                                    <div class="col-sm-6">
                                      {!! Form::selectRange('estatura_total', 120, 190, null, ['placeholder' => 'Seleccionar', $product->estatura_total == 0?'disabled':'required']) !!}
                                    </div>
                                </div>
                                <div class="form-group row mx-0">
                                    <label class="col-sm-6 col-form-label">Largo desde Cintura</label>
                                    <div class="col-sm-6">
                                      {!! Form::selectRange('lar_cint', 70, 140, null, ['placeholder' => 'Seleccionar', $product->lar_cint == 0?'disabled':'required']) !!}
                                    </div>
                                </div>
                                <div class="form-group row mx-0">
                                    <label class="col-sm-6 col-form-label">Largo de Mangas</label>
                                    <div class="col-sm-6">
                                      {!! Form::selectRange('larg_mang', 30, 70, null, ['placeholder' => 'Seleccionar', $product->larg_mang == 0?'disabled':'required']) !!}
                                    </div>
                                </div>
                                <div class="form-group row mx-0">
                                    <label class="col-sm-6 col-form-label">Contorno de Brazo</label>
                                    <div class="col-sm-6">
                                      {!! Form::selectRange('cont_bra', 20, 50, null, ['placeholder' => 'Seleccionar', $product->cont_bra == 0?'disabled':'required']) !!}
                                    </div>
                                </div>
                                <div class="form-group row mx-0">
                                    <label class="col-sm-6 col-form-label">Largo de Tajo</label>
                                    <div class="col-sm-6">
                                        {!!  Form::selectRange('larg_taj', 30, 70, null, ['placeholder' => 'Sin tajo'], null , [$product->larg_taj == 0?'disabled':'required']) !!}
                                    </div>
                                </div>
                                <div class="form-group row mx-0">
                                    <label class="col-sm-6 col-form-label">Tipo de Bretel</label>
                                    <div class="col-sm-6">
                                        <select name="tip_bret"
                                            onchange="
                                                document.getElementById('preciobretel').innerHTML = 'valor agregado $'+($(this).children('option:selected')['0'].attributes['price'].value);
                                                document.getElementById('precioVestido').innerHTML = ({{ $product->price }} + parseFloat(($(this).children('option:selected')['0'].attributes['price'].value))).toFixed(2);"
                                            {{$product->tip_bret == 0?'disabled':'required'}}
                                            >
                                                <option disabled selected>Seleccionar</option> 
                                                @foreach ($tipBret as $item)
                                                    <option price='{{$item->price}}' value="{{$item->id}}">{{$item->name}}</option> 
                                                @endforeach
                                        </select>
                                    </div>
                                </div>
                                <p id="preciobretel">* aplique con valor agregado + 0</p>
                                <input hidden type="text" value="{{ $product->id }}" name="id_vestido">
                                <input hidden type="text" value="" name="id_color" id="id_color">
                                <input hidden type="text" value="" name="color" id="colorsend">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <button class="btn h-condensed btn-generic" type="submit" >Ir a Detalles</button>
                        </div>
                    </form>
                    </div>
                </div>
                <div class="col-12 col-md-1"></div>
                <div class="col-12 col-md-6 h-condensed">
                    <h5 id="precioVestido" class=""> {{ $product->price }} </h5>
                    <div id="div" class="slider-vestido-a-medida-1 slider-vestidos"
                        style="position: relative; z-index: 0; top: 0;">
                        <div>
                            <img class="img-fluid" id="img1" class="img-fluid"
                                src="{{ asset('assets/images/JPG/vestidos/imgVacio.png') }}" alt="Prodcutos destacados"
                                style="width: 100%" />
                        </div>
                        <div>
                            <img class="img-fluid" id="img2" class="img-fluid"
                                src="{{ asset('assets/images/JPG/vestidos/imgVacio.png') }}" alt="Prodcutos destacados"
                                style="width: 100%" />
                        </div>
                        <div>
                            <img class="img-fluid" id="img3" class="img-fluid"
                                src="{{ asset('assets/images/JPG/vestidos/imgVacio.png') }}" alt="Prodcutos destacados"
                                style="width: 100%" />
                        </div>
                        <div>
                            <img class="img-fluid" id="img4" class="img-fluid"
                                src="{{ asset('assets/images/JPG/vestidos/imgVacio.png') }}" alt="Prodcutos destacados"
                                style="width: 100%" />
                        </div>
                        <div>
                            <img class="img-fluid" id="img5" class="img-fluid"
                                src="{{ asset('assets/images/JPG/vestidos/imgVacio.png') }}" alt="Prodcutos destacados"
                                style="width: 100%" />
                        </div>
                        <div>
                            <img class="img-fluid" id="img6" class="img-fluid"
                                src="{{ asset('assets/images/JPG/vestidos/imgVacio.png') }}" alt="Prodcutos destacados"
                                style="width: 100%" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <script>

        $(function() {
          var img = {!!json_encode($imagenes[0], JSON_HEX_TAG) !!};
          sliderHandler(img.color, img.colorname, img.img, img.id)     
        })

        function sliderHandler(color,id, img, id_color) {

          var x = document.getElementById("card-container");
          var y = x.getElementsByClassName("parrafo");
          for (let index = 0; index < y.length; index++) {
              y[index].style.color = '';  
              //y[index].style.backgroundColor = '';  
          }
          document.getElementById(id).style.color = color;
          //document.getElementById(id).style.backgroundColor = '#dfe6e9';
          var cont = 0;
          for (let i = 1; i < 7; i++) {
            if( cont >= img.length){
              cont = 0;
            }
            document.getElementById("img" + i).src = 'images/' + img[cont];
            cont++;
          }
          console.log(color);
          document.getElementById("id_color").value = id_color;
          document.getElementById("colorsend").value = color;
        }
    </script>
@endsection
