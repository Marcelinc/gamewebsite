<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    
    <title> World of Tanks </title>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/home.js') }}"></script>
    
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/reglog.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/fontello.css" type="text/css" />
    <link rel="stylesheet" href="/css/links.css" type="text/css" />
    
</head>
<body>
@if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">HOME</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Wyloguj') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        <header>
			<h1>World of Tanks - świat czołgów</h1>
			
		</header>

       @yield('left')
			
		<nav>
				<ul id="menu">
					<li> <a href="/">Strona główna</a>	</li>
					<li> <a href="/galeria" >Galeria</a>	</li>
					<li> <a href="/sklep" >Sklep</a>	</li>
				</ul>
		</nav>


    <div id="app">
        

        <main class="py-4">
            @yield('content')
        </main>

        <footer>
			<div id="wt">
				<a href="https://worldoftanks.eu/pl/" target="_blank"><img src="/img/icon2.png" alt="icon2.png" /></a>
			</div>
			<div id="yt">
				<a href="https://www.youtube.com/channel/UC8IcQaIJPhZh7dxyTw0J2sg" target="_blank"><i class="icon-youtube"></i></a>
			</div>
			<div id="fb">
				<a href="https://pl-pl.facebook.com/WorldOfTanks/" target="_blank"><i class="icon-facebook"></i></a>
			</div>
			<div style="clear:both;"></div>
			<span>Copyright &copy; 2021</span>
		</footer>
    </div>
</body>
</html>
