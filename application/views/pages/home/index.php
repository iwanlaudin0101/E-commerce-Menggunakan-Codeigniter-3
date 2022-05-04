<div style="margin-top: -50px;" class="jumbotron jumbotron-fluid bg-white">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="display-4">Mars Computer</h1>
                <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Doloremque fugit odio, asperiores, debitis explicabo inventore autem pariatur hic corporis dolorem,
                    culpa necessitatibus magni sit sapiente voluptatem. Sapiente iste optio eos.</p>
            </div>
            <div class="col-sm-6">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div style="width: 25rem;" class=" carousel-item active">
                            <img class=" d-block w-100" src="<?= base_url("/images/product/default.png") ?>" alt="First slide">
                        </div>
                        <?php foreach ($content as $row) : ?>
                            <div style="width: 25rem;" class=" carousel-item">
                                <img class=" d-block w-100" src="<?= $row->image ? base_url("/images/product/$row->image") : base_url("/images/product/default.png") ?>" alt="Second slide">
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center">
                <a href="<?= base_url('productall') ?>">
                    <button style="border-radius:20px" type="button" class="btn btn-outline-danger mt-5 pl-5 pr-5 pt-2 pb-2">Get Product</button>
                </a>
            </div>
        </div>
    </div>
</div>