@extends('layouts.layout')

@section('content')

<section class="vestidos-a-medida">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-5 h-condensed">
        <h5 class="step p-1 mb-4 bg-light"> DETALLE DE TU COMPRA </h5>
        <div class="row">
          <div class="col-md-12">
            <p class="mb-4">Modelo de vestido: GUERNICA</p>
            <p class="mb-4">Color: Rojo</p>
            <p class="mb-4">Contorno busto: 90 cm</p>
            <p class="mb-4">Contorno cintura: 60 cm</p>
            <p class="mb-4">Contorno cadera: 106 cm</p>
            <p class="mb-4">Largo total: 115 cm</p>
            <p class="mb-4">Largo tajo: 70 cm</p>
            <p class="mb-4">Tipo de bretel: Bretel delgado con aplique + $1500</p>
            <p class="mb-4">Precio: $13.400</p>
          </div>
          <div class="col-md-12 mt-3">
            <a class="btn h-condensed btn-generic" href="#">
              FINALIZAR COMPRA
            </a>
            <p class="terms">  
              Tiempo de confeccion : 10 dias <br/>
              Tiempo de envio: 10 dias <br/>
              Vestido confeccionado a tu medida, no se aceptan cambios ni devoluciones
            </p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-1"></div>
      <div class="col-12 col-md-6 h-condensed">
        <h5 class=""> $13.400 </h5>
        <div class="slider-vestido-a-medida-1 slider-vestidos" style="position: relative; z-index: 0; top: 0;"> 
          <div>
            <img class="img-fluid" src="{{ asset('assets/images/JPG/vestidos/slider-vestido1-a.jpg') }}" alt="Prodcutos destacados" style="width: 100%"/>
            
          </div>
          <div>
            <img class="img-fluid" src="{{ asset('assets/images/JPG/vestidos/slider-vestido2-a.jpg') }}" alt="Prodcutos destacados" style="width: 100%"/>
            
          </div>
          <div>
            <img class="img-fluid" src="{{ asset('assets/images/JPG/vestidos/slider-vestido3-b.jpg') }}" alt="Prodcutos destacados" style="width: 100%"/>
            
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>

@endsection