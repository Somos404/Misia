<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Misia - Tienda Online</title>
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
    <!-- Loader -->
    <div id="placeholder" class="position-fixed">
        <div class="d-flex justify-content-center align-items-center">
            <div class="spinner-border text-dark" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>
    <!-- endLoader -->


    <!-- Header -->
    <nav class="header nav-desktop">
        <div class="container">
            <div class="row">
                <div class="col-6 col-lg-5 my-auto">
                    <ul class="header-item-group d-lg-flex justify-lg-content-between">
                        <li
                            class="header-item-group__item {{ Request::segment(1) === 'vestidos-a-medida' ? 'active' : null }}">
                            <a href="{{ url('/vestidos-a-medida') }}" class="item-link">
                                VESTIDOS A MEDIDA
                            </a>
                        </li>
                        <li
                            class="header-item-group__item {{ Request::segment(1) === 'asesoramiento' ? 'active' : null }}">
                            <a href="{{ url('/asesoramiento') }}" class="item-link">
                                ASESORAMIENTO
                            </a>
                        </li>
                        <li class="header-item-group__item {{ Request::segment(1) === 'clientes' ? 'active' : null }}">
                            <a href="{{ url('/clientes') }}" class="item-link">
                                CLIENTES
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 my-auto">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('assets/images/logo-misia.svg') }}" alt="MISIA logo"
                            class="img-fluid header__logo ml-auto ml-lg-0" />
                    </a>
                </div>
                <div class="col-6 col-lg-5 my-auto">
                    <ul class="header-item-group d-lg-flex justify-lg-content-between">
                        <li
                            class="header-item-group__item {{ Request::segment(1) === 'somos-misia' ? 'active' : null }}">
                            <a href="{{ url('/somos-misia') }}" class="item-link">
                                SOMOS MISIA
                            </a>
                        </li>
                        <li class="header-item-group__item {{ Request::segment(1) === 'contacto' ? 'active' : null }}">
                            <a href="{{ url('/contacto') }}" class="item-link">
                                CONTACTO
                            </a>
                        </li>
                        <li class="header-item-group__item {{ Request::segment(1) === 'perfil' ? 'active' : null }}">
                            <a class="item-link">
                                MI CUENTA
                            </a>
                            <ul class='item-group sub-group'>
                                @if (Route::has('login'))
                                    @auth
                                        <!-- Estoy logueado -->
                                        <li class='item sub-item'>
                                            <a href="{{ url('/logout') }}" class='item-link'>
                                                SAlIR
                                            </a>
                                        </li>
                                    @else
                                        <!-- No estoy logueado -->
                                        <li class='item sub-item'>
                                            <a href="{{ url('/login') }}" class='item-link'>
                                                INGRESAR
                                            </a>
                                        </li>
                                        <li class='item sub-item'>
                                            <a href="{{ url('/register') }}" class='item-link'>
                                                CREAR CUENTA
                                            </a>
                                        </li>
                                    @endauth
                                @endif
                            </ul>
                        </li>
                        <li class="header-item-group__item rrss yt">
                            <a href="{{ url('/') }}">
                                <span>
                                  <img src="{{ asset('assets/images/icon-cart.svg') }}" alt="Icono carrito" class="img-fluid" />
                                </span>
                            </a>
                        </li>
                          <p style="margin-left: -3%; margin-top: 1%; color: red;" id='carritonumber'></p>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <nav class="header nav-mobile">
        <div class="container">
            <div class="row">
                <div class="col-6 col-lg-2 my-auto">
                    <a href="/">
                        <img src="{{ asset('assets/images/logo-misia.svg') }}" alt="MISIA logo"
                            class="img-fluid header__logo ml-auto ml-lg-0" />
                    </a>
                </div>
                <div class="col-6 col-lg-5 my-auto">
                    <div class="botton-menu align-self-center" id="botton-menu">
                        <div class="navbar navbar box-shadow">
                            <div class="nav-button">
                                <span id="nav-icon3">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <ul class="header-item-group d-lg-flex justify-lg-content-between" id="header-item-group">
                        <li class="header-item-group__item">
                            <a href="#" class="item-link">
                                VESTIDOS A MEDIDA
                            </a>
                        </li>
                        <li class="header-item-group__item">
                            <a href="#" class="item-link">
                                ASESORAMIENTO
                            </a>
                        </li>
                        <li class="header-item-group__item">
                            <a href="" class="item-link">
                                CLIENTES
                            </a>
                        </li>
                        <li class="header-item-group__item">
                            <a href="" class="item-link">
                                SOMOS MISIA
                            </a>
                        </li>
                        <li class="header-item-group__item">
                            <a href="#" class="item-link">
                                CONTACTO
                            </a>
                        </li>
                        <li class="header-item-group__item">
                            <a class="item-link">
                                MI CUENTA
                            </a>
                            <ul class='item-group sub-group'>
                                <li class='item sub-item'>
                                    <a href="/login" class='item-link'>
                                        INGRESAR
                                    </a>
                                </li>
                                <li class='item sub-item'>
                                    <a href="/register" class='item-link'>
                                        CREAR CUENTA
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="header-item-group__item rrss yt">
                            <a href="/">
                                <span>
                                    <img src="{{ asset('assets/images/icon-cart.svg') }}" alt="Icono carrito"
                                        class="img-fluid" />
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- endHeader -->

    @yield('content')


    <!-- Footer -->
    <footer class="bg-gray pt-5 pb-5">
        <div class="container">
            <div class="row pt-3">
                <div class="col-md-2 mb-5">
                    <img src="{{ asset('assets/images/logo-misia.svg') }}" alt="MISIA logo"
                        class="img-fluid footer--logo ml-auto ml-lg-0" />
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-2">
                    <ul class="g-medium footer-link">
                        <li>
                            <a href="{{ url('/somos-misia') }}">
                                <p>Sobre Misia</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/') }}">
                                <p>Envíos</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <ul class="g-medium footer-link">
                        <li>
                            <a href="{{ url('/') }}">
                                <p>FAQs</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/contacto') }}">
                                <p>Contacto</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <ul class="g-medium footer-link">
                        <li>
                            <a href="https://www.instagram.com/misia.misia/" target="_blank">
                                <p>Instagram</p>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/misiaindumentaria" target="_blank">
                                <p>Facebook</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="h-condensed copyright">
                        <li>
                            <p>Copyright 2020@Misia</p>
                        </li>
                        <li>
                            <p>Todos los derechos reservados</p>
                        </li>
                        <li>
                            <p>Cookies </p>
                        </li>
                        <li>
                            <p>Política de privacidad </p>
                        </li>
                        <li>
                            <p>Aviso legal</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- endFooter -->

    <!-- Libraries -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/magnific-popup.js') }}"></script>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script >
        $(function() {
            $.ajax({
               type:'get',
               url:'/getCarrito',
               success:function(data) {
                if (data.carrito > 0) {
                    document.getElementById("carritonumber").innerHTML = data.carrito;
                }   
               }
            });
        })
    </script>

</body>

</html>
