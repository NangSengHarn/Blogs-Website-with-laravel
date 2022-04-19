<x-layout>
    <div class="formbg d-flex justify-content-center align-items-center" style="padding-top: 70px;">
        <div class="card p-5 my-3 shadow" style="width: 30rem;">
            <form action="" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" class="form-control" name="email" id="email">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" id="password">
                </div>
                <div class="d-flex justify-content-center mb-3">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="d-flex justify-content-center mb-3">
                  <span>don't have an account? | <a href="/register">Register</a></span>
                </div>
            </form>
        </div>
    </div>
</x-layout>
