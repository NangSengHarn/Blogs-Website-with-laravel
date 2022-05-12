<section class="container-fluid fixed-top">
    {{-- @dd(auth()->user()->notifications); --}}
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
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-bell"></i>
            </a>
            <ul class="dropdown-menu scrollable-menu" aria-labelledby="navbarDropdown">
                @foreach (auth()->user()->notifications as $notification)
                {{-- @dd($notification->data); --}}
                <li>
                    @if ($notification->read_at)
                    <div class="mb-2 mt-0 mx-2">
                    @else
                    <div class="mb-2 mt-0 mx-2 bg-gray">
                    @endif
                    <a class="dropdown-item text-wrap" href="/notifications/{{$notification->id}}">
                    <p class="text-wrap">{{$notification->data['user']}} commented on the post you like "{{$notification->data['blog_title']}}".</p>
                    <small>{{$notification->created_at->diffForHumans()}}</small>
                    </a>
                    </div>
                </li>
                @endforeach
            </ul>
          </li>

          <li class="nav-item">
            <a href="/updateProfile" class="nav-link">
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
        <form action="/#posts" class="d-flex ms-2 input-group">
          <input class="form-control border-end-0 border" name="search" id="search" type="search" value="{{request('search')}}" placeholder="Search" aria-label="Search">
          <span class="input-group-append">
          <button class="btn btn-link border-start-0 border ms-n5" id="search" type="submit"><i class="bi bi-search"></i></button>
          </span>
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
