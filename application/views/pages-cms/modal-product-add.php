<?php echo form_open_multipart('Product_cms/addProduct');?>

              <div class="modal-header" style="background-color: orange;">
                <h5 class="modal-title" style="color: white;"><b>Add Product</b></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>

              <div class="modal-body">
                <div class="row">
                  <div class="col-lg-6">
                    <div style="text-align: left;"><b>Product ID</b>
                      <input name="prod-rec" type="hidden" style= "width: 100%; float: left;" class="form-control modal-id" />
                      <input name="prod-id" type="text" style= "width: 100%; float: left;" class="form-control modal-id" />
                    </div>
                  </div>
                  
                  <div class="col-lg-6">
                    <div style="text-align: left;"><b>Product Name</b>
                      <input name="prod-name" type="text" style= "width: 100%; float: left;" class="form-control modal-pname" />
                    </div>
                  </div>
                  
                  <div class="col-lg-6 mt-4">
                    <label for="inputCategory"><b>Category</b></label>
                    <select name="prod-category" id="inputCategory" class="form-control modal-categoryid">
                      <option value="UNI">UNI</option>
                      <option value="GIRLS">GIRLS</option>
                    </select>
                  </div>
                  
                  <div class="col-lg-6 mt-4">
                    <label for="modal-price"><b>Price</b></label>
                    <label class="sr-only" for="inlineFormInputGroup"></label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text">$</div>
                        </div>
                        <input name="prod-price" type="text" class="form-control modal-price" id="inlineFormInputGroup" >
                      </div>
                  </div>

                  <div class="col-lg-6 mt-4">
                    <label for="inputCategory"><b>Size</b></label>
                    <select name="prod-size" id="inputCategory" class="form-control modal-categoryid">
                      <option value="SMALL">SMALL</option>
                      <option value="LARGE">LARGE</option>
                    </select>
                  </div>

                  <div class="col-lg-6 mt-4">
                    <label for="inputCategory"><b>Status</b></label>
                    <select name="prod-status" id="inputCategory" class="form-control modal-status">
                      <option value="1">In Stock</option>
                      <option value="2">Out of Stock</option>
                    </select>
                  </div>
                  
                  <div class="col-lg-12 mt-4">
                    <div class="md-form">
                      <b>Description :</b>
                      <textarea name="prod-desc" id="form10" class="md-textarea form-control modal-desc" rows="3"></textarea>
                    </div>
                  </div>

                  <!-- <div class="row">
                    <div class="col-lg-5 ml-5 mt-4">
                      <img id="uploadprev2" src="<?php echo base_url('images/material/no-image.png');?>" style="width: 300px;height: 300px; "/>
                    </div>
                    <div class="col-lg-6 mt-4">
                      <div class="row">
                        <div class="col-lg-6 mt-4">
                          <input id="imgupload2" type="file" title="Product Image" name="file_image" />
                          <label style="margin-top: 1em;"><b>Color ID</b></label><input name="color-id" type="text" style= "width: 200%;" class="form-control" />
                          <label><b>Hexadecimal</b></label><input name="color-hex" type="text" style= "width: 200%;" class="form-control" /> -->
                          <!-- <input name="default-img" value="0" type="hidden" style= "width: 100%;" class="form-control" /> -->
                          <!-- <input name="product-id" type="hidden" style= "width: 100%;" class="form-control modal-id" /> -->
                          <!-- <label><b>Category</b></label>
                          <select style= "width: 200%;" name="prod-gender" id="inputCategory" class="form-control modal-categoryid">
                            <option value="boys">boys</option>
                            <option value="girls">girls</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div> -->

                    
                </div>
              </div>

              <div class="modal-footer">
                <button type="submit" class="btn btn-success">Save</button>
                <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
              </div>

<?php echo form_close();?>

<!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/cms/vendor/jquery/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('assets/cms/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/cms/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

  <!-- Page level plugin JavaScript-->
  <script src="<?php echo base_url('assets/cms/vendor/chart.js/Chart.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/cms/vendor/datatables/jquery.dataTables.js'); ?>"></script>
  <script src="<?php echo base_url('assets/cms/vendor/datatables/dataTables.bootstrap4.js'); ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('assets/cms/js/sb-admin.min.js'); ?>"></script>

  <!-- Demo scripts for this page-->
  <script src="<?php echo base_url('assets/cms/js/demo/datatables-demo.js'); ?>"></script>
  <script src="<?php echo base_url('assets/cms/js/demo/chart-area-demo.js'); ?>"></script> 

<!-- ---------Modal Script------------ -->
<script type="text/javascript">

  $( document ).ready(function() {

    function readPreview(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
    
        reader.onload = function(e) {
          $('#uploadprev2').attr('src', e.target.result);
        }
    
        reader.readAsDataURL(input.files[0]);
      }
    }

    $("#imgupload2").change(function() {
      readPreview(this);
    });



  });

</script>