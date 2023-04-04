<!DOCTYPE html>
<html lang="en">
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
        <header>
            <a id="logo-link" href="{{ url('/') }}"><img class="logo-header" src="img/logo-bright.png"><h2 class="logo">Tablica<span class="logo-color">Ogłoszeń</span></h2></a>

            <ul class="navbar">
                <li><a href="{{ url('/ogloszenia') }}">Ogłoszenia</a></li>
                <li><a href="{{ url('/onas') }}">O nas</a></li>
                <li><a href="{{ url('/aktualnosci') }}">Aktualności</a></li>
                <li><button type="button"><a href="{{ url('/login') }}">Zaloguj się</a></button></li>
                <li><button type="button"><a href="{{ url('/register') }}">Zarejestruj sie</a></button></li>
            </ul>

            <div class="main">
                <a href="{{ url('/login') }}"><button type="button">Zaloguj się</button></a>
                <a href="{{ url('/register') }}"><button type="button">Zarejestruj się</button></a>
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