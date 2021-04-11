<!DOCTYPE html>
<html lang="pl">

<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title> World of Tanks </title>
	<meta name="description" content="Strona o czołgach" />
	<meta name="keywords" content="world of tanks, wot, czołgi" />
	<link rel="stylesheet" href="/css/sklep.css" type="text/css" />
	<link rel="stylesheet" href="/css/fontello.css" type="text/css" />
	<script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="/js/slide.js"></script>	

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
                        <a href="{{ url('/home') }}" >Home</a>
						<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Wyloguj') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                    @endauth
                </div>
            @endif
		

		<header>
			<h1>World of tanks - sklep</h1>
		</header>
	
		<nav>
			<a href="/" class="powrot"></a>
			<a href="/zamowienie" id="zamowienie"><i class="icon-basket"></i></a>
		</nav>
		
		<figure>
			<div id="slideshow">
				<img src="/img/sklep0.JPG" alt="image1" class="active" />
				<img src="/img/sklep13.JPG" alt="image2" />
				<img src="/img/sklep1.JPG" alt="image3" />
			</div> 
		</figure>
		
		<main>
			<article>
				<h3>Ubrania i akcesoria</h3>
				<section>
					<div class="sklep">
						<a href="/u1"><img src="/img/sklep15.jpg" alt="zdj1"/></a>
						<p>59,00zł</p>
					</div>
					<div class="sklep">
						<a href="/u2"><img src="/img/sklep14.jpg" alt="zdj2"/></a>
						<p>239,00zł</p>
					</div>
					<div class="sklep">
						<a href="/u3"><img src="/img/sklep16.jpg" alt="zdj2"/></a>
						<p>80,00zł</p>
					</div>
				</section>
			</article>
			<article>
				<h3>Modele i przedmioty</h3>
				<section>
					<div class="sklep">
						<a href="/m1"><img src="/img/sklep21.jpg" alt="zdj2"/></a>
						<p>140,00zł</p>
					</div>
					<div class="sklep">
						<a href="/m2"><img src="/img/sklep22.jpg" alt="zdj2"/></a>
						<p>13,90zł</p>
					</div>
					<div class="sklep">
						<a href="/m3"><img src="/img/sklep23.jpg" alt="zdj2"/></a>
						<p>149,00zł</p>
					</div>
				</section>
			</article>
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
			<span>Copyright &copy; 2020</span>
		</footer>

</body>

</html>