  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view('pages-cms/frame_side'); ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- ORDER PART -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-clipboard-list"></i>
            <b>Order List</b></div>
          <div class="card-body">

            <label style="">Search by Status :</label><br>
            <?php
            if ($this->input->get('query') == 'all') :
            ?>
              <a style="text-decoration: none!important;" href="<?php echo base_url('cms/order/status?query=all'); ?>">
                <button class="btn btn-warning" style="font-weight: bold; font-size: 9px; margin-left: 1em; width: 13%;">ALL</button>
              </a>
            <?php else : ?>
              <a style="text-decoration: none!important;" href="<?php echo base_url('cms/order/status?query=all'); ?>">
                <button class="btn btn-outline-warning" style="font-weight: bold; font-size: 9px; margin-left: 1em; width: 13%;">ALL</button>
              </a>
            <?php endif; ?>

            <?php
            if ($this->input->get('query') == 'paid') :
            ?>
              <a style="text-decoration: none!important;" href="<?php echo base_url('cms/order/status?query=paid'); ?>">
                <button class="btn btn-warning" style="font-weight: bold; font-size: 8px; margin-left: 1em; width: 13%;">PAID</button>
              </a>
            <?php else : ?>
              <a style="text-decoration: none!important;" href="<?php echo base_url('cms/order/status?query=paid'); ?>">
                <button class="btn btn-outline-warning" style="font-weight: bold; font-size: 8px; margin-left: 1em; width: 13%;">PAID</button>
              </a>
            <?php endif; ?>

            <?php
            if ($this->input->get('query') == 'sent') :
            ?>
              <a style="text-decoration: none!important;" href="<?php echo base_url('cms/order/status?query=sent'); ?>">
                <button class="btn btn-warning" style="font-weight: bold; font-size: 8px; margin-left: 1em; width: 13%;">SENT TO LAB</button>
              </a>
            <?php else : ?>
              <a style="text-decoration: none!important;" href="<?php echo base_url('cms/order/status?query=sent'); ?>">
                <button class="btn btn-outline-warning" style="font-weight: bold; font-size: 8px; margin-left: 1em; width: 13%;">SENT TO LAB</button>
              </a>
            <?php endif; ?>

            <?php
            if ($this->input->get('query') == 'receivedpartialy') :
            ?>
              <a style="text-decoration: none!important;" href="<?php echo base_url('cms/order/status?query=receivedpartialy'); ?>">
                <button class="btn btn-warning" style="font-weight: bold; font-size: 8px; margin-left: 1em; width: 13%;">RECEIVED PARTIALY</button>
              </a>
            <?php else : ?>
              <a style="text-decoration: none!important;" href="<?php echo base_url('cms/order/status?query=receivedpartialy'); ?>">
                <button class="btn btn-outline-warning" style="font-weight: bold; font-size: 8px; margin-left: 1em; width: 13%;">RECEIVED PARTIALY</button>
              </a>
            <?php endif; ?>

            <?php
            if ($this->input->get('query') == 'receivedcompletely') :
            ?>
              <a style="text-decoration: none!important;" href="<?php echo base_url('cms/order/status?query=receivedcompletely'); ?>">
                <button class="btn btn-warning" style="font-weight: bold; font-size: 8px; margin-left: 1em; width: 13%;">RECEIVED COMPLETELY</button>
              </a>
            <?php else : ?>
              <a style="text-decoration: none!important;" href="<?php echo base_url('cms/order/status?query=receivedcompletely'); ?>">
                <button class="btn btn-outline-warning" style="font-weight: bold; font-size: 8px; margin-left: 1em; width: 13%;">RECEIVED COMPLETELY</button>
              </a>
            <?php endif; ?>

            <?php
            if ($this->input->get('query') == 'dispatched') :
            ?>
              <a style="text-decoration: none!important;" href="<?php echo base_url('cms/order/status?query=dispatched'); ?>">
                <button class="btn btn-warning" style="font-weight: bold; font-size: 8px; margin-left: 1em; width: 13%;">ORDER DISPATCHED</button>
              </a>
            <?php else : ?>
              <a style="text-decoration: none!important;" href="<?php echo base_url('cms/order/status?query=dispatched'); ?>">
                <button class="btn btn-outline-warning" style="font-weight: bold; font-size: 8px; margin-left: 1em; width: 13%;">ORDER DISPATCHED</button>
              </a>
            <?php endif; ?>

            <?php echo form_open('Order_cms/searchDate'); ?>
            <div class="table-responsive" style="margin-top: 1em;">
              <label>Search by Date :</label>
              <div class="row" style="margin-bottom: 1em;">
                <div class="col-md-4">
                  <input type="date" name="start_date" id="start_date" value="<?php echo @$start_date; ?>" class="form-control" style="margin-left: 1em;font-size: 11px;" />
                </div>
                <div class="col-md-4">
                  <input type="date" name="end_date" id="end_date" value="<?php echo @$end_date; ?>" class="form-control" style="margin-left: 0.5em;font-size: 11px;" />
                </div>
                <div class="col-md-4">
                  <input type="submit" name="search" id="search" value="Search" class="btn btn-secondary" style="font-size: 11px;" />
                </div>
              </div>
              <?php echo form_close(); ?>

              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size:12px">
                <thead>
                  <tr>
                    <th width="5%">No</th>
                    <th width="20%">Order Info</th>
                    <th width="30%">Shipping Info</th>
                    <th width="35%">Order Value</th>
                    <th width="10%">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  if (!empty($content)) {
                    $isi_content = $content;
                  } else {
                    $isi_content = $content;
                  }

                  foreach ($isi_content->result() as $dt) {
                    //------------------------------------------------SHIPPING INFO
                    $order_id = $dt->ORDER_ID;
                    $order_date = $dt->ORDER_DATE;
                    $fname = $dt->SHIPF_NAME;
                    $lname = $dt->SHIPL_NAME;
                    $status = $dt->ORDER_STATUS;
                    $warranty = $dt->WARRANTY;
                    $addr1 = $dt->ADDRESS_1;
                    $addr2 = $dt->ADDRESS_2;
                    $country = $dt->SHIP_COUNTRY;
                    $province = $dt->SHIP_PROVINCE;
                    $email = $dt->SHIP_EMAIL;
                    $total_order = $dt->TOTAL_ORDER;
                    $updated = $dt->UPDATED;
                    $postal = $dt->POSTAL_CODE;
                    $phone = $dt->PHONE;
                    // $shipping_cost = $dt->SHIPPING_COST;
                    //------------------------------------------------MEMBER INFO
                    $first_name = $dt->FIRST_NAME;
                    $last_name = $dt->LAST_NAME;
                    $addr = $dt->ADDRESS;
                    $m_country = $dt->COUNTRY;
                    $m_country_code = $dt->COUNTRY_CODE;
                    $m_province = $dt->PROVINCE;
                    $m_postal = $dt->POSTAL_CODE;
                    $m_phone = $dt->PHONE;
                    $m_email = $dt->EMAIL;

                    echo "<tr>"; ?>
                    <td>
                      <?php echo $no; ?>
                    </td>

                    <td>
                      <p style='line-height:20px;'>
                        <!-- <b>Order No<span style="margin-left: 35px;">:</b></span><b style="color: #fcdb03;">&nbsp<?php echo $amount; ?></b><br><br> -->
                        <b>Order No<span style="margin-left: 2em;">:</b><br></span><b>&nbsp<?php echo $order_id; ?></b><br>
                        <b>Order Date<span style="margin-left: 1.2em;">:</b><br></span><b>&nbsp<?php echo $order_date; ?></b><br><br>
                        <b style="color: #1f8a17;text-transform: uppercase;"><?php echo $status; ?></b> - <b style="color:#e09600"><?php echo $warranty; ?></b> <br>
                      </p>
                      <p style='margin-top: -1em;'>
                        <a style="text-decoration: none!important;" href="<?php echo base_url('Order_cms/invoice?id=' . $order_id); ?>">
                          <button type="button" data-order_id="<?php echo $order_id; ?>" style="font-size: 12px; color: white; width: 50%;" class="btn btn-warning btn-invoice">Send Invoice</button>
                        </a>
                      </p>

                      <p>
                        <div style="font-weight: bold;color:#e09600;"> Last Edit By Admin</div>
                        <div style="font-weight: bold;color:#e09600;"><?php echo $updated; ?> </div>
                      </p>

                    </td>

                    <td>
                      <p style='line-height:20px;'>
                        <b><?php echo $fname; ?> <?php echo $lname; ?></b><br><br>
                        <?php echo $addr1; ?><br>
                        <?php echo $addr2; ?><br>
                        <?php echo $province; ?><br>
                        <?php echo $postal; ?><br>
                        <?php echo $country; ?><br><br>
                        <b style="color: #e09600;"><?php echo $email; ?></b><br>
                        <?php echo $phone; ?><br><br>
                      </p>
                    </td>

                    <td>
                      <?php
                      //GET v_g_order_detail
                      $this->db->select('*');
                      $this->db->from('v_g_order_detail');
                      $this->db->where('ORDER_ID', $dt->ORDER_ID);

                      $query = $this->db->get();
                      ?>

                      <div style="font-weight: bold;margin-bottom: 1em;">
                        (Order Detail)
                      </div>

                      <?php
                      $nomor = 1;
                      foreach ($query->result() as $data) : ?>
                        <div class="row">
                          <div class="col-lg-9">
                            <label><?php echo $nomor; ?>. <?php echo $data->NAME_PRODUCT; ?> <?php echo $data->COLOR_ID; ?> <?php echo $data->SIZE; ?></label><br>

                            <!-- HEALTH CODE  -->
                            <div class="row">
                              <div class="col-lg-12">
                                <label> <span style="font-weight: bold;">Invoice Description</span> : <?php echo $data->LENS_NAME; ?></label>
                              </div>
                            </div>
                            <!-- <div class="row">
                              <div class="col-lg-12">
                                <label> <span style="font-weight: bold;">LENS</span> : <?php echo $data->LENS_NAME; ?></label>
                              </div>
                            </div> -->
                            <div class="row">
                              <div class="col-lg-6">
                                <label><span style="font-weight: bold;">Frame Code</span> : <?php echo $data->FRAME_CODE; ?></label>
                              </div>
                              <div class="col-lg-6">
                                <label><span style="font-weight: bold;">Frame Price</span> : $<?php echo $data->FRAME_PRICE; ?> <br>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-lg-6">
                                <label><span style="font-weight: bold;">Lens Code</span> : <?php echo $data->LENS_CODE; ?></label>
                              </div>
                              <div class="col-lg-6">
                                <label><span style="font-weight: bold;">Lens Price</span> : $<?php echo $data->LENS_PRICE; ?> <br>
                              </div>
                            </div>
                            <!-- END OF HEALTH CODE -->

                          </div>
                          <div class="col-lg-3" style="text-align: right;color: #e09600;font-weight: bold;">
                            <a style="text-decoration: none!important;" href="<?php echo base_url('Order_cms/orderForm?id=' . $data->ORDER_ID . '&prodid=' . $data->PROD_ID); ?>">
                              <button type="button" data-order_id="<?php echo $order_id; ?>" style="font-size: 9px; color: white; width: 6em;" class="btn btn-success btn-form">Order Form</button>
                            </a>
                          </div>
                        </div>

                        <hr>
                      <?php
                        $nomor++;
                      endforeach; ?>
                      <div class="row">
                        <div class='col-lg-5 col-md-5 col-sm-5 col-xs-5' style="font-weight: bold;">Product </div>
                        <div class='col-lg-7 col-md-7 col-sm-7 col-xs-7' style="font-weight: bold;color:#e09600;text-align: right;"> <?php echo number_format($total_order - 10, 2); ?></div>
                      </div>
                      <div class="row">
                        <div class='col-lg-6 col-md-6 col-sm-6 col-xs-6' style="font-weight: bold;">Shipping Cost </div>
                        <div class='col-lg-6 col-md-6 col-sm-6 col-xs-6' style="font-weight: bold;color:#e09600;text-align: right;"> <?php echo number_format('10', 2); ?> </div>
                      </div>
                      <hr style="border :2px solid; width: 6em;" align="right">
                      <div class="row">
                        <div class='col-lg-4 col-md-4 col-sm-4 col-xs-4' style="font-weight: bold;"> Total </div>
                        <div class='col-lg-8 col-md-8 col-sm-8 col-xs-8' style="font-weight: bold;color:#e09600;text-align: right;"> <?php echo number_format($total_order, 2); ?> </div>
                      </div>
                    </td>

                    <td>
                      <!-- Trigger the modal with a button -->
                      <button type="button" style="width: 6em;font-size: 12px;" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal" data-order_id="<?php echo $order_id; ?>">VIEW</button><br>
                      <button data-order_id="<?php echo $order_id; ?>" class="buttonDelete btn btn-danger btn-sm" style="width: 6em;font-size: 12px;margin-top: 0.5em;" type="button">DELETE</button>
                    </td>

                  <?php

                    echo "</tr>";
                    $no++;
                  }
                  ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>


        <!-- END ORDER PART -->

        <!-- Modal View-->
        <div id="exampleModal" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-body" style="padding: 0!important;">
                <!-- LOAD THE CONTENT -->
              </div>
            </div>

          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Incube Solutions 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/cms/vendor/jquery/jquery.min.js'); ?>"></script>
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

  <script type="text/javascript">
    $('#exampleModal').on('show.bs.modal', function(event) {
      var button = $(event.relatedTarget);
      var order_id = button.data('order_id');

      console.log('Button Position ' + order_id);
      var getDetails = '<?php echo base_url('Order_cms/getDetails?id='); ?>';

      $('.modal-body').load(getDetails + order_id, function() {
        $('#exampleModal').modal({
          show: true
        });
      });
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function() {

      const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
          confirmButton: 'btn btn-success',
          cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false,
      });

      $('.buttonDelete').on('click', function() {
        var id = $(this).attr("data-order_id");
        swal.fire({
          title: "Delete Order",
          text: "Are you sure you want to delete this order from order management?",
          type: "warning",
          showCancelButton: true,
          cancelButtonColor: '#d33',
          confirmButtonText: "Confirm",
          confirmButtonColor: '#3085d6'
        }).then((result) => {
          if (result.value) {
            swalWithBootstrapButtons.fire(
              'Deleted!',
              'Selected order has been deleted.',
              'success'
            );
            $.ajax({
              type: "POST",
              url: "<?php echo base_url('Order_cms/deleteOrder'); ?>",
              data: {
                orderNo: id
              },
              success: function(data) {
                console.log(data);
                location.reload();
              }
            });
          }
        });
      });

    });
  </script>

  </body>