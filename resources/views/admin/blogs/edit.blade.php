<x-admin-layout>
    <div class="card p-3 shadow">
    <h4 class="text-center">Edit blog</h4>
        <form enctype="multipart/form-data" action="/admin/blogs/{{$blog->slug}}/update" method="POST">
            @csrf
            <x-form.input name='title' :value="$blog->title"/>
            <x-form.input name='slug' :value="$blog->slug"/>
            <div class="mb-3">
                <x-form.label name='body'/>
                <textarea required name="body" id="body" cols="20" rows="10" class="form-control editor">{{$blog->body}}</textarea>
                <x-form.error name='body'/>
            </div>
            <x-form.input-wrapper>
                <x-form.label name="thumbnail"/>
                @if ($blog->thumbnail)
                <div class="d-flex justify-content-center mb-3">
                    <img src='{{asset("storage/$blog->thumbnail")}}' class="img-thumbnail" id="img" width="400px" height="300px">
                </div>
                @endif
                <input type="file" class="form-control" id="upload" name="thumbnail" value="{{old('thumbnail')}}">
                <x-form.error name="thumbnail"/>
            </x-form.input-wrapper>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select name="category" id="category" class="form-control select-tags">
                    @foreach ($categories as $category)
                    <option {{$blog->category_id==$category->id ? 'selected':''}} value="{{$category->name}}">{{$category->name}}</option>
                    @endforeach
                </select>
                <x-form.error name='category'/>
            </div>
            <div class="mb-3">
                <label for="tag" class="form-label">Tag</label>
                <select class="form-control select2 select-tags" name="tag[]" id="tags" multiple>

                    @foreach ($tags as $tag)
                    <option {{ $blog->tags->contains($tag) ? 'selected':'' }} value="{{$tag->name}}">{{$tag->name}}</option>
                    @endforeach
                </select>
                <x-form.error name='tag'/>
            </div>
            <x-form.submit />
        </form>
    </div>
</x-admin-layout>
