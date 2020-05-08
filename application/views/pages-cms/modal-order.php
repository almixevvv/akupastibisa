<?php echo form_open('Order_cms/updateOrder'); ?>


  <div class="modal-header" style="padding: 0.2rem;background-color: orange;">
    <p style="background-color: orange;color: white;margin-top: 0.5em; margin-left: 0.5em; font-size: 20px; font-weight: bold;">View Order Management</p>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

  <!-- ORDER NUMBER -->
  <div class="modal-body" style="font-size: 11px; ">
    <div class="container">
      <div class="row">
        <!-- Left side -->
        <div class="col-lg-6">
          <?php foreach ($details->result() as $data) : ?>
          <!-- Frame Order -->
          <div class="row">
            <div class="col-lg-6">
              <div class="row">
                <div class="col-md-12" style="margin-top:0.5em;">
                  <label style=" font-weight: bold;">Order No</label>
                  <input type="hidden" id="hidden-id" value="<?php echo $data->ORDER_ID; ?>">
                  <label style="margin-left: 4em; font-weight: bold;">:</label>

                  <!-- HIDDEN INPUT FOR FORM PURPOSE -->
                  <input type="hidden" name="order-no" value="<?php echo $data->ORDER_ID; ?>">
                  <!-- HIDDEN INPUT FOR FORM PURPOSE -->
                  <span style="font-size: 11px; margin-left: 1em; font-weight: bold; color: #e09600"><?php echo $data->ORDER_ID; ?></span>
                </div>

              </div>
              <div class="row">
                <label class="col-md-12">
                  <label style="font-weight: bold;">Order Date</label>
                  <label style="margin-left: 3.2em; font-weight: bold;">:</label>
                  <span style="font-size: 11px; margin-left: 1em; font-weight: bold; color: #e09600"><?php echo $data->ORDER_DATE; ?></span>
                </label>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-md-12">
                  <label style="width: 6em; font-weight: bold;">Order Status</label>
                  <label style="margin-left: 1em; font-weight: bold;">:</label>
                  <select name="order-status" style="font-size: 11px; margin-left: 1em; width:14em;font-weight: bold;" class="custom-select">

                    <?php
                    if ($data->ORDER_STATUS == 'PAID') {
                      echo '<option selected value="PAID">Paid</option>';
                      echo '<option value="SENT TO LAB">Sent to Lab</option>';
                      echo '<option value="RECEIVED PARTIALY">Received Partialy</option>';
                      echo '<option value="RECEIVED COMPLETELY">Received Completely</option>';
                      echo '<option value="ORDER DISPATCHED">Order Dispatched</option>';
                    } else if ($data->ORDER_STATUS == 'SENT TO LAB') {
                      echo '<option value="PAID">Paid</option>';
                      echo '<option selected value="SENT TO LAB">Sent to Lab</option>';
                      echo '<option value="RECEIVED PARTIALY">Received Partialy</option>';
                      echo '<option value="RECEIVED COMPLETELY">Received Completely</option>';
                      echo '<option value="ORDER DISPATCHED">Order Dispatched</option>';
                    } else if ($data->ORDER_STATUS == 'RECEIVED PARTIALY') {
                      echo '<option value="PAID">Paid</option>';
                      echo '<option value="SENT TO LAB">Sent to Lab</option>';
                      echo '<option selected value="RECEIVED PARTIALY">Received Partialy</option>';
                      echo '<option value="RECEIVED COMPLETELY">Received Completely</option>';
                      echo '<option value="ORDER DISPATCHED">Order Dispatched</option>';
                    } else if ($data->ORDER_STATUS == 'RECEIVED COMPLETELY') {
                      echo '<option value="PAID">Paid</option>';
                      echo '<option value="SENT TO LAB">Sent to Lab</option>';
                      echo '<option value="RECEIVED PARTIALY">Received Partialy</option>';
                      echo '<option selected value="RECEIVED COMPLETELY">Received Completely</option>';
                      echo '<option value="ORDER DISPATCHED">Order Dispatched</option>';
                    } else if ($data->ORDER_STATUS == 'ORDER DISPATCHED') {
                      echo '<option value="PAID">Paid</option>';
                      echo '<option value="SENT TO LAB">Sent to Lab</option>';
                      echo '<option value="RECEIVED PARTIALY">Received Partialy</option>';
                      echo '<option value="RECEIVED COMPLETELY">Received Completely</option>';
                      echo '<option selected value="ORDER DISPATCHED">Order Dispatched</option>';
                    }

                    ?>
                  </select>
                  <input type="hidden" name="order-current-status" value="<?php echo $data->ORDER_STATUS ?>">
                </div>
                <div class="col-md-12">
                  <label style="width: 6em; color: #e09600; font-weight: bold;">Last Update</label>
                  <label style="margin-left: 1em; font-weight: bold; color: #e09600;">:</label>
                  <label name="order-update" style="font-size: 11px;margin-left: 1em; font-weight: bold; color: #e09600"><?php echo $data->UPDATED; ?> <?php echo 'by ADMIN' ?></label>
                </div>
              </div>
            </div>

            
            <div class="col-lg-6">
              <div class="row">
                <div class="col-md-12">
                  <label style=" font-weight: bold;">Order Warranty</label>
                  <label style="margin-left: 1em; font-weight: bold;">:</label>
                  <select name="order-warranty" style="font-size: 11px; margin-left: 1em; width:14em;font-weight: bold;" class="custom-select">
                    <option value="No Warranty">No Warranty</option>
                    <option value="Warranty Accepted">Warranty Accepted</option>
                    <option value="Warranty Rejected">Warranty Rejected</option>
                  </select>
                </div>
              </div>
            </div>
          </div>

          <hr>
          <!-- BAR MEMBER INFO -->
          <div class="row" style="margin-bottom: -1em;">
            <div class="col-lg-6">
              <div style="text-align: left; color: #e09600; font-size: 12px; font-weight: bold;">MEMBER INFO</div>
            </div>
            <div class="col-lg-6">
              <div style="text-align: left; color: #e09600; font-size: 12px;font-weight: bold;">SHIPPING INFO</div>
            </div>
          </div>

          <hr>
          <!-- CONTENT MEMBER INFO -->
          <div class="row">
            <div class="col-lg-6">
              
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-12">
                      <label style="width: 5em; font-weight: bold;">Name</label>
                      <label style="margin-left: 1em; font-weight: bold;">:</label>
                      <div style="font-size: 11px;"><?php echo $data->FIRST_NAME; ?> <?php echo $data->LAST_NAME; ?></div>
                    </div>
                    <div class="col-md-12">
                      <label style="width: 5em; font-weight: bold;margin-top: 1em;">Address</label>
                      <label style="margin-left: 1em; font-weight: bold;">:</label><br>
                      <span style="font-size: 11px;"><?php echo $data->ADDRESS; ?></span><br>
                      <span style="font-size: 11px;"><?php echo $data->PROVINCE; ?></span><br>
                      <span style="font-size: 11px;"><?php echo $data->POSTAL_CODE; ?></span><br>
                      <span style="font-size: 11px;"><?php echo $data->COUNTRY; ?></span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-12">
                      <label style="width: 5em; font-weight: bold;">Mobile</label>
                      <label style="margin-left: 1em; font-weight: bold;">:</label><br>
                      <span style="color: #00b011; font-size: 11px; font-weight: bold;"><?php echo $data->PHONE; ?></span>
                      <a href="https://web.whatsapp.com/send?phone=+62 <?php echo substr($data->PHONE, 1, 12) ?>" target="_blank">
                        <i class="fab fa-whatsapp fa-2x" style="color: #00b011; margin-top: -1em"></i>
                      </a>
                    </div>
                    <div class="col-md-12">
                      <label style="width: 5em; font-weight: bold;margin-top: 1em;">Email</label>
                      <label style="margin-left: 1em; font-weight: bold">:</label><br>
                      <span style="font-size: 11px;font-weight: bold;color: #e09600;"><?php echo $data->EMAIL; ?></span>
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
                      <div style="font-size: 11px;"><?php echo $data->SHIPF_NAME; ?> <?php echo $data->SHIPL_NAME; ?></div>
                    </div>
                    <div class="col-md-12">
                      <label style="width: 5em; font-weight: bold;margin-top: 1em;">Address</label>
                      <label style="margin-left: 1em; font-weight: bold;">:</label><br>
                      <span style="font-size: 11px;"><?php echo $data->ADDRESS_1; ?></span><br>
                      <span style="font-size: 11px;"><?php echo $data->ADDRESS_2; ?></span><br>
                      <span style="font-size: 11px;"><?php echo $data->SHIP_PROVINCE; ?></span><br>
                      <span style="font-size: 11px;"><?php echo $data->POSTAL_CODE; ?></span><br>
                      <span style="font-size: 11px;"><?php echo $data->SHIP_COUNTRY; ?></span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-12">
                      <label style="width: 5em; font-weight: bold;">Mobile</label>
                      <label style="margin-left: 1em; font-weight: bold;">:</label><br>
                      <span style="color: #00b011; font-size: 11px; font-weight: bold;"><?php echo $data->PHONE; ?></span>
                      <a href="https://web.whatsapp.com/send?phone=+62 <?php echo substr($data->PHONE, 1, 12) ?>" target="_blank">
                        <i class="fab fa-whatsapp fa-2x" style="color: #00b011; margin-top: -1em"></i>
                      </a>
                    </div>
                    <div class="col-md-12">
                      <label style="width: 5em; font-weight: bold;margin-top: 1em;">Email</label>
                      <label style="margin-left: 1em; font-weight: bold">:</label><br>
                      <span style="font-size: 11px;font-weight: bold;color: #e09600;"><?php echo $data->SHIP_EMAIL; ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
          
          <!-- BAR Detail Order -->
          <hr>
          <div style="margin-top: 1em; margin-bottom: -1em;">
            <p style="font-size: 15px;color: #e09600; font-weight: bold;">DETAIL ORDER</p>
          </div>
          <hr>

          <?php
          //GET v_g_order_detail
          $this->db->select('*');
          $this->db->from('v_g_order_detail');
          $this->db->where('ORDER_ID', $data->ORDER_ID);

          $query = $this->db->get();
          ?>

          <?php
          $product_amount = 0;
          $counter = 1;
          foreach ($query->result() as $data) : ?>
            <!-- Product & Lens Info -->
            <div class="row">
              <div class="col-lg-3">
                <div class="row">
                  <div class="col-md-12">
                    <img src="<?php echo base_url($data->IMAGE); ?>" style='width: 11em;' />
                  </div>
                </div>
              </div>
              <div class="col-lg-3" style="margin-left: -4em;margin-bottom: 1em;"><b style="color: #e09600; ">PRODUCT INFO</b>
                <hr style="margin-top: 0em; margin-bottom: 0em;">
                <div class="row">
                  <div class="col-md-12" style="margin-top: 1em;">
                    <label style="width: 3em; font-weight: bold;">ID</label>
                    <label style="margin-left: 1em; font-weight: bold;">:</label>
                    <span style="font-size: 11px;color: #e09600;font-weight: bold;"><?php echo $data->PROD_ID; ?></span>
                    <!-- <input type="hidden" name="product_name_<?php echo $counter; ?>" value="<?php echo $dataproduct['detail']['id']; ?>"> -->
                  </div>
                  <div class="col-md-12">
                    <label style="width: 3em; font-weight: bold;">Name</label>
                    <label style="margin-left: 1em; font-weight: bold;">:</label>
                    <span style="font-size: 11px;"><?php echo $data->PROD_NAME; ?></span>
                  </div>
                  <div class="col-md-12">
                    <label style="width: 3em; font-weight: bold;">Color</label>
                    <label style="margin-left: 1em; font-weight: bold;">:</label>
                    <span style="font-size: 11px;"><?php echo $data->COLOR_ID; ?></span>
                  </div>
                  <div class="col-md-12">
                    <label style="width: 3em; font-weight: bold;">Gender</label>
                    <label style="margin-left: 1em; font-weight: bold;">:</label>
                    <span style="font-size: 11px;text-transform: uppercase;"><?php echo $data->CATEGORY; ?></span>
                  </div>
                  <div class="col-md-12">
                    <label style="width: 3em; font-weight: bold;">Size</label>
                    <label style="margin-left: 1em; font-weight: bold;">:</label>
                    <span style="font-size: 11px;"><?php echo $data->SIZE; ?></span>
                  </div>
                  <div class="col-md-12">
                    <label style="width: 3em; font-weight: bold;">Price</label>
                    <label style="margin-left: 1em; font-weight: bold;">:</label>
                    <span style="font-size: 11px;color: #e09600;font-weight: bold;"><?php echo number_format($data->FRAME_PRICE, 2); ?></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-3"><b style="color: #e09600; ">LENS INFO</b>
                <hr style="margin-top: 0em; margin-bottom: 0em;">
                <div class="row">
                  <div class="col-md-12" style="margin-top: 1em;">
                    <label style="width: 5em; font-weight: bold;">Name</label>
                    <label style="margin-left: 1em; font-weight: bold;">:</label>
                    <span style="font-size: 11px;"><?php echo $data->LENS_NAME; ?></span>
                  </div>
                  <div class="col-md-12">
                    <label style="width: 5em; font-weight: bold;">L.Code</label>
                    <label style="margin-left: 1em; font-weight: bold;">:</label>
                    <span style="font-size: 11px;"><?php echo $data->LENS_CODE; ?></span>
                  </div>
                  <div class="col-md-12">
                    <label style="width: 5em; font-weight: bold;">L.Price</label>
                    <label style="margin-left: 1em; font-weight: bold;">:</label>
                    <span style="font-size: 11px;color: #e09600;font-weight: bold;"><?php echo $data->LENS_PRICE; ?></span>
                  </div>
                  <div class="col-md-12">
                    <label style="width: 5em; font-weight: bold;">L.Code 2</label>
                    <label style="margin-left: 1em; font-weight: bold;">:</label>
                    <span style="font-size: 11px;"><?php echo $data->LENS_CODE_2; ?></span>
                  </div>
                  <div class="col-md-12">
                    <label style="width: 5em; font-weight: bold;">L.Price 2</label>
                    <label style="margin-left: 1em; font-weight: bold;">:</label>
                    <span style="font-size: 11px;color: #e09600;font-weight: bold;"><?php echo $data->LENS_PRICE_2; ?></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-3"><b style="color: #e09600; ">FRAME STATUS</b>
                <hr style="margin-top: 0em; margin-bottom: 1em;">
                <div class="row">
                  <input type="hidden" name="detail-no" value="<?php echo $data->ORDER_ID; ?>">
                  <input type="hidden" name="detail-prod[]" value="<?php echo $data->PROD_ID; ?>">
                  <select name="detail-status[]" style="font-size: 11px; margin-left: 1em; width:10em;font-weight: bold;" class="custom-select">
                    <?php
                    if ($data->DETAIL_STATUS == '') {
                      echo '<option value="Sent to Lab">Sent to Lab</option>';
                      echo '<option value="Received">Received</option>';
                    } else if ($data->DETAIL_STATUS == 'Sent to Lab') {
                      echo '<option selected value="Sent to Lab">Sent to Lab</option>';
                      echo '<option value="Received">Received</option>';
                    } else if ($data->DETAIL_STATUS == 'Received') {
                      echo '<option value="Sent to Lab">Sent to Lab</option>';
                      echo '<option selected value="Received">Received</option>';
                    }
                    ?>
                  </select>
                </div>
              </div>
            </div>
            <!-- Pres Info -->
            <div class="row">
              <div class="col-lg-3">
                <div class="row">
                  <div class="col-md-12">
                    <!-- <img src="<?php echo base_url($data->IMAGE); ?>"  style='width: 11em;'/> -->
                  </div>
                </div>
              </div>
              <div class="col-lg-3" style="margin-left: -4em;margin-bottom: 1em;"><b style="color: #e09600; ">PRESCRIPTION INFO</b>
                <hr style="margin-top: 0em; margin-bottom: 0em;">
                 <!-- Right -->
                <div class="row">
                  <div class="col-md-12" style="margin-top: 1em;">
                    <label style="width: 5em; font-weight: bold;">R.Sphere</label>
                    <label style="margin-left: 1em; font-weight: bold;">:</label>
                    <span style="font-size: 11px;color: #e09600;font-weight: bold;"><?php echo $data->RIGHT_SPHERE; ?></span>
                    <!-- <input type="hidden" name="product_name_<?php echo $counter; ?>" value="<?php echo $dataproduct['detail']['id']; ?>"> -->
                  </div>
                  <div class="col-md-12">
                    <label style="width: 5em; font-weight: bold;">R.Cylinder</label>
                    <label style="margin-left: 1em; font-weight: bold;">:</label>
                    <span style="font-size: 11px;color: #e09600;font-weight: bold;"><?php echo $data->RIGHT_CYLINDER; ?></span>
                  </div>
                  <div class="col-md-12">
                    <label style="width: 5em; font-weight: bold;">R.Prism</label>
                    <label style="margin-left: 1em; font-weight: bold;">:</label>
                    <span style="font-size: 11px;color: #e09600;font-weight: bold;"><?php echo $data->RIGHT_PRISM; ?></span>
                  </div>
                  <div class="col-md-12">
                    <label style="width: 5em; font-weight: bold;">R.Axis</label>
                    <label style="margin-left: 1em; font-weight: bold;">:</label>
                    <span style="font-size: 11px;color: #e09600;font-weight: bold;"><?php echo $data->RIGHT_AXIS; ?></span>
                  </div>
                  <div class="col-md-12">
                    <label style="width: 5em; font-weight: bold;">R.Add</label>
                    <label style="margin-left: 1em; font-weight: bold;">:</label>
                    <span style="font-size: 11px;color: #e09600;font-weight: bold;"><?php echo $data->RIGHT_ADD; ?></span>
                  </div>
                  <div class="col-md-12">
                    <label style="width: 5em; font-weight: bold;">R.Direction</label>
                    <label style="margin-left: 1em; font-weight: bold;">:</label>
                    <span style="font-size: 11px;color: #e09600;font-weight: bold;"><?php echo $data->RIGHT_DIRECTION; ?></span>
                  </div>
                  <div class="col-md-12">
                    <!--<label style="width: 5em; font-weight: bold;">R.Pupillary</label>-->
                    <!--<label style="margin-left: 1em; font-weight: bold;">:</label>-->
                    <!--<span style="font-size: 11px;color: #e09600;font-weight: bold;"><?php echo $data->RIGHT_PUPILLARY; ?></span>-->
                  </div>
                </div>
              </div>
              <div class="col-lg-3" style="margin-top: 1.5em;"><b style="color: #e09600; "></b>
                <hr style="margin-top: 0em; margin-bottom: 0em;">
                <!-- Left -->
                <div class="row">
                  <div class="col-md-12" style="margin-top: 1em;">
                    <label style="width: 5em; font-weight: bold;">L.Sphere</label>
                    <label style="margin-left: 1em; font-weight: bold;">:</label>
                    <span style="font-size: 11px;color: #e09600;font-weight: bold;"><?php echo $data->LEFT_SPHERE; ?></span>
                    <!-- <input type="hidden" name="product_name_<?php echo $counter; ?>" value="<?php echo $dataproduct['detail']['id']; ?>"> -->
                  </div>
                  <div class="col-md-12">
                    <label style="width: 5em; font-weight: bold;">L.Cylinder</label>
                    <label style="margin-left: 1em; font-weight: bold;">:</label>
                    <span style="font-size: 11px;color: #e09600;font-weight: bold;"><?php echo $data->LEFT_CYLINDER; ?></span>
                  </div>
                  <div class="col-md-12">
                    <label style="width: 5em; font-weight: bold;">L.Prism</label>
                    <label style="margin-left: 1em; font-weight: bold;">:</label>
                    <span style="font-size: 11px;color: #e09600;font-weight: bold;"><?php echo $data->LEFT_PRISM; ?></span>
                  </div>
                  <div class="col-md-12">
                    <label style="width: 5em; font-weight: bold;">L.Axis</label>
                    <label style="margin-left: 1em; font-weight: bold;">:</label>
                    <span style="font-size: 11px;color: #e09600;font-weight: bold;"><?php echo $data->LEFT_AXIS; ?></span>
                  </div>
                  <div class="col-md-12">
                    <label style="width: 5em; font-weight: bold;">L.Add</label>
                    <label style="margin-left: 1em; font-weight: bold;">:</label>
                    <span style="font-size: 11px;color: #e09600;font-weight: bold;"><?php echo $data->LEFT_ADD; ?></span>
                  </div>
                  <div class="col-md-12">
                    <label style="width: 5em; font-weight: bold;">L.Direction</label>
                    <label style="margin-left: 1em; font-weight: bold;">:</label>
                    <span style="font-size: 11px;color: #e09600;font-weight: bold;"><?php echo $data->LEFT_DIRECTION; ?></span>
                  </div>
                  <div class="col-md-12">
                    <!--<label style="width: 5em; font-weight: bold;">L.Pupillary</label>-->
                    <!--<label style="margin-left: 1em; font-weight: bold;">:</label>-->
                    <!--<span style="font-size: 11px;color: #e09600;font-weight: bold;"><?php echo $data->LEFT_PUPILLARY; ?></span>-->
                  </div>
                </div>
              </div>
              <div class="col-lg-3"><b style="color: #e09600; ">
              </div>
            </div>
          
            <hr>
            <textarea style="margin-left: 3em; height: 5em; width: 18em; font-size: 12px;" name="order-notes" placeholder="type for notes..."></textarea>
            <hr>

         <?php
            $counter++;
            $product_amount = $product_amount + $data->TOTAL;
          endforeach; 
          ?>
      </div>
         <!-- left side-->
         <!-- Left side -->
        <!-- right side -->
        <div class="col-lg-8">
          <div class="row">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size:10px; margin-left: 2em;">
                <thead>
                  <tr>
                    <th width="auto">No</th>
                    <th width="auto">Date/User</th>
                    <th width="auto">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($log->result() as $dataLog) {
                    echo "<tr>"; ?>
                    <td>
                      <?php echo $no++; ?>
                    </td>
                    <td>
                      <?php echo $dataLog->TRANS_DATE; ?><br>by <label style="font-weight: bold; color:#e09600; "><?php echo $dataLog->USER; ?></label>
                    </td>
                    <td>
                      <?php echo 'from '.$dataLog->CURRENT_STATUS.' to '.$dataLog->STATUS; ?>
                    </td>
                  <?php
                    echo "</tr>";
                  }
                  ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

  
    <?php foreach ($details->result() as $data) : ?>
      <p style="text-align: right; clear:both; font-size: 14px;font-weight: bold;">Product Amount &nbsp;
        <!-- ini yang di tampilin  -->
        <span class="form-control" style="width: 30%; float: right;font-size: 14px; font-weight: bold;border: 1px solid lightgrey;padding-top: 0.5em;padding-bottom: 0.5em;"><?php echo number_format($data->TOTAL_ORDER, 2); ?></span>
        <!-- ini yang di masuk database  -->
        <input name="order-amount" type="hidden" id="txt1" style="width: 30%; float: right;" class="form-control modal-amount" disabled="true" value="<?php echo $product_amount; ?>" />
      </p><br>

      <p style="text-align: right; clear:both; font-size: 14px;font-weight: bold;">Shipping Cost &nbsp;
        <span class="form-control" style="width: 30%; float: right;font-size: 14px; font-weight: bold;border: 1px solid lightgrey;padding-top: 0.5em;padding-bottom: 0.5em;"><?php echo number_format('10', 2); ?></span>
      </p><br>

      <p style="text-align: right; clear: both; font-size: 14px;font-weight: bold;">Total &nbsp;
        <!-- ini yang di tampilin  -->
        <span id="txt3" style="width: 30%; float: right;text-align: right; background-color: lightgrey; font-size: 14px; font-weight: bold;" class="form-control"><?php echo number_format($data->TOTAL_ORDER + '10', 2); ?></span>
      </p><br>

      <div class="modal-footer">
        <button type="submit" class="btn btn-default btn-info">Save</button>
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
      </div>
    <?php
    endforeach; ?>
    <?php echo form_close(); ?>
    </div>
  </div>
  <script type="text/javascript">
    function sum() {
      var txtFirstNumberValue = document.getElementById('txt1').value.replace(",", "");
      var txtSecondNumberValue = document.getElementById('txt2').value;
      var result = parseFloat(txtFirstNumberValue) + parseFloat(txtSecondNumberValue);
      if (!isNaN(result)) {
        document.getElementById('txt3').innerHTML = formatNumber(result);
        document.getElementById('txt_input').value = result;
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