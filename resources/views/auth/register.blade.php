<x-user-layout>
    <div class="formbg d-flex justify-content-center align-items-center" style="padding-top: 70px;">
        <x-card-wrapper style="width: 30rem;">
            <form method="POST">
                @csrf
                <div class="text-center"><h3>Register Form</h3></div>
                <x-form.input name='name'/>
                <x-form.input name='username'/>
                <x-form.input name='email' type='email'/>
                <x-form.input name='password' type='password'/>
                <x-form.submit />
                <div class="d-flex justify-content-center">
                  <span>already have an account? | <a href="/login">LogIn</a></span>
                </div>
            </form>
        </x-card-wrapper>
    </div>
</x-user-layout>
