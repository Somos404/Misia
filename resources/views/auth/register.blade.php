@extends('layouts.layout')

@section('content')
<section class="first-section section-register">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header g-medium">{{ __('CREAR CUENTA') }}</div>

          <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
              @csrf

              <div class="form-group row">
                  <label for="name" class="col-md-4 text-md-right col-form-label h-condensed">{{ __('Nombre*') }}</label>

                  <div class="col-md-6">
                      <input id="name" type="text" class="form-control h-condensed @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                      @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <div class="form-group row">
                <label for="email" class="col-md-4 text-md-right col-form-label h-condensed">{{ __('E-Mail*') }}</label>

                <div class="col-md-6">
                  <input id="email" type="email" class="form-control h-condensed @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="password" class="col-md-4 text-md-right col-form-label h-condensed">{{ __('Contraseña*') }}</label>

                <div class="col-md-6">
                  <input id="password" type="password" class="form-control h-condensed @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                  @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="password-confirm" class="col-md-4 text-md-right col-form-label h-condensed">{{ __('Confirmar Contraseña*') }}</label>

                <div class="col-md-6">
                  <input id="password-confirm" type="password" class="form-control h-condensed" name="password_confirmation" required autocomplete="new-password">
                </div>
              </div>

              <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn h-condensed btn-generic">
                      {{ __('ENVIAR') }}
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
