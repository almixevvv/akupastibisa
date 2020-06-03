<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 mt-2 text-gray-800">Booking Management</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Booking List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Booking Name</th>
                            <th>Booking Email</th>
                            <th>Checkin Date</th>
                            <th>Checkout Date</th>
                            <th>Booking Address</th>
                            <th>Hotel Name</th>
                            <th>Room Name</th>
                            <th>Booking Status</th>
                            <th>Booking Date</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Booking Name</th>
                            <th>Booking Email</th>
                            <th>Checkin Date</th>
                            <th>Checkout Date</th>
                            <th>Booking Address</th>
                            <th>Hotel Name</th>
                            <th>Room Name</th>
                            <th>Booking Status</th>
                            <th>Booking Date</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $this->db->select('*');
                        $this->db->from('tbl_order');
                        $query = $this->db->get();

                        foreach ($query->result() as $hotelList) {
                        ?>
                            <tr>
                                <td><?php echo $hotelList->id_order; ?></td>
                                <td><?php echo $hotelList->name_order; ?></td>
                                <td><?php echo $hotelList->email_order; ?></td>
                                <td><?php echo $hotelList->checkin_order; ?></td>
                                <td><?php echo $hotelList->checkout_order; ?></td>
                                <td><?php echo $hotelList->address_1_order . ' ' . $hotelList->address_2_order; ?></td>
                                <td><?php echo $hotelList->hotel_order; ?></td>
                                <td><?php echo $hotelList->room_order; ?></td>
                                <td><?php echo $hotelList->status_order; ?></td>
                                <td><?php echo $hotelList->date_order; ?></td>
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