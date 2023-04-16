<?php
if ($this->session->flashdata('error')) {
?>

<div class="col-sm-12">
    <div class="alert alert-danger alert-dismissible" role="alert">
        <div class="alert-message">
            <strong>Error </strong> <?php echo $this->session->flashdata('error'); ?>
        </div>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>

<?php
}


if ($this->session->flashdata('success')) {
?>
<div class="col-sm-12">


    <div class="alert alert-success alert-dismissible" role="alert">
        <div class="alert-message">
            <strong>Success </strong><?php echo $this->session->flashdata('success'); ?>
        </div>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>

<?php
}
?>