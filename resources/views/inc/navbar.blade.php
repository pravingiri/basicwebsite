<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">Acme</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="{{Request::is('/') ? 'active' : ''}}">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="{{Request::is('/about') ? 'active' : ''}}">
        <a class="nav-link" href="/about">About</a>
      </li>
      <li class="{{Request::is('/contact') ? 'active' : ''}}">
        <a class="nav-link" href="/contact">Contact</a>
      </li>
    </ul>
  </div>
</nav>