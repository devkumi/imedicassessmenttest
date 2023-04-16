<div class="modal fade" id="edit_<?php echo $adminId ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Co-ordinator</h5>
                
            </div>
            <div class="modal-body m-3">
                <form action="editcoordinate" method="POST">

                    <div class="form-group">
						<input type="hidden" value="<?php echo $adminId ?>" required readonly class="form-control" name="adminId" >
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
                        <label class="form-label">School</label>
                        <select required name="schoolId" class="form-control select2" id="AgencyDetails">
                            <option value="<?php echo $key['schoolId'] ?>"><?php echo $key['schoolName'] ?></option>
                            <?php 
                                foreach ($getallschool as $row) {
                                    echo '<option value=' . $row['schoolId'] . '>' . $row['schoolName'] . '</option>';
                                }
                            ?>
                        </select>
                        <!-- <small class="form-text text-muted">Example block-level help text here.</small> -->
                    </div>
                    <div class="form-group">
                        <label class="form-label">Role</label>
                        <select required name="role" class="form-control select2" id="AgencyDetails">
                            <option value="<?php echo $key['roleId'] ?>"><?php echo $key['roleName'] ?></option>
                            <?php 
                                foreach ($getallrole as $row) {
                                    echo '<option value='.$row['roleId'].'>'.$row['roleName'].'</option>';
                                }
                            ?>
                        </select>
                        <!-- <small class="form-text text-muted">Example block-level help text here.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="photo">Profile Picture</label>
                        <br><img id="frame" class="rounded-circle" width="100px" height="100px" />
                        <input type="file" name="images" class="form-control-file" id="file" accept="image/*" onchange="loadImg(event)">
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



