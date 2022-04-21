<x-user-layout>
    <div class="formbg d-flex justify-content-center align-items-center">
        <x-card-wrapper style="width: 30rem;">
            <form action="" method="POST">
                @csrf
                <x-form.input name='email' type='email'/>
                <x-form.input name='password' type='password'/>
                <x-form.submit />
                <div class="d-flex justify-content-center mb-3">
                  <span>don't have an account? | <a href="/register">Register</a></span>
                </div>
            </form>
        </x-card-wrapper>
    </div>
</x-user-layout>
