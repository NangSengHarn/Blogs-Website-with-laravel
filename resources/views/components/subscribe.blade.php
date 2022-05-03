<section class="d-flex justify-content-center mt-5" id="subscribe">
        <div class="align-self-center p-3" style="width: 35rem;">
            <div class="text-center">
              @auth
                <form action="/{{auth()->id()}}/subscribe/#subscribe" method="POST" class="mt-3">
                @csrf
                @if (auth()->user()->is_subscribe)
                <button class="btn btn-primary mt-3" type="submit">UnSubscribe</button>
                @else
                <h3>Subscribe for more blogs</h3>
                <input class="form-control me-2" name="email" type="email" placeholder="Email" aria-label="Email">
                <button class="btn btn-primary mt-3" type="submit">Subscribe</button>
                @endif
              </form>
              @endauth
            </div>
        </div>
</section>
