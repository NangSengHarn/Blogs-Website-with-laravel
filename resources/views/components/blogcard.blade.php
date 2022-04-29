@props(['blog'])
<x-card-wrapper style="width: 18rem;">
    @if ($blog->thumbnail)
    <img src='{{asset("storage/$blog->thumbnail")}}' class="card-img-top" alt="...">
    @endif
    <div class="card-body">
      <h5 class="card-title">{{$blog->title}}</h5>
      <p class="fs-6 text-secondary">
        <a href="/?username={{$blog->author->username}}
            {{request('search')?'&search='.request('search'):''}}
            {{request('tag')?'&tag='.request('tag'):''}}
            {{request('category')?'&category='.request('category'):''}}">
                {{$blog->author->name}}
        </a>
        <span> - {{$blog->created_at->diffForHumans()}}</span>
      </p>
      <div class="tags my-3">
        <a href="/?category={{$blog->category->slug}}"><span class="badge bg-warning">{{$blog->category->name}}</span></a>
        @foreach ($blog->tags as $tag)
        <a href="/?tag={{$tag->slug}}"><span class="badge bg-warning">{{$tag->name}}</span></a>
        @endforeach
      </div>
      <p class="card-text">{{substr($blog->body,0,35).'...';}}</p>
      <a href="/blogs/{{$blog->slug}}" class="btn btn-primary">Read More</a>
    </div>
</x-card-wrapper>
