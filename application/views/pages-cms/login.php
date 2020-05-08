<style type="text/css" >

  

  body{

    background-image: url(<?php echo base_url('assets/img/polygonbg.png');?>)

  }





</style>



<body>

  <div class="container">

    <div class="card card-login mx-auto mt-5">

      <div class="card-header">

        <div class="d-flex justify-content-center" >

          <img src="<?php echo base_url('assets/img/logo_dark.png'); ?>" style="width: 50%;">

        </div>

      </div>

      <div class="card-body" style="background-color: #f3f3f3">



        <?php echo form_open('CMS/login_process'); ?>

          <div class="form-group">

            <div class="form-label-group">

              <input type="text" id="inputEmail" name="txt-username" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">

              <label for="inputEmail">Username</label>

            </div>

          </div>

          <div class="form-group">

            <div class="form-label-group">

              <input type="password" id="inputPassword" name="txt-password" class="form-control" placeholder="Password" required="required">

              <label for="inputPassword">Password</label>

            </div>

            <?php if($this->input->get('error') == 1): ?>

            <div class="alert alert-danger alert-dismissible fade show mt-2">

              <button type="button" class="close" data-dismiss="alert">&times;</button>

              <strong>Login Failed!</strong> Wrong Username/Password.

            </div>

            <?php elseif($this->input->get('error') == 2): ?>

            <div class="alert alert-danger alert-dismissible fade show mt-2">

              <button type="button" class="close" data-dismiss="alert">&times;</button>

              <strong>Login Failed!</strong> Username Not Found.

            </div>

            <?php endif; ?>

          </div>

          <div class="form-group">

            <div class="checkbox">

              <label>

                <input type="checkbox" value="remember-me">

                Remember Password

              </label>

            </div>

          </div>

          <?php

            $dataSubmit = array(

              'type' => 'submit',

              'class' => 'btn btn-primary',

              'content' => 'LOGIN',

            );



            echo form_button($dataSubmit);

          ?>

        <?php echo form_close(); ?>

      </div>

    </div>

  </div>



  <!-- Bootstrap core JavaScript-->

  <script src="<?php echo base_url('assets/cms/vendor/jquery/jquery.min.js'); ?>"></script>

  <script src="<?php echo base_url('assets/cms/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>



  <!-- Core plugin JavaScript-->

  <script src="<?php echo base_url('assets/cmsvendor/jquery-easing/jquery.easing.min.js'); ?>"></script>



</body>

