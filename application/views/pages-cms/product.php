  <div id="wrapper">


    <!-- Sidebar -->
    <?php $this->load->view('pages-cms/frame_side'); ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- PRODUCT PART -->
        <button type="button" class="btn btn-warning mb-3" data-toggle="modal" data-target="#exampleModal3" ><i class="fas fa-plus-circle"></i> Add Product</button>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-glasses"></i>
          <b>Product List</b></div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size:12px">
              <thead>
                
                <tr>
                  <th width="5%">No</th>
                  <th width="10%">Product Image</th>
                  <th width="20%">Product Info</th>
                  <th width="50%">Description</th>
                  <th width="5%">Status</th>
                  <th width="10%">Action</th>
                </tr>
              </thead>   
              <tbody>
            <?php
            
               $no = 1;
              foreach($content->result() as $dt):
               
                $id = $dt->PROD_ID;
                $img = $dt->IMAGE;
                $pname = $dt->NAME;
                $price = $dt->PRICE;
                $desc  = $dt->DESCRIPTION;
                $statusid = $dt->AVAILABILITY;
                $category = $dt->CATEGORY;
                $size = $dt->SIZE;
                $hex = $dt->HEXADECIMAL;
                $color = $dt->COLOR_ID;
                $default = $dt->DEFAULT_IMAGE;
                if($default == '1'):
              ?>

                <tr> 
                  <td><?php echo $no++; ?></td>

                  <td><img width="200px" src="<?php echo base_url($img); ?>"></img></td>
                  
                  <td>
                    <p>ID : <span style="color: orange;"><b><?php echo $id; ?></b></span></p>
                    <p>Name : <span style="text-transform: uppercase;"><b><?php echo $pname; ?></b></span></p>
                    <p>Size : <span style="text-transform: uppercase;color: orange;"><b><?php echo $size; ?></b></span></p>
                    <p>Price : <span style="color: #2e6e78;"><b>$<?php echo $price; ?></b></span></p> 
                  </td>
                  
                  <td>
                      <b>Colors : </b><br><br>
                      <?php 
                       $images = $this->cms->select_product_color($id);
                      foreach($images->result()as $img2):
                      ?>
                      <!-- <?php echo $img2->COLOR_ID; ?>  -->
                      <button style="width: 30px;
                          height: 30px;
                          margin: -1px 4px 0 0;
                          vertical-align: middle;
                          cursor: pointer;
                          border-radius: 50%;border:1px solid #ffffff-webkit-box-shadow:0px 0px 6px 0px #b1b1b1 ;
                          -moz-box-shadow:0px 0px 6px 0px #b1b1b1 ;
                          box-shadow:0px 0px 6px 0px #b1b1b1 ;background-color: <?php echo $img2->HEXADECIMAL; ?>;" class="btn"></button>
                      <?php endforeach; ?>

                      <br><br>
                      <?php 
                        if ($category == 'UNI'):?>
                          Category : <b style='color: #001f99'>UNI</b>
                        <?php
                        else:?>
                          Category : <b style='color: #990063'>GIRLS</b>
                        <?php
                        endif;
                        ?>  
                      <!-- Category :<br> <b><span><?php echo $category; ?></span></b> --><br><br>
                      <b>Description :</b><br> <?php echo $desc; ?>
                    </p>
                  </td>
                  
                  <td>
                      <?php 
                        if ($statusid=='1'):?>
                          <b style='color: #005709'>In Stock</b>
                        <?php
                        else:?>
                          <b style='color: #ad0000'>Out of Stock</b>
                        <?php
                        endif;
                        ?>  
                        
                  </td>
                 
                  <td>
                    <a href="#">
                    <img src="<?php echo base_url('images/material/view_logo.png'); ?>" alt="edit" style="width: 30%; border:none;" data-toggle="modal" data-target="#exampleModal"
                    data-id="<?php echo $id; ?>"
                    >
                    </a>

                    <a href="#">
                    <img src="<?php echo base_url('images/material/picture_logo.png'); ?>" alt="picture" style="width: 30%; border:none;" data-toggle="modal" data-target="#exampleModal2"
                    data-id="<?php echo $id; ?>"
                    >
                    </a>

                    <a data-id="<?php echo $id; ?>" class="buttonDelete" href="javascript:;" onclick="parentNode.submit();">
                    <img src="<?php echo base_url('images/material/delete_logo.png'); ?>" alt="delete" style="width: 30%; border:none;">
                    <input type="hidden" name="hiddenID" value="<?php echo $id;?>"></input>
                    </a>
                        

                  </td>
                </tr>                
            <?php
              endif;
              endforeach;
            ?>
             
            </tbody>

            </table>
          </div>
        </div>
      </div>
         
        <!-- END PRODUCT PART -->

       <!-- Modal Edit -->
        <div id="exampleModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-body" style="padding: 0!important;">
                <!-- LOAD THE CONTENT -->
              </div>
            </div>
            
          </div>
        </div>
        <!-- End Modal Edit -->

        <!-- Modal Image -->
        <div id="exampleModal2" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-body" style="padding: 0!important;">
                <!-- LOAD THE CONTENT -->
              </div>
            </div>
          </div>
        </div>
        <!-- End Modal Image -->

         <!-- Modal Add Product -->
        <div id="exampleModal3" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-body" style="padding: 0!important;">
                <!-- LOAD THE CONTENT -->
              </div>
            </div>
          </div>
        </div>
        <!-- End Modal Add -->


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

  <!-- ---------Modal Script------------ -->
  <script type="text/javascript">
    
    $(document).ready(function() {

      $('#radio-check').change(function() {
        var id = $('input[name="exampleRadios"]:checked').data('id');
        var hex = $('input[name="exampleRadios"]:checked').data('hex');
        var color = $('input[name="exampleRadios"]:checked').data('color');
        var image = $('input[name="exampleRadios"]:checked').data('image');
        
        $('#default-id').val(id);
        $('#default-hex').val(hex);
        $('#default-color').val(color);
        $('#default-image').val(image);

        $('#delete-id').val(id);
        $('#delete-hex').val(hex);
        $('#delete-color').val(color);
        $('#delete-image').val(image);

      });
        
    });

    $('#exampleModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget);
      var id = button.data('id');

      // console.log('Button Position ' + orderno);
      var getProductUpdate = '<?php echo base_url('Product_cms/getProductUpdate?id='); ?>';

      $('.modal-body').load(getProductUpdate + id,function(){
        $('#exampleModal').modal({show:true});
      });

    });

    $('#exampleModal2').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget);
      var id = button.data('id');

      // console.log('Button Position ' + orderno);
      var getProduct = '<?php echo base_url('Product_cms/getProduct?id='); ?>';

      $('.modal-body').load(getProduct + id,function(){
        $('#exampleModal2').modal({show:true});
      });
    });

    $('#exampleModal3').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget);
      var id = button.data('id');

      // console.log('Button Position ' + orderno);
      var getProductAdd = '<?php echo base_url('Product_cms/getProductAdd'); ?>';

      $('.modal-body').load(getProductAdd,function(){
        $('#exampleModal3').modal({show:true});
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
        title:"Delete Product",
        text:"Are you sure you want to delete this product from product list?",
        type: "warning",
        showCancelButton: true,
        cancelButtonColor: '#d33',
        confirmButtonText: "Confirm",
        confirmButtonColor: '#3085d6'
      }).then((result) => {
          if (result.value) {
            swalWithBootstrapButtons.fire(
              'Deleted!',
              'Selected order has been deleted.',
              'success'
            );
            $.ajax({
                type: "POST",
                url:"<?php echo base_url('Product_cms/deleteProduct'); ?>",
                data: {hiddenID:id},
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

<!-- ---------End Modal Script------------ -->


</body>