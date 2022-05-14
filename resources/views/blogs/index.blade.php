<x-user-layout>
    @if (session('success'))
        <div class="alert alert-success text-center">
            {{session('success')}}
        </div>
    @endif

    @guest
    <x-banner />
    @endguest
    <x-blogs-section :blogs=$blogs :categories=$categories :tags=$tags :popularPosts=$popularPosts/>
    <x-subscribe />
</x-user-layout>
