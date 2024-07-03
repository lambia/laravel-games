@extends('layouts.app')

@section('content')
    <h1>Giochi</h1>
    <div class="card-container">
        @foreach ($gamesList as $gioco)
        <div class="card">
            <img src="{{ $gioco->cover_image }}" />
            <h2>{{ $gioco->name }}</h2>
            <p>Prezzo: {{ $gioco->price }} €</p>
            <p>Rilasciato nel: {{ $gioco->release_year }}</p>
            <p>Voto degli utenti: {{ $gioco->vote }} / 10</p>
        </div>
        @endforeach
    </div>
@endsection
