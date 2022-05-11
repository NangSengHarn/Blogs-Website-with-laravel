<x-admin-layout>
    <div class="card p-3 shadow">
    <h4 class="text-center">Blog create form</h4>
        <form enctype="multipart/form-data" action="/admin/blogs/store" method="POST">
            @csrf
            <x-form.input name='title'/>
            <x-form.input name='slug'/>
            <div class="mb-3">
                <x-form.label name='body'/>
                <textarea required name="body" id="body" name="body" cols="20" rows="10" class="form-control editor"></textarea>
                <x-form.error name='body'/>
            </div>
            <x-form.input name='thumbnail' type='file' required=null/>
            <div class="mb-3">
                <label for="category_id" class="form-label">Category</label>
                <select name="category" id="category_id" class="form-control select-tags">
                    @foreach ($categories as $category)
                    <option {{$category->id==old('category_id') ? 'selected':''}} value="{{$category->name}}">{{$category->name}}</option>
                    @endforeach
                </select>
                <x-form.error name='category_id'/>
            </div>
            <div class="mb-3">
                <label for="tag_id" class="form-label">Tag</label>
                <select class="form-control select2 select-tags" name="tag[]" id="tags" multiple>
                    @foreach ($tags as $tag)
                    <option {{$tag->id==old('tag_id') ? 'selected':''}} value="{{$tag->name}}">{{$tag->name}}</option>
                    @endforeach
                </select>
                <x-form.error name='tag_id'/>
            </div>
            <x-form.submit />
        </form>
    </div>
</x-admin-layout>
