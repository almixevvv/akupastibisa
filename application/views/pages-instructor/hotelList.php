<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 mt-2 text-gray-800">Hotel Management</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Hotel List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Hotel Name</th>
                            <th>Hotel Address</th>
                            <th>Hotel Grade</th>
                            <th>Hotel Facility</th>
                            <th>Hotel Image</th>
                            <th>Hotel Average Price</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Hotel Name</th>
                            <th>Hotel Address</th>
                            <th>Hotel Grade</th>
                            <th>Hotel Facility</th>
                            <th>Hotel Image</th>
                            <th>Hotel Average Price</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $this->db->select('*');
                        $this->db->from('tbl_hotel');
                        $query = $this->db->get();

                        foreach ($query->result() as $hotelList) {
                        ?>
                            <tr>
                                <td><?php echo $hotelList->id_hotel; ?></td>
                                <td><?php echo $hotelList->nama_hotel; ?></td>
                                <td><?php echo $hotelList->alamat_hotel; ?></td>
                                <td><?php echo $hotelList->kelas_hotel; ?></td>
                                <td><?php echo $hotelList->fasilitas_hotel; ?></td>
                                <td>
                                    <img style="width: 75%;" src="<?php echo base_url('upload/hotel/' . $hotelList->gambar_hotel); ?>" alt="">
                                </td>
                                <td><?php echo $hotelList->pricemax_hotel; ?></td>
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