<div class="navbar">
  <ul class="d-flex">
    <li class="px-3 {{ Route::currentRouteName() === 'home' ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a>
    </li>
    <li class="px-3 {{ Route::currentRouteName() === 'movies' ? 'active' : '' }}"><a href="{{ route('movies') }}">Elenco
        film</a></li>
    <li class="px-3 {{ Route::currentRouteName() === 'about' ? 'active' : '' }}"><a href="{{ route('about') }}">About
        us</a></li>
    <li class="px-3 {{ Route::currentRouteName() === 'contacts' ? 'active' : '' }}"><a
        href="{{ route('contacts') }}">Contatti</a></li>
  </ul>
</div>
