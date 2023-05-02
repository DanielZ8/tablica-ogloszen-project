<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TablicaOgłoszeń</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>
    <div class="main-layout">
        <div class="empty"></div>
        <!-- HEADER-NAVBAR -->
        <header>
            <a class="nav-left" href="{{ url('/') }}">
                <img class="nav-left-img" src="{{ asset ('img/logo-bright.png') }}">
                <h2 class="nav-left-text">Tablica<span class="nav-left-text-color">Ogłoszeń</span></h2>
            </a>
            <ul class="nav-center">
                <li><a class="nav-link" href="{{ url('/ogloszenia') }}">Ogłoszenia</a></li>
                <li><a class="nav-link" href="{{ url('/onas') }}">O nas</a></li>
                <li><a class="nav-link" href="{{ url('/aktualnosci') }}">Aktualności</a></li>
                
                @guest
                    <li><a href="{{ url('/login') }}"><button class="nav-button-dark" type="button">Zaloguj się</button></a></li>
                    <li><a href="{{ route('register') }}"><button class="nav-button-dark" type="button">Zarejestruj sie</button></a></li>
                @endguest
                @auth
                @can('pracownik')
                    <li><a href="{{ url('/employee') }}"><button class="nav-button-dark" type="button">Panel użytkownika</button></a></li>
                @endcan
                @can('firma')
                    <li><a href="{{ url('/company') }}"><button class="nav-button-dark" type="button">Panel użytkownika</button></a></li>
                @endcan
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <li><a><button class="nav-button-dark" type="submit">Wyloguj się</button></a></li>
                    </form>
                @endauth
            </ul>
            <div class="nav-right">
                @guest
                    <li><a href="{{ url('/login') }}"><button class="nav-button-bright" type="button">Zaloguj się</button></a></li>
                    <li><a href="{{ route('register') }}"><button class="nav-button-bright" type="button">Zarejestruj sie</button></a></li>
                @endguest
                @auth
                @can('pracownik')
                    <li><a href="{{ url('/employee') }}"><button class="nav-button-bright" type="button">Panel użytkownika</button></a></li>
                @endcan
                @can('firma')
                    <li><a href="{{ url('/company') }}"><button class="nav-button-bright" type="button">Panel użytkownika</button></a></li>
                @endcan
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <li><a><button class="nav-button-bright" type="submit">Wyloguj się</button></a></li>
                    </form>
                @endauth
                <div class="hamburger">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </header>
        
        @yield('content')

        <footer>
            <p>TablicaOgłoszeń - PWSTE 2023</p>
        </footer>
    </div>
  
    <script type="text/javascript" src="{{ asset('js/maincustom.js') }}"></script>
</body>
</html>