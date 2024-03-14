@extends('layouts.app')

@section('title', 'DC Comics | Home')

@section('main')

<main>
    <div class="jumbo">
        <figure>
            <img src="{{ Vite::asset('./resources/images/jumbotron.jpg') }}" alt="Jumbotron">
        </figure>
        <div class="series">
            <p class="text-light text-uppercase fw-bold">Current series</p>
        </div>
    </div>
    <div class="card-container pt-5">
        @foreach ($comics as $comic)
        <div class="card-comic col-3">
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
            <div class="card-info">
                <h2 class="text-lignt fw-bold">{{ $comic['title'] }}</h2>
                <p class="text-lignt fw-bold">Price: {{ $comic['price'] }}</p>
                <p class="text-lignt fw-bold">Series: {{ $comic['series'] }}</p>
                <p class="text-lignt fw-bold">Type: {{ $comic['type'] }}</p>
            </div>
        </div>
    @endforeach

    <div id="load-more">Load more</div>
</main>

@endsection
