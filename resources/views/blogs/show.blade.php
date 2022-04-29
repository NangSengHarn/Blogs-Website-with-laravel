<x-user-layout>
    <div class="container" style="margin-top: 70px;">
        <div class="row">
            <div class="col-md-6 mx-auto text-center">
            @if ($blog->thumbnail)
            <img src='{{asset("storage/$blog->thumbnail")}}' class="card-img-top" alt="...">
            @endif
            <div class="d-flex justify-content-between pt-2">
                <div>Author - <a href="/?username={{$blog->author->username}}
                    {{request('search')?'&search='.request('search'):''}}
                    {{request('tag')?'&tag='.request('tag'):''}}
                    {{request('category')?'&category='.request('category'):''}}">
                        {{$blog->author->name}}
                </a></div>
                <div>
                    <a class="text-warning" href=""><i class="bi bi-heart h4"></i></a>
                </div>
            </div>
            <div class="d-flex justify-content-between pt-2">
                <div class="text-secondary align-self-center">published - {{$blog->created_at->diffForHumans()}}</div>
                <div class="tags my-3">
                    <a href="/?category={{$blog->category->slug}}
                        {{request('search')?'&search='.request('search'):''}}
                        {{request('tag')?'&tag='.request('tag'):''}}
                        {{request('username')?'&username='.request('username'):''}}">
                        <span class="badge bg-warning">{{$blog->category->name}}</span>
                    </a>
                    @foreach ($blog->tags as $tag)
                    <a href="/?tag={{$tag->slug}}
                        {{request('search')?'&search='.request('search'):''}}
                        {{request('category')?'&category='.request('category'):''}}
                        {{request('username')?'&username='.request('username'):''}}">
                        <span class="badge bg-warning">{{$tag->name}}</span>
                    </a>
                    @endforeach
                </div>
            </div>
            <h3 class="my-3">{{$blog->title}}</h3>
            <p class="lh-md mt-3">
                {{$blog->body}}
            </p>
            </div>
        </div>
    </div>
    <x-comment-section :comments="$blog->comments()->latest()->get()"/>
    <x-blog-you-may-like :randomBlogs=$randomBlogs/>

</x-user-layout>

