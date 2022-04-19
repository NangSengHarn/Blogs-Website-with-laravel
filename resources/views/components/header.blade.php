<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid mx-3">
      <a class="navbar-brand" href="#banner"><h3>im<span class="text-warning">B</span>logger</h3></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="d-flex">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
              <a class="nav-link" href="#posts">Posts</a>
          </li>
          @auth

          <li class="nav-item">
            <a href="/" class="nav-link">
              <img src="{{auth()->user()->avatar}}" alt="" width="30" height="30" class="rounded-circle">
            </a>
          </li>
          <li class="nav-item">
            <form action="/logout" method="POST">
              @csrf
              <button
              class="nav-link btn btn-link"
              type="submit">
              LogOut
              </button>
            </form>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="/login">LogIn</a>
          </li>
          @endauth
          <li class="nav-item">
            <a class="nav-link" href="#subscribe">Subscribe</a>
          </li>
        </ul>
        <form class="d-flex ms-2">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
      </div>
      </div>
    </div>
  </nav>
