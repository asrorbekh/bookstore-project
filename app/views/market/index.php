<?php echo $this->view('layouts/header', $data) ?>

    <section class="section-intro padding-top-sm">
        <div class="container">
            <main class="card p-3">
                <div class="row">
                    <div class="row-cols-lg-auto">
                        <article class="card-banner p-5 bg-primary" style="height: 250px">
                            <div style="max-width: 500px">
                                <h2 class="text-white">Great products with <br> best deals </h2>
                                <p class="text-white">No matter how far along you are in your sophistication as an
                                    amateur
                                    astronomer, there is always one.</p>
                                <a href="/books" class="btn btn-warning"> View more </a>
                            </div>
                        </article>
                    </div>
                </div>
            </main>
        </div> <!-- container end.// -->
    </section>
    <section class="padding-top">
        <div class="container">

            <header class="section-heading">
                <h3 class="section-title">Books here</h3>
            </header>

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <figure class="card card-product-grid">
                        <a href="#" class="img-wrap">
                            <!--                            <span class="topbar"> <b class="badge bg-success"> Offer </b> </span>-->
                            <img src="../../../public/assets/images/items/12.jpg" alt="img">
                        </a>
                        <figcaption class="info-wrap border-top">
                            <a href="/cart/order" class="float-end btn btn-light btn-icon"> <i class="fa fa-heart"></i> </a>
                            <a href="#" class="title text-truncate">Blue T-shirt for Men</a>
                            <small class="text-muted">Author: Frank S.O</small>
                            <div class="price-wrap">
                                <span class="price">$15.90</span>
                                <del class="price-old">$20</del>
                            </div> <!-- price-wrap.// -->
                        </figcaption>
                    </figure>
                </div> <!-- col end.// -->

        </div> <!-- container end.// -->
    </section>

    <section class="padding-y">
        <div class="container">
            <article class="card p-3 p-lg-5">
                <div class="row g-3">
                    <div class="col-lg-3 col-md-6">
                        <figure class="icontext">
                            <div class="icon">
					<span class="icon-sm bg-warning-light text-warning rounded">
						<i class="fa fa-thumbs-up"></i>
					</span>
                            </div>
                            <figcaption class="text">
                                <h6 class="title">Reasonable prices</h6>
                                <p>Have you ever finally just </p>
                            </figcaption>
                        </figure> <!-- icontext // -->
                    </div><!-- col // -->
                    <div class="col-lg-3 col-md-6">
                        <figure class="icontext">
                            <div class="icon">
					<span class="icon-sm bg-warning-light text-warning rounded">
						<i class="fa fa-plane"></i>
					</span>
                            </div>
                            <figcaption class="text">
                                <h6 class="title">Worldwide shipping</h6>
                                <p>Have you ever finally just </p>
                            </figcaption>
                        </figure> <!-- icontext // -->
                    </div><!-- col // -->
                    <div class="col-lg-3 col-md-6">
                        <figure class="icontext">
                            <div class="icon">
					<span class="icon-sm bg-warning-light text-warning rounded">
						<i class="fa fa-star"></i>
					</span>
                            </div>
                            <figcaption class="text">
                                <h6 class="title">Best ratings</h6>
                                <p>Have you ever finally just </p>
                            </figcaption>
                        </figure> <!-- icontext // -->
                    </div> <!-- col // -->
                    <div class="col-lg-3 col-md-6">
                        <figure class="icontext">
                            <div class="icon">
					<span class="icon-sm bg-warning-light text-warning rounded">
						<i class="fa fa-phone"></i>
					</span>
                            </div>
                            <figcaption class="text">
                                <h6 class="title">Help center</h6>
                                <p>Have you ever finally just </p>
                            </figcaption>
                        </figure> <!-- icontext // -->
                    </div> <!-- col // -->
                </div> <!-- row // -->
            </article>
        </div><!-- //container -->
    </section>


<?php echo $this->view('layouts/footer') ?>