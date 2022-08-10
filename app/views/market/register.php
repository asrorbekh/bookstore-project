<?php echo $this->view('layouts/header', $data) ?>

<section class="padding-y bg-light" style="min-height:90vh">
    <div class="container">
        <!-- ====== COMPONENT LOGIN  ====== -->
        <div class="card shadow mx-auto" style="max-width:400px; margin-top:40px;">
            <div class="card-body">
                <h4 class="mb-4">Register</h4>
                <form method="post" autocomplete="off">
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input name="username" class="form-control" placeholder="ex. jhonkennedy" type="text"
                               autocomplete="off" required="required">
                    </div> <!-- col end.// -->
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input name="email" class="form-control" placeholder="ex. name@gmail.com" type="email"
                               required="required">
                    </div> <!-- col end.// -->

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input name="password" class="form-control" placeholder="******" type="password"
                               required="required">
                    </div> <!-- col end.// -->
                    <div class="mb-3">
                        <label class="form-label"> Repeat password</label>
                        <input name="passwordRepeat" class="form-control" placeholder="******" type="password"
                               required="required">
                    </div> <!-- col end.// -->

                    <button class="btn w-100 btn-primary" type="submit"> Register</button>

                </form> <!-- form end.// -->

                <p class="text-divider my-4">Have an account ?</p>
                <a href="/login" class="btn w-100 btn-light">Login in here</a>

            </div> <!-- card-body end.// -->

        </div> <!-- card .// -->

        <!-- ====== COMPONENT LOGIN  END.// ====== -->

        <br><br>

    </div> <!-- container .//  -->
</section>

<?php echo $this->view('layouts/footer') ?>
