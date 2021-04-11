@extends('layouts.app')

@section('content')

<div class="container">
    <aside>
        <div id="profileimg"><img src="/img/av1.png" alt="avatar"></div>
        <div id="profile">
            <p class='options'><span>Nick: {{ Auth::user()->name }}</span></p>
            <p class='options'><span >Klan: brak</span></p>
            <p class='options'><span id="stats">Statystyki</span></p>
            <p class='options'><span id="dane">Dane</span></p>
            <p class='options'><a href="/orderCreate"><span id="zamowienia">Zamówienia</span></a></p>
        </div>
    </aside>
    <section id="tlo">
        <div >
            
        </div>
        <div id="info" style='color:#ff2f0a;'>
        <h1>Twoje statystyki</h1><p>Liczba bitew: 7435</p><p>Średni poziom: 8,4</p><p>Średnie uszkodzenia: 2467</p><p>Średnie zniszczenia: 2</p>
        </div>
    </section>
</div>
@endsection
