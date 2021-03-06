<label class="mt-3">Detalles de tarjeta:</label>

<div class="form-group form-row">
    <div class="col-5">
        <input onkeyup="setCardNetwork();" class="custom-select" type="text" id="cardNumber" data-checkout="cardNumber" placeholder="Número de tarjeta">
    </div>

    <div class="col-2">
        <input class="custom-select" type="text" data-checkout="securityCode" placeholder="CVC">
    </div>

    <div class="col-1"></div>

    <div class="col-2">
        <input class="custom-select" type="text" data-checkout="cardExpirationMonth" placeholder="MM">
    </div>

    <div class="col-2">
        <input class="custom-select" type="text" data-checkout="cardExpirationYear" placeholder="YY">
    </div>
</div>



<div class="form-group form-row">
    <div class="col-5">
        <input class="custom-select" type="text" data-checkout="cardholderName" placeholder="Tu nombre">
    </div>
    <div class="col-5">
        <input class="custom-select" type="email" data-checkout="cardholderEmail" placeholder="email@example.com" name="email">
    </div>
</div>


<div class="form-group form-row">
    <div class="col-2">
        <select class="custom-select" data-checkout="docType"></select>
    </div>
    <div class="col-4">
        <input class="custom-select" type="text" data-checkout="docNumber" placeholder="Documento">
    </div>
</div>

<div class="form-group form-row">
    <div class="col">
        <small class="form-text text-mute"  role="alert" >Su pago se convertirá a {{ strtoupper(config('services.mercadopago.base_currency')) }}</small>
    </div>
</div>

<div class="form-group form-row">
    <div class="col">
        <small class="form-text text-danger" id="paymentErrors" role="alert"></small>
    </div>
</div>

<input type="hidden" id="cardNetwork" name="card_network">
<input type="hidden" id="cardToken" name="card_token">


@push('scripts')
<script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>

<script>
    const mercadoPago = window.Mercadopago;

    mercadoPago.setPublishableKey('{{ config('services.mercadopago.key') }}');

    mercadoPago.getIdentificationTypes();
</script>

<script>
    function setCardNetwork()
    {
        const cardNumber = document.getElementById("cardNumber");
        if (cardNumber.value.length >= 6) {
            mercadoPago.getPaymentMethod(
                { "bin": cardNumber.value.substring(0,6) },
                function(status, response) {
                    const cardNetwork = document.getElementById("cardNetwork");
                    cardNetwork.value = response[0].id;
                }
            );
        }
    }
</script>

<script>
    const mercadoPagoForm = document.getElementById("paymentForm");

    mercadoPagoForm.addEventListener('submit', async function(e) {
        if (mercadoPagoForm.elements.payment_platform.value === "{{ $paymentPlatform->id }}") {
            e.preventDefault();
            mercadoPago.createToken(mercadoPagoForm, function(status, response) {
                if (status != 200 && status != 201) {
                    const errors = document.getElementById("paymentErrors");
                    errors.textContent = response.cause[0].description;
                    
                } else {
                    const cardToken = document.getElementById("cardToken");

                    //setCardNetwork();

                    cardToken.value = response.id;
                    mercadoPagoForm.submit();
                }
            });
        }
    });
</script>
@endpush
