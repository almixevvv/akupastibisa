  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view('pages-cms/frame_side'); ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- BANNER PART -->

       <!-- start: Content -->
    <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-chalkboard-teacher"></i>
          <b>Footer List</b></div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size:12px">
                <thead>
                  <tr>
                    <th width="5%">No</th>
                    <th width="40%">Title</th>
                    <th width="40%">Description</th>
                    <th width="5%">Action</th>
                  </tr>
                </thead>   
                <tbody>
                
                <?php 
                $no=1;
                foreach($content->result() as $dt){
                
                  $id = $dt->REC_ID;
                  $title = $dt->TITLE;
                  $desc = $dt->DESCRIPTION;
                
                 echo "<tr>" ?>


                <td>
                   <?php echo $no++; ?>
                </td>

                <td>
                   <?php echo $title; ?>
                </td>

                <td>
                   <?php echo $desc; ?>
                </td>

                <td>
                  <a href="<?php echo base_url('EditFooter?id=' . $id); ?>" style="width: 50%;font-size: 10px;" role="button" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i></a>
               </td>

               <?php
                echo "</tr>";
              }
            ?>
                 
                </tbody>
              </table> 

   
            </div>
          </div>
        </div><!--/col-->
        
                    <br/>
        
      </div><!--/row-->

</div>
<!-- end content -->


        <!-- END BANNER PART -->
        <!-- Modal -->
        <div id="exampleModal" class="modal fade bd-example-modal-md" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-md">
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

  <script type="text/javascript">
    
    $('#exampleModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget);
          var id = button.data('id');

          // console.log('Button Position ' + orderno);
          var getTerms = '<?php echo base_url('Terms_cms/getTerms?id='); ?>';

          $('.modal-body').load(getTerms + id,function(){
            $('#exampleModal').modal({show:true});
          });
    }); 

  </script>
</body>


<!-- sql view v_g_order_detail -->
<!-- select `a`.`REC_ID` AS `REC_ID`,`a`.`ORDER_ID` AS `ORDER_ID`,`a`.`PROD_ID` AS `PROD_ID`,`a`.`LENS_NAME` AS `LENS_NAME`,`a`.`PROD_NAME` AS `PROD_NAME`,`a`.`FRAME_CODE` AS `FRAME_CODE`,`a`.`FRAME_PRICE` AS `FRAME_PRICE`,`a`.`LENS_CODE` AS `LENS_CODE`,`a`.`LENS_PRICE` AS `LENS_PRICE`,`a`.`LENS_CODE_2` AS `LENS_CODE_2`,`a`.`LENS_PRICE_2` AS `LENS_PRICE_2`,`a`.`COLOR` AS `COLOR`,`a`.`CATEGORY` AS `CATEGORY`,`a`.`TOTAL` AS `TOTAL`,`a`.`TAX` AS `TAX`,`b`.`NAME` AS `NAME_PRODUCT`,`c`.`IMAGE` AS `IMAGE`,`c`.`COLOR_ID` AS `COLOR_ID`,`b`.`SIZE` AS `SIZE`,`d`.`RIGHT_SPHERE` AS `RIGHT_SPHERE`,`d`.`LEFT_SPHERE` AS `LEFT_SPHERE`,`d`.`RIGHT_CYLINDER` AS `RIGHT_CYLINDER`,`d`.`LEFT_CYLINDER` AS `LEFT_CYLINDER`,`d`.`RIGHT_PRISM` AS `RIGHT_PRISM`,`d`.`LEFT_PRISM` AS `LEFT_PRISM`,`d`.`RIGHT_AXIS` AS `RIGHT_AXIS`,`d`.`LEFT_AXIS` AS `LEFT_AXIS`,`d`.`RIGHT_ADD` AS `RIGHT_ADD`,`d`.`LEFT_ADD` AS `LEFT_ADD`,`d`.`RIGHT_DIRECTION` AS `RIGHT_DIRECTION`,`d`.`LEFT_DIRECTION` AS `LEFT_DIRECTION`,`d`.`MONO_PD` AS `MONO_PD`,`d`.`BINO_LPD` AS `BINO_LPD`,`d`.`BINO_RPD` AS `BINO_RPD`,`d`.`PUPIL_HEIGHT` AS `PUPIL_HEIGHT`,`d`.`BIFOCAL_HEIGHT` AS `BIFOCAL_HEIGHT`,`d`.`COATING_TYPE` AS `COATING_TYPE`,`d`.`TINT_TYPE` AS `TINT_TYPE`,`d`.`HEALTH_CODE_LENS` AS `HEALTH_CODE_LENS`,`d`.`HEALTH_CODE_FRAME` AS `HEALTH_CODE_FRAME` , `e`.`ORDER_NO` AS `ORDER_NO`, `e`.`STATUS` AS `STATUS`
from (((`incube_jnr_temp`.`g_order_detail` `a` 
        
        
join `incube_jnr_temp`.`g_product` `b` on((`a`.`PROD_ID` = `b`.`PROD_ID`))) join `incube_jnr_temp`.`g_product_image` `c` on(((`a`.`COLOR` = `c`.`COLOR_ID`) and (`a`.`CATEGORY` = `c`.`CATEGORY`) and (`b`.`PROD_ID` = `c`.`PROD_ID`)))) join `incube_jnr_temp`.`g_prescription_detail` `d` on((`a`.`PROD_ID` = `d`.`PRODUCT_ID`))) join `incube_jnr_temp`.`g_log` `e` on ((`a`.`ORDER_ID` = `e`.`ORDER_NO`)) -->

<!-- <div class="container">
  <div class="row">
    <div class="col-sm">
      One of three columns
    </div>
    <div class="col-sm">
      One of three columns
    </div>
    <div class="col-sm">
      One of three columns
      <div class="row">
        <div class="col-sm">
          asd
        </div>
        <div class="col-sm">
          asd
        </div>
        <div class="col-sm">
          asd
        </div>
      </div>
      <div class="row">
        <div class="col-sm">
          asd
        </div>
        <div class="col-sm">
          asd
        </div>
        <div class="col-sm">
          asd
        </div>
      </div>
      <div class="row">
        <div class="col-sm">
          asd
        </div>
        <div class="col-sm">
          asd
        </div>
        <div class="col-sm">
          asd
        </div>
      </div>
      <div class="row">
        <div class="col-sm">
          asd
        </div>
        <div class="col-sm">
          asd
        </div>
        <div class="col-sm">
          asd
        </div>
      </div>
      <div class="row">
        <div class="col-sm">
          asd
        </div>
        <div class="col-sm">
          asd
        </div>
        <div class="col-sm">
          asd
        </div>
      </div>
      <div class="row">
        <div class="col-sm">
          asd
        </div>
        <div class="col-sm">
          asd
        </div>
        <div class="col-sm">
          asd
        </div>
      </div>
    </div>
  </div>
</div> -->