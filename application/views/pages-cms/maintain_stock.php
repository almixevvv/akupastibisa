  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view('pages-cms/frame_side'); ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- MEMBER PART -->
        <button type="button" class="btn btn-warning mb-3" data-toggle="modal" data-target="#exampleModal3" ><i class="fas fa-plus-circle"></i> Add Product Stock</button>
         <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-glasses"></i>
          <b>Product Stock</b></div>
        <div class="card-body">
          
        <!-- <label>Search By Color:</label>
        <td>
           <?php
            if ($this->input->get('query') == 'all') :
            ?>
              <a style="text-decoration: none!important;" href="<?php echo base_url('cms/maintain/status?query=all'); ?>">
                <button class="btn btn-warning" style="font-weight: bold; font-size: 9px; margin-left: 1em; width: 13%;">All</button>
              </a>
            <?php else : ?>
              <a style="text-decoration: none!important;" href="<?php echo base_url('cms/maintain/status?query=all'); ?>">
                <button class="btn btn-outline-warning" style="font-weight: bold; font-size: 9px; margin-left: 1em; width: 13%;">All</button>
              </a>
            <?php endif; ?>
        </td>
        <td>
           <?php
            if ($this->input->get('query') == 'blue') :
            ?>
              <a style="text-decoration: none!important;" href="<?php echo base_url('cms/maintain/status?query=blue'); ?>">
                <button class="btn btn-warning" style="font-weight: bold; font-size: 9px; margin-left: 1em; width: 13%;">Blue</button>
              </a>
            <?php else : ?>
              <a style="text-decoration: none!important;" href="<?php echo base_url('cms/maintain/status?query=blue'); ?>">
                <button class="btn btn-outline-warning" style="font-weight: bold; font-size: 9px; margin-left: 1em; width: 13%;">Blue</button>
              </a>
            <?php endif; ?>
        </td>


           

            <?php
            if ($this->input->get('query') == 'black') :
            ?>
              <a style="text-decoration: none!important;" href="<?php echo base_url('cms/maintain/status?query=black'); ?>">
                <button class="btn btn-warning" style="font-weight: bold; font-size: 9px; margin-left: 1em; width: 13%;">Black</button>
              </a>
            <?php else : ?>
              <a style="text-decoration: none!important;" href="<?php echo base_url('cms/maintain/status?query=black'); ?>">
                <button class="btn btn-outline-warning" style="font-weight: bold; font-size: 9px; margin-left: 1em; width: 13%;">Black</button>
              </a>
            <?php endif; ?>

            <?php
            if ($this->input->get('query') == 'red') :
            ?>
              <a style="text-decoration: none!important;" href="<?php echo base_url('cms/maintain/status?query=red'); ?>">
                <button class="btn btn-warning" style="font-weight: bold; font-size: 9px; margin-left: 1em; width: 13%;">Red</button>
              </a>
            <?php else : ?>
              <a style="text-decoration: none!important;" href="<?php echo base_url('cms/maintain/status?query=red'); ?>">
                <button class="btn btn-outline-warning" style="font-weight: bold; font-size: 9px; margin-left: 1em; width: 13%;">Red</button>
              </a>
            <?php endif; ?>

            <?php
            if ($this->input->get('query') == 'ash') :
            ?>
              <a style="text-decoration: none!important;" href="<?php echo base_url('cms/maintain/status?query=ash'); ?>">
                <button class="btn btn-warning" style="font-weight: bold; font-size: 9px; margin-left: 1em; width: 13%;">Ash</button>
              </a>
            <?php else : ?>
              <a style="text-decoration: none!important;" href="<?php echo base_url('cms/maintain/status?query=ash'); ?>">
                <button class="btn btn-outline-warning" style="font-weight: bold; font-size: 9px; margin-left: 1em; width: 13%;">Ash</button>
              </a>
            <?php endif; ?>

            <?php
            if ($this->input->get('query') == 'aqua') :
            ?>
              <a style="text-decoration: none!important;" href="<?php echo base_url('cms/maintain/status?query=aqua'); ?>">
                <button class="btn btn-warning" style="font-weight: bold; font-size: 9px; margin-left: 1em; width: 13%;">Aqua</button>
              </a>
            <?php else : ?>
              <a style="text-decoration: none!important;" href="<?php echo base_url('cms/maintain/status?query=aqua'); ?>">
                <button class="btn btn-outline-warning" style="font-weight: bold; font-size: 9px; margin-left: 1em; width: 13%;">Aqua</button>
              </a>
            <?php endif; ?>

            <?php
            if ($this->input->get('query') == 'grey') :
            ?>
              <a style="text-decoration: none!important;" href="<?php echo base_url('cms/maintain/status?query=grey'); ?>">
                <button class="btn btn-warning" style="font-weight: bold; font-size: 9px; margin-left: 1em; width: 13%;">Grey</button>
              </a>
            <?php else : ?>
              <a style="text-decoration: none!important;" href="<?php echo base_url('cms/maintain/status?query=grey'); ?>">
                <button class="btn btn-outline-warning" style="font-weight: bold; font-size: 9px; margin-left: 1em; width: 13%;">Grey</button>
              </a>
            <?php endif; ?>

            <?php
            if ($this->input->get('query') == 'lilac') :
            ?>
              <a style="text-decoration: none!important;" href="<?php echo base_url('cms/maintain/status?query=lilac'); ?>">
                <button class="btn btn-warning" style="font-weight: bold; font-size: 9px; margin-left: 1em; width: 13%;">Lilac</button>
              </a>
            <?php else : ?>
              <a style="text-decoration: none!important;" href="<?php echo base_url('cms/maintain/status?query=lilac'); ?>">
                <button class="btn btn-outline-warning" style="font-weight: bold; font-size: 9px; margin-left: 1em; width: 13%;">Lilac</button>
              </a>
            <?php endif; ?>

            <?php
            if ($this->input->get('query') == 'burgundy') :
            ?>
              <a style="text-decoration: none!important;" href="<?php echo base_url('cms/maintain/status?query=burgundy'); ?>">
                <button class="btn btn-warning" style="font-weight: bold; font-size: 9px; margin-left: 1em; width: 13%;">Burgundy</button>
              </a>
            <?php else : ?>
              <a style="text-decoration: none!important;" href="<?php echo base_url('cms/maintain/status?query=burgundy'); ?>">
                <button class="btn btn-outline-warning" style="font-weight: bold; font-size: 9px; margin-left: 1em; width: 13%;">Burgundy</button>
              </a>
            <?php endif; ?>

            <?php
            if ($this->input->get('query') == 'mauve') :
            ?>
              <a style="text-decoration: none!important;" href="<?php echo base_url('cms/maintain/status?query=mauve'); ?>">
                <button class="btn btn-warning" style="font-weight: bold; font-size: 9px; margin-left: 1em; width: 13%;">Mauve</button>
              </a>
            <?php else : ?>
              <a style="text-decoration: none!important;" href="<?php echo base_url('cms/maintain/status?query=mauve'); ?>">
                <button class="btn btn-outline-warning" style="font-weight: bold; font-size: 9px; margin-left: 1em; width: 13%;">Mauve</button>
              </a>
            <?php endif; ?>

            <?php
            if ($this->input->get('query') == 'navy') :
            ?>
              <a style="text-decoration: none!important;" href="<?php echo base_url('cms/maintain/status?query=navy'); ?>">
                <button class="btn btn-warning" style="font-weight: bold; font-size: 9px; margin-left: 1em; width: 13%;">Navy</button>
              </a>
            <?php else : ?>
              <a style="text-decoration: none!important;" href="<?php echo base_url('cms/maintain/status?query=navy'); ?>">
                <button class="btn btn-outline-warning" style="font-weight: bold; font-size: 9px; margin-left: 1em; width: 13%;">Navy</button>
              </a>
            <?php endif; ?>

            <?php
            if ($this->input->get('query') == 'pink') :
            ?>
              <a style="text-decoration: none!important;" href="<?php echo base_url('cms/maintain/status?query=pink'); ?>">
                <button class="btn btn-warning" style="font-weight: bold; font-size: 9px; margin-left: 1em; width: 13%;">Pink</button>
              </a>
            <?php else : ?>
              <a style="text-decoration: none!important;" href="<?php echo base_url('cms/maintain/status?query=pink'); ?>">
                <button class="btn btn-outline-warning" style="font-weight: bold; font-size: 9px; margin-left: 1em; width: 13%;">Pink</button>
              </a>
            <?php endif; ?>

            <?php
            if ($this->input->get('query') == 'purple') :
            ?>
              <a style="text-decoration: none!important;" href="<?php echo base_url('cms/maintain/status?query=purple'); ?>">
                <button class="btn btn-warning" style="font-weight: bold; font-size: 9px; margin-left: 1em; width: 13%;">Purple</button>
              </a>
            <?php else : ?>
              <a style="text-decoration: none!important;" href="<?php echo base_url('cms/maintain/status?query=purple'); ?>">
                <button class="btn btn-outline-warning" style="font-weight: bold; font-size: 9px; margin-left: 1em; width: 13%;">Purple</button>
              </a>
            <?php endif; ?> -->


           <!--  <form name="frame_action" method="POST">
              <div class="form-row">
                <div class="form-group col-md-4">
                  <select id="inputState" class="custom-select" style= "width: 100%; float: left;">
                    <option selected>Select Color</option>
                    <?php 
                      foreach($content->result() as $r_brand){
                        ?>
                         <option value="<?php echo $r_brand->COLOR_CODE?>"><?php echo $r_brand->COLOR_CODE?></option>
                        <?php
                      }
                    ?>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <input type="submit" name="" value='Search' onclick="submit_form()"class="btn btn-info btn-sm" style="width: 8em;margin-bottom: 5px; margin-top: 2%;" >
                </div>
              </div>
            </form> -->
