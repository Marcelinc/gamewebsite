@extends('layouts.app')

@section('content')

<div class="container">
    <section>
        <div id="info" style='color:#d01603;'>
        <form action="{{ route('daneUpdate') }}" method="post" enctype="multipart/form-data">{{ csrf_field() }}<div id="form">
		<label><input type="text" class="form-control" name="naz" placeholder="Nazwisko" value="{{ $dane->nazwisko }}" pattern="[A-ZŁ][a-złćźóąń]{2,}" required size="5"/></label>
	    <label><input type="text" class="form-control" name="imie" placeholder="Imie" value="{{ $dane->imie }}"  pattern="[A-ZŁ][a-złćźóąń]{2,}" required size="5"/></label>
		<label><input type="text" class="form-control" name="tel" placeholder="Telefon" value="{{ $dane->telefon }}" pattern="[1-9][0-9]{7}[1-9]" required size="5"/></label>
		<label><input type="text" class="form-control" name="adres" placeholder="Miejscowość nr.domu" value="{{ $dane->miejscowosc }}" pattern="[A-ZŁŃĆ][a-ząłćóń]{3,20} [0-9]{0,3}" required size="5"/></label>
		<label><input type="text" class="form-control" name="poczta" placeholder="Kod pocztowy" value="{{ $dane->kodPocztowy }}" pattern="[0-9]{2}\-[0-9]{3} [A-ZŁŃĆ][a-złćźóąń]{3,25}" required size="5"/></label></div>
        <input name="_method" type="hidden" value="PUT"> 
        <input type="submit" value="Wprowadź zmiany"></input>
    </form>
        </div>
    </section>
</div>
@endsection