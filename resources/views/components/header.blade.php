<section class="container-fluid fixed-top">
  <div class="row">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid mx-3">
      <a class="navbar-brand" href="/"><h3>im<span class="text-warning">B</span>logger</h3></a>
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
        <form action="/#posts" class="d-flex ms-2">
          <input class="form-control" name="search" type="search" value="{{request('search')}}" placeholder="Search" aria-label="Search">
          <button class="btn btn-primary" type="submit"><a href="#posts"><i class="bi bi-search text-white"></i></a></button>
        </form>
      </div>
      </div>
    </div>
  </nav>
  </div>
  <div class="row">
    @auth
    @if (auth()->user()->is_admin)
    <div class="d-flex align-self-start justify-content-end px-5 mt-1">
      <button class="btn-circle mx-1">
        <a href="/admin/blogs"><i class="bi bi-box-arrow-left h3 text-white"></i></a>
      </button>
    </div>
    @endif
    @endauth
  </div>
</section>
