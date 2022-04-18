<x-admin-layout>
    <div class="card p-3 shadow">
    <h4 class="text-center">Blog create form</h4>
        <form enctype="multipart/form-data" action="" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title">
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Slug</label>
              <input type="text" class="form-control" id="slug">
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <textarea name="body" id="body" cols="20" rows="10" class="form-control editor"></textarea>
            </div>
            <div class="mb-3">
                <label for="thumbnail" class="form-label">Thumbnail</label>
                <input type="file" class="form-control" id="thumbnail">
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">Category</label>
                <select name="category_id" id="category" class="form-control form-select">
                    <option value="">category1</option>
                    <option value="">category2</option>
                    <option value="">category3</option>
                </select>
            </div>
            <div class="d-flex justify-content-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</x-admin-layout>
