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
                <select name="category_id" id="category_id" class="form-control form-select">
                    @foreach (range(1,3) as $item)
                    <option value="1">category</option>
                    @endforeach
                </select>
                <x-form.error name='category_id'/>
            </div>
            <div class="mb-3">
                <label for="tag_id" class="form-label">Tag</label>
                <select name="tag_id" id="tag_id" class="form-control form-select">
                    @foreach (range(1,3) as $item)
                    <option value="1">tag</option>
                    @endforeach
                </select>
                <x-form.error name='tag_id'/>
            </div>
            <x-form.submit />
        </form>
    </div>
</x-admin-layout>
