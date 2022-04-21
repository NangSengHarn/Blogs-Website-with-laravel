<div>
    <h4 class="text-center my-3">popular posts</h4>
        <div class="list-group">
            @foreach (range(1,4) as $item)
            <a href="#" class="list-group-item list-group-item-action mb-2" aria-current="true">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">Blog Title</h5>
                  <small>3 days ago</small>
                </div>
                <p class="mb-1">Lorem, ipsum dolor sit amet consectetur ...</p>
                <small>Written by Author name</small>
            </a>
            @endforeach
        </div>
</div>
