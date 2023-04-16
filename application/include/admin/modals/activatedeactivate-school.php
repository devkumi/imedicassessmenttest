<div class="modal fade" id="deactivate_<?php echo $schoolId; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title"><?php echo $title ?></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body m-3">
                <form action="<?php echo base_url(); ?>activatedeactivateschool" method="POST">
                    <div class="form-group">
                        <label class="form-label">Do you really want to deactivate <?php echo $schoolName; ?>'s Account?</label>
                        <input type="hidden" value="<?php echo $schoolId; ?>" name="schoolId" required class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="hidden" value="<?php echo $ring; ?>" name="key" required class="form-control">
                    </div>
                    <!-- <div class="form-group">
						<textarea name="content" required data-provide="markdown" rows="5"></textarea>
					</div> -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">send</button>
                </form>
            </div>

        </div>
    </div>
</div>






<div class="modal fade" id="details_<?php echo $schoolId; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">School Details</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body m-3">
                <div class="card">
                    <div class="card-header">
                        <div class="card-actions float-right">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row no-gutters">
                            <div class="col-sm-3 col-xl-12 col-xxl-4 text-center">
                                <img src="<?php echo base_url() ?>asserts/img/avatars/ghad.jpeg" width="64" height="64" class="rounded-circle mt-2" alt="Angelica Ramos">
                            </div>
                            <div class="col-sm-9 col-xl-12 col-xxl-8">
                                <h4><?php echo $schoolName; ?></h4>
                                <h5><?php echo $regionname; ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>