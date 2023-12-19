@extends('layouts.app')

@section('title', 'Comic')

@section('content')

    @include('partials.hero')
    <main id="showComic">
        <div id="blueLine">
            <div class="container imgPosterContainer">
                <img class="imagePoster" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
            </div>
        </div>
        <section id="comicInfo" class="container">
            <div class="row">
                <div class="col-9 p-0">
                    <h2>{{ $comic['title'] }}</h2>
                    <p>{{ $comic['price'] }}</p>
                    <p>{{ $comic['description'] }}</p>
                </div>
                <div class="col-3">
                    QUESTO E' LO SPAZIO PER L'AD
                </div>
            </div>
        </section>
        <section id="specs">
            <div class="container">
                Specs
            </div>
        </section>
    </main>

@endsection