<!--             <br>
            <br>
            <br> -->

            <!-- Select Color -->
           <!--  <div class="form-group">
              <div class="row">
                <label class="control-label" for="selectbasic" style="margin-left: 1em;">Search By Color</label>
                <div style="margin-left: 1em;">
                  <select id="selectbasic" name="selectbasic" class="form-control" onChange="document.location.href=this.options[this.selectedIndex].value;">
                    <option value="0" selected>Color</option>
                    <option value="maintain/status?query=all">All</option>
                    <option value="maintain/status?query=aqua">Aqua</option>
                    <option value="maintain/status?query=ash">Ash</option>
                    <option value="maintain/status?query=black">Black</option>
                    <option value="maintain/status?query=blue">Blue</option>
                    <option value="maintain/status?query=burgundy">Burgundy</option>
                    <option value="maintain/status?query=grey">Grey</option>
                    <option value="maintain/status?query=mauve">Mauve</option>
                    <option value="maintain/status?query=navy">Navy</option>
                    <option value="maintain/status?query=pink">Pink</option>
                    <option value="maintain/status?query=purple">Purple</option>
                    <option value="maintain/status?query=red">Red</option>
                  </select>
                </div>
              </div>
            </div> -->
          
        

          

          <div class="table-responsive" >
            <!-- <a href="<?php echo base_url('Maintain_Stock_cms/AddProductStock'); ?>" style="margin-bottom: 1em;" role="button" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a> -->
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size:12px">
              <thead>
                <tr>
                  <th width="auto">No</th>
                  <th width="50px">Image Product</th>
                  <th width="auto">Product</th>
                  <th width="auto">Product Name</th>
                  <th width="auto">Color</th>
                  <th width="auto">Stock</th>
                  <!-- <th width="auto">Action</th> -->
                </tr>
              </thead>
              <tbody>
            <?php
               $no = 1;
              foreach($content->result() as $dt){
                // $id         = $dt->REC_ID;
                $img        = $dt->IMAGE;
                $name       = $dt->NAME;
                $product_id = $dt->PROD_ID;
                $color      = $dt->COLOR;
                $stock      = $dt->STOCK;
                $hexa       = $dt->HEXADECIMAL;                

                echo "<tr>"; ?>
                  <td>
                      <?php echo $no++;?>       
                  </td>
                  <td>
                    <img width="50%" src="<?php echo base_url($img); ?>">
                  </td>
                  <td>
                      <?php echo $product_id?>                     
                  </td>
                  <td>
                      <?php echo $name?>                     
                  </td>
                  <td>
                      <p style="color: <?php echo $hexa;?>"><?php echo $color?> </p>                    
                  </td>
                  <td>
                      <?php echo $stock;?>                     
                  </td>
                  <!-- <td>
                     <button title="Edit Produk" type="button" style="width: 45%;margin-bottom: 5px" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editProductStock" data-id="<?php echo $id; ?>"><i class="fas fa-pencil-alt"></i> EDIT</button>
                     <a href="<?php echo base_url('Maintain_Stock_cms/deleteStock?id=' . $id); ?>" onclick="return confirm('Are you sure to delete this item?')" style="width: 45%;margin-bottom: 5px" role="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                     <input type="hidden" name="deleteStock" value="<?php echo $id; ?>">
                  </td> -->
                                 
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
        <div id="editProductStock" class="modal fade bd-example-modal-md" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-body" style="padding: 0!important;">
                        <!-- LOAD THE CONTENT -->
                    </div>
                </div>

            </div>
        </div>

        <div id="exampleModal3" class="modal fade bd-example-modal-md" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
     <!--  <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Incube Solutions 2019</span>
          </div>
        </div>
      </footer> -->

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

     $('#exampleModal3').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget);
      var id = button.data('id');

      // console.log('Button Position ' + orderno);
      var getStockAdd = '<?php echo base_url('Maintain_Stock_cms/getStockAdd'); ?>';

      $('.modal-body').load(getStockAdd,function(){
        $('#exampleModal3').modal({show:true});
      });
    });

     $('#editProductStock').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget);
          var id = button.data('id');

          // console.log('Button Position ' + orderno);
          var getIdStock = '<?php echo base_url('Maintain_Stock_cms/getStock?id='); ?>';

          $('.modal-body').load(getIdStock + id,function(){
            $('#editProductStock').modal({show:true});
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
<script>
    function submit_form() {
      var choice = $("#inputState").val();

      if(choice=="$r_brand->COLOR_CODE?>"){
        frame_action.action="<?php echo base_url().'cms/maintain'?>";
        frame_action.target="_blank";
      } 
      // else if(choice=="WEIGHING_OUTBOUND"){
      //   frame_action.action="<?php echo base_url().'report_weighing/printOutbound'?>";
      //   frame_action.target="_blank";
      // }
      // else if(choice=="ALL"){
      //   frame_action.action="<?php echo base_url().'report_weighing/printAll'?>";
      //   frame_action.target="_blank";
      // }

    };
  </script>
</body>
