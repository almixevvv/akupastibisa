<?php foreach($product->result() as $data): ?>
<?php echo form_open('Product_cms/updateProduct');?>

              <div class="modal-header" style="background-color: orange;" >
                <h5 class="modal-title" style="color: white;"><b>Product List (Edit)</b></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>

              <div class="modal-body">
                <div class="row">
                  <div class="col-lg-6">
                    <div style="text-align: left;"><b>Product ID</b>
                      <input name="product-id" type="hidden" class="product-id" value="<?php echo $data->PROD_ID;?>" />
                      <div><?php echo $data->PROD_ID;?></div>
                    </div>
                  </div>
                  
                  <div class="col-lg-6">
                    <div style="text-align: left;"><b>Product Name</b>
                      <input name="prod-name" type="text" style= "width: 100%; float: left;" class="form-control modal-pname" value="<?php echo $data->NAME;?>" />
                    </div>
                  </div>
                  
                  <div class="col-lg-6 mt-4">
                    <label for="inputCategory"><b>Category</b></label>
                    <select name="prod-category" id="inputCategory" class="form-control modal-categoryid">
                      <option value="UNI" <?php if($data->CATEGORY=='UNI'){echo"selected=''";}?>>UNI</option>
                      <option value="GIRLS" <?php if($data->CATEGORY=='GIRLS'){echo"selected=''";}?>>GIRLS</option>
                    </select>
                  </div>
                  
                  <div class="col-lg-6 mt-4">
                    <label for="modal-price"><b>Price</b></label>
                    <label class="sr-only" for="inlineFormInputGroup"></label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text">$</div>
                        </div>
                        <input name="prod-price" type="text" class="form-control modal-price" id="inlineFormInputGroup" value="<?php echo $data->PRICE;?>">
                      </div>
                  </div>

                  <div class="col-lg-6 mt-4">
                    <label for="inputCategory"><b>Size</b></label>
                    <select name="prod-size" id="inputCategory" class="form-control modal-categoryid">
                      <option value="SMALL" <?php if($data->SIZE=='SMALL'){echo"selected=''";}?>>SMALL</option>
                      <option value="LARGE" <?php if($data->SIZE=='LARGE'){echo"selected=''";}?>>LARGE</option>
                    </select>
                  </div>

                  <div class="col-lg-6 mt-4">
                    <label for="inputCategory"><b>Status</b></label>
                    <select name="prod-status" id="inputCategory" class="form-control modal-status">
                      <option value="1" <?php if($data->AVAILABILITY=='1'){echo"selected=''";}?>>In Stock</option>
                      <option value="2" <?php if($data->AVAILABILITY=='2'){echo"selected=''";}?>>Out of Stock</option>
                    </select>
                  </div>
                  
                  <div class="col-lg-12 mt-4">
                    <div class="md-form">
                      <b>Description :</b>
                      <textarea name="prod-desc" id="form10" class="md-textarea form-control modal-desc" rows="3" ><?php echo $data->DESCRIPTION;?></textarea>
                    </div>
                  </div> 
                </div>
              </div>

              <div class="modal-footer">
                <button type="submit" class="btn btn-success">Save</button>
                <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
              </div>

<?php echo form_close();?>
<?php endforeach; ?>