@include('styles.sw')
<header>
            <input type="checkbox"name="" id="toggler">
            <label for="toggler" class="fas fa-bars"></label>
            <img src="{{ asset('/fondo/logow.png') }}" class="logo" alt="" width="40" height="60" align="left">
            <a href="{{route('welcome')}}" class="logo"><span> Raven</span> Technologies</a> 
            <nav class="navbar">
                <a class="nav-link" href="{{route('welcome')}}">Inicio</a>
                {{-- <a class="nav-link" href="{{route('panel')}}">Panel</a> --}}
                <a class="nav-link" href="{{route('about')}}">Sobre Nosotros</a>
                <a class="nav-link" href="{{route('product')}}">Producto</a>
                <a class="nav-link" href="{{route('support')}}">Soporte</a>
            </nav>
            {{-- <a class="nav-link" href="{{route('perfil')}}"><img src="{{ asset('/fondo/user.gif') }}" width="50px" height="50px" alt="GIF"></a> --}}
                    @if (Route::has('login'))
                <div class="navbar">
                    @auth
                        <a href="{{ url('/dashboard') }}">Perfil</a>
                    @else
                        <a href="{{ route('login') }}" class="nav-link">Iniciar Sesión
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-link">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif

</header>
@endsection
