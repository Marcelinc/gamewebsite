@extends('layouts.app')

@section('content')
<div class="container">
   <form action="{{ route('daneStore') }}" method="post" enctype="multipart/form-data">{{ csrf_field() }}<div id="form">
		<label><input type="text" class="form-control" name="naz" placeholder="Nazwisko" pattern="[A-ZŁ][a-złćźóąń]{2,}" required size="5"/></label>
		<label><input type="text" class="form-control" name="imie" placeholder="Imie"  pattern="[A-ZŁ][a-złćźóąń]{2,}" required size="5"/></label>
		<label><input type="text" class="form-control" name="tel" placeholder="Telefon" pattern="[1-9][0-9]{7}[1-9]" required size="5"/></label>
		<label><input type="text" class="form-control" name="adres" placeholder="Miejscowość nr.domu" pattern="[A-ZŁŃĆ][a-ząłćóń]{3,20} [0-9]{0,3}" required size="5"/></label>
		<label><input type="text" class="form-control" name="poczta" placeholder="Kod pocztowy" pattern="[0-9]{2}\-[0-9]{3} [A-ZŁŃĆ][a-złćźóąń]{3,25}" required size="5"/></label></div>
		<input type="submit" value="Dodaj"></input>
    </form>'
</div>
@endsection