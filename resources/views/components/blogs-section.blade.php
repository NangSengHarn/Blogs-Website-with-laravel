@props(['blogs','categories','tags','popularPosts'])
<section class="mt-3" id="posts">
<div class="container-fluid px-5">
    <div class="row">
        <div class="col-9">
            <div class="text-center my-3"><h3>Blogs</h3></div>
            <div class="container py-2">
                <div class="row">
                    @foreach ($blogs as $blog)
                    <div class="col-md-4 mb-4">
                        <x-blogcard :blog=$blog/>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-3">
            <x-categories :categories=$categories/>
            <x-tags :tags=$tags/>
            <x-popular-post :popularPosts=$popularPosts/>
        </div>
    </div>
</div>
</section>
