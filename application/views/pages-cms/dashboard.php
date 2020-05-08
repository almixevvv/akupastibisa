<div id="wrapper">



  <!-- Sidebar -->

  <?php $this->load->view('pages-cms/frame_side'); ?>



  <div id="content-wrapper">



    <div class="container-fluid">



      <!-- Breadcrumbs-->

      <ol class="breadcrumb">

        <li class="breadcrumb-item">

          <a href="#" style="color: orange;">Dashboard</a>

        </li>

        <li class="breadcrumb-item active">Overview</li>

      </ol>



      <!-- Area Chart Example-->

      <div class="card mb-3">

        <div class="card-header">

          <i class="fas fa-chart-area"></i>

          Area Chart Example</div>

        <div class="card-body">

          <canvas id="myAreaChart" width="100%" height="30"></canvas>

        </div>

        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>

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



<!-- Scroll to Top Button-->

<a class="scroll-to-top rounded" href="#page-top">

  <i class="fas fa-angle-up"></i>

</a>





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

</body>

