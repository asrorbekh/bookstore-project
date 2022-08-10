<?php echo $this->view('layouts/header',$data); ?>
<div class="card  mb-4">
    <article class="card-body">
        <h4 class="mb-4">Add book</h4>
        <form>

            <div class="row mb-4">
                <label class="col-3 col-form-label">Title</label>
                <div class="col-9">
                    <input type="text" class="form-control" placeholder="Type here">
                </div> <!-- col end.// -->
            </div> <!-- row end.// -->

            <div class="row mb-4">
                <label class="col-3 col-form-label">Price</label>
                <div class="col-9">
                    <input type="text" class="form-control" placeholder="$ 0.00">
                </div> <!-- col end.// -->
            </div> <!-- row end.// -->

            <div class="row mb-4">
                <label class="col-3 col-form-label">
                    Image <br> <small class="text-muted">(Max 10 mb)</small>
                </label>
                <div class="col-9">
                    <div class="gallery-uploader-wrap">
                        <label style="width: 80px; height: 80px" class="uploader-img">
                            <img width="100" src="../../../public/assets/images/items/1.jpg">
                        </label>
                        <label style="width: 80px; height: 80px" class="uploader-img">
                            <img width="100" src="../../../public/assets/images/items/2.jpg">
                        </label>
                        <label style="width: 80px; height: 80px" class="uploader-img">
                            <input type="file" name="lorem">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#999" width="32" height="32"
                                 viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="3"/>
                                <path d="M16.83 4L15 2H9L7.17 4H2v16h20V4h-5.17zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5z"/>
                            </svg>
                        </label>
                    </div> <!-- gallery-uploader-wrap //end -->
                </div> <!-- col end.// -->
            </div> <!-- row end.// -->

            <div class="row mb-4">
                <label class="col-3 col-form-label">Description</label>
                <div class="col-9">
                    <textarea class="form-control" placeholder="Type here"></textarea>
                </div> <!-- col end.// -->
            </div> <!-- row end.// -->

            <div class="row mb-4">
                <label class="col-3 col-form-label">Brand</label>
                <div class="col-9">
                    <select class="form-select" size="4">
                        <option selected="">Select brand</option>
                        <option value="1">Asus</option>
                        <option value="2">Apple</option>
                        <option value="3">Xuiaomi</option>
                        <option value="4">Artel</option>
                        <option value="6">Google</option>
                    </select>
                </div> <!-- col end.// -->
            </div> <!-- row end.// -->

            <div class="row mb-4">
                <label class="col-3 col-form-label">Features</label>
                <div class="col-9">
                    <ul class="row row-cols-xxl-3 row-cols-2">
                        <li>
                            <label class="form-check">
                                <input class="form-check-input" type="checkbox" value="" checked>
                                <span class="form-check-label"> HD camera </span>
                            </label>
                        </li>
                        <li>
                            <label class="form-check">
                                <input class="form-check-input" type="checkbox" value="" checked>
                                <span class="form-check-label"> Voice control </span>
                            </label>
                        </li>
                        <li>
                            <label class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <span class="form-check-label"> Metallic </span>
                            </label>
                        </li>
                        <li>
                            <label class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <span class="form-check-label"> 5K Display </span>
                            </label>
                        </li>
                        <li>
                            <label class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <span class="form-check-label"> High speed </span>
                            </label>
                        </li>
                        <li>
                            <label class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <span class="form-check-label"> Ultra wide </span>
                            </label>
                        </li>
                        <li>
                            <label class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <span class="form-check-label"> 5K Display </span>
                            </label>
                        </li>
                        <li>
                            <label class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <span class="form-check-label"> Blootooth 3.0 </span>
                            </label>
                        </li>
                    </ul>
                </div> <!-- col end.// -->
            </div> <!-- row end.// -->

            <div class="row mb-2">
                <div class="col-9 offset-3">
                    <button type="button" class="btn btn-primary">Add product</button>
                    <button type="reset" class="btn btn-outline-danger">Cancel</button>
                </div> <!-- col end.// -->
            </div> <!-- row end.// -->
        </form> <!-- form end.// -->
    </article> <!-- card-body end .// -->

</div>

<?php echo $this->view('layouts/footer'); ?>
