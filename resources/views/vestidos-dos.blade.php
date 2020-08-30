@extends('layouts.layout')

@section('content')

<section class="vestidos-a-medida">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-5 h-condensed">
        <h4 class="step"> CREA TU VESTIDO A MEDIDA * GENÉRICA</h4>
        <h5 class="mb-5"> PASO 2: Selecciona el color de de tu vestido </h5>
        <div class="row">
          <!-- 1 -->
          <div class="col-2">
            <div class="card-color goTo-1"> 
              <div class="item-color negro"></div>
              <p> Negro </p>
            </div>
          </div>
          <!-- 2 -->
          <div class="col-2">
            <div class="card-color goTo-2"> 
              <div class="item-color magento"></div>
              <p> Magento </p>
            </div>
          </div>
          <!-- 3 -->
          <div class="col-2">
            <div class="card-color goTo-3"> 
              <div class="item-color petroleo"></div>
              <p> Petroleo </p>
            </div>
          </div>
          <!-- 4 -->
          <div class="col-2">
            <div class="card-color goTo-1"> 
              <div class="item-color amarillo"></div>
              <p> Amarillo </p>
            </div>
          </div>
          <!-- 5 -->
          <div class="col-2">
            <div class="card-color goTo-2"> 
              <div class="item-color verde"></div>
              <p> Verde </p>
            </div>
          </div>
          <!-- 6 -->
          <div class="col-2">
            <div class="card-color goTo-3"> 
              <div class="item-color violeta"></div>
              <p> Violeta </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10">
            <h5 class="mt-5"> PASO 3: Selecciona tus medidas </h5>
            <form>
              <div class="form-group row mx-0">
                <label class="col-sm-6 col-form-label">Contorno de busto</label>
                <div class="col-sm-6">
                <label for="control-busto"></label>
                                    {!!  Form::selectRange('number', 60, 160, null, ['placeholder' => 'Seleccionar']) !!}
                </div>
              </div>
              <div class="form-group row mx-0">
                <label class="col-sm-6 col-form-label">Contorno de cintura</label>
                <div class="col-sm-6">
                  <select class="form-control" id="busto">
                    <option>Seleccionar</option>
                    <option>Seleccionar</option>
                    <option>Seleccionar</option>
                    <option>Seleccionar</option>
                    <option>Seleccionar</option>
                  </select>
                </div>
              </div>
              <div class="form-group row mx-0">
                <label class="col-sm-6 col-form-label">Contorno de cadera</label>
                <div class="col-sm-6">
                  <select class="form-control" id="busto">
                    <option>Seleccionar</option>
                    <option>Seleccionar</option>
                    <option>Seleccionar</option>
                    <option>Seleccionar</option>
                    <option>Seleccionar</option>
                  </select>
                </div>
              </div>
              <div class="form-group row mx-0">
                <label class="col-sm-6 col-form-label">Estatura total</label>
                <div class="col-sm-6">
                  <select class="form-control" id="busto">
                    <option>Seleccionar</option>
                    <option>Seleccionar</option>
                    <option>Seleccionar</option>
                    <option>Seleccionar</option>
                    <option>Seleccionar</option>
                  </select>
                </div>
              </div>
              <div class="form-group row mx-0">
                <label class="col-sm-6 col-form-label">Largo de cintura</label>
                <div class="col-sm-6">
                  <select class="form-control" id="busto">
                    <option>Seleccionar</option>
                    <option>Seleccionar</option>
                    <option>Seleccionar</option>
                    <option>Seleccionar</option>
                    <option>Seleccionar</option>
                  </select>
                </div>
              </div>
              <div class="form-group row mx-0">
                <label class="col-sm-6 col-form-label">lLargo de mangas</label>
                <div class="col-sm-6">
                  <select class="form-control" id="busto">
                    <option>Seleccionar</option>
                    <option>Seleccionar</option>
                    <option>Seleccionar</option>
                    <option>Seleccionar</option>
                    <option>Seleccionar</option>
                  </select>
                </div>
              </div>
              <div class="form-group row mx-0">
                <label class="col-sm-6 col-form-label">Contorno brazo</label>
                <div class="col-sm-6">
                  <select class="form-control" id="busto">
                    <option>Seleccionar</option>
                    <option>Seleccionar</option>
                    <option>Seleccionar</option>
                    <option>Seleccionar</option>
                    <option>Seleccionar</option>
                  </select>
                </div>
              </div>
              <div class="form-group row mx-0">
                <label class="col-sm-6 col-form-label">Largo de tajo</label>
                <div class="col-sm-6">
                  
                  <label for="control-busto"></label>
                  {!!  Form::selectRange('number', 30, 70, null, ['placeholder' => 'Sin tajo']) !!}
                 
                </div>
              </div>
              <div class="form-group row mx-0">
                <label class="col-sm-6 col-form-label">Tipo de bretel</label>
                <div class="col-sm-6">
                <label for="contorno-brazo"></label>
                      {!!  Form::select('size', ['D' => 'Delgado', 'DA' => 'Delgado con aplique']) !!}
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
        <h5 class=""> $11.90 </h5>
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