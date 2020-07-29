<style>
    .table td {
        vertical-align: center !important;
    }
</style>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php $this->load->view('templates-instructor/sidebar'); ?>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">
                <?php $this->load->view('templates-instructor/navbar'); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Data Kursus</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Instruktur</th>
                                            <th>Rating</th>
                                            <th>Harga</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <?php foreach ($courseList->result() as $crs) { ?>
                                            <tr>
                                                <td><?php echo $recNo++; ?></td>
                                                <td><?php echo $crs->COURSE_NAME; ?></td>
                                                <td><?php echo $crs->TRAINER_NAME; ?></td>
                                                <td><?php echo $crs->COURSE_AVERAGE_RATING; ?></td>
                                                <td><?php echo 'IDR. ' . number_format($crs->COURSE_PRICE, 2, ',', '.'); ?></td>
                                                <td style="color: <?php echo ($crs->COURSE_STATUS == 'INACTIVE' ? '#e74a3b' : '#1cc88a'); ?>"><?php echo $crs->COURSE_STATUS; ?></td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-circle" data-toggle="modal" data-target="#detailModal" data-id="<?php echo $crs->COURSE_ID; ?>" title="Lihat detail kursus Anda"> <i class="fas fa-info-circle"></i> </button>
                                                    <button type="button" class="btn btn-success btn-circle" title="Tambah Konten Kursus" disabled> <i class="fas fa-plus"></i> </button>
                                                    <button type="button" class="btn btn-danger btn-circle" title="Hapus kursus Anda"> <i class="fas fa-trash"></i> </button>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Modal View-->
            <div id="detailModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="detailModal" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-body" style="padding: 0!important;">
                            <!-- LOAD THE CONTENT -->
                        </div>
                    </div>

                </div>
            </div>

            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Akupastibisa <script type="text/javascript">
                                document.write(new Date().getFullYear());
                            </script></span>
                    </div>
                </div>
            </footer>

        </div>
    </div>
    <!-- Page level plugins -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.21/af-2.3.5/b-1.6.2/r-2.2.5/sc-2.0.2/datatables.min.css" />

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.21/af-2.3.5/b-1.6.2/r-2.2.5/sc-2.0.2/datatables.min.js"></script>
    <script>
        $(function() {
            $(document).tooltip();
        });

        $('#dataTable').dataTable({
            "columns": [
                null,
                null,
                null,
                null,
                {
                    "orderable": false
                },
            ]
        });

        $('#detailModal').on('show.bs.modal', function(event) {
            let button = $(event.relatedTarget);
            let id = button.data('id');

            console.log('Button Position ' + order_id);

            // $('.modal-body').load(getDetails + order_id, function() {
            //     $('#exampleModal').modal({
            //         show: true
            //     });
            // });
        });
    </script>