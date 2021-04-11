<!DOCTYPE html>
<html lang="pl">

<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Model T34/85 World of Tanks </title>
	<meta name="description" content="Strona o czołgach" />
	<meta name="keywords" content="world of tanks sklep, wot sklep, czołgi," />
	<link rel="stylesheet" href="CSS/fontello.css" type="text/css" />
	<link rel="stylesheet" href="CSS/produkt.css" type="text/css" />
	<link href="CSS/lightbox.css" rel="stylesheet" />
	<script src="JS/sklep.js"></script>	
	<script src="JS/lightbox.js"></script>
	<script src="JS/slide.js"></script>

	<style>
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
	</style>
</head>

<body>
@if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @endauth
                </div>
            @endif	

		<header>
			<h1>World of tanks - sklep</h1>
		</header>
	
		<nav>
			<a href="/sklep" class="powrot"></a>
			<a href="/zamowienie" id="zamowienie"><i class="icon-basket"></i></a>
		</nav>
		
		<figure>
			<div id="slideshow">
				<img src="img/sklep0.JPG" alt="image1" class="active" />
				<img src="img/sklep13.JPG" alt="image2" />
				<img src="img/sklep1.JPG" alt="image3" />
			</div> 
		</figure>
		<main>
			<h2>Model T34/85 </h2>
			<article>
				<section>
					<div id="images">
						<a href="img/sklep23.jpg" target="_blank" data-lightbox="Obraz1" >
							<img class="gallery" id="zdj" src="img/sklep23.jpg" alt="zdjecie1" />
						</a>
					</div>
				</section>
				<section>
					<div id="details">
						<h4>Opis</h4>
						Oficjalny zestaw modelowy czołgu T34/85 (1:35). Zestaw zawiera:
						<ul>
						<li>1 zestaw modelowy</li>
						<li>1 przewodnik po czołgach</li>
						<li>Naklejki World of Tanks</li>
						<li>3 kody zaproszeniowe na PC</li>
						<li>1 kod bonusowy (Churchill III - czołg ciężki + miejsce w garażu)</li>
						<li>1 Plakat (43 x 59,4 cm)</li>
						</ul>
						<h4>Ilość</h4>
						<div>
						<input name="ilosc" size="5" value="1" id="koszt"/> 
						</div>
						<div id="akcja">
							<button onclick="dodajM('model T34/85',13.9)">Dodaj do koszyka</button>
							<button onclick="przejdzM('model T34/85',13.9)">Kup produkt</button>
						</div>
					</div>
				</section>
			</article>
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