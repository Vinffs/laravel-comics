<section id="comics" class="d-flex justify-content-center">
    <div class="row container justify-content-center">
        @foreach ($comicList as $comic)
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
