<div class="modal fade" id="respondtoreport_<?php echo $ReportId; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Centered modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body m-3">
				<form action="<?php echo base_url(); ?>index.php/admin/respondtoreportform" method="POST">
					<div class="form-group">
						<label class="form-label">Report ID</label>
						<input type="text" value="<?php echo $ReportId ?>" required disabled class="form-control" name="validation-ReportId" >
					</div>
					<div class="form-group">
						<textarea name="content" required data-provide="markdown" rows="5"></textarea>
					</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">send</button>
				</form>
            </div>
			
        </div>
    </div>



