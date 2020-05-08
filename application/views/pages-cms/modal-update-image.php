<?php foreach($product->result() as $data): ?>

      <!-- Modal Image -->
       
              <div class="modal-header" style="background-color: orange;">
                <h5 class="modal-title" style="color: white; background-color: orange;"><b>Product List (Image Upload)</b></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>

              <div class="modal-body">
                <div class="row">
                  <div class="col-lg-6">
                    <div style="text-align: left;"><b>Product ID</b>
                      <input name="product-id" type="hidden" class="product-id"/>
                      <div><?php echo $data->PROD_ID;?></div>
                    </div>
                  </div>
                  
                  <div class="col-lg-6">
                    <div style="text-align: left;"><b>Product Name</b>
                      <!-- <input type="text" style= "width: 100%; float: left;" class="form-control modal-pname" /> -->
                      <!-- <input name="member_fname" style="width: 100%" value="<?php echo $data->NAME;?>"> -->
                      <div><?php echo $data->NAME;?></div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-12">
                    <hr>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-12">
                    <h5 style="text-align: left;"><b>Add Product Image</b></h5>  
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-12">
                    <hr>
                  </div>
                </div>
                
                <?php echo form_open_multipart('Product_cms/uploadImages');?>
                <div class="row">
                  <div class="col-md-4">
                    <img id="uploadprev" src="<?php echo base_url('images/material/no-image.png');?>" style="width: 220px;height: 220px; "/>
                    <input id="imgupload" type="file" title="Product Image" name="file_name" action="<?php echo base_url('Product_cms/uploadImages'); ?>" />
                  </div>


                  <div class="col-md-4">
                    <label><b style="color: orange;">Choose Existing Color</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; or </label><br>  
                    <label style="margin-top: 0.5em;"><b>Color ID</b></label>
                    <select style= "width: 80%;" onchange="colorchange(this.value)" name="inputColor" id="inputColor" class="form-control modal-categoryid">
                      <option>SELECT COLOR...</option>
                      <?php foreach($color->result() as $data_color): ?>
                        <option value="<?php echo $data_color->ID; ?>"><?php echo $data_color->ID; ?></option>
                      <?php endforeach; ?>                    
                    </select>

                    <label><b id="test">Hexadecimal</b></label>
                    <input disabled="true" type="text" id="inputHexa"  name="inputHexa" style= "width: 80%;" class="form-control" />
                    </input>
                    <input name="default-img" value="0" type="hidden" style= "width: 100%;" class="form-control" />
                    <input name="product-id" type="hidden" value="<?php echo $data->PROD_ID;?>" style= "width: 100%;" class="form-control modal-id" />
                    <br><label><b>Category</b></label>
                    <select style= "width: 80%;" name="prod-category" id="inputCategory" class="form-control modal-categoryid">
                      <option value="boys">boys</option>
                      <option value="girls">girls</option>
                    </select>
                  </div>

                  <div class="col-md-4">    
                    <label style="color: orange;"><b>Add New Color</b></label><br>
                    <label style="margin-top: 0.5em;"><b>Color ID</b></label>
                    <input name="color-id" type="text" style= "width: 80%;" class="form-control" />
                    <label><b>Hexadecimal</b></label>
                    <input name="color-hex" type="text" style= "width: 80%;" class="form-control" />
                    <input name="default-img" value="0" type="hidden" style= "width: 100%;" class="form-control" />
                    <input name="product-id" type="hidden" value="<?php echo $data->PROD_ID;?>" style= "width: 100%;" class="form-control modal-id" />
                    <br><br><br><br><input style="margin-left: 8em;" type="submit" class="form_button mt-4" value="Upload"/>
                  </div>
                  <?php echo form_close(); ?>
                </div>

                <div class="row">
                  <div class="col-lg-12">
                    <hr>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-12">
                    <h5 style="text-align: left;"><b>Product Detail Image</b></h5>  
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-12">
                    <hr>
                  </div>
                </div>

                
                <div class="row">
                  <div class="col-lg-12">
                    <div id="query-result" class="row">
                    <?php foreach($images->result() as $data): ?>
                    <?php
                    if($data->DEFAULT_IMAGE == '1') : 
                      $image_Default=$data->IMAGE;
                      ?>

                      <div class='col-lg-2 ml-3'>
                        <input type="radio" name="exampleRadios" id="exampleRadios" class="imagedefault"
                               data-id="<?php echo $data->PROD_ID; ?>"
                               data-hex="<?php echo $data->HEXADECIMAL; ?>"
                               data-color="<?php echo $data->COLOR_ID; ?>"
                               data-image="<?php echo $data->IMAGE; ?>"
                               checked value="<?php echo $data->IMAGE; ?>" onchange="updateImage('<?php echo $data->IMAGE; ?>,<?php echo $data->COLOR_ID; ?>')">
                        <img class="pt-1" src="<?php echo base_url($data->IMAGE); ?>" style="width: 100px;" />
                      </div>
                    <?php else: ?>
                      <div class='col-lg-2 ml-3'>
                        <input type="radio" name="exampleRadios" id="exampleRadios" class="imagedefault"
                               data-id="<?php echo $data->PROD_ID; ?>"
                               data-hex="<?php echo $data->HEXADECIMAL; ?>"
                               data-color="<?php echo $data->COLOR_ID; ?>"
                               data-image="<?php echo $data->IMAGE; ?>"
                               value="<?php echo $data->IMAGE; ?>" onchange="updateImage('<?php echo $data->IMAGE; ?>,<?php echo $data->COLOR_ID; ?>')">
                        <img class="pt-1" src="<?php echo base_url($data->IMAGE); ?>" style="width: 100px;" />
                      </div>
                    <?php endif; ?>
                    <?php endforeach; ?>
                    </div>
                  </div>   
                </div>
                  
              <!-- <div class="modal-footer"> -->
                <div class="row">
                  <div class="col-lg-4 mt-4" >
                    <!-- <div class="d-inline"> -->
                      <?php echo form_open('Product_cms/defaultImage');?>
                        <input type="hidden" id="default-id" name="product-id" value="<?php echo $data->PROD_ID;?>">
                        <input type="hidden" id="default-hex" name="product-hex" value="<?php echo $data->HEXADECIMAL;?>">
                        <input type="hidden" id="default-color" name="product-color" value="<?php echo $data->COLOR_ID;?>">
                        <input type="text" style="display: none;" id="default_image1" name="product-image" value="<?php echo $image_Default; ?>">
                        <button type="submit" class="btn btn-primary">Set Default Image</button>
                      <?php echo form_close();?>
                    <!-- </div> -->
                  </div>
                  <div class="col-lg-4 mt-4" >
                    <?php echo form_open('Product_cms/deleteImage');?>
                        <input type="hidden" id="delete-id" name="product-id" value="<?php echo $data->PROD_ID;?>">
                        <input type="hidden" id="delete-hex" name="product-hex" value="<?php echo $data->HEXADECIMAL;?>">
                        <input type="text" style="display: none;"  id="delete-color" name="product-color" value="<?php echo $data->COLOR_ID;?>">
                        <input  type="text" style="display: none;" id="delete-image" name="product-image" value="<?php echo $image_Default; ?>">
                        <button type="submit" class="btn btn-danger" style="margin-left: -6em;">Delete</button>
                      <?php echo form_close();?>
                  </div>
                  <div class="col-lg-4 mt-4" style="text-align: right;">
                    <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
                  </div>
                </div>
              <!-- </div> -->
            
            </div>
         
        <!-- End Modal Image -->

<?php endforeach; ?>

<script type="text/javascript">
function updateImage(data){
  var images=data.split(',');
 $('input[type=text][name=product-image]').val(images[0]);
 $('input[type=text][name=product-color]').val(images[1]);
}

    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
    
        reader.onload = function(e) {
          $('#uploadprev').attr('src', e.target.result);
        }
    
        reader.readAsDataURL(input.files[0]);
      }
    }

    $("#imgupload").change(function() {
      readURL(this);
    });


    function colorchange(id)
    {
     // alert(id);
      $.ajax({
        type: 'post',
        url: "<?php echo base_url('Product_cms/selectHexa')?>",
        data: { id: id} ,
          success: function(data){
                  //$("input[type='text'][name='inputHexa']").val(data);
                  $("input[type='text'][name='inputHexa']").val(data);
            }
        });
    }
  
</script>

