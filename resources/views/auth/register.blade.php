<x-user-layout>
    <div class="formbg d-flex justify-content-center align-items-center" style="padding-top: 70px;">
        <div class="card p-5 my-3 shadow" style="width: 30rem;">
            <form method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name">
                    @error('name')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control" name="username" id="username">
                  @error('username')
                        <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" class="form-control" name="email" id="email">
                  @error('email')
                        <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" id="password">
                  @error('password')
                        <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>
                <div class="d-flex justify-content-center mb-3">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="d-flex justify-content-center">
                  <span>already have an account? | <a href="/logIn">LogIn</a></span>
                </div>
            </form>
        </div>
    </div>
</x-user-layout>
