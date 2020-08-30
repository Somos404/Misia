
@extends('layouts.layout')

@section('content')

<!-- Contact -->
<section class="contact">
  <div class="container">
    <div class="row">
      <div class="col-12 h-condensed">
        <h4 class="step mb-4">CONTACTO</h4>
      </div>
    </div>
    <div class="row pb-5">
      <div class="col-12 col-md-5">
        <div class="">
          <form>
            <div class="form-group">
              <label>Nombre <span>*requerido</span></label>
              <input type="text" class="form-control" id="">
            </div>
            <div class="form-group">
              <label>Email <span>*requerido</span></label>
              <input type="email" class="form-control" id="">
            </div>
            <div class="form-group">
              <label>Mensaje <span>*requerido</span></label>
              <textarea class="form-control" id="" rows="6"></textarea>
            </div>
            <button type="submit" class="btn h-condensed btn-generic">ENVIAR</button>
          </form>
        </div>
      </div>
      <div class="col-12 col-md-7">
        <img class="img-fluid" src="{{ asset('assets/images/PNG/contact/google-map.png') }}" alt="Contacto - Misia" />
      </div>
    </div>
  </div>
</section>
<!-- endContact -->
@endsection
