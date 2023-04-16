<!DOCTYPE html>
<html lang="en">

<?php 
function __construct()
{
    __construct();
    // $this->load->database();
    // $this->load->model('crud_model');
    // $this->load->model('login_model');
    $this->load->library('session', 'upload');
    $this->load->model('Superadmin_model');
    $this->load->helper('file');
}
include(APPPATH . 'include/superadmin/header.php') ?>
<title>File HQ | File</title>


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
                            Manage File
                        </h1>
                        <!-- <p class="header-subtitle">You have 24 new messages and 5 new notifications.</p> -->
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
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add">Add File</button>
                                    </div>
                                    <h6 class="card-subtitle text-muted"></h6>
                                </div>
                                <div class="card-body">
                                <div class="row">
                                    <?php

                                        // print_r($managefile);
                                        foreach ($managefile as $key) {
                                            
                                            $file_fileId = $key['file_fileId'];
                                            // echo $key['file_filepath'];
                                            $decoded_pdf_data = base64_decode($key['file_filepath']);
                                            // print_r($decoded_pdf_data);
                                            
                                            echo "
                                                    <div class='col-md-6 col-lg-3 col-xl-3 '>
                                                        <a  href='#preview_$file_fileId' data-toggle='modal' data-target='#preview_$file_fileId'>
                                                        <div class='card'>
                                                            <div class='card-body'>
                                                                <div class='row'>
                                                                    <div class='col mt-0'>
                                                                        <h5 class='card-title'>".$key['file_filename']."</h5>
                                                                    </div>
                            
                                                                    <div class='col-auto'>
                                                                        <div class='avatar'>
                                                                            <div class='avatar-title rounded-circle bg-primary-dark'>
                                                                                <i class='align-middle' data-feather=''></i>
                                                                            </div>
                                                                        </div>
                                                                 
                                                                    </div>
                                                                </div>
                                                                <div class='mb-0'>
                                                                    Type: <span class='text-success'> <i class='mdi mdi-arrow-bottom-right'> ".$key['file_filetype']."</i></span>
                                                                </div>
                                                                <div class='mb-0'>
                                                                    Size:<span class='text-success'> <i class='mdi mdi-arrow-bottom-right'></i> ".$key['file_filesize']." </span>
                                                                </div>
                                                                <div class='row'>
                                                                    <div class='col mt-0'>
                                                                            Uploaded by:<span class='text-success'> <i class='mdi mdi-arrow-bottom-right'></i> ".$key['users_name']." ".$key['users_surname']." </span>
                                                                    </div>
                                                                    <div class='col-auto'>
                                                                            
                                                                        <div class='mb-0'>
                                                                            Date:<span class='text-success'> <i class='mdi mdi-arrow-bottom-right'></i> ".$key['file_dateCreated']." </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </a>
                                                    </div>
                                                ";
                                         

                                                include(APPPATH . 'include/superadmin/modals/preview-pdf.php');
                                        }
                                    ?>
                                </div>
                                    

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>



    </div>
    </main>

    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add File</h5>

                </div>
                <div class="modal-body m-3">
                    <form action="<?php echo base_url(); ?>addfile" method="POST" enctype="multipart/form-data" id="uploadForm">
                        <div class="form-group">
                            <label class="form-label">File Name</label>
                            <input type="text" required class="form-control" name="validation-name">
                        </div>
                        <div class="form-group">
                            <label for="photo">Select File</label>
                            <!-- <br><img id="frames" class="rounded-circle" width="100px" height="100px" /> -->
                            <br>
                            <object id="frames" type="application/pdf" width="100%" height="500px">
                                <!-- <p>Unable to display PDF file. <a href="/uploads/media/default/0001/01/540cb75550adf33f281f29132dddd14fded85bfc.pdf">Download</a> instead.</p> -->
                            </object>
                            <input type="file" required name="doc" class="form-control-file" id="file" accept="pdf" onchange="loadImage(event)">
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
            $('#frames').attr('data', URL.createObjectURL(event.target.files[0]));
        };
    </script>
    <script>
        $(document).ready(function(){
    
            var multipleCancelButton = new Choices('#choices-multiple-remove-button1', {
            removeItemButton: true,
            maxItemCount:5,
            searchResultLimit:5,
            renderChoiceLimit:5,
            minItemCount:1
            }); 
            
            
        });
        $(document).ready(function(){
    
            var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
            removeItemButton: true,
            maxItemCount:5,
            searchResultLimit:5,
            renderChoiceLimit:5,
            minItemCount:1
            }); 
            
            
        });
        
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
                    [7, "desc"]
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