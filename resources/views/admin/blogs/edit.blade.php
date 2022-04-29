<x-admin-layout>
    <div class="card p-3 shadow">
    <h4 class="text-center">Edit blog</h4>
        <form enctype="multipart/form-data" action="/admin/blogs/{{$blog->slug}}/update" method="POST">
            @csrf
            <x-form.input name='title' :value="$blog->title"/>
            <x-form.input name='slug' :value="$blog->slug"/>
            <div class="mb-3">
                <x-form.label name='body'/>
                <textarea required name="body" id="body" placeholder="{{$blog->body}}" cols="20" rows="10" class="form-control editor"></textarea>
                <x-form.error name='body'/>
            </div>
            <x-form.input-wrapper>
                <x-form.label name="thumbnail"/>
                @if ($blog->thumbnail)
                <div class="d-flex justify-content-center">
                    <img src='{{asset("storage/$blog->thumbnail")}}' class="img-thumbnail" width="400px" height="300px">
                </div>
                @endif
                <input type="file" class="form-control" id="thumbnail" name="thumbnail" value="{{old('thumbnail')}}">
                <x-form.error name="thumbnail"/>
            </x-form.input-wrapper>
            <div class="mb-3">
                <label for="category_id" class="form-label">Category</label>
                <select name="category_id" id="category_id" class="form-control form-select">
                    @foreach ($categories as $category)
                    <option {{$category->id==$blog->category_id ? 'selected':''}} value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                <x-form.error name='category_id'/>
            </div>
            <div class="mb-3">
                <label for="tag_id" class="form-label">Tag</label>
                <select name="tag_id" id="tag_id" class="form-control form-select">
                    @foreach ($tags as $tag)
                    <option {{$tag->id==$blog->tag_id ? 'selected':''}} value="{{$tag->id}}">{{$tag->name}}</option>
                    @endforeach
                </select>
                <x-form.error name='tag_id'/>
            </div>
            <x-form.submit />
        </form>
    </div>
</x-admin-layout>
