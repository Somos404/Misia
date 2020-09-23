@extends('layouts.layout')

@section('content')

    <section class="vestidos-a-medida">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5 h-condensed">
                    <h5 class="step p-1 mb-4 bg-light"> Detalles de facturación </h5>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Nombre*</label>
                            <input type="text" class="form-control" name="name" value={{ Auth::user()->name }}>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Apellido*</label>
                            <input type="text" class="form-control" name="lastname" value={{ Auth::user()->lastname }}>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Nombre de la empresa<span> (opcional)</span></label>
                            <input type="text" class="form-control" name="company">
                        </div>
                        <div class="col-md-6"></div><!-- Este col es para hacer el espacio al costado -->
                        <div class="form-group col-md-6">
                            <label>Pais Región*</label>
                            <input type="text" class="form-control" name="country">
                        </div>
                        <div class="col-md-6"></div><!-- Este col es para hacer el espacio al costado -->
                        <div class="form-group col-md-6">
                            <label>Dirección de la calle*</label>
                            <input type="text" class="form-control" name="address">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Piso*</label>
                            <input type="text" class="form-control" name="floor">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Código postal*</label>
                            <input type="text" class="form-control" name="code">
                        </div>
                        <div class="col-md-6"></div><!-- Este col es para hacer el espacio al costado -->
                        <div class="form-group col-md-6">
                            <label>Localidad / ciudad* </label>
                            <input type="text" class="form-control" name="city">
                        </div>
                        <div class="col-md-6"></div><!-- Este col es para hacer el espacio al costado -->
                        <div class="form-group col-md-6">
                            <label>Provincia*</label>
                            <input type="text" class="form-control" name="province">
                        </div>
                        <div class="col-md-6"></div><!-- Este col es para hacer el espacio al costado -->
                        <div class="form-group col-md-6">
                            <label>Teléfono* </label>
                            <input type="text" class="form-control" name="phone">
                        </div>
                        <div class="col-md-6"></div><!-- Este col es para hacer el espacio al costado -->
                        <div class="form-group col-md-6">
                            <label>Dirección de correo electrónico*</label>
                            <input type="email" class="form-control" name="email" value={{ Auth::user()->email }}>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Nota del pedido ( opcional)</label>
                            <textarea class="form-control" name="note" rows="4"></textarea>
                        </div>
                    </div>
                    <!-- </form> -->
                </div>
                <div class="col col-md-1 h-condensed"></div>
                <div class="col-12 col-md-6 h-condensed">
                    <div class="row">
                        <div class="col-4 bg-light mb-3">
                            <p class="mb-0 py-1 bold"> Producto </p>
                        </div>
                        <div class="col-4 bg-light mb-3">
                            <p class="mb-0 py-1 bold"> Subtotal </p>
                        </div>
                        <div class="col-4 bg-light mb-3">
                            <p class="mb-0 py-1 bold"> Acciones </p>
                        </div>
                    </div>
                    @foreach ($detalles as $item)
                        <div data-toggle="collapse" href="#collapse{{ $item->id }}" aria-expanded="false" 
                        style="cursor: pointer; padding: 5px;" onMouseOut="this.style.backgroundColor='transparent'" onMouseOver="this.style.backgroundColor='#95a5a6'"
                            aria-controls="collapse">
                            <div class="row">
                                <div class="col-4 mb-1">
                                    <p class="mb-0 py-1">Vestido: {{ $item->productorName }} </p>
                                </div>
                                <div class="col-4 mb-1 text-right text-md-left">
                                    <p class="mb-0 py-1"> ${{ $item->totalPrice }} </p>
                                </div>
                                <div class="col-2 mb-1">
                                    <a onclick="borratpedido({{ $item->id }})" class="btn h-condensed btn-generic"
                                        type="submit">
                                        Quitar</a>
                                </div>
                                <div class="col-2 mb-1">
                                    <a onclick="#" class="btn h-condensed btn-generic"
                                        type="submit">
                                        Pagar</a>
                                </div>

                            </div>
                        </div>
                        <div style="background-color: #ecf0f1" class="row collapse" id="collapse{{ $item->id }}">
                            <div class="col-8 mb-1">
                                <p class="mb-0 py-1">Vestido: {{ $item->productorName }} </p>
                            </div>
                            <div class="col-4 mb-1 text-right text-md-left">
                                <p class="mb-0 py-1"> ${{ $item->productPrice }} </p>
                            </div>
                            @if ($item->bretName)
                                <div class="col-8 mb-1">
                                    <p class="mb-0 py-1">Bretel: {{ $item->bretName }}</p>
                                </div>
                                <div class="col-4 mb-1 text-right text-md-left">
                                    <p class="mb-0 py-1"> ${{ $item->bretPrice }} </p>
                                </div>
                            @endif
                            <div class="col-8 mb-1">
                                <p class="mb-0 py-1"> Subtotal </p>
                            </div>
                            <div class="col-4 mb-1 text-right text-md-left">
                                <p class="mb-0 py-1"> ${{ $item->totalPrice }} </p>
                            </div>
                            <div class="col-8 mb-1">
                                <p class="mb-0 py-1"> Impuestos </p>
                            </div>
                            <div class="col-4 mb-1 text-right text-md-left">
                                <p class="mb-0 py-1"> $0.00 </p>
                            </div>
                            <div class="col-8 mb-1">
                                <p class="mb-0 py-1 bold"> Total </p>
                            </div>
                            <div class="col-4 mb-1 text-right text-md-left">
                                <p class="mb-0 py-1 bold"> ${{ $item->totalPrice }} </p>
                            </div>
                        </div>
                    @endforeach


                    <div class="card-body">
                        <form action="{{ route('pay') }}" method="POST" id="paymentForm">
                            @csrf

                            <div class="row">
                                <div class="col-auto">
                                    <label>Total a pagar</label>
                                    <input type="number" min="5" step="0.01" class="custom-select" name="value"
                                        value="{{ mt_rand(500, 100000) / 100 }}" required>
                                </div>
                                <div class="col-auto">
                                    <label>Moneda</label>
                                    <select class="custom-select" name="currency" required>
                                        @foreach ($currencies as $currency)
                                            <option value="{{ $currency->iso }}">
                                                {{ strtoupper($currency->iso) }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col">
                                    <label>Seleccione la plataforma de pago deseada:</label>
                                    <div class="form-group" id="toggler">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            @foreach ($paymentPlatforms as $paymentPlatform)
                                                <label class="btn btn-outline-secondary rounded m-2 p-1"
                                                    data-target="#{{ $paymentPlatform->name }}Collapse"
                                                    data-toggle="collapse">
                                                    <input type="radio" name="payment_platform"
                                                        value="{{ $paymentPlatform->id }}" required>
                                                    <img class="img-thumbnail" src="{{ asset($paymentPlatform->image) }}">
                                                </label>
                                            @endforeach
                                        </div>
                                        @foreach ($paymentPlatforms as $paymentPlatform)
                                            <div id="{{ $paymentPlatform->name }}Collapse" class="collapse"
                                                data-parent="#toggler">
                                                @includeIf('components.' . strtolower($paymentPlatform->name) . '-collapse')
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-3">
                                <button type="submit" id="payButton" class="btn btn-primary btn-lg">PAGAR</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="container">
                    @if (isset($errors) && $errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
    
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            <ul>
                                @foreach (session()->get('success') as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </section>

    <script>
        function borratpedido(id) {
            window.location = "borrarPedido/" + id;
        }

    </script>

@endsection
