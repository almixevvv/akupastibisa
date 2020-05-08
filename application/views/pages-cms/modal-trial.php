<?php echo form_open('Trial_cms/updateTrial');?>
<?php foreach($details->result() as $data): ?>

  <div class="modal-header" style="padding: 0.2rem;background-color: orange;">
    <p style="background-color: orange;color: white;margin-top: 0.5em; margin-left: 0.5em; font-size: 20px; font-weight: bold;">View Home Trial Management</p>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

  <!-- ORDER NUMBER -->
  <div class="modal-body" style="font-size: 11px; ">
    <div class="row">
      <div class="col-lg-6">
        <div class="row">
          <div class="col-md-12" style="margin-top:0.5em;">
            <label style="width: 10em; font-weight: bold;">Order No</label>
            <input type="hidden" id="hidden-id" value="<?php echo $data->TRIAL_ID;?>">
            <label style="margin-left: 1em; font-weight: bold;">:</label>

            <!-- HIDDEN INPUT FOR FORM PURPOSE -->
            <input type="hidden" name="trial-no" value="<?php echo $data->TRIAL_ID; ?>">
            <!-- HIDDEN INPUT FOR FORM PURPOSE -->
            <span style="font-size: 11px;margin-left: 1em; font-weight: bold; color: #e09600"><?php echo $data->TRIAL_ID;?></span>
          </div>
          <label class="col-md-12">
            <label style="width: 10em; font-weight: bold;">Trial Start</label>
            <label style="margin-left: 1em; font-weight: bold;">:</label>
            <span style="font-size: 11px;margin-left: 1em; font-weight: bold; color: #e09600"><?php echo $data->TRIAL_START;?></span>
          </label>
          <label class="col-md-12" style="margin-top: -0.5em;">
            <label style="width: 10em; font-weight: bold;">Trial End</label>
            <label style="margin-left: 1em; font-weight: bold;">:</label>
            <span style="font-size: 11px;margin-left: 1em; font-weight: bold; color: #e09600"><?php echo $data->TRIAL_END;?></span>
          </label>
        </div>
      </div>
    <div class="col-lg-6">
      <div class="row">
        <div class="col-md-12">
            <label style="width: 10em; font-weight: bold;">Trial Status</label>
            <label style="margin-left: 1em; font-weight: bold;">:</label>
            <select name="trial-status" style="font-size: 11px; margin-left: 1em; width:14em;font-weight: bold;" class="custom-select">
              <?php
                if ($data->TRIAL_STATUS == 'CREATED'){
                  echo '<option selected value="CREATED">Created</option>';
                  echo '<option value="SENT TO CUSTOMER">Sent to Customer</option>';
                  echo '<option value="CUSTOMER ACCEPTED">Customer Accepted</option>';
                  echo '<option value="RETURNED">Returned</option>';
                  
                }
                else if ($data->TRIAL_STATUS == 'SENT TO CUSTOMER'){
                  echo '<option value="CREATED">Created</option>';
                  echo '<option selected value="SENT TO CUSTOMER">Sent to Customer</option>';
                  echo '<option value="CUSTOMER ACCEPTED">Customer Accepted</option>';
                  echo '<option value="RETURNED">Returned</option>';
                  
                }
                else if($data->TRIAL_STATUS == 'CUSTOMER ACCEPTED'){
                  echo '<option value="CREATED">Created</option>';
                  echo '<option value="SENT TO CUSTOMER">Sent to Customer</option>';
                  echo '<option selected value="CUSTOMER ACCEPTED">Customer Accepted</option>';
                  echo '<option value="RETURNED">Returned</option>';
                  
                }
                else if($data->TRIAL_STATUS == 'RETURNED'){
                  echo '<option value="CREATED">Created</option>';
                  echo '<option value="SENT TO CUSTOMER">Sent to Customer</option>';
                  echo '<option value="CUSTOMER ACCEPTED">Customer Accepted</option>';
                  echo '<option selected value="RETURNED">Returned</option>';
                 
                }

              ?>
            </select>
          </div>
        <div class="col-md-12">
          <label style="width: 10em; color: #e09600; font-weight: bold;">Last Update</label>
          <label style="margin-left: 1em; font-weight: bold; color: #e09600;">:</label>
          <label name="order-update" style="font-size: 11px;margin-left: 1em; font-weight: bold; color: #e09600"><?php echo $data->UPDATED;?> <?php echo 'by ADMIN'?></label>
        </div>
      </div>
    </div>
  </div>

  <hr>

  <div class="row" style="margin-bottom: -1em;">
    <div class="col-lg-6">
      <div style="text-align: left; color: #e09600; font-size: 12px; font-weight: bold;">MEMBER INFO</div>
    </div>
    <div class="col-lg-6">
      <div style="text-align: left; color: #e09600; font-size: 12px;font-weight: bold;">SHIPPING INFO</div>
    </div>
  </div>
  
  <hr>

  <div class="row">
    <div class="col-lg-6">
    <!-- MEMBER INFO -->
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-12">
              <label style="width: 5em; font-weight: bold;">Name</label>
              <label style="margin-left: 1em; font-weight: bold;">:</label>
              <div style="font-size: 11px; "><?php echo $data->FIRST_NAME;?> <?php echo $data->LAST_NAME;?></div>
            </div>
            <div class="col-md-12">
              <label style="width: 5em; font-weight: bold;margin-top: 1em;">Address</label>
              <label style="margin-left: 1em; font-weight: bold;">:</label><br>
              <span style="font-size: 11px;"><?php echo $data->ADDRESS;?></span><br>
              <span style="font-size: 11px;"><?php echo $data->PROVINCE;?></span><br>
              <span style="font-size: 11px;"><?php echo $data->POSTAL_CODE;?></span><br>
              <span style="font-size: 11px;"><?php echo $data->COUNTRY;?></span>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-12">
              <label style="width: 5em; font-weight: bold;">Mobile</label>
              <label style="margin-left: 1em; font-weight: bold;">:</label><br>
              <span style="color: #00b011; font-size: 11px; font-weight: bold;"><?php echo $data->PHONE;?></span>
              <a href="https://web.whatsapp.com/send?phone=+62 <?php echo substr($data->PHONE,1,12)?>" target="_blank">
                <i class="fab fa-whatsapp fa-2x" style="color: #00b011; margin-top: -1em"></i>
              </a>
            </div>
            <div class="col-md-12">
              <label style="width: 5em; font-weight: bold;margin-top: 1em;">Email</label>
              <label style="margin-left: 1em; font-weight: bold">:</label><br>
              <span style="font-size: 11px;font-weight: bold;color: #e09600;"><?php echo $data->EMAIL;?></span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-6">
    <!-- MEMBER INFO -->
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-12">
              <label style="width: 5em; font-weight: bold;">Name</label>
              <label style="margin-left: 1em; font-weight: bold;">:</label>
              <div style="font-size: 11px;"><?php echo $data->SHIPF_NAME;?> <?php echo $data->SHIPL_NAME;?></div>
            </div>
            <div class="col-md-12">
              <label style="width: 5em; font-weight: bold;margin-top: 1em;">Address</label>
              <label style="margin-left: 1em; font-weight: bold;">:</label><br>
              <span style="font-size: 11px;"><?php echo $data->ADDRESS_1;?></span><br>
              <span style="font-size: 11px;"><?php echo $data->ADDRESS_2;?></span><br>
              <span style="font-size: 11px;"><?php echo $data->SHIP_PROVINCE;?></span><br>
              <span style="font-size: 11px;"><?php echo $data->SHIP_POSTAL_CODE;?></span><br>
              <span style="font-size: 11px;"><?php echo $data->SHIP_COUNTRY;?></span>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-12">
              <label style="width: 5em; font-weight: bold;">Email</label>
              <label style="margin-left: 1em; font-weight: bold">:</label><br>
              <span style="font-size: 11px;font-weight: bold;color: #e09600"><?php echo $data->SHIP_EMAIL;?></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>

  <hr>
    <div style="margin-top: 1em; margin-bottom: -1em;">
      <p style="font-size: 15px;color: #e09600; font-weight: bold;">HOME TRIAL DETAIL</p>
    </div>
  <hr>

  <?php
    //GET v_g_order_detail
    $this->db->select('*');
    $this->db->from('v_g_trial_detail');
    $this->db->where('TRIAL_ID', $data->TRIAL_ID);

    $query = $this->db->get();
  ?>

  <?php 
  foreach($query->result() as $data): ?>

  <div class="row">
    <div class="col-lg-4">
      <div class="row">
        <div class="col-md-12">
          <img src="<?php echo base_url($data->IMAGE);?>"  style='width: 12em; margin-left: 3em;'/>
        </div>
      </div>
    </div>
    <div class="col-lg-4" style="margin-left: -4em;margin-bottom: 1em;"><b style="color: #e09600; ">PRODUCT INFO</b>
      <hr style="margin-top: 0em; margin-bottom: 0em;">
      <div class="row">
        <div class="col-md-12" style="margin-top: 1em;">
          <label style="width: 3em; font-weight: bold;">ID</label>
          <label style="margin-left: 1em; font-weight: bold;">:</label>
          <span style="font-size: 11px;color: #e09600;font-weight: bold;"><?php echo $data->PRODUCT_ID; ?></span>
          <!-- <input type="hidden" name="product_name_<?php echo $counter; ?>" value="<?php echo $dataproduct['detail']['id']; ?>"> -->
        </div>
        <div class="col-md-12">
          <label style="width: 3em; font-weight: bold;">Name</label>
          <label style="margin-left: 1em; font-weight: bold;">:</label>
          <span style="font-size: 11px;"><?php echo $data->PRODUCT_NAME; ?></span>
        </div>
      </div>
    </div>
    <div class="col-lg-4"><b style="color: #e09600; "></b>
      <!-- <hr style="margin-top: 0em; margin-bottom: 0em;"> -->
      <div class="row">
        <div class="col-md-12" style="margin-top: 2.5em;">
          <label style="width: 3em; font-weight: bold;">Color</label>
          <label style="margin-left: 1em; font-weight: bold;">:</label>
          <span style="font-size: 11px;"><?php echo $data->PRODUCT_COLOR; ?></span>
        </div>
        <div class="col-md-12">
          <label style="width: 3em; font-weight: bold;">Gender</label>
          <label style="margin-left: 1em; font-weight: bold;">:</label>
          <span style="font-size: 11px;text-transform: uppercase;"><?php echo $data->PRODUCT_CATEGORY; ?></span>
        </div>
        <div class="col-md-12">
          <label style="width: 3em; font-weight: bold;">Size</label>
          <label style="margin-left: 1em; font-weight: bold;">:</label>
          <span style="font-size: 11px;"><?php echo $data->SIZE; ?></span>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <?php
  endforeach; ?>
  <textarea style="margin-left: 3em; height: 7em; width: 13em" name="trial-notes"></textarea>
  <hr>

  <?php foreach($details->result() as $data): ?>

  <p style="text-align: right; clear:both; font-size: 14px;font-weight: bold;">Total Cost  &nbsp;
    <span  class="form-control" style= "width: 30%; float: right;font-size: 14px; font-weight: bold;border: 1px solid lightgrey;padding-top: 0.5em;padding-bottom: 0.5em; background-color: lightgrey;"><?php echo number_format('10',2); ?></span>
  </p><br>

  <div class="modal-footer">
    <button type="submit" class="btn btn-default btn-info">Save</button>
    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
  </div>

  <?php 
  endforeach; ?>

<?php echo form_close();?>

<script  type="text/javascript">

function sum() {
      var txtFirstNumberValue = document.getElementById('txt1').value.replace(",", "");
      var txtSecondNumberValue = document.getElementById('txt2').value;
      var result = parseFloat(txtFirstNumberValue) + parseFloat(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('txt3').innerHTML=formatNumber(result);
         document.getElementById('txt_input').value=result;
      }
}

function formatNumber(num) {
  return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
}

function Angkasaja(evt) {
  var charCode = (evt.which) ? evt.which : event.keyCode
  if (charCode > 31 && (charCode < 48 || charCode > 57))
    return false;
    return true;
}

</script>