<header>
    <nav class="container d-flex justify-content-between align-items-center">
        <div>
            <a href="{{ Route('home') }}"><img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="dc-logo"></a>
        </div>
        <ul class="d-flex list-unstyled m-0">
            @foreach ($navbar as $title)
                <li {{-- @class(['activePage' => $title['active']]) --}}>
                    <a href="{{ $title['url'] }}">{{ $title['sectionTitle'] }}</a>
                </li>
            @endforeach
        </ul>
    </nav>
</header>
