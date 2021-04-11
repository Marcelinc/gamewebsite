<!DOCTYPE html>
<html lang="pl">

<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title> Zamówienie </title>
	<meta name="description" content="Strona o czołgach" />
	<meta name="keywords" content="world of tanks sklep, wot sklep, czołgi," />
	<link rel="stylesheet" href="CSS/zamowienie.css" type="text/css" />
	<link rel="stylesheet" href="CSS/fontello.css" type="text/css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="JS/zamowienie.js"></script>	
	<script src="JS/sklep.js"></script>	

	<style>
	@media screen and (min-width: 1350px)
	{
	.top-right {
                position: fixed;
                right: 5%;
                top: 30px;
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
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


		<header>
			<h1>Zamówienie</h1>
		</header>
	
		<nav>
			<a href="/sklep" class="powrot"></a>
		</nav>
	
		<main>
			<section id="towary">
			</section>
			<section id="f">
				<h2>Dane dostawy</h2>
				<form action="{{ route('orderStore') }}" method="post">
					<div id="form">
						<input type="hidden" name="_token" value="{{ csrf_token() }}" ></input>
					</div>
				</form>
			</section>
		</main>
			
		<footer>
			<div id="wt">
				<a href="https://worldoftanks.eu/pl/" target="_blank"><img src="img/icon2.png" alt="icon2.png" /></a>
			</div>
			<div id="yt">
				<a href="https://www.youtube.com/channel/UC8IcQaIJPhZh7dxyTw0J2sg" target="_blank"><i class="icon-youtube"></i></a>
			</div>
			<div id="fb">
				<a href="https://pl-pl.facebook.com/WorldOfTanks/" target="_blank"><i class="icon-facebook"></i></a>
			</div>
			<div style="clear:both;"></div>
			<span>Copyright &copy; 2020</span>
		</footer>

</body>

</html>