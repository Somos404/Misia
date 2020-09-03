@extends('layouts.layout')

@section('content')

    <section class="vestidos-a-medida">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7 h-condensed">
                    <h4 class="step"> CREA TU VESTIDO A MEDIDA </h4>
                    <h5 class=""> PASO 1: Selecciona el modelo de vestido </h5>
                    <div id="card-container" class="row" style="min-height: 800px">
                        <!-- 1 -->
                        @foreach ($products as $product)
                            <div class="col-3">
                                <div id="{{$product->id}}" class="card-product"
                                    onclick="sliderHandler(`{{ $product->id }}`,`{{ $product->name }}`,`{{ $product->descripcion }}`,`{{ $product->price }}`,`{{ $product->image_destacada }}`,`{{ $product->image_lateral }}`,`{{ $product->image_espalda }}`);">
                                    <img class="img-fluid"
                                        src="{{ asset('images/' . $product->name . '/' . $product->image_destacada) }}"
                                        alt="Prodcutos destacados" style="width: 100%" />
                                    <ul class="d-flex justify-content-between">
                                        <li>
                                            <p class="g-medium name">{{ $product->name }}</p>
                                        </li>
                                        <!-- <li><p class="h-condensed price">$11.900</p></li> -->
                                    </ul>
                                </div>
                            </div>
                            
                        @endforeach
                        <div class="col-md-12">
                            <form id="myform" action="vestidos-a-medida-dos">
                                <input hidden type="text" value="" name="id" id="input_id">
                                <a class="btn h-condensed btn-generic" href="#"
                                    onclick="document.getElementById('myform').submit()">
                                    SEGUIR CREANDO
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5 h-condensed content-slider">
                    <h5 id="price" class="mb-5"></h5>
                    <div class="slider-vestido-a-medida-1 slider-vestidos">
                        <div>
                            <img id="img1" class="img-fluid" src="{{ asset('assets/images/JPG/vestidos/imgVacio.png') }}"
                                alt="Prodcutos destacados" style="width: 100%" />
                            <p id="descrip1" class="mt-3"></p>
                        </div>
                        <div>
                            <img id="img2" class="img-fluid" src="{{ asset('assets/images/JPG/vestidos/imgVacio.png') }}"
                                alt="Prodcutos destacados" style="width: 100%" />
                            <p id="descrip2" class="mt-3"></p>
                        </div>
                        <div>
                            <img id="img3" class="img-fluid" src="{{ asset('assets/images/JPG/vestidos/imgVacio.png') }}"
                                alt="Prodcutos destacados" style="width: 100%" />
                            <p id="descrip3" class="mt-3"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>

        $(function() {
          var product = {!!json_encode($products[0], JSON_HEX_TAG) !!};
          sliderHandler(product.id, product.name, product.descripcion, product.price, product.image_destacada, product.image_lateral, product.image_espalda)     
        })

        function sliderHandler(id, name, descripcion, price, image_destacada, image_lateral, image_espalda) {
            var x = document.getElementById("card-container");
            var y = x.getElementsByClassName("card-product");
            for (let index = 0; index < y.length; index++) {
                y[index].style.backgroundColor = '';  
            }
            document.getElementById(id).style.backgroundColor = '#b2bec3';

            document.getElementById("img1").src = 'images/' + name + '/' + image_destacada;
            document.getElementById("descrip1").innerHTML = descripcion;

            document.getElementById("img2").src = 'images/' + name + '/' + image_lateral;
            document.getElementById("descrip2").innerHTML = descripcion;

            document.getElementById("img3").src = 'images/' + name + '/' + image_espalda;
            document.getElementById("descrip3").innerHTML = descripcion;

            document.getElementById("price").innerHTML = price;

            document.getElementById("input_id").value = id;
        }

    </script>

@endsection
