<!DOCTYPE html>
<html lang="en">

<?php include(APPPATH . 'include/admin/header.php') ?>
<title>File HQ - Forgot password</title>
<!-- SET YOUR THEME -->

<body class="theme-blue">
    <div class="splash active">
        <div class="splash-icon"></div>
    </div>

    <main class="main h-100 w-100">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center mt-4">
                            <h1 class="h2">Reset password</h1>
                            <p class="lead">
                                Enter your username and phone number to reset your password.
                            </p>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                    <form id="validation-form"
                                        action="<?php echo base_url(); ?>index.php/auth/processforgotpassword"
                                        method="post">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control form-control-lg" type="text" autocomplete="off"
                                                name="validation-username" placeholder="Enter your Username" />
                                        </div>

                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input class="form-control form-control-lg" type="text" autocomplete="off"
                                                name="validation-number" placeholder="Enter your Phone Number" />
                                        </div>
                                        <div class="text-center mt-3">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
                                        </div>

                                        <br>
                                        <?php include(APPPATH . 'include/admin/message.php') ?>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <svg width="0" height="0" style="position:absolute">
        <defs>
            <symbol viewBox="0 0 512 512" id="ion-ios-pulse-strong">
                <path
                    d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z">
                </path>
            </symbol>
        </defs>
    </svg>
    <script src="js/app.js"></script>
    <?php include(APPPATH . 'include/admin/scripts.php') ?>

</body>

</html>