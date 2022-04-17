<x-layout>
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto text-center">
          <img
            src='/images/blog-3.jpeg'
            class="card-img-top"
            alt="..."
          />
          <h3 class="my-3">Blog title</h3>
          <div>
              <div>Author - <a href="">author</a></div>
              <div><a class="btn btn-outline-primary" href="">category</a></div>
              <div class="text-secondary">3 days ago</div>
          </div>
          <p class="lh-md mt-3">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, perferendis. Quasi, iste possimus blanditiis quidem facilis dolorum, labore doloribus quibusdam, illo quos maiores libero debitis nihil deleniti aliquam consectetur voluptas natus soluta explicabo quaerat ratione unde eaque nobis modi. Iusto magni sed facilis totam eaque? Ipsa modi reprehenderit sequi iste.
          </p>
        </div>
      </div>
    </div>

    <section class="container">
        <div class="col-md-8 mx-auto">
            <form action="" method="POST">
                @csrf
                <div class="mb-3">
                    <textarea
                        required
                        name="body"
                        cols="10"
                        class="form-control border border-0"
                        rows="5"
                        placeholder="say something..."
                    ></textarea>
                </div>
                <div class="d-flex justify-content-end">
                    <button
                        type="submit"
                        class="btn btn-primary"
                    >Submit</button>
                </div>
            </form>
        </div>
    </section>
    <section class="container">
        <div class="col-md-8 mx-auto">
            <h5 class="my-3 text-secondary">Comments 2</h5>
            <div class="card p-3 my-3">
                <div class="d-flex">
                    <div>
                        <img src="https://i.pravatar.cc/150?img=31"
                             width="50"
                             height="50"
                             class="rounded-circle"
                             alt="">
                    </div>
                    <div class="ms-3">
                        <h6>name</h6>
                        <p class="text-secondary">20 minutes ago</p>
                    </div>
                </div>
                <p class="mt-1">
                    message
                </p>
            </div>
            <div class="card p-3 my-3">
                <div class="d-flex">
                    <div>
                        <img src="https://i.pravatar.cc/150?img=31"
                             width="50"
                             height="50"
                             class="rounded-circle"
                             alt="">
                    </div>
                    <div class="ms-3">
                        <h6>name</h6>
                        <p class="text-secondary">20 minutes ago</p>
                    </div>
                </div>
                <p class="mt-1">
                    message
                </p>
            </div>
        </div>
    </section>
    <section class="blogs_you_may_like">
        <div class="container">
          <h3 class="text-center my-4 fw-bold">Blogs You May Like</h3>
          <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="card p-3 my-3" style="width: 18rem;">
                    <img src="/images/blog-1.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card p-3 my-3" style="width: 18rem;">
                    <img src="/images/blog-2.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card p-3 my-3" style="width: 18rem;">
                    <img src="/images/blog-3.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
          </div>
        </div>
  </section>
</x-layout>

