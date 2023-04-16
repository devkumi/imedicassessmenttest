<div class="modal fade" id="edit_<?php echo $housenumber ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Edit House</h3>

            </div>
            <div class="modal-body m-3">
                <form action="<?php echo base_url(); ?>aedithouse" method="POST" enctype="multipart/form-data" id="uploadForm">

                    <div class="form-group">
                        <input type="hidden" value="<?php echo $schoolId ?>" required readonly class="form-control" name="schoolId">
                    </div>

                    <div class="form-group">
                        <input type="hidden" value="<?php echo $housenumber ?>" required readonly class="form-control" name="housenumber">
                    </div>

                    <div class="form-group">
                        <label class="form-label">House Name</label>
                        <input type="text" required value="<?php echo $housename ?>" class="form-control" name="housename">
                    </div>
                    <div class="form-group">
                        <label for="exampleColorInput" class="form-label">House Color</label>
                        <input type="color" class="form-control form-control-color" name="housecolor" value="<?php echo $color ?>" title="Choose your color">
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