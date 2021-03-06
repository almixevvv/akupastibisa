<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Akupastibisa Instruktur - CMS</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/cms/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/cms/css/sb-admin-2.min.css'); ?>" rel="stylesheet">

    <!-- Sweet Alert -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/sweetalert/sweetalert.css'); ?>">
    <script src="<?php echo base_url('assets/plugins/sweetalert/sweetalert.min.js'); ?>"></script>

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user" action="<?php echo base_url('InstructorCMS/loginProcess'); ?>" novalidate method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="userForm" name="userForm" aria-describedby="emailHelp" placeholder="Enter Username...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="passForm" name="passForm" placeholder="Password">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block mt-5 mb-5">
                                            Login
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/cms/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/cms/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/cms/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/cms/js/sb-admin-2.min.js'); ?>"></script>

    <?php if ($this->session->has_userdata('error')) { ?>
        <script>
            Swal.fire({
                title: '<?php echo $this->session->userdata('title'); ?>',
                text: '<?php echo $this->session->userdata('message'); ?>',
                type: 'error',
                timer: 4000,
                showCloseButton: true,
                showCancelButton: false
            });
        </script>
    <?php } ?>

</body>

</html>