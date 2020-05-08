  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view('cms/frame_side'); ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- BANNER PART -->

       <!-- start: Content -->
    <div class="main" style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif">
    
    <form name="form_action" method="post">
          <input type="hidden" name="id" value=""  />
        </form>        
                                       


  <div class="row">
        <div class="col-lg-12" id="tabel">
          <div class="panel panel-default">
            <div class="panel-heading" data-original-title>
              <h2><span class="break"></span>Help</h2>
            
            </div>
            <div class="panel-body">
              <table id="subscription_table" name="subscription_table" class="table table-striped table-bordered bootstrap-datatable">
                <thead>
                  <tr>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </thead>   
                <tbody>
                
                <?php 
                foreach($help->result() as $dt){
                 
                 // <?php echo $userloop->CONTENT;
                
                $help = $dt->CONTENT;
                }
                 ?>
                 <td>
                   <?php echo $help; ?>
                 </td>
                <td>
                 <!--  <button class="btn btn-info"  data-toggle="lightbox"  onclick="module_action('EDIT','<?php echo $userloop->REC_ID;?>');" style="width: 80px;" type="button">EDIT
                 </button> -->
                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                  data-help='<?php echo $help; ?>'>EDIT</button>
               </td>
                 
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
        <div id="exampleModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <?php echo form_open('Form_help_cms/update'); ?>
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-body">
                <b>
                  Help : 
                </b>
                <textarea name="text-help" id="form10" class="md-textarea form-control modal-help" rows="10"></textarea>
                <button type="submit" class="btn btn-default btn-danger" >Save</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
            
          </div>
          <?php echo form_close(); ?>
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
      // Button that triggered the modal
      var button = $(event.relatedTarget); 

      // Extract info from data-* attributes
      var help = button.data('help');
      
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this);

      modal.find('.modal-help').val(help);
    });  

  </script>
</body>
