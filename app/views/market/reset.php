<?php echo $this->view('layouts/header', $data) ?>

    <section class="padding-y bg-light" style="min-height:90vh">
        <div class="container">
            <!-- ====== COMPONENT LOGIN  ====== -->
            <div class="card shadow mx-auto" style="max-width:400px; margin-top:40px;">
                <div class="card-body">
                    <h4 class="mb-4" style="-webkit-user-select: none;">Reset password</h4>
                    <form method="post" autocomplete="off">
                        <div class="mb-3">
                            <div class="alert-danger"><?php Functions::checkError(); ?></div>
                            <br>
                            <label class="form-label" style="-webkit-user-select: none;">Password</label>
                            <input name="password" class="form-control" style="-webkit-user-select: none;" placeholder="*******" id="logPass" type="password" autocomplete="off" required="required">
                        </div> <!-- col end.// -->

                        <div class="mb-3">
                            <label class="form-label" style="-webkit-user-select: none;">Password</label>
                            <a class="float-end" href="/reset">
                                <!-- Reset-->
                            </a>
                            <input name="newPassword" class="form-control" style="-webkit-user-select: none;" placeholder="New password" type="password"  autocomplete="false" required="required">
                        </div> <!-- col end.// -->
                        <div class="mb-3">
                            <label class="form-label" style="-webkit-user-select: none;">Password</label>
                            <a class="float-end" href="/reset">
                                <!-- Reset-->
                            </a>
                            <input name="rePassword" class="form-control" style="-webkit-user-select: none;" placeholder="New repeat password" type="password" autocomplete="false" required="required">
                        </div>
                        <div class="mb-3">
                            <label class="form-check">
                                <input class="form-check-input" type="checkbox" onclick="myFunction()">
                                <span class="form-check-label" style="-webkit-user-select: none;"> Show password </span>
                            </label>
                        </div>

                        <script>
                            function myFunction() {
                                var x = document.getElementById("logPass");
                                if (x.type === "password") {
                                    x.type = "text";
                                } else {
                                    x.type = "password";
                                }
                            }
                        </script>

                        <button class="btn w-100 btn-primary" type="submit"> Login</button>

                    </form action="/"> <!-- form end.// -->

                    <p class="text-divider my-4" style="-webkit-user-select: none;">No account ? </p>
                    <a href="/register" class="btn w-100 btn-light">Create new accaunt</a>

                </div> <!-- card-body end.// -->
            </div> <!-- card .// -->
            <!-- ====== COMPONENT LOGIN  END.// ====== -->
            <br><br>
        </div> <!-- container .//  -->
    </section>

<?php echo $this->view('layouts/footer') ?>