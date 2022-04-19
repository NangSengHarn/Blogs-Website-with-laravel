<x-user-layout>
    @if (session('success'))
        <div class="alert alert-success text-center" style="padding-top: 75px">
            {{session('success')}}
        </div>
    @endif
    <x-banner />
    <x-blogs-section />
    <x-subscribe />
</x-user-layout>
