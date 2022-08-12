<?php echo $this->view('layouts/header', $data) ?>

<section class="padding-y bg-light" style="min-height:90vh">
    <div class="container">
        <!-- ====== COMPONENT LOGIN  ====== -->
        <div class="card shadow mx-auto" style="max-width:400px; margin-top:40px;">
            <div class="card-body">
                <h4 class="mb-4">Login</h4>
                <form method="post" autocomplete="off">
                    <div class="mb-3">
                        <div class="alert alert-danger alert-message">Неверный логин или пароль</div>
                        <div class="alert alert-success d-none">Данные успешно изменены!</div>
                        <label class="form-label">Email</label>
                        <input name="email" class="form-control" placeholder="ex. name@gmail.com" type="email"
                               autocomplete="off" required="required">
                        <div class="invalid-feedback">Неверный номер телефона</div>
                    </div> <!-- col end.// -->

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <a class="float-end" href="/reset"><!-- Reset--></a>
                        <input name="password" class="form-control" placeholder="******" type="password"
                               autocomplete="false" required="required">
                    </div> <!-- col end.// -->

                    <button class="btn w-100 btn-primary" type="submit"> Login</button>

                </form action="/"> <!-- form end.// -->

                <p class="text-divider my-4">No account ? </p>
                <a href="/register" class="btn w-100 btn-light">Create new accaunt</a>

            </div> <!-- card-body end.// -->
        </div> <!-- card .// -->
        <!-- ====== COMPONENT LOGIN  END.// ====== -->
        <br><br>
    </div> <!-- container .//  -->
</section>

<?php echo $this->view('layouts/footer') ?>
