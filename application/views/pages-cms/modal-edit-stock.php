<?php echo form_open('Maintain_Stock_cms/updateStock');?>
<?php foreach($stock->result() as $data): ?>


<!-- HEADER -->
<div class="modal-header" style="background-color: #4e73df  ;padding: 0.2rem;">
  <p style="color: white;margin-top: 0.5em; margin-left: 0.5em; font-size: 20px; font-weight: bold;">Edit Produk</p>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<!-- <?php echo $data->REC_ID; ?> -->

  <!-- Edit TEST -->
  <div class="modal-body" style="font-size: 14px;">
  <div class="form-group row">
     <input type="hidden" name="id" style="width: 100%" value="<?php echo $data->REC_ID;?>">
    <label class="col-sm-4 col-form-label" style="font-weight: bold;">Product ID</label>
    <div class="col-sm-8">
      <!-- <input type="text" name="stock_product_id" class="form-control" value="<?php echo $data->PRODUCT_ID;?>"> -->
      <select name="stock_product_id" class="custom-select" >
          <option selected><?php echo $data->PRODUCT_ID;?></option>
          <?php
          //------------ disini buat nampilin data yang di bawa tadi ...
          //------------ 
            foreach($select_product->result() as $r_brand){
              ?>
               <option value="<?php echo $r_brand->PROD_ID?>"><?php echo $r_brand->NAME?></option>
              <?php
            }
          ?>
        </select>
    </div>
  </div>
  <div class="row">
      <div class="col-md-4">
        <div style="text-align: left; margin-top: 1em;"><b>Name</b></div>
      </div>
      <div class="col-md-8">
        <!-- <input name="stock_product_id" type="text" style= "width: 100%; float: left;" class="form-control modal-id" /> -->
        <select name="stock_name" class="custom-select" style= "width: 100%; float: left; margin-top: 1em;">
          <option value=""><?php echo $data->NAME;?></option>
          <?php
          //------------ disini buat nampilin data yang di bawa tadi ...
          //------------ 
            foreach($select_name->result() as $r_brand){
              ?>
               <option value="<?php echo $r_brand->NAME?>"><?php echo $r_brand->NAME?></option>
              <?php
            }
          ?>
        </select>
      </div>
    </div>
  <div class="form-group row">
    <label class="col-sm-4 col-form-label" style="font-weight: bold; margin-top: 1em;">Color Code</label>
    <div class="col-sm-8">
      <!-- <input type="text" name="stock_color_code" class="form-control" value="<?php echo $data->COLOR_CODE;?>"> -->
      <select name="stock_color_code" class="custom-select" style= "width: 100%; float: left; margin-top: 1em;">
          <option selected><?php echo $data->COLOR_CODE;?></option>
          <?php
          //------------ disini buat nampilin data yang di bawa tadi ...
          //------------ 
            foreach($select_color->result() as $r_brand){
              ?>
               <option value="<?php echo $r_brand->ID?>"><?php echo $r_brand->ID?></option>
              <?php
            }
          ?>
        </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-4 col-form-label" style="font-weight: bold;">Stock</label>
    <div class="col-sm-8">
      <input type="text" name="stock_qty_stock" class="form-control" value="<?php echo $data->STOCK?>">
    </div>
  </div>
</div>



<div class="modal-footer">
  <button type="submit" class="btn btn-default btn-info">Save</button>
  <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
</div>

<?php endforeach; ?>
<?php echo form_close();?>