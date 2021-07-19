<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-brand fs-1" href="{{ route('home')}}">DC</a>
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : ''}}" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Route::currentRouteName() == 'comics.index' ? 'active' : ''}}" href="{{ route('comics.index') }}">Comics</a>
        </li>
      </ul>
    </div>
  </nav>
</header>