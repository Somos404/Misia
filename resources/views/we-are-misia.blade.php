
@extends('layouts.layout')

@section('content')

<!-- WeAreMisia -->
<section class="we-are-misia">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-5 h-condensed pr-0">
        <h1 class="step mb-5"> #W E  A R E  M I S I A </h1>
        <div class="misia-text h-condensed">
          <p class="mb-4">Somos dos amigas que se asociaron por un proyecto en común: crear una marca de vestidos de fiesta, hechos y a medida, versátiles, elegantes y con mucha onda.</p>
          <p class="mb-4">Buscamos que la mujer a través de la moda, pueda celebrar el carácter y autoconfianza de ellas mismas. </p>
          <p class="mb-4">No existen tendencias, sólo vestidos que, como si de amuletos se tratasen, empoderan y energizan a la mujer. Ponemos el alma en cada uno de ellos,  conocemos a cada persona que está detrás del procedimiento de creación de las prendas y disfrutamos mantener vivo el trabajo artesanal para una perfecta terminación. </p>
        </div>
      </div>
      <div class="col-12 col-md-5 offset-2">
        <img class="img-fluid" src="{{ asset('assets/images/JPG/we-are-misia.jpg') }}" alt="Somos Misia" />
      </div>
    </div>
  </div>
</section>
<!-- endWeAreMisia -->
@endsection
