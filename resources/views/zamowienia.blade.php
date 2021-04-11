@extends('layouts.app')

@section('left')

<a href="/home" class="powrot"></a>

@endsection


@section('content')



<div class="container">
    <section>
        <div id="info" style='color:#ff2f0a;'>
            @if($orders->isEmpty())
                <h1>Nie złożyłeś zamówienia</h1>
                Przejdź do<a href="{{ route('sklep') }}"> sklepu</a> i wybierz coś dla siebie
            @else
                    <h1>Twoje zamówienia</h1>
                    @foreach($orders as $o)
                        <div class="order">
                            <div class="user">
                                <p>Odbiorca: {{ $o->nazwisko }} {{ $o->imie }}</p>
                                <p>Adres: {{ $o->miejscowosc }}</p>
                            </div>
                            <div>
                                <h4>Opis:</h4>
                                {{ $o->produkty }}
                            </div>
                            <a href="{{ route('cancel',$o) }}">Anuluj zamówienie</a>
                        </div>
                    @endforeach
            @endif
        </div>
    </section>
</div>
@endsection