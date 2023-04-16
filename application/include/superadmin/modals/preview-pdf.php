<div class="modal fade" id="preview_<?php echo $file_fileId ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Preview</h3>
                
            </div>
            <div class="modal-body m-3">
                <object data="<?php echo "base64,".$key['file_filepath']; ?>" type="application/pdf" width="100%" height="500px">
                <embed id="pdfID" type="text/html" width="100%" height="500px" src="data:application/pdf;base64,<?php echo $key['file_filepath']; ?>" />
                            </object>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">oK</button>
            </div>
        </div>
    </div>
</div>



