<!DOCTYPE html>
<html lang="en">

<?php include(APPPATH . 'include/admin/header.php') ?>
<title>File HQ - Change Password</title>
<body>
    <div class="splash active">
        <div class="splash-icon"></div>
    </div>

    <div class="wrapper">

        <!-- sidebar here -->

        <?php include(APPPATH . 'include/superadmin/sidebar.php') ?>


        <div class="main">


            <!-- navbar here -->
            <?php include(APPPATH . 'include/admin/navbar.php') ?>

            <main class="content">
                <div class="container-fluid">

                    <div class="header">
                        <h1 class="header-title">
                            <?php
											if (isset($_SESSION['name'])) {

												echo $_SESSION['name']." ".$_SESSION['surname'];
											} else {
												echo "n/a";
											}

											?>
                        </h1>
                        <!-- <p class="header-subtitle">You have 24 new messages and 5 new notifications.</p> -->
                    </div>
                    <?php
					// include(APPPATH . 'include/admin/message.php') 
					?>


                    <div class="row">
                        <div class="col-12 col-md-6 col-xxl-3 d-flex order-1 order-xxl-1">
                            <div class="card flex-fill">
                                <div class="card-header">
                                    <div class="card-actions float-right">

                                    </div>
                                    <h5 class="card-title mb-0">Calendar</h5>
                                </div>
                                <div class="card-body d-flex">
                                    <div class="align-self-center w-100">
                                        <div class="chart">
                                            <div id="datetimepicker-dashboard"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Change Password</h5>
                                </div>
                                <div class="card-body ">
                                    <div class="chart">
                                        <form id="validation-form"
                                            action="<?php echo base_url(); ?>processchangepassword"
                                            method="post">
                                            <div class="form-group">
                                                <label class="form-label">Old Password</label>
                                                <input type="password" autocomplete="off" class="form-control"
                                                    name="validation-old-password" placeholder="Old Password">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">New Password</label>
                                                <input type="password" autocomplete="off" class="form-control"
                                                    name="validation-password" placeholder="New Password">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Confirm password</label>
                                                <input type="password" class="form-control"
                                                    name="validation-password-confirmation"
                                                    placeholder="Confirm password">
                                            </div>
                                            <div class="text-center mt-3">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
                                            </div>
                                        </form>

                                        <br>
                                        <?php include(APPPATH . 'include/admin/message.php') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </main>

            <!-- footer here -->
            <?php include(APPPATH . 'include/admin/footer.php') ?>

        </div>

    </div>

    <svg width="0" height="0" style="position:absolute">
        <defs>
            <symbol viewBox="0 0 512 512" id="ion-ios-pulse-strong">
                <path
                    d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z">
                </path>
            </symbol>
        </defs>
    </svg>


    <?php include(APPPATH . 'include/superadmin/scripts.php') ?>


</body>

</html>