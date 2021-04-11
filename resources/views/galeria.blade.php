<!DOCTYPE html>
<html lang="pl">

<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title> World of Tanks </title>
	<meta name="description" content="Strona o czołgach" />
	<meta name="keywords" content="world of tanks, wot, czołgi" />
	<link rel="stylesheet" href="/css/galeria0.css" type="text/css" />
	<link rel="stylesheet" href="/css/fontello.css" type="text/css" />
	<link href="/css/lightbox.css" rel="stylesheet" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>
	<script src="/js/lightbox.js"></script>
	<script src="/js/galeria.js"></script>
	

	<style>
	@media screen and (min-width: 1350px)
	{.top-right {
                position: absolute;
                right: 4%;
                top: 15px;
				align-items: center;
                display: flex;
                justify-content: center;
            }
	.links > a {
                color: white;
                padding: 0 10px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }	
	}
	</style>
</head>

<body>
@if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
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
			<h1>World of Tanks - galeria</h1>
		</header>
	
		<nav>
			<ul id="menu">
				<li> <a href="/" >Strona główna</a></li>
				<li> <a href="/galeria" >Galeria</a></li>
				<li> <a href="/sklep" >Sklep</a></li>
			</ul>
		</nav>
	
		<main>
			
			<div id="galeria1">
				<img class="gall" src="/img/gameplay0.jpg" alt="gameplay"/>
				<p>Pojazdy</p>
			</div>
			<div id="galeria2">
				<img class="gall" src="/img/mapa0.jpg" alt="mapy"/>
				<p>Mapy</p>
			</div>
			
		</main>
	
		<aside>
		
		</aside>
		
		<footer>
			<div id="wt">
				<a href="https://worldoftanks.eu/pl/" target="_blank"><img src="/img/icon2.png" alt="icon" /></a>
			</div>
			<div id="yt">
				<a href="https://www.youtube.com/channel/UC8IcQaIJPhZh7dxyTw0J2sg" target="_blank"><i class="icon-youtube"></i></a>
			</div>
			<div id="fb">
				<a href="https://pl-pl.facebook.com/WorldOfTanks/" target="_blank"><i class="icon-facebook"></i></a>
			</div>
			<div style="clear:both;"></div>
			<span id="stopka">Copyright &copy; 2020</span>
		</footer>

</body>

</html>