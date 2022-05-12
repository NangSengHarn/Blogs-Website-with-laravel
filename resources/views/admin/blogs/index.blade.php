<x-admin-layout>
    <div class="card p-3 shadow">
    <h3 class="text-center">Blogs</h3>
    <table class="table table-warning table-hover">
        <thead>
          <tr>
            <th width="40%" scope="col">Title</th>
            <th width="40%" scope="col">Intro</th>
            <th width="20%" scope="col" colspan="2" class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $blog)
            <tr>
                <td>{{$blog->title}}</td>
                <td>{{substr(strip_tags($blog->body),0,35).'...';}}</td>
                <td class="text-center"><a href="/admin/blogs/{{$blog->slug}}/edit" class="btn btn-warning">Edit</a></td>
                <td class="text-center">
                    <form action="/admin/blogs/{{$blog->slug}}/delete" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
</x-admin-layout>
