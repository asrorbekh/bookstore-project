<?php echo $this->view('layouts/header', $data); ?>

<section class="padding-y bg-light">
    <div class="align-content-center">
        <main class="align-content-center">


            <!-- ==================== COMPONENT 4  ======================== -->
            <article class="card card-product-list product-lg">
                <div class="row g-0">
                    <aside class="col-xl-3 col-md-4">
                        <a href="#" class="img-wrap">
                            <img src="../../../public/assets/images/items/book1.jpg">
                        </a>
                    </aside> <!-- col.// -->
                    <div class="col-xl-9 col-md-8 border-start">
                        <div class="card-body">
                            <a href="#" class="h5 mb-1 title"> The Lifeboat - A book about life </a>
                            <p class="mb-1 text-muted"> Charlotte Rogan <i class="dot"></i> Seller: Asaxiy</p>
                            <div class="rating-wrap mb-2">
                                <ul class="rating-stars">
                                    <li class="stars-active" style="width: 80%;">
                                        <img src="../../../public/assets/images/misc/stars-active.svg" alt="">
                                    </li>
                                    <li><img src="../../../public/assets/images/misc/starts-disable.svg" alt=""></li>
                                </ul>
                                <span class="label-rating text-warning">4.5</span>
                                <i class="dot"></i>
                                <span class="label-rating text-muted">154 orders</span>
                                <i class="dot"></i>
                                <span class="label-rating text-success">Free Shipping</span>
                            </div> <!-- rating-wrap.// -->

                            <div class="price-wrap mb-3">
                                <strong class="price"> $19.70 </strong>
                                <del class="price-old"> $28.00</del>
                            </div> <!-- price-wrap // -->

                            <div class="row row-cols-auto gx-2 gy-3 align-items-center">
                                <div>
                                    <a href="#" class="btn btn-primary">
                                        <i class="fa fa-shopping-cart me-1"></i> Add to cart
                                    </a>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-outline-primary">
                                        <i class="fa fa-heart me-1"></i> Wishlist
                                    </a>
                                </div>
                                <div>
                                    <label class="form-check ms-2">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <span class="form-check-label"> Add to compare </span>
                                    </label>
                                </div>
                            </div>
                        </div> <!-- info-main.// -->
                    </div> <!-- col.// -->
                </div> <!-- row.// -->
            </article> <!-- card-product .// -->

            <article class="card card-product-list product-lg">
                <div class="row g-0">
                    <aside class="col-xl-3 col-md-4">
                        <a href="#" class="img-wrap">
                            <img height="240" width="180" src="../../../public/assets/images/items/book2.jpg">
                        </a>
                    </aside> <!-- col.// -->
                    <div class="col-xl-9 col-md-8 border-start">
                        <div class="card-body">
                            <a href="#" class="h5 mb-1 title"> The Power of Now </a>
                            <p class="mb-1 text-muted">Author Eckhart Tolle <i class="dot"></i> Seller: Asaxiy</p>
                            <div class="rating-wrap mb-2">
                                <ul class="rating-stars">
                                    <li class="stars-active" style="width:90%;">
                                        <img src="../../../public/assets/images/misc/stars-active.svg" alt="">
                                    </li>
                                    <li><img src="../../../public/assets/images/misc/starts-disable.svg" alt=""></li>
                                </ul>
                                <span class="label-rating text-warning">4.9</span>
                                <i class="dot"></i>
                                <span class="label-rating text-muted">80 orders</span>
                                <i class="dot"></i>
                                <span class="label-rating text-success">Free Shipping</span>
                            </div> <!-- rating-wrap.// -->

                            <div class="price-wrap mb-3">
                                <strong class="price"> $182.50 </strong>
                            </div> <!-- price-wrap // -->

                            <div class="row row-cols-auto gx-2 gy-3 align-items-center">
                                <div>
                                    <a href="#" class="btn btn-primary">
                                        <i class="fa fa-shopping-cart me-1"></i> Add to cart
                                    </a>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-outline-primary">
                                        <i class="fa fa-heart me-1"></i> Wishlist
                                    </a>
                                </div>
                                <div>
                                    <label class="form-check ms-2">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <span class="form-check-label"> Add to compare </span>
                                    </label>
                                </div>
                            </div>
                        </div> <!-- info-main.// -->
                    </div> <!-- col.// -->
                </div> <!-- row.// -->
            </article> <!-- card-product .// -->
            <!-- ==================== COMPONENT 4 END .// =================== -->

        </main>
</section>



<?php echo $this->view('layouts/footer'); ?>
