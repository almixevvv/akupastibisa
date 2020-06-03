<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 mt-2 text-gray-800">Member Management</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Member List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Memner Name</th>
                            <th>Member Email</th>
                            <th>Member Address</th>
                            <th>Member Phone Number</th>
                            <th>Member Profile</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Memner Name</th>
                            <th>Member Email</th>
                            <th>Member Address</th>
                            <th>Member Phone Number</th>
                            <th>Member Profile</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $this->db->select('*');
                        $this->db->from('tbl_member');
                        $query = $this->db->get();

                        $i = 1;

                        foreach ($query->result() as $hotelList) {
                        ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $hotelList->name_member; ?></td>
                                <td><?php echo $hotelList->email_member; ?></td>
                                <td><?php echo $hotelList->address_member . ' ' . $hotelList->address_2_member; ?></td>
                                <td><?php echo $hotelList->phone_member; ?></td>
                                <td>
                                    <img style="width: 75%;" src="<?php echo base_url('upload/profile/' . $hotelList->profile_member); ?>" alt="">
                                </td>
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