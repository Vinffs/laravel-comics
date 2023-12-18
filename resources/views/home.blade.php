@extends('layouts.app')

@section('title', 'Home')

@section('content')

    @include('partials.hero')
    <main>
        <section id="comics" class="d-flex justify-content-center">
            <div class="row container justify-content-center">
                @foreach (config('comics.comics') as $comic)
                    <div class="col-5 col-sm-5 col-md-4 col-lg-3 col-xl-3 col-xxl-2">
                        <div class="card py-3 border-0">
                            <div>
                                <img src="{{ $comic['thumb'] }}" class="card-img-top rounded-0" alt={{ $comic['series'] }}>
                            </div>
                            <div class=" card-body d-flex p-0">
                                <h5>{{ $comic['series'] }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
                <button>LOAD MORE</button>
            </div>
        </section>
        <section id="features">
            <div class="d-flex justify-content-between container" id="sectionContainer">
                @foreach (config('sections.sections') as $section)
                    <div class="d-flex align-content-center align-items-center">
                        <img src="{{ Vite::asset($section['sectionImage']) }}" alt="{{ $section['sectionImage'] }}" />
                        <div class="sectionText">{{ $section['sectionName'] }}</div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>

@endsection
