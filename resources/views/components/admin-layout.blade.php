<x-layout>
    <div class="d-flex justify-content-center my-3"><h3>im<span class="text-warning">B</span>logger.admin</h3></div>
    <div class="container-fluid">
        <div class="row px-5">
            <div class="col-md-3">
                <ul class="list-group">
                    <li class="list-group-item"><a href="">Dashboard</a></li>
                    <li class="list-group-item"><a href="/admin/blogs/create">Create Blog</a></li>
                </ul>
            </div>
            <div class="col-md-9">
                {{$slot}}
            </div>
        </div>
    </div>
</x-layout>
