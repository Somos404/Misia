
@extends('layouts.layout')

@section('content')

<!-- Slider -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-12 content-slider">
        <div class="main-slider">
          <div>
            <img class="img-fluid" src="{{ asset('assets/images/JPG/slider.jpg') }}" alt="sldier"/>
            <div class="slide-text text-center">
              <h1 class="mb-1 mb-md-4 g-bolditalic">
                ELEGÍ, CREÁ Y ENCARGÁ TU<br/>VESTIDO DE FIESTA A MEDIDA
              </h1>
              <a class="btn h-condensed btn-generic" href="#">
                COMENZAR A CREAR
              </a>
            </div>
          </div>
          <div>
            <img class="img-fluid" src="{{ asset('assets/images/JPG/slider.jpg') }}" alt="sldier"/>
            <div class="slide-text text-center">
              <h1 class="mb-4 g-bolditalic">
                ELEGÍ, CREÁ Y ENCARGÁ TU<br/>VESTIDO DE FIESTA A MEDIDA
              </h1>
              <a class="btn h-condensed btn-generic" href="#">
                COMENZAR A CREAR
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- endSlider -->

<!-- Phrase -->
<section class="phrase pt-5">
  <div class="container pb-4">
    <div class="row">
      <div class="col-12 text-right">
        <h3 class="h3 g-semibolditalic">
          Nadie se conoce mejor que vos <br />misma, confiá y seguí tu estilo 
        </h3>
      </div>
    </div>
  </div>
  <div class="row phrase--gallery">
    <div class="col-12 col-md-4">
      <video controls>
        <source autoplay src="{{ asset('assets/video/video.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <!-- <img class="img-fluid" src="{{ asset('assets/images/JPG/phrase-1.jpg') }}" alt="" style="width: 100%"/> -->
    </div>
    <div class="col-12 col-md-4">
      <img class="img-fluid" src="{{ asset('assets/images/JPG/phrase-2.jpg') }}" alt="" style="width: 100%"/>
    </div>
    <div class="col-12 col-md-4">
      <img class="img-fluid" src="{{ asset('assets/images/JPG/phrase-3.jpg') }}" alt="" style="width: 100%"/>
    </div>
  </div>
</section>
<!-- endPhrase -->

<!-- Showorom -->
<section class="showroom py-5 my-5 bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6">
        <img class="img-fluid" src="{{ asset('assets/images/JPG/img-showroom.jpg') }}" alt="Misia SHOWROOM"/>
      </div>
      <div class="col-12 col-md-6 mt-auto">
        <h2 class="h2 g-medium mb-3">
          SHOWROOM
        </h2>
        <p class="h-condensed mb-3 pr-5">
          Este es nuestro lugar de trabajo,
          en el atelier recibimos a las clientas,
          eligen los modelos de vestidos que
          quieren medirse y brindamos una
          atención personalizada acompañada de
          un asesoramiento completo para
          ayudarlas en la elección del mismo.
          Estamos ubicados en el centro de
          Rosario, Santa fe, Argentina.
        </p>
        <a class="btn h-condensed btn-generic" href="#">
          PEDIR CITA
        </a>
      </div>
    </div>
  </div>
</section>
<!-- endShoworom -->

<!-- Destacados -->
<section class="destacados py-5 my-5">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h3 class="h3 g-medium mb-3 text-center">
          Los más buscados
        </h3>
      </div>
    </div>
    <div class="overflow">
      <div class="row">
        <div class="col-12 col-md-3 item">
          <img class="img-fluid" src="{{ asset('assets/images/JPG/product-1.jpg') }}" alt="Prodcutos destacados" style="width: 100%"/>
          <ul class="d-flex justify-content-between mt-3">
            <li><p class="g-medium name">Guernica</p></li>
            <li><p class="h-condensed price">$11.900</p></li>
          </ul>
        </div>
        <div class="col-12 col-md-3 item">
          <img class="img-fluid" src="{{ asset('assets/images/JPG/product-1.jpg') }}" alt="Prodcutos destacados" style="width: 100%"/>
          <ul class="d-flex justify-content-between mt-3">
            <li><p class="g-medium name">Málaga</p></li>
            <li><p class="h-condensed price">$11.900</p></li>
          </ul>
        </div>
        <div class="col-12 col-md-3 item">
          <img class="img-fluid" src="{{ asset('assets/images/JPG/product-1.jpg') }}" alt="Prodcutos destacados" style="width: 100%"/>
          <ul class="d-flex justify-content-between mt-3">
            <li><p class="g-medium name">Vera</p></li>
            <li><p class="h-condensed price">$11.900</p></li>
          </ul>
        </div>
        <div class="col-12 col-md-3 item">
          <img class="img-fluid" src="{{ asset('assets/images/JPG/product-1.jpg') }}" alt="Prodcutos destacados" style="width: 100%"/>
          <ul class="d-flex justify-content-between mt-3">
            <li><p class="g-medium name">Crux</p></li>
            <li><p class="h-condensed price">$11.900</p></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- endDestacados -->

@endsection
