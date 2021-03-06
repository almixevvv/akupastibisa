<style>
    body {
        background-color: rgb(0, 138, 177);
        background-image: url(<?php echo base_url('assets/img/polygonbg.jpg'); ?>);
    }

    .inner_container {
        margin-left: 5rem;
        margin-right: 5rem;
        margin-top: 3.7rem;
    }

    .login_left {
        width: 50%;
        height: 88vh;
        box-sizing: border-box;
        min-height: 1px;
        position: relative;
        padding-left: 0px;
        padding-right: 0px;
        background-image: url(<?php echo base_url('assets/img/login-left.jpg'); ?>);
        background-size: cover;
        border-top-left-radius: 2rem;
        border-bottom-left-radius: 2rem;
    }

    .login_right {
        width: 50%;
        background: #fff;
    }

    .login-title>p {
        color: #fff;
        font-family: "Arial";
        font-size: 16px;
    }

    .white-color {
        color: #fff;
    }

    #material-login {
        background-color: #3b7a8f;
        margin-left: 8rem;
        margin-right: 8rem;
        border: 1px solid #3b7a8f;
        border-radius: 10px;
    }

    #instruktur-login {
        background-color: #3b7a8f;
        margin-left: 8rem;
        margin-right: 8rem;
        border: 1px solid #3b7a8f;
        border-radius: 10px;
    }

    #certificate-login {
        background-color: #3b7a8f;
        margin-left: 8rem;
        margin-right: 8rem;
        border: 1px solid #3b7a8f;
        border-radius: 10px;
    }

    .tab_container {
        padding-left: 3rem;
        padding-right: 3rem;
        padding-top: 2.3rem;
        overflow-y: scroll;
        height: 78vh;
    }

    .register-form {
        width: 100%;
        padding-left: 4rem;
        padding-right: 3rem;
        padding-top: 1.5rem;
    }

    .tab_separator {
        border-top: 1px solid #00000021;
        margin-top: 1rem;
    }

    a {
        color: #017e91;
        text-decoration: none;
    }

    .nav-tabs .nav-item.show .nav-link,
    .nav-tabs .nav-link.active {
        color: #017e91;
        font-weight: 600;
        background-color: none;
        border-bottom: 2px solid #008ab1;
        border-left: none;
        border-right: none;
    }

    .btn-custom {
        background-color: #008ab1;
        border-color: #008ab1;
        color: white;
    }

    .custom-anchor {
        color: #008ab1;
    }

    .social-btn .btn {
        margin: 10px 0;
        font-size: 15px;
        text-align: left;
        line-height: 24px;
    }

    .social-btn .btn i {
        float: left;
        margin: 4px 15px 0 5px;
        min-width: 15px;
    }

    .swal2-select {
        display: none !important;
    }

    .form-control:focus {
        border-color: #CCC;
        outline: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
    }
</style>

<script type="text/javascript">
    var loginWidget, registerWidget;

    var onloadCallback = function() {
        loginWidget = grecaptcha.render('loginWidget', {
            'sitekey': '6Ld2qPIUAAAAACBW438Lt3L5DJJhSQoOCm4GkUli',
        });

        registerWidget = grecaptcha.render('registerWidget', {
            'sitekey': '6Ld2qPIUAAAAACBW438Lt3L5DJJhSQoOCm4GkUli',
        });
    }

    var registerCaptcha = function(response) {
        console.log('INI DARI CALLBACK ' + response);
    };
</script>

