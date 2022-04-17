<x-layout>
    <div class="formbg d-flex justify-content-center align-items-center" style="padding-top: 70px;">
        <div class="card p-5 my-3 shadow" style="width: 30rem;">
            <form action="" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
