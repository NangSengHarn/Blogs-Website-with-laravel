@props(['categories'])
<div>
    <h4 class="text-center my-3">Categories</h4>
    <div>
        @foreach ($categories as $category)
        <a href="/?category={{$category->slug}}"><span class="badge bg-warning">{{$category->name}}</span></a>
        @endforeach
    </div>
</div>
