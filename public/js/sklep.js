function dodajU(Nazwa,cena)
{
	var towar = {};
	towar.nazwa=Nazwa;
	console.log(towar.nazwa);
	var size = document.getElementsByName('rozmiar');
	for(i=0;i<size.length;i++)
	{
		if(size[i].checked)
		{
			towar.rozmiar = size[i].value;
			break;
		}
	}
	towar.ilosc=document.getElementById('koszt').value;
	towar.cena=cena;
	towar.img = document.getElementById('zdj').src;
	var produkt=JSON.parse(localStorage.getItem('produkty'));
	if(produkt===null)
		produkt=[];
	produkt.push(towar);
	localStorage.setItem('produkty',JSON.stringify(produkt));
}

function przejdzU(Nazwa,cena)
{
	dodajU(Nazwa,cena);
	window.location.assign("/zamowienie");
}

function dodajM(Nazwa,cena)
{
	var towar = {};
	towar.nazwa=Nazwa;
	towar.ilosc=document.getElementById('koszt').value;
	towar.cena=cena;
	towar.img = document.getElementById('zdj').src;
	var produkt=JSON.parse(localStorage.getItem('produkty'));
	if(produkt===null)
		produkt=[];
	produkt.push(towar);
	localStorage.setItem('produkty',JSON.stringify(produkt));
}
function przejdzM(Nazwa,cena)
{
	dodajM(Nazwa,cena);
	window.location.assign("/zamowienie");
}

function usun(i)
{
	var dane = JSON.parse(localStorage.getItem('produkty'));
	var pole = document.getElementById('towary');
	if(confirm("Usunąć produkt?"))
	{
		dane.splice(i,1);
		pole.innerHTML="";
	
	localStorage.setItem('produkty',JSON.stringify(dane));
		
	var kosz = JSON.parse(localStorage.getItem('produkty'));
	if(kosz===null | kosz.length==0)
		document.getElementById('f').innerHTML="Brak produktów w koszyku";
	else
	{
		document.getElementById('p').value="";
		for(var i=0;i<kosz.length;i++)
		{
			document.getElementById('towary').innerHTML+='<div class="zam" id="dane'+i+'"> <button class="usun" onclick="usun('+i+')">X</button>';
			document.getElementById('dane'+i).innerHTML+=kosz[i].nazwa+"- cena:"+kosz[i].cena+'zł<div id="zdj'+i+'"</div></div>';
			document.getElementById('zdj'+i).innerHTML+='<img src="'+kosz[i].img+'"/>';
			document.getElementById('p').value+="nazwa:"+kosz[i].nazwa+",cena:"+kosz[i].cena+",ilosc:"+kosz[i].ilosc+",rozmiar:"+kosz[i].rozmiar;
		}
	}
	}
}