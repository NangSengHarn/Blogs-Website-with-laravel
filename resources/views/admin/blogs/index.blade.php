<x-admin-layout>
    <div class="card p-3 shadow">
    <h3 class="text-center">Blogs</h3>
    <table class="table table-warning table-hover">
        <thead>
          <tr>
            <th width="35%" scope="col">Title</th>
            <th width="35%" scope="col">Intro</th>
            <th width="30%" scope="col" colspan="3" class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
              <tr>
                  <td>blog title</td>
                  <td>intro</td>
                  <td class="text-center"><a href="" class="btn btn-success">view</a></td>
                  <td class="text-center"><a href="" class="btn btn-warning">Edit</a></td>
                  <td class="text-center">
                      <form action="" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                  </td>
              </tr>
              <tr>
                <td>blog title</td>
                <td>intro</td>
                <td class="text-center"><a href="" class="btn btn-success">view</a></td>
                <td class="text-center"><a href="" class="btn btn-warning">Edit</a></td>
                <td class="text-center">
                    <form action="" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            <tr>
                <td>blog title</td>
                <td>intro</td>
                <td class="text-center"><a href="" class="btn btn-success">view</a></td>
                <td class="text-center"><a href="" class="btn btn-warning">Edit</a></td>
                <td class="text-center">
                    <form action="" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
      </table>
    </div>
</x-admin-layout>
