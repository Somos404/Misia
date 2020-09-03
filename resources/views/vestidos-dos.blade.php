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
                                <div class="card-color" onclick="sliderHandler(`{{ $img['color'] }}`,`{{ $img['colorname'] }}`,{{ json_encode($img['img']) }});">
                                    <div class="item-color" style="background-color: {{ $img['color'] }}"></div>
                                    <p class="parrafo" id="{{ $img['colorname'] }}">  {{ $img['colorname'] }} </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                            <h5 class="mt-5"> PASO 3: Selecciona tus medidas </h5>
                            <form>
                                <div class="form-group row mx-0">
                                    <label class="col-sm-6 col-form-label">Contorno de busto</label>
                                    <div class="col-sm-6">
                                        <label for="control-busto"></label>
                                        {!! Form::selectRange('number', 60, 160, null, ['placeholder' => 'Seleccionar', $product->cont_bust == 0?'disabled':'']) !!}
                                    </div>
                                </div>
                                <div class="form-group row mx-0">
                                    <label class="col-sm-6 col-form-label">Contorno de cintura</label>
                                    <div class="col-sm-6">
                                      {!! Form::selectRange('number', 60, 160, null, ['placeholder' => 'Seleccionar', $product->cont_cint == 0?'disabled':'']) !!}
                                    </div>
                                </div>
                                <div class="form-group row mx-0">
                                    <label class="col-sm-6 col-form-label">Contorno de cadera</label>
                                    <div class="col-sm-6">
                                      {!! Form::selectRange('number', 60, 160, null, ['placeholder' => 'Seleccionar', $product->cont_cadera == 0?'disabled':'']) !!}
                                    </div>
                                </div>
                                <div class="form-group row mx-0">
                                    <label class="col-sm-6 col-form-label">Estatura total</label>
                                    <div class="col-sm-6">
                                      {!! Form::selectRange('number', 60, 160, null, ['placeholder' => 'Seleccionar', $product->estatura_total == 0?'disabled':'']) !!}
                                    </div>
                                </div>
                                <div class="form-group row mx-0">
                                    <label class="col-sm-6 col-form-label">Largo de cintura</label>
                                    <div class="col-sm-6">
                                      {!! Form::selectRange('number', 60, 160, null, ['placeholder' => 'Seleccionar', $product->lar_cint == 0?'disabled':'']) !!}
                                    </div>
                                </div>
                                <div class="form-group row mx-0">
                                    <label class="col-sm-6 col-form-label">Largo de mangas</label>
                                    <div class="col-sm-6">
                                      {!! Form::selectRange('number', 60, 160, null, ['placeholder' => 'Seleccionar', $product->larg_mang == 0?'disabled':'']) !!}
                                    </div>
                                </div>
                                <div class="form-group row mx-0">
                                    <label class="col-sm-6 col-form-label">Contorno brazo</label>
                                    <div class="col-sm-6">
                                      {!! Form::selectRange('number', 60, 160, null, ['placeholder' => 'Seleccionar', $product->cont_bra == 0?'disabled':'']) !!}
                                    </div>
                                </div>
                                <div class="form-group row mx-0">
                                    <label class="col-sm-6 col-form-label">Largo de tajo</label>
                                    <div class="col-sm-6">

                                        <label for="control-busto"></label>
                                        {!!  Form::selectRange('number', 30, 70, null, ['placeholder' => 'Sin tajo'],null , [$product->tip_bret == 0?'disabled':'']) !!}
                                    </div>
                                </div>
                                <div class="form-group row mx-0">
                                    <label class="col-sm-6 col-form-label">Tipo de bretel</label>
                                    <div class="col-sm-6">
                                        <label for="contorno-brazo"></label>
                                        {!!  Form::select('size', ['D' => 'Delgado', 'DA' => 'Delgado con aplique'],null , [$product->tip_bret == 0?'disabled':'']) !!}
                                    </div>
                                </div>
                            </form>
                            <p>* aplique con valor agregado + $1.500</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <a class="btn h-condensed btn-generic" href="{{ url('/detalle-de-compra') }}">
                                ABONAR
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-1"></div>
                <div class="col-12 col-md-6 h-condensed">
                    <h5 class=""> {{ $product->price }} </h5>
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
          sliderHandler(img.color, img.colorname, img.img)     
        })

        function sliderHandler(color,id, img) {

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

        }
    </script>
@endsection
