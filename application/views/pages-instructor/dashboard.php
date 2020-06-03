 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
     </div>

     <div class="row">
         <!-- Area Chart -->
         <div class="col-xl-12 col-lg-12">
             <div class="card shadow mb-4">
                 <!-- Card Header - Dropdown -->
                 <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                     <h6 class="m-0 font-weight-bold text-primary">Booking Overview</h6>
                     <div class="dropdown no-arrow">
                         <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                         </a>
                     </div>
                 </div>
                 <!-- Card Body -->
                 <div class="card-body">
                     <div class="chart-area" style="height: 100%;">
                         <canvas id="myChart"></canvas>
                     </div>
                 </div>
             </div>
         </div>

     </div>

 </div>
 <!-- /.container-fluid -->

 </div>
 <!-- End of Main Content -->

 <!-- Footer -->
 <footer class="sticky-footer bg-white">
     <div class="container my-auto">
         <div class="copyright text-center my-auto">
             <span>Copyright &copy; Marian 2020</span>
         </div>
     </div>
 </footer>
 <!-- End of Footer -->

 </div>
 <!-- End of Content Wrapper -->

 </div>
 <!-- End of Page Wrapper -->

 <!-- Scroll to Top Button-->
 <a class="scroll-to-top rounded" href="#page-top">
     <i class="fas fa-angle-up"></i>
 </a>

 <!-- Logout Modal-->
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>
             <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
             <div class="modal-footer">
                 <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                 <a class="btn btn-primary" href="<?php echo base_url('CMS/adminLogout'); ?>">Logout</a>
             </div>
         </div>
     </div>
 </div>

 <?php
    $queryChart = $this->db->query("SELECT YEAR(date_order) AS y, MONTH(date_order) AS m, COUNT(DISTINCT id_order) AS dt
                                    FROM tbl_order
                                    GROUP BY y, m");
    foreach ($queryChart->result() as $result) {
        $dataChart = $result->dt;
    }
    ?>

 <!-- Page level plugins -->
 <script src="<?php echo base_url('assets/cms/vendor/chart.js/Chart.min.js'); ?>"></script>
 <script>
     var ctx = document.getElementById('myChart').getContext('2d');
     var myChart = new Chart(ctx, {
         type: 'line',
         data: {
             labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
             datasets: [{
                 label: '# of Occupancy per Month',
                 data: [<?php echo $dataChart; ?>],
                 backgroundColor: [
                     'rgba(255, 99, 132, 0.2)'
                 ],
                 borderColor: [
                     'rgba(255, 99, 132, 1)'
                 ],
                 borderWidth: 1
             }]
         },
         options: {
             scales: {
                 yAxes: [{
                     ticks: {
                         beginAtZero: true
                     }
                 }]
             }
         }
     });
 </script>