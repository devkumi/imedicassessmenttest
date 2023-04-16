<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Grasp International">
    <meta name="author" content="Emmanuel Agyei-Kumi">
    <link rel="icon" type="image/png" href="<?php echo base_url() ?>asserts/img/avatars/graspfavicon.jpg"/>
    

    <!-- PICK ONE OF THE STYLES BELOW -->
    <link href="<?php echo base_url() ?>asserts/css/modern.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
    <!-- <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet"> -->
    <!-- <link href="https://cdn.datatables.net/searchpanes/2.0.0/css/searchPanes.dataTables.min.css" rel="stylesheet"> -->
    <!-- <link href="https://cdn.datatables.net/select/1.3.4/css/select.dataTables.min.css" rel="stylesheet"> -->
    
    <!-- <link href="css/dark.css" rel="stylesheet"> -->
    <!-- <link href="css/light.css" rel="stylesheet"> -->

    <!-- BEGIN SETTINGS -->
    <!-- You can remove this after picking a style -->
    <style>
    body {
        opacity: 0;
    }
    </style>
    <script src="<?php echo base_url() ?>asserts/js/settings.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
    <!-- END SETTINGS -->
    <link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->

<script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
<!-- <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script> -->
<!-- <script src="https://cdn.datatables.net/searchpanes/2.0.0/js/dataTables.searchPanes.min.js"></script> -->
<!-- <script src="https://cdn.datatables.net/select/1.3.4/js/dataTables.select.min.js"></script> -->

<style>
.imagegallery img {
    width: 20%;
    height: auto;
    border-radius: 5px;
    cursor: pointer;
    transition: .3s;
}
</style>

<script type="text/javascript">
$(window).on('load', function() {

    var error = "<?php echo $this->session->flashdata('Error'); ?>";
    var success = "<?php echo $this->session->flashdata('Success'); ?>";

    var successs = "<?php echo $this->session->flashdata('Successs'); ?>";

    
    if (error) {
        swal({
        type: "error",
        title: "Sorry",
        text: "<?php echo $this->session->flashdata('Error'); ?>",
        // text: "A custom <span style="color:#F8BB86">html<span> message.",
        html: true,
        // footer: '<a href="#">Why do I have this issue?</a>'
    });
    }

    if (success) {

       swal({
        type: "success",
        title: "Done",
        text: "<?php echo $this->session->flashdata('Success'); ?>",
        // text: "A custom <span style="color:#F8BB86">html<span> message.",
        html: true,
        // footer: '<a href="#">Why do I have this issue?</a>'
    });
    }
    

    

    if (successs) {

       swal({
        type: "success",
        title: "Welcome",
        text: "<?php echo $this->session->flashdata('Successs'); ?>",
        // text: "A custom <span style="color:#F8BB86">html<span> message.",
        html: true,
        // footer: '<a href="#">Why do I have this issue?</a>'
    });
    }
});
</script>
<script src="<?php echo base_url() ?>asserts/js/city_state.js"></script>
</head>
