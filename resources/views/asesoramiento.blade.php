
@extends('layouts.layout')

@section('content')

<!-- Advice -->
<section class="advice">
  <div class="container">
    <div class="row">
      <div class="col-12 h-condensed">
        <h4 class="step mb-4"> TIPS DE ASESORAMIENTO </h4>
      </div>
    </div>
    <div class="row pb-5">
      <div class="col-12 col-md-5 mt-auto">
        <div class="g-semibolditalic text-right">
          <p class="mb-4">“Creamos esta sección para <br />
            orientarlas en la elección del <br />
            vestido, cabe aclarar que esto no es <br />
            lineal, NO hay una regla a seguir, <br />
            porque en definitiva para <br />
            nosotras TODO es cuestión de <br />
            ACTITUD y COMODIDAD”</p>
          <p class="">MisiaTeam</p>
        </div>
      </div>
      <div class="col-12 col-md-6 offset-1">
        <img class="img-fluid" src="{{ asset('assets/images/JPG/advice.jpg') }}" alt="Tips de asesoramiento" />
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-12 h-condensed pt-5">
        <h4 class="step mb-4"> RECONOCIMIENTO DE TIPO DE SILUETA </h4>
      </div>
    </div>
    <div class="row silueta">
      <div class="col-12 col-md-6 pl-0">
        <img class="img-fluid" src="{{ asset('assets/images/PNG/BodyShape.png') }}" alt="Tips de asesoramiento" />
      </div>
      <div class="col-12 col-md-6 h-condensed">
        <div class="">
          <h4 class="title-underline mb-3">RELOJ DE ARENA</h4>
          <p class="mb-3">*La cintura es más angosta que hombros y cadera </p>
          <h4 class="mb-3">SUGERENCIAS</h4>
          <p class="mb-3">En este tipo de silueta, puedes optar por varios tipos de escotes que ayuden a potenciar tus formas. Ya sea escotes halter, strapless, asimétricos, corte princesa.Se recomienda marcar la cintura poniendo atención a la zona con cinturones o vestidos que tengan un corte en la misma. </p>
          <p class="">Vestidos de Misia aconsejados: </p>
          <div class="overflow">
            <div class="row">
              <div class="col-12 col-md-3 item">
                <img class="img-fluid" src="{{ asset('assets/images/JPG/product-1.jpg') }}" alt="Prodcutos destacados" style="width: 100%"/>
                <ul class="d-flex justify-content-between">
                  <li><p class="g-medium name">Guernica</p></li>
                </ul>
              </div>
              <div class="col-12 col-md-3 item">
                <img class="img-fluid" src="{{ asset('assets/images/JPG/product-1.jpg') }}" alt="Prodcutos destacados" style="width: 100%"/>
                <ul class="d-flex justify-content-between">
                  <li><p class="g-medium name">Málaga</p></li>
                </ul>
              </div>
              <div class="col-12 col-md-3 item">
                <img class="img-fluid" src="{{ asset('assets/images/JPG/product-1.jpg') }}" alt="Prodcutos destacados" style="width: 100%"/>
                <ul class="d-flex justify-content-between">
                  <li><p class="g-medium name">Vera</p></li>
                </ul>
              </div>
              <div class="col-12 col-md-3 item">
                <img class="img-fluid" src="{{ asset('assets/images/JPG/product-1.jpg') }}" alt="Prodcutos destacados" style="width: 100%"/>
                <ul class="d-flex justify-content-between">
                  <li><p class="g-medium name">Crux</p></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- endAdvice -->
@endsection
