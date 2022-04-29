@props(['tags'])
<div>
    <h4 class="text-center my-3">Tags</h4>
    <div>
        @foreach ($tags as $tag)
        <a href="/?tag={{$tag->slug}}
            {{request('search')?'&search='.request('search'):''}}
            {{request('category')?'&category='.request('category'):''}}
            {{request('username')?'&username='.request('username'):''}}">
            <span class="badge bg-warning">{{$tag->name}}</span>
        </a>
        @endforeach
    </div>
</div>
