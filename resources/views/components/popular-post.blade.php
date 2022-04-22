@props(['popularPosts'])
<div>
    <h4 class="text-center my-3">popular posts</h4>
        <div class="list-group">
            @foreach ($popularPosts as $blog)
            <a href="#" class="list-group-item list-group-item-action mb-2 shadow" aria-current="true">
                <h5 class="mb-1">{{$blog->title}}</h5>
                <p class="mb-1">{{substr($blog->body,0,35).'...';}}</p>
                <div class="d-flex w-100 justify-content-between">
                  <small>Written by {{$blog->author->name}}</small>
                  <small>{{$blog->created_at->diffForHumans()}}</small>
                </div>
            </a>
            @endforeach
        </div>
</div>
