<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>ALDEA</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>    
    
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <a href="{{ url('/') }}"><img src="img/core-img/AldeaLogo.png" alt=""></a>
                            </div>
                            <div class="login-content">
                                @if (Route::has('login'))
                                    <div class="top-right links">
                                        @auth
                                            <a href="{{ url('/home') }}">Perfil</a>
                                        @else
                                            <a href="{{ route('login') }}">Iniciar seción  </a>

                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}"> Registrarse</a>
                                            @endif
                                        @endauth
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="academyNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="#">Proyectos</a>
                                        <ul class="dropdown">
                                            <li><a href="{{ url('/crear') }}">Crear</a></li>
                                            <li><a href="{{ url('/catalogo') }}">Catalogo</a></li>
                                            <li><a href="{{ url('/pagos') }}">Premium</a></li>
                                        </ul>
                                    </li>
                                   
                                    <li><a href="{{ url('/about') }}">Nosotros</a></li>
                                    <li><a href="{{ url('/faq') }}">FAQ</a></li>
                                    <li><a href="{{ url('/contacto') }}">Contacto</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Calling Info -->
                        <div class="calling-info">
                            <div class="call-center">
                                <a href="tel:+654563325568889"><i class="icon-telephone-2"></i> <span>(+52) 444 114 1111</span></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>    
    @yield('content')
