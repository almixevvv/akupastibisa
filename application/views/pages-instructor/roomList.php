<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 mt-2 text-gray-800">Room Management</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Room List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Room Name</th>
                            <th>Room Image</th>
                            <th>Room Price</th>
                            <th>Room Hotel</th>
                            <th>Room Status</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Room Name</th>
                            <th>Room Image</th>
                            <th>Room Price</th>
                            <th>Room Hotel</th>
                            <th>Room Status</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $this->db->select('*');
                        $this->db->from('v_g_kamar');
                        $query = $this->db->get();

                        $i = 1;

                        foreach ($query->result() as $hotelList) {
                        ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $hotelList->nama_kamar; ?></td>
                                <td>
                                    <img style="width: 75%;" src="<?php echo base_url('upload/room/' . $hotelList->gambar_kamar); ?>" alt="">
                                </td>
                                <td><?php echo $hotelList->harga_kamar; ?></td>
                                <td><?php echo $hotelList->nama_hotel; ?></td>
                                <td><?php echo $hotelList->status_kamar; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('assets/cms/vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/cms/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>


<!-- Page level plugins -->
<script src="<?php echo base_url('assets/cms/vendor/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/cms/vendor/datatables/dataTables.bootstrap4.min.js'); ?>"></script>


<script>
    $('#dataTable').DataTable({
        "searching": false,
        "lengthChange": false
    });
</script>