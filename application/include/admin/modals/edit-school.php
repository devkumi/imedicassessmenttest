<div class="modal fade" id="edit_<?php echo $schoolId ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Edit School</h3>
                
            </div>
            <div class="modal-body m-3">
                <form action="<?php echo base_url(); ?>editschool" method="POST" enctype="multipart/form-data" id="uploadForm">

                    <div class="form-group">
						<input type="hidden" value="<?php echo $schoolId ?>" required readonly class="form-control" name="schoolId" >
					</div>
                    
                    <div class="form-group">
                        <label class="form-label">school Name</label>  
                        <input type="text" required value="<?php echo $schoolName ?>" class="form-control" name="schoolname">
                    </div>
                    <div class="form-group">
                            <label class="form-label">region</label>
                            <select required name="regionId" class="form-control select2" id="AgencyDetails">
                                <option value="<?php echo $regionId ?>"><?php echo $regionname ?></option>
                                <?php
                                foreach ($getallregions as $row) {
                                    echo '<option value=' . $row['regionId'] . '>' . $row['regionname'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    <!-- <div class="form-group">
                        <label class="form-label">Surname</label>  
                        <input type="text" required value="<?php echo $surname ?>" class="form-control" name="validation-surname">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Number</label>
                        <input type="text" required value="<?php echo $number ?>" class="form-control" name="validation-number">
                    </div> -->
                    <div class="form-group">
                            <label for="photo">Logo</label>
                            <input type="file" name="images" class="form-control-file" id="file" accept="image/*" onchange="loadImage(event)">

                            <img id="frames" class="img-circle" width="100px" height="100px" />
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



