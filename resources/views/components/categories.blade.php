@props(['categories'])
<div>
    <h4 class="text-center my-3">Categories</h4>
    <div>
        @foreach ($categories as $category)
        <a
          href="/?category={{$category->slug}}
          {{request('search')?'&search='.request('search'):''}}
          {{request('tag')?'&tag='.request('tag'):''}}
          {{request('username')?'&username='.request('username'):''}}">
          <span class="mx-1 badge border border-warning text-warning">{{$category->name}}</span>
        </a>
        @endforeach
    </div>
</div>
