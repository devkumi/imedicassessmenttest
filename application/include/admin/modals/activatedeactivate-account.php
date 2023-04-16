<div class="modal fade" id="deactivate_<?php echo $adminId; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title"><?php echo $title ?></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body m-3">
                <form action="activatedeactivatecoordinate" method="POST">
                    <div class="form-group">
                        <label class="form-label">Do you really want to deactivate <?php echo $name; ?>'s Account?</label>
                        <input type="hidden" value="<?php echo $adminId; ?>" name="adminId" required class="form-control">
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






<div class="modal fade" id="reset_<?php echo $adminId; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Reset Password</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body m-3">
                <form action="<?php echo base_url(); ?>activatedeactivatecoordinate" method="POST">
                    <div class="form-group">
                        <label class="form-label">Do you really want to deactivate <?php echo $name; ?>'s Account?</label>
                        <input type="hidden" value="<?php echo $adminId; ?>" name="adminId" required class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="hidden" value="reset" name="key" required class="form-control">
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