<body>
    <div class="container-fluid">
        <div class="inner_container">
            <div class="d-flex">
                <div class="login_left">

                    <div style="margin-left:60px;">
                        <img class="mt-5 mx-auto" src="<?php echo base_url('assets/img/logo.png'); ?>" alt="Akupastibisa Logo" />
                        <span class="login-title">
                            <h3 style="color:#FFF;margin-top:100px;">JOIN NOW !</h3>
                            <p>
                                Membantu Anda mencapai <span class="font-weight-bold" style="color:#44bcd8;">Tujuan</span> serta<br />
                                mengejar <span class="font-weight-bold" style="color:#44bcd8;">Impian</span> Anda <br /><br />Perbesar kesempatan Anda dalam hidup<br />
                                dengan meningkatkan <span class="font-weight-bold" style="color:#44bcd8;">Kemampuan</span> Anda dengan<br />belajar dimanapun - kapanpun besama <strong>AkuPastiBisa</strong>
                            </p>
                        </span>
                    </div>
                </div>
                <div class="login_right">
                    <ul class="nav nav-tabs d-flex justify-content-around" id="myTab" role="tablist">
                        <li class="nav-item" style="width: 25%;">
                            <a class="nav-link pb-3 pt-3 w-100 text-center active show" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Masuk</a>
                        </li>
                        <li class="nav-item" style="width: 25%;">
                            <a class="nav-link pb-3 pt-3 w-100 text-center" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Daftar</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                            <div class="tab_container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex justify-content-center">
                                            <h4>Masuk ke akun Akupastibisa kamu</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <form id="loginForm" class="register-form needs-validation" novalidate action="<?php echo base_url('login/loginProcess'); ?>" method="POST">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="emailAddress">Alamat Email</label>
                                                <input required type="email" class="form-control" id="loginEmail" name="loginEmail" placeholder="Alamat email">
                                                <div class="invalid-feedback">
                                                    Email tidak boleh kosong
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="loginPassword">Password</label>
                                                <input required type="password" class="form-control" id="loginPassword" name="loginPassword" placeholder="Password">
                                                <div class="invalid-feedback">
                                                    Password tidak boleh kosong
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-2">
                                            <div class="d-flex justify-content-end">
                                                <a href="#" class="custom-anchor">
                                                    <small>Lupa password</small>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex justify-content-center">
                                                <div id="loginWidget" class="g-recaptcha" data-callback="loginCaptcha" data-sitekey="6Ld2qPIUAAAAACBW438Lt3L5DJJhSQoOCm4GkUli"></div>
                                            </div>
                                        </div>
                                        <div class="col-12 pt-3">
                                            <button type="submit" class="btn btn-custom w-100"><strong>MASUK</strong></button>
                                        </div>

                                        <div class="col-12">
                                            <div class="text-center social-btn">
                                                <a href="#" class="btn btn-primary btn-block">
                                                    <i class="ti-facebook"></i>
                                                    <div class="d-flex justify-content-center">
                                                        Sign in with<b style="color: white; padding-left: 5px;"> Facebook</b>
                                                    </div>
                                                </a>
                                                <a href="#" class="btn btn-danger btn-block">
                                                    <i class="ti-google"></i>
                                                    <div class="d-flex justify-content-center">
                                                        Sign in with<b style="color: white; padding-left: 5px;"> Google</b>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                            <div class="tab_container">
                                <div class="row">
                                    <form id="registerForm" class="register-form pt-0 pb-3 needs-validation" novalidate action="<?php echo base_url('login/registerProcess'); ?>" method="POST">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="registerNama">Nama Lengkap*</label>
                                                <input required type="text" class="form-control" id="registerNama" placeholder="Nama Lengkap" aria-describedby="namaHelp" name="registerNama">
                                                <small id="namaHelp" class="form-text text-muted">Nama akan tertera pada sertifikat</small>
                                                <div class="invalid-feedback">
                                                    Nama tidak boleh kosong
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="registerEmail">Email*</label>
                                                <input required type="email" class="form-control" id="registerEmail" placeholder="Alamat Email" name="registerEmail">
                                                <div class="invalid-feedback">
                                                    Alamat email tidak boleh kosong
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="registerPhone">Nomor Telepon*</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="prepend-phone">+62</span>
                                                </div>
                                                <input required type="tel" class="form-control" id="registerPhone" aria-label="phoneNumber" aria-describedby="prepend-phone" name="registerPhone">
                                                <div class="invalid-feedback">
                                                    Nomor telepon tidak boleh kosong
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="registerPassword">Password*</label>
                                                <input required type="password" class="form-control" id="registerPassword" placeholder="Password" name="registerPassword">
                                                <div class="invalid-feedback">
                                                    Password tidak boleh kosong
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="registerConfirmPassword">Konfirmasi Password*</label>
                                                <input type="password" class="form-control" id="registerConfirmPassword" placeholder="Konfirmasi password">
                                                <div class="invalid-feedback">
                                                    Password tidak sama
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="d-flex justify-content-center">
                                                <p class="text-center">Dengan mendaftar, Anda menyetujui <a class="custom-anchor" href="#">Ketentuan Penggunaaan</a> dan <a class="custom-anchor" href="#">Kebijakan Privasi</a>.</p>
                                            </div>
                                        </div>

                                        <div class="col-12 mt-2 mb-4">
                                            <div class="d-flex justify-content-center">
                                                <div id="registerWidget" class="g-recaptcha" data-sitekey="6Ld2qPIUAAAAACBW438Lt3L5DJJhSQoOCm4GkUli" data-callback="registerCaptcha"></div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-custom w-100">DAFTAR</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js'); ?>" type="4063bac1d4ccabf8fe6073bb-text/javascript"></script>
    <script src="<?php echo base_url('assets/js/popper.js'); ?>" type="4063bac1d4ccabf8fe6073bb-text/javascript"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>" type="4063bac1d4ccabf8fe6073bb-text/javascript"></script>
    <script src="<?php echo base_url('vendors/nice-select/js/jquery.nice-select.min.js'); ?>" type="4063bac1d4ccabf8fe6073bb-text/javascript"></script>
    <script src="<?php echo base_url('vendors/owl-carousel/owl.carousel.min.js'); ?>" type="4063bac1d4ccabf8fe6073bb-text/javascript"></script>
    <script src="<?php echo base_url('assets/js/owl-carousel-thumb.min.js'); ?>" type="4063bac1d4ccabf8fe6073bb-text/javascript"></script>
    <script src="<?php echo base_url('assets/js/jquery.ajaxchimp.min.js'); ?>" type="4063bac1d4ccabf8fe6073bb-text/javascript"></script>
    <script src="<?php echo base_url('assets/js/mail-script.js'); ?>" type="4063bac1d4ccabf8fe6073bb-text/javascript"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE" type="4063bac1d4ccabf8fe6073bb-text/javascript"></script>
    <script src="<?php echo base_url('assets/js/gmaps.min.js'); ?>" type="4063bac1d4ccabf8fe6073bb-text/javascript"></script>
    <script src="<?php echo base_url('assets/js/theme.js'); ?>" type="4063bac1d4ccabf8fe6073bb-text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="4063bac1d4ccabf8fe6073bb-text/javascript"></script>
    <script type="4063bac1d4ccabf8fe6073bb-text/javascript">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-23581568-13');
    </script>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="4063bac1d4ccabf8fe6073bb-|49" defer=""></script>


    <?php if ($this->session->userdata('error') == 'captcha') { ?>
        <script>
            Swal.fire({
                title: 'Login gagal',
                text: "Google Captcha bermasalah. Mohon periksa kembali",
                type: 'error',
                timer: 4000,
                showCloseButton: true,
                showCancelButton: false
            });
        </script>
    <?php } ?>

    <?php if ($this->session->userdata('error') == 'email') { ?>
        <script>
            Swal.fire({
                title: 'Login gagal',
                text: "Email tidak terdaftar. Mohon periksa kembali",
                type: 'error',
                timer: 4000,
                showCloseButton: true,
                showCancelButton: false
            });
        </script>
    <?php } ?>

    <?php if ($this->session->userdata('error') == 'password') { ?>
        <script>
            Swal.fire({
                type: 'error',
                title: '<h4>Login gagal</h4>',
                text: '<p>Password salah. Mohon periksa kembali</p>',
                showCloseButton: true,
                showCancelButton: false,
                timer: 4000,
            });
        </script>
    <?php } ?>

    <script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();

        $('#registerPassword, #registerConfirmPassword').on('keyup', function() {

            var password = $('#registerPassword').val();
            var confirmPassword = $('#registerConfirmPassword').val();

            if (password == confirmPassword) {
                $('#registerConfirmPassword').removeClass('is-invalid').addClass('is-valid');
            } else {
                $('#registerForm').removeClass('was-validated');
                $('#registerConfirmPassword').removeClass('is-valid').addClass('is-invalid');
            }
        });

        $('#loginForm').on('submit', function(e) {

            var response = grecaptcha.getResponse(loginWidget);

            if (response.length === 0) {
                e.preventDefault();
                console.log('kosong');
            } else {
                console.log('masukin');
            }

        });

        $('#registerForm').on('submit', function(e) {
            e.preventDefault();

            console.log(registerWidget);
            var response = grecaptcha.getResponse(registerWidget);
            console.log(response);

            console.log(grecaptcha);

            // if (response.length === 0) {
            //     e.preventDefault();
            //     console.log('kosong');
            // } else {
            //     console.log('masukin');
            // }
        });
    </script>

</body>

</html>