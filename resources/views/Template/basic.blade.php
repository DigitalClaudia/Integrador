<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>nobasic</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c:300,400,500,700" rel="stylesheet"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css"> 
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>

<body>
  <div class="container">
    <header class="main-header">
        <nav class="nav-logo-icon">
            <div class="cajalogo">
                    <img src="{{ asset('/logo.png') }}" alt="logotipo" class="logo">
            </div>

            <div class="nav-iconos">
                <ul>
                    @if(Auth::check())
                    <a href="/perfil/{{Auth::user()->id}}/edit">{{Auth::user()->name}}</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>
          
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                     </div>
                    @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                    @endif
                    <li><a href="/carro"><i class="fas fa-cart-arrow-down"></a></i></li>
                </ul>
            </div>

            <ul class="nav-menu">
                <li class="active-menu"><a href="/">home</a></li>
                <li><a href="/shop">shop</a></li>
                <li><a href="/nav/contacto">contacto</a></li>
                <li><a href="/nav/faq">faq</a></li>
            </ul>
            <div class="buscador-completo">
            {{-- <form class="buscador-completo" action="" method="post"> --}}
                
                <input  class="dato" type="text" placeholder=" producto" name="producto">
                {{-- <button type="button"> --}}
                    <a href="" class="buscar"><i class="fas fa-search"></i></a>
                {{-- </button> --}}
            {{-- </form> --}}
        </div>
        </nav>
    </header>
</div>
     
<!-- <main class="container"> -->
    @yield('content')
<!-- </main> -->
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>    
<script src="/js/main.js"></script>
<script>
    var elem = document.querySelector('.main-carousel');
    var flkty = new Flickity( elem, {
    // options
    cellAlign: 'left',
    wrapAround: true
    });
</script>

</html>