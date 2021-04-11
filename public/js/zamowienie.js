$(document).ready(function(){
	if(JSON.parse(localStorage.getItem('produkty'))===null || JSON.parse(localStorage.getItem('produkty')).length==0)
			$('main').append(' Brak produktów w koszyku').css("text-align","center").css("font-size","20px");
	else
	{
		var kosz = JSON.parse(localStorage.getItem('produkty'));
		for(var i=0;i<kosz.length;i++)
		{
			var image = document.createElement('img');
			image.src = kosz[i].img;
			
			
			$('#towary').append('<div class="zam" id="dane'+i+'"> <button class="usun" onclick="usun('+i+')">X</button>');
			$('#dane'+i).append(kosz[i].nazwa+"- cena:"+kosz[i].cena+'zł<div id="zdj'+i+'"</div></div>');
			$('#zdj'+i).append(image);
			
		}
		$('#form').append('<label><input type="text" class="form-control" name="naz" placeholder="Nazwisko" pattern="[A-ZŁ][a-złćźóąń]{2,}" required size="5"/></label>'+
		'<label><input type="text" class="form-control" name="imie" placeholder="Imie"  pattern="[A-ZŁ][a-złćźóąń]{2,}" required size="5"/></label>'+
		'<label><input type="text" class="form-control" name="tel" placeholder="Telefon" pattern="[1-9][0-9]{7}[1-9]" required size="5"/></label>'+
		'<label><input type="text" class="form-control" name="adres" placeholder="Miejscowość nr.domu" pattern="[A-ZŁŃĆ][a-ząłćóń]{3,20} [0-9]{0,3}" required size="5"/></label>'+
		'<label><input type="text" class="form-control" name="poczta" placeholder="Kod pocztowy" pattern="[0-9]{2}\-[0-9]{3} [A-ZŁŃĆ][a-złćźóąń]{3,25}" required size="5"/></label>'+
		'<textarea name="prod" id="p"></textarea>'+
		'<input type="submit" value="Zamów"></input>');
		for(var i=0;i<kosz.length;i++)
			document.getElementById('p').value+="nazwa:"+kosz[i].nazwa+",cena:"+kosz[i].cena+",ilosc:"+kosz[i].ilosc+",rozmiar:"+kosz[i].rozmiar;
	}

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	$.ajax({url:"/daneCreateForm",success: function(result){
		if(result != '')
		{
			var tab=result.split(',');
			$('input[name="naz"]').val(tab[0]);
			$('input[name="imie"]').val(tab[1]);
			$('input[name="tel"]').val(tab[2]);
			$('input[name="adres"]').val(tab[3]);
			$('input[name="poczta"]').val(tab[4]);
		}
	}});
	
	
});
