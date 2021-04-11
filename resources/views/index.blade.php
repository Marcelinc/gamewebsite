<!DOCTYPE html>
<html lang="pl">

<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title> World of Tanks </title>
	<meta name="description" content="Strona o czołgach" />
	<meta name="keywords" content="world of tanks, wot, czołgi" />
	<link rel="stylesheet" href="/css/index.css" type="text/css" />
	<link rel="stylesheet" href="/css/fontello.css" type="text/css" />
	<link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	<style>
	body
	{
		background-color:#181f1a;
		color:white;
		width:65%;
		margin-left:auto;
		margin-right:auto;
		font-size:12px;
	}
	a
	{
		text-decoration:none;
		color:white;
	}
	h3
	{
		font-size:14px;
		margin-left:0!important;
	}
	h1
	{
		font-size:12px;
	}
	.rozgrywka
	{
		display:flex;
		flex-wrap:wrap;
		justify-content:center;
	}
	section:nth-of-type(odd)
	{
		background-color:#453e3e;
	}
	.tresc
	{color:#42801f;font-size:12px;}
	section
	{text-align:center;margin-bottom:7px;}
	@media screen and (min-width: 851px)
	{
		body
		{
			font-size:16px;
		}
		.tresc
		{font-size:18px;}
	}
	@media screen and (min-width: 255px) and (max-width: 500px)
	{
		h1
		{
			font-size:17px;
		}
	}
	@media screen and (min-width: 501px) 
	{
		h1
		{
			font-size:24px;
		}
	}
	@media screen and (min-width: 1350px)
	{
	.top-right {
                position: absolute;
                right: 5%;
                top: 10px;
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
			<h1>World of Tanks - świat czołgów</h1>
			
		</header>

       
			
		<nav>
				<ul id="menu">
					<li> <a href="/">Strona główna</a>	</li>
					<li> <a href="/galeria" >Galeria</a>	</li>
					<li> <a href="/sklep" >Sklep</a>	</li>
				</ul>
		</nav>
		
		<main>
			<section>
					<h3>O grze </h3>
					<p>
					World of Tanks jest to gra komputerowa dla miłośników czołgów typu MMO, wyprodukowana i wydana w 2010 roku przez Wargaming.net. Rozgrywka skupia się na bitwach pancernych pomiędzy graczami w interakcji player versus player z wykorzystaniem różnego typu wozów bojowych. Gracz ma do dyspozycji ponad 450 pojazdów z okresu od I wojny światowej aż po wczesną zimną wojnę.
					</p>
					
			</section>
			<section>
				<h3>Rozgrywka</h3>
				World of Tanks oferuje następujące tryby rozgrywki:
				
				<div class="rozgrywka">
					<a class="btn" data-toggle="collapse" href="#ukryta-tresc" aria-expanded="false" aria-controls="ukryta-tresc">
						<img src="/img/tryb.png" alt="bitwy losowe"/>
						<div class="collapse" id="ukryta-tresc">
						<div class="tresc">
							Bitwy z udziałem dwóch 15-osobowych, losowo dobieranych zespołów składających się z pojazdów na zbliżonym poziomie
						</div>
						</div>
					</a>
					<a class="btn" data-toggle="collapse" href="#ukryta-tresc1" aria-expanded="false" aria-controls="ukryta-tresc1">
						<img src="/img/tryb2.png" alt="turnieje"/>
						<div class="collapse" id="ukryta-tresc1">
						<div class="tresc">
							Pojedynki solo lub drużynowe o nagrody specjalne
						</div>
						</div>
					</a>
					<a class="btn" data-toggle="collapse" href="#ukryta-tresc2" aria-expanded="false" aria-controls="ukryta-tresc2">
						<img src="/img/tryb3.png" alt="twierdze"/>
						<div class="collapse" id="ukryta-tresc2">
						<div class="tresc">
							Walka między klanami o surowce i terytorium na mapie świata
						</div>
						</div>
					</a>
				</div>
			</section>
			<section>
				<h3>Wymagania</h3>
				<div class="table-responsive">
				<table class="table table-dark">
					<thead>
						<tr>
							<th></th>
							<th>Minimalne</th>
							<th>Zalecane</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>System operacyjny</th>
							<th>Windows / 7 / 8 / 10</th>
							<th>Windows 7 / 8 / 10 – 64-bitowy</th>
						</tr>
						<tr>
							<th>Procesor (CPU)</th>
							<th>Procesor z przynajmniej dwoma fizycznymi rdzeniami wspierający SSE2)</th>
							<th>Intel Core i5 (Desktop)</th>
						</tr>
						<tr>
							<th>Pamięć (RAM)</th>
							<th>2 GB</th>
							<th>4 GB (lub więcej)</th>
						</tr>
						<tr>
							<th>Karta graficzna</th>
							<th>NVIDIA GeForce 8600, ATI Radeon HD 4550</th>
							<th>GeForce GTX660 (2GB) / Radeon HD 7850 (2GB)</th>
						</tr>
						<tr>
							<th>Dźwięk</th>
							<th>Kompatybilny z DirectX 9.0c</th>
							<th>Kompatybilny z DirectX 9.0c</th>
						</tr>
						<tr>
							<th>Miejsce na twardym dysku</th>
							<th>36 GB</th>
							<th>36 GB</th>
						</tr>
						<tr>
							<th>Prędkość łącza internetowego</th>
							<th>256 Kbps</th>
							<th>1024 Kbps lub wyższa (do czatu głosowego)</th>
						</tr>
					</tbody>
				</table>
				</div>
			</section>
			
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

		<script src="/vendor/jquery/jquery.min.js"></script>
		<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>