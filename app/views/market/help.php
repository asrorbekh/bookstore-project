<?php echo $this->view('layouts/header',$data); ?>

<br>
<section class="padding-y">

<div class="row">
    <main class="col-lg-8">
    </main> <!-- col.// -->
    <div class="col-lg-4">
        <!-- ================ COMPONENT SUPPORT ================ -->
        <div class="card">
            <article class="p-4 p-xl-5 text-center">
                <img src="../../../public/assets/images/avatars/avatar1.jpg" class="img-avatar img-md" alt="">
                <h6 class="card-title mt-3">Customer support</h6>
                <p>
                    Call: <a href="tel:+998123456789">+998123456789</a> <br>
                    Email: <a href="mailto:support@mywebsite.com">support@mywebsite.com</a>
                </p>
                <a href="/help/chat" class="btn btn-warning"> Start chat </a>
                <a href="tel:+998999999999" class="btn btn-success"> Make a call </a>
            </article>
        </div>
        <!-- ================ COMPONENT SUPPORT END .// ================ -->
    </div> <!-- col.// -->
</div>  <!-- row.// -->
</section>
<br>
<br>

<?php echo $this->view('layouts/footer'); ?>
