<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="{{ env('APP_URL') }}/assets/images/logo_neumoai.png" class="img-logo">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link {{ $active == 'index' ? 'active' : '' }}" href="{{ route('home') }}">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ $active == 'aboutus' ? 'active' : '' }}" href="{{ route('aboutus') }}">Nosotros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ $active == 'neumonia' ? 'active' : '' }}" href="{{ route('neumonia') }}">Neumonía</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ $active == 'contact' ? 'active' : '' }}" href="{{ route('contact') }}">Contacto</a>
      </li>
    </ul>
  </div>
</nav>