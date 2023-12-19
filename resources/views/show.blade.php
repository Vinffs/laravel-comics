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
        <section id="comicInfo" class="container py-5">
            <div class="row">
                <div class="col-9 p-0 pe-5">
                    <h2 class="pb-3">{{ $comic['title'] }}</h2>
                    <div id="bar" class="d-flex">
                        <div class="col-9 d-flex justify-content-between px-4 py-2">
                            <span>U.S. Price: {{ $comic['price'] }}</span>
                            <span>AVAILABLE</span>
                        </div>
                        <div class="col-3 text-center availableBox py-2">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Check Availability
                            </a>
                        </div>
                    </div>
                    <p class="descriptionComic">{{ $comic['description'] }}</p>
                </div>
                <div class="col-3 p-0 text-end">
                    <p class="adv">ADVERTISEMENT</p>
                    <img class="" src="{{ Vite::asset('resources/images/adv.jpg') }}" alt="advertisement">
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
