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
