<div class="modal fade" id="edit_<?php echo $adminId ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Admin</h5>
                
            </div>
            <div class="modal-body m-3">
                <form action="<?php echo base_url(); ?>edituser" method="POST" enctype="multipart/form-data" id="uploadForm">

                    <div class="form-group">
						<input type="hidden" value="<?php echo $adminId ?>" required readonly class="form-control" name="userId" >
					</div>
                    <div class="form-group">
                        <label class="form-label">Email</label>  
                        <input type="email" required value="<?php echo $email ?>" class="form-control" name="validation-email">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Name</label>  
                        <input type="text" required value="<?php echo $name ?>" class="form-control" name="validation-name">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Surname</label>  
                        <input type="text" required value="<?php echo $surname ?>" class="form-control" name="validation-surname">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Number</label>
                        <input type="text" required value="<?php echo $number ?>" class="form-control" name="validation-number">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Role</label>
                        <select required name="role" class="form-control select2" id="AgencyDetails">
                            <option value="<?php echo $key['roleId'] ?>"><?php echo $key['roleName'] ?></option>
                            <?php 
                                foreach ($getallrole as $getallrolerow) {
                                    echo '<option value='.$getallrolerow['roleId'].'>'.$getallrolerow['roleName'].'</option>';
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



