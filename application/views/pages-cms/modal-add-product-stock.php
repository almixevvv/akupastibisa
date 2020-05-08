<?php echo form_open('Maintain_Stock_cms/addProductStock');?>

  <div class="modal-header" style="background-color: orange;">
    <h5 class="modal-title" style="color: white;"><b>Add Product Stock</b></h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
  </div>

  <div class="modal-body">
    <div class="row">
      <div class="col-md-4">
        <div style="text-align: left;"><b>Product ID</b></div>
      </div>
      <div class="col-md-8">
        <!-- <input name="stock_product_id" type="text" style= "width: 100%; float: left;" class="form-control modal-id" /> -->
        <select required name="stock_product_id" id="stock_product_id" class="custom-select" style= "width: 100%; float: left;">
          <option value="" >Select Product</option>
          <?php
          //------------ disini buat nampilin data yang di bawa tadi ...
          //------------ 
            foreach($select_product->result() as $r_brand){
              ?>
               <option value="<?php echo $r_brand->PROD_ID?>"><?php echo $r_brand->PROD_ID.' - '.$r_brand->NAME?></option>
              <?php
            }
          ?>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div style="text-align: left; margin-top: 1em;"><b>Color Code</b></div>
      </div>
      <div class="col-md-8">
        <!-- <input name="stock_color_code" type="text" style= "width: 100%; float: left; margin-top: 1em;" class="form-control modal-id" /> -->
        <select required name="stock_color_code" id="stock_color_code" class="custom-select" style= "width: 100%; float: left; margin-top: 1em;">
          <option value="">Select Color</option>
          <?php
            foreach($select_color->result() as $r_brand){
              ?>
               <option value="<?php echo $r_brand->ID?>"><?php echo $r_brand->ID?></option>
              <?php
            }
          ?>
        </select>

      </div>
      <strong><label id="productName1" style="font-size: 10px;"></label></strong></label><br>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div style="text-align: left; margin-top: 1em;"><b>Stock</b></div>
      </div>
      <div class="col-md-8">
        <input required id="intTextBox" name="stock_qty_stock" type="text" style= "width: 100%; float: left; margin-top: 1em;" class="form-control modal-id" onkeypress="return isNumber(event)" onpaste="return false;" />
      </div>
    </div>

  </div>

  <div class="modal-footer">
    <button type="submit" class="btn btn-success">Save</button>
    <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
  </div>

<?php echo form_close();?>

<script>
  function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if ( (charCode > 31 && charCode < 48) || charCode > 57) {
            return false;
        }
        return true;
    }

    // $(document).ready(function(){
 
    //         $('#stock_product_id').change(function(){ 
    //             var id=$(this).val();
    //             $.ajax({
                    // url : "<?php //echo site_url('Maintain_Stock_cms/get_color_stock');?>",
    //                 method : "POST",
    //                 data : {id: id},
    //                 async : true,
    //                 dataType : 'json',
    //                 success: function(data){
                         
    //                     var html = '';
    //                     var i;
    //                     for(i=0; i<data.length; i++){
    //                         html += '<option value='asd'</option>';
    //                     }
    //                     $('#stock_color_code').html(html);
 
    //                 }
    //             });
    //             return false;
    //         }); 
             
    //     });

    $.ajax({
        url: 'Maintain_Stock_cms/get_color_stock',
        method: 'GET',
        dataType: 'json',
        contentType: 'application/json',
        async: false,
        success: function(data) {
            $("#stock_product_id").autocomplete({
                source: data,
                select: function(event, ui) {
                    $.ajax({
                        url: "Maintain_Stock_cms/get_nama_product",
                        method: "GET",
                        data: {
                            PROD_ID: ui.item.value
                        },
                        async: false,
                        dataType: 'json',
                        success: function(data) {
                          
                                $('#productName1').text(data.COLOR_ID);
                                // let convertTime = data.END_TIME * 60000;
                                // let inputWeight = $('#floatTextBox1').val();
                               // console.log(snapshot);
                                //saveDataBatch(convertTime, ui.item.value, idkamera1, inputWeight);
                           
                        }
                    });
                }
            });
        },
        error: function(ex) {
            console.log(ex.responseText);
        }
    });
</script>