@extends('layouts.layout')

@section('content')

<section class="vestidos-a-medida">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-5 h-condensed">
        <h5 class="step p-1 mb-4 bg-light">DETALLE DE TU COMPRA</h5>
        <div class="row">
          <form action="carrito-de-compra" method="post">
            @csrf
          <div class="col-md-12">
            <p class="mb-4">Modelo de vestido: {{$product->name}}</p>
            <input type="text" name="product_id" value="{{$product->id}}" hidden>

            <p class="mb-4">Color: {{$imagenes['colorname']}}</p>
            <input type="text" name="colorname" value="{{$imagenes['colorname']}}" hidden>
            <input type="text" name="color" value="{{$imagenes['color']}}" hidden>

            @if ($detalle->cont_bust)    
            <p class="mb-4">Contorno de Busto: {{$detalle->cont_bust }} cm</p>
            <input type="text" name="cont_bust" value="{{$detalle->cont_bust}}" hidden>

            @endif
            @if ($detalle->cont_cint)
            <p class="mb-4">Contorno de Cintura: {{$detalle->cont_cint }} cm</p>
            <input type="text" name="cont_cint" value="{{$detalle->cont_cint}}" hidden>
            @endif
            @if ($detalle->cont_cadera)
            <p class="mb-4">Contorno de Cadera: {{$detalle->cont_cadera }} cm</p>
            <input type="text" name="cont_cadera" value="{{$detalle->cont_cadera}}" hidden>

            @endif
            @if ($detalle->estatura_total)
            <p class="mb-4">Estatura Total: {{$detalle->estatura_total }} cm</p>
            <input type="text" name="estatura_total" value="{{$detalle->estatura_total}}" hidden>

            @endif
            @if ($detalle->lar_cint)
            <p class="mb-4">Largo desde Cintura: {{$detalle->lar_cint }} cm</p>
            <input type="text" name="lar_cint" value="{{$detalle->lar_cint}}" hidden>

            @endif
            @if ($detalle->larg_mang)
            <p class="mb-4">Largo de Manga: {{$detalle->larg_mang }} cm</p>
            <input type="text" name="larg_mang" value="{{$detalle->larg_mang}}" hidden>

            @endif
            @if ($detalle->cont_bra)
            <p class="mb-4">Contorno de Brazo: {{$detalle->cont_bra }} cm</p>
            <input type="text" name="cont_bra" value="{{$detalle->cont_bra}}" hidden>

            @endif
            @if ($detalle->larg_taj)
            <p class="mb-4">Largo de Tajo: {{$detalle->larg_taj }} cm</p>
            <input type="text" name="larg_taj" value="{{$detalle->larg_taj}}" hidden>

            @endif
            @if ($detalle->tip_bret == 'Delgado')
            <p class="mb-4">Tipo de Bretel: Delgado</p>
            <input type="text" name="tip_bret" value="{{$detalle->tip_bret}}" hidden>
            <input type="text" name="price" value="{{$product->price}}" hidden>

            @endif
            @if ($detalle->tip_bret == 'Delgado con aplique')
            <p class="mb-4">Tipo de Bretel: Delgado con aplique + $1500</p>
            <input type="text" name="tip_bret" value="{{$detalle->tip_bret}}" hidden>
            <input type="text" name="price" value="{{$product->price + 1500}}" hidden>

            @endif
            <p class="mb-4">Precio: ${{ $product->price + 1500 }} </p>
          </div>
          <div class="col-md-12 mt-3">
              <button class="btn h-condensed btn-generic" type="submit" >FINALIZAR COMPRA</button>
              <p class="terms">  
                Tiempo de confeccion : 10 dias <br/>
                Tiempo de envio: 10 dias <br/>
                Vestido confeccionado a tu medida, no se aceptan cambios ni devoluciones
              </p>
            </div>
          </form>
        </div>
      </div>
      <div class="col-12 col-md-1"></div>
      <div class="col-12 col-md-6 h-condensed">
        <h5 class=""> ${{$product->price }} </h5>
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
    var img = {!!json_encode($imagenes['img'], JSON_HEX_TAG) !!};
    var cont = 0;
    for (let i = 1; i < 7; i++) {
        if( cont >= img.length){
          cont = 0;
        }
        document.getElementById("img" + i).src = 'images/' + img[cont];
        cont++;
      }
    })
</script>
@endsection