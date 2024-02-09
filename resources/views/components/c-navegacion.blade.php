<header class="header-section">
    <div class="header-bottom">
        <div class="container">

            <div class="header-wrapper">
                <div class="logo">
                    <a href="/">
                        <img src="http://localhost/EntregableCrystalPass\public\assets/images/logo/logo_baner.png" width="185" alt="logo">
                    </a>
                </div>
                    
                <div class="menu-area">
                    <ul class="menu">
                        <li> <a href="/">Inicio</a> </li>
                        <li> <a href="/eventos" >Eventos</a> </li>
                        <li> <a href="/nosotros" >Nosotros</a> </li>
                        <li> <a href="/contacto">Contacto</a> </li>
                        <li>  
                            @if (Route::has('login'))
                            <div>
                                @auth
                                    <div>
                                        <li>
                                        <a href="{{ url('/dashboard') }}">
                                            <img src="http://localhost/EntregableCrystalPass\public\assets\images\user.png" width="30" style="display: block; margin: auto;" />
                                        </a>
                                    </li>
                                    </div>
                                @else
                                    <div>
                                        <a href="{{ route('login') }}" class="menu-aboton">Iniciar Sesion</a>
                                    </div>
                        <li>
                                @if (Route::has('register'))
                                    <div>
                                        <a href="{{ route('register') }}" class="menu-aboton">Registrate</a>
                                    </div>
                                    @endif
                                @endauth
                            </div>
                            @endif
                        </li>
                    </ul>
                </div>    
            </div>
        </div>
    </div>
</header>             