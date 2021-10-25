<header id="header">
      <img src="{{ asset('images/dc-logo.png') }}" alt="DC Logo">

      <nav>
          <ul>
              @foreach ($links as $link )
                <li class="{{ request()->routeIs ($link['route']) ? 'active' : '' }}">
                    <a href="{{ $link['route']}}">{{ $link["text"] }}</a>
                </li>
              @endforeach
          </ul>
      </nav>

        <div class="search">
            <input type="text" placeholder="Search" name="search">
            <button><i class="fas fa-search"></i></button>
        </div>
      

  </header>