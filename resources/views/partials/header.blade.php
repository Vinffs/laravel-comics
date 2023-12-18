<header>
  <nav>
    <ul class="d-flex list-unstyled m-0">
      @foreach(config('nav.navbar') as $title)
      <li @class([ 'activePage'=> $title['active'],
        ])>
        <a href="#">{{ $title['sectionTitle'] }}</a>
      </li>
      @endforeach
    </ul>
  </nav>
</header>
