<!DOCTYPE html>
<html lang="en">

<?php include(APPPATH . 'include/superadmin/header.php') ?>
<title>File HQ | Users</title>


<body>
    <div class="splash active">
        <div class="splash-icon"></div>
    </div>

    <div class="wrapper">

        <!-- sidebar here -->

        <?php include(APPPATH . 'include/superadmin/sidebar.php') ?>


        <div class="main">


            <!-- navbar here -->
            <?php include(APPPATH . 'include/superadmin/navbar.php') ?>

            <main class="content">
                <div class="container-fluid">

                    <div class="header">
                        <h1 class="header-title">
                            Manage Users
                        </h1>
                        
                    </div>



                    <div class="row">
                        <div class="col-12">
                            <br>
                            <?php
                            // print_r($viewreports);
                            include(APPPATH . 'include/superadmin/message.php') ?>
                            <div class="card">
                                <div class="card-header">
                                    <div class="text-right">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add">Add User</button>
                                    </div>
                                    <h6 class="card-subtitle text-muted"></h6>
                                </div>
                                <div class="card-body">
                                    <table id="datatables-buttons" class="table table-striped" style="width:100%; font-size:15px;">
                                        <thead>
                                            <tr>
                                                <!-- <th>UserId</th> -->
                                                <!-- <th>ReportId</th> -->
                                                <!-- <th>Full Name</th> -->
                                                <th>Name</th>
                                                <th>Number</th>
                                                <th>Role</th>
                                                <th>Admin Status</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                        
                                            foreach ($getalladmin as $key) {

                                                $adminId = $key['user_Id'];
                                                $name = $key['name'];
                                                $surname = $key['surname'];
                                                $email = $key['email'];
                                                $number = $key['number'];
                                                $roleName = $key['roleName'];

                                                echo "<tr>";
                                                // echo '<td>' . $key['user_Id'] . '</td>';
                                                echo '<td>' . $key['name'] ." ".$key['surname'] . '</td>';
                                                echo '<td>' . $key['number'] . '</td>';
                                                echo '<td>' . $key['roleName'] . '</td>';


                                                if ($key['adminStatus'] == 0) {
                                                    $title = "Activate Account";
                                                    $ring = "activate";
                                                    echo "<td><a  href='#deactivate_$adminId' data-toggle='modal' data-target='#deactivate_$adminId'><span class='badge badge-danger'>Inactive</span></a></td>";
                                                }
                                                if ($key['adminStatus'] == 1) {

                                                    $title = "Deactivate Account";
                                                    $ring = "deactivate";
                                                    echo "<td><a  href='#deactivate_$adminId' data-toggle='modal' data-target='#deactivate_$adminId'><span class='badge badge-success'>Active</span></a></td>";
                                                }
                                                // echo '<td>'.$key['dateCreated'].'</td>';
                                                echo "<td><a  href='#edit_$adminId' data-toggle='modal' data-target='#edit_$adminId'><span class='badge badge-primary'>edit</span></a>
                                                <a  href='#reset_$adminId' data-toggle='modal' data-target='#reset_$adminId'><span class='badge badge-warning'>reset</span></a></td>";



                                                include(APPPATH . 'include/superadmin/modals/edit-user.php');
                                                include(APPPATH . 'include/superadmin/modals/activatedeactivate-account.php');
                                                echo '</tr>';
                                            }
                                            ?>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <!-- <th>AdminId</th> -->
                                                <!-- <th>ReportId</th> -->
                                                <!-- <th>Full Name</th> -->
                                                <th>Name</th>
                                                <th>Number</th>
                                                <th>Role</th>
                                                <th>Admin Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>



    </div>
    </main>

    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create Associates</h5>

                </div>
                <div class="modal-body m-3">
                    <form action="<?php echo base_url(); ?>adduser" method="POST" enctype="multipart/form-data" id="uploadForm">
                        <div class="form-group">
                            <label class="form-label">First Name</label>
                            <input type="text" required class="form-control" name="validation-name">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Surname</label>
                            <input type="text" required class="form-control" name="validation-surname">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input type="text" required class="form-control" name="validation-email">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Number</label>
                            <input type="number" step="1" min="0" required class="form-control" name="validation-number">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Role</label>
                            <select required name="role" class="form-control select2" id="AgencyDetails">
                                <option value="">Select Role</option>
                                <?php
                                foreach ($getallrole as $key) {
                                    echo '<option value=' . $key['roleId'] . '>' . $key['roleName'] . '</option>';
                                }
                                ?>
                            </select>
                            <!-- <small class="form-text text-muted">Example block-level help text here.</small> -->
                        </div>
                        
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">send</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- footer here -->
    <?php include(APPPATH . 'include/superadmin/footer.php') ?>

    </div>

    </div>

    <svg width="0" height="0" style="position:absolute">
        <defs>
            <symbol viewBox="0 0 512 512" id="ion-ios-pulse-strong">
                <path d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z">
                </path>
            </symbol>
        </defs>
    </svg>


    <?php include(APPPATH . 'include/superadmin/scripts.php') ?>


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <script type="text/javascript">
        var loadImg = function(event) {
            $('#frame').attr('src', URL.createObjectURL(event.target.files[0]));
        };

        var loadImage = function(event) {
            $('#frames').attr('src', URL.createObjectURL(event.target.files[0]));
        };
    </script>
    <script>
        $(function() {
            if (!window.Quill) {
                return $("#quill-editor,#quill-toolbar,#quill-bubble-editor,#quill-bubble-toolbar").remove();
            }
            var editor = new Quill("#quill-editor", {
                modules: {
                    toolbar: "#quill-toolbar"
                },
                placeholder: "Type something",
                theme: "snow"
            });
            var bubbleEditor = new Quill("#quill-bubble-editor", {
                placeholder: "Compose an epic...",
                modules: {
                    toolbar: "#quill-bubble-toolbar"
                },
                theme: "bubble"
            });
        });
    </script>


    <script>
        $(function() {
            // Datatables basic
            $('#datatables-basic').DataTable({
                responsive: true,
                "scrollX": true,
            });
            // Datatables with Buttons
            var datatablesButtons = $('#datatables-buttons').DataTable({
                lengthChange: 1,
                "order": [
                    [1, "asc"]
                ],
                buttons: ["copy", "print", "csv"],
                "scrollX": true,
                responsive: true
            });
            datatablesButtons.buttons().container().appendTo("#datatables-buttons_wrapper .col-md-6:eq(0)")
        });
    </script>



</body>

</html>