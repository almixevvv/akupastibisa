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
          <b>Measurements</b></div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size:12px">
                <thead>
                  <tr>
                    <th width="5%">No</th>
                    <th width="40%">Description</th>
                    <th width="40%">File</th>
                    <th width="5%">Action</th>
                  </tr>
                </thead>   
                <tbody>
                
                <?php 
                $no=1;
                foreach($terms->result() as $dt){
                
                  $id = $dt->DOCUMENT_ID;
                  $title = $dt->TITLE;
                  $path = $dt->PATH;
                
                 echo "<tr>" ?>


                <td>
                   <?php echo $no++; ?>
                </td>

                <td>
                   <?php echo $title; ?>
                </td>

                <td>
                   <?php echo $path; ?>
                </td>

                <td>
                  <button class="btn btn-info" style="width: 6em;font-size: 12px;" type="button" data-toggle="modal" data-target="#exampleModal" data-id="<?php echo $id; ?>">EDIT</button><br>
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
