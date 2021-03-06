  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view('pages-cms/frame_side'); ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- MEMBER PART -->
         <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-user-tie"></i>
          <b>Member List</b></div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size:12px">
              <thead>
                <tr>
                  <th width="auto">No</th>
                  <th width="auto">Member Info</th>
                  <th width="auto">Contacts</th>
                  <th width="auto">Other Info</th>
                  <th width="auto">Status</th>
                  <th width="auto">Action</th>
                </tr>
              </thead>   
              <tbody>
            <?php
               $no = 1;
              foreach($content->result() as $dt){
                $id = $dt->ID;
                $first_name = $dt->FIRST_NAME;
                $last_name = $dt->LAST_NAME;
                $birhtdate = $dt->BIRTH_DATE;
                $joindate = $dt->JOIN_DATE;
                $phone = $dt->PHONE;
                $addr = $dt->ADDRESS;
                $country = $dt->COUNTRY;
                $country_code = $dt->COUNTRY_CODE;
                $province = $dt->PROVINCE;
                $postal = $dt->POSTAL_CODE;
                $email = $dt->EMAIL;
                $status = $dt->STATUS;

                echo "<tr>"; ?>
                  <td>
                        <!-- <b style="display: none;"><?php echo $join_date;?></b>  -->
                      <?php echo $no++;?>       
                  </td>
                  
                  <td>
                      <p style='line-height:20px;'>
                        <b>Name : </b><br><label style='color: #e09600;'><?php echo $first_name;?> <?php echo $last_name;?></label><br> 
                        <b>Address :</b><br> <?php echo $addr;?> <br><br>
                        <b>Province : </b><?php echo $province;?> - <?php echo $postal;?> <br>
                        <b>Country : </b><?php echo "(+$country_code)";?> <?php echo $country;?> <br>
                        
                        
                      </p>                        
                  </td>

                  <td>
                      <p style='line-height:20px;'>
                        <b>Email : </b><br><label style='color: #e09600;'><?php echo $email;?></label> <br><br>  
                        <b>Phone : </b><br><?php echo $phone;?>
                      </p>                        
                  </td>

                  <td>
                      <p style='line-height:20px;'>
                        <b>Birth Date : </b><br><?php echo $birhtdate;?> <br><br>  
                        <b>Join Date : </b><br><?php echo $joindate;?>
                      </p>                        
                  </td>

                  <td>
                      <p style='line-height:20px;'>
                        <?php 
                          if ($status=='ACTIVE'):?>
                            <b style='color: #005709'><?php echo $status?></b>
                          <?php
                          else:?>
                            <b style='color: #ad0000'><?php echo $status?></b>
                          <?php
                          endif;
                          ?>  
                      </p>                        
                  </td>

                 
                    
                  <td>
                     <button class="btn btn-info" style="width: 6em;font-size: 12px;" type="button" data-toggle="modal" data-target="#memberModal" data-id="<?php echo $id; ?>">EDIT</button><br>
                     <button data-id="<?php echo $id;?>" class="buttonDelete btn btn-danger" style="width: 6em;font-size: 12px;margin-top: 0.5em;" type="submit">DELETE</button>
                  </td>
                                 
            <?php
                echo "</tr>";
              }
            ?>
             
            </tbody>
            </table>
          </div>
        </div>
      </div>
    

        <!-- END MEMBER PART -->
        <!-- Modal -->
        <div id="memberModal" class="modal fade bd-example-modal-md" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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

     $('#memberModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget);
          var id = button.data('id');

          // console.log('Button Position ' + orderno);
          var getMember = '<?php echo base_url('Member_cms/getMember?id='); ?>';

          $('.modal-body').load(getMember + id,function(){
            $('#memberModal').modal({show:true});
          });
    });
  </script>

  <script type="text/javascript">

  $(document).ready(function() {

    const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
      },
      buttonsStyling: false,
    });

    $('.buttonDelete').on('click', function() {
      var id=$(this).attr("data-id");
      swal.fire({
        title:"Delete Member",
        text:"Are you sure you want to delete this member from member list?",
        type: "warning",
        showCancelButton: true,
        cancelButtonColor: '#d33',
        confirmButtonText: "Confirm",
        confirmButtonColor: '#3085d6'
      }).then((result) => {
          if (result.value) {
            swalWithBootstrapButtons.fire(
              'Deleted!',
              'Selected member has been deleted.',
              'success'
            );
            $.ajax({
                type: "POST",
                url:"<?php echo base_url('Member_cms/deleteMember'); ?>",
                data: {id:id},
                success: function(data) {
                  console.log(data);
                  location.reload();
                }
            });
        }
      });
    });

  });

</script>
</body>
