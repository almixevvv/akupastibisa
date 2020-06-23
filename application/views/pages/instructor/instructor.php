<style>
    .home_quotes {
        padding-top: 3rem;
        padding-bottom: 3rem;
        margin-top: 2.3rem;
        background: rgb(0, 138, 177);
        background: -moz-linear-gradient(90deg, rgba(0, 138, 177, 1) 30%, rgba(0, 181, 198, 1) 100%);
        background: -webkit-linear-gradient(90deg, rgba(0, 138, 177, 1) 30%, rgba(0, 181, 198, 1) 100%);
        background: linear-gradient(90deg, rgba(0, 138, 177, 1) 30%, rgba(0, 181, 198, 1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#008ab1", endColorstr="#00b5c6", GradientType=1);
        background-image: url(<?php echo base_url('assets/img/polygonbg.jpg'); ?>);
    }

    .quotes_text {
        color: white;
    }

    .section_gap_top {
        padding-top: 35px;
    }

    .login_right {
        width: 50%;
        background: #fff;
    }

    .tab_container {
        padding-left: 3rem;
        padding-right: 3rem;
        padding-top: 2.3rem;
        overflow-y: scroll;
        height: 78vh;
    }

    #loginForm {
        padding-left: 15rem;
        padding-right: 15rem;
    }

    #registerForm {
        padding-left: 4rem;
        padding-right: 3rem;
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

    .form-control:focus {
        border-color: #CCC;
        outline: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
    }
</style>

<section class="about_banner_area">
    <div class="banner_inner">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner_content text-center">
                        <h2 class="text-uppercase mt-4 mb-3" style="color: #ffff;">
                            Instruktur
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="home_quotes mt-0">
    <div class="container-fluid">
        <div class="d-flex justify-content-center">
            <h4 class="quotes_text">Tempat Belajar Online yang Lengkap dan Terpercaya</h4>
        </div>
    </div>
</section>


<section class="about_area section_gap">
    <div class="container">

        <div class="row">
            <div class="col-lg-5">
                <img src="<?php echo base_url('assets/img/trainer-woman1.png'); ?>" />
            </div>
            <div class="col-lg-7">
                <div class="page_title">
                    <h2>Jadi Mitra Penyedia Kelas Tatap Muka <br />dan Kelas Online</h2>
                </div>
                <div class="page_content mt-8">
                    <p style="text-align:left;">Temui ribuan pengguna <strong>akupastibisa.com</strong> yang ingin meningkatkan kompetensi diri.<br /><br />Buat kursus video online dan hasilkan uang dengan mengajar pengguna-pengguna di Indonesia.<br /><br />Bantu orang mempelajari keahlian baru, memajukan kariernya, dan menjelajahi hobinya dengan cara membagikan pengetahuan Anda.</p>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="home_quotes">
    <div class="container-fluid">
        <div class="d-flex justify-content-center">
            <?php foreach ($randomQuotes->result() as $result) { ?>
            <h4 class="quotes_text"><?php echo $result->CONTENT;?></h4>
            <?php } ?>
        </div>
    </div>
</section>

<section class="trainer_area section_gap_top" style="background-color:#e5e5e5;">
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="login_right w-100 mx-5">
                <ul class="nav nav-tabs d-flex justify-content-around" id="myTab" role="tablist">
                    <li class="nav-item" style="width: 50%;">
                        <a class="nav-link pb-3 pt-3 w-100 text-center active show" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login Instruktur</a>
                    </li>
                    <li class="nav-item" style="width: 50%;">
                        <a class="nav-link pb-3 pt-3 w-100 text-center" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Daftar Sebagai Instruktur</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                        <div class="tab_container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex justify-content-center">
                                        <h4>Masuk ke akun Instruktur kamu</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <form id="loginForm" class="register-form needs-validation" novalidate action="<?php echo base_url('Instructor/loginInstruktur'); ?>" method="POST">
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
                                    <div class="col-12 pt-3 d-flex justify-content-center">
                                        <button type="submit" class="btn btn-custom w-50"><strong>MASUK</strong></button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                        <div class="tab_container">

                            <form id="registerForm" class="register-form pt-0 pb-3 needs-validation" enctype="multipart/form-data" novalidate action="<?php echo base_url('Instructor/addInstruktur'); ?>" method="POST">

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="insName">Nama Lengkap*</label>
                                        <input type="text" name="instruktur_name" class="form-control" id="insName" placeholder="Nama Lengkap" required>
                                        <div class="invalid-feedback">
                                            Nama tidak boleh kosong
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="insPhone">No. Handphone*</label>
                                        <input type="text" name="instruktur_hp" class="form-control" id="insPhone" placeholder="No. Handphone" onkeypress="return isNumber(event)" required>
                                        <div class="invalid-feedback">
                                            Nomor telepon tidak boleh kosong
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="insEmail">Email*</label>
                                        <input type="email" name="instruktur_email" class="form-control" id="insEmail" placeholder="Email" required>
                                        <div class="invalid-feedback">
                                            Email tidak boleh kosong
                                        </div>
                                        <div class="invalid-feedback" id="email-exist">
                                            Email telah terdaftar
                                        </div>
                                        <div class="valid-feedback" id="email-available">
                                            Email tersedia
                                        </div>
                                    </div>
                                </div>
                                <hr />
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <h5 for="insCV">Kelengkapan Dokumen</h5>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="insCV">Curriculum Vitae*</label>
                                        <label style="font-size: 12px;">(Harap Upload File dalam Bentuk PDF atau PNG)</label>
                                        <input type="file" name="instruktur_cv" id="insCV" class="form-control-file" required accept=".pdf,.png">
                                        <div class="invalid-feedback">
                                            CV tidak boleh kosong
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="insTopic">Topik yang Ingin Diajukan*</label>
                                        <input type="text" name="instruktur_topik" class="form-control" id="insTopic" placeholder="Judul Topik" required>
                                    </div>
                                </div>
                                <hr />
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <h5 for="inputEmail4">Akun Media Sosial</h5>
                                        <label style="font-size: 12px;" for="inputEmail4">Cantumkan Link Media Sosial Anda</label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="youtubeUrl">Youtube</label>
                                        <input type="text" name="instruktur_youtube" class="form-control" id="youtubeUrl" placeholder="Link Akun Youtube">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="instagramUrl">Instagram</label>
                                        <input type="text" name="instruktur_instagram" class="form-control" id="instagramUrl" placeholder="Link Akun Instagram">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="linkedinUrl">LinkedIn</label>
                                        <input type="text" name="instruktur_linkedin" class="form-control" id="linkedinUrl" placeholder="Link Akun LinkedIn">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="facebookUrl">Facebook</label>
                                        <input type="text" name="instruktur_facebook" class="form-control" id="facebookUrl" placeholder="Link Akun Facebook">
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

                                <div class="col-12 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-custom w-50">DAFTAR</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
            text: 'Password salah. Mohon periksa kembali',
            showCloseButton: true,
            showCancelButton: false,
            timer: 4000,
        });
    </script>
<?php } ?>

<?php if ($this->session->userdata('success')) { ?>
    <script>
        Swal.fire({
            type: 'success',
            title: '<h4>Registrasi Berhasil</h4>',
            text: 'Mohon periksa email Anda untuk melengkapi data diri',
            showCloseButton: true,
            showCancelButton: false,
            timer: 4000,
        });
    </script>
<?php } ?>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
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

    function validateEmail(email) {
        const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }

    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }

    var getUrl = window.location;
    var baseUrl =
        getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split("/")[0];

    let nameVal = false;
    let phoneVal = false;
    let emailVal = false;
    let cvVal = false;

    $('#insName').blur(function() {
        let curValue = $(this).val();
        let curObject = $(this);

        if ($.trim(curValue).length == 0) {
            // console.log('input kosong');
            nameVal = false;
            curObject.css('border-color', '#dc3545');
            curObject.closest('div').find('.invalid-feedback').show();
        } else {
            nameVal = true;
            // console.log('input isi');
            curObject.css('border-color', '#28a745');
            curObject.closest('div').find('.invalid-feedback').hide();
        }
    });

    $('#insPhone').blur(function() {
        let curValue = $(this).val();
        let curObject = $(this);

        if ($.trim(curValue).length == 0) {
            // console.log('input kosong');
            phoneVal = false;
            curObject.css('border-color', '#dc3545');
            curObject.closest('div').find('.invalid-feedback').show();
        } else {
            phoneVal = true;
            // console.log('input isi');
            curObject.css('border-color', '#28a745');
            curObject.closest('div').find('.invalid-feedback').hide();
        }
    });

    $('#insEmail').blur(function() {

        let curValue = $(this).val();
        let curObject = $(this);

        if (validateEmail(curValue)) {
            // console.log('ini email, cek');
            $.get(baseUrl + 'API/checkEmail', {
                email: curValue
            }, function(data) {
                if (data.code == 404) {
                    emailVal = true;
                    // console.log(curObject);
                    curObject.css('border-color', '#28a745');
                    $('#email-available').show();
                    $('#email-exist').hide();
                    // console.log('ok daftar');
                } else {
                    emailVal = false;
                    curObject.css('border-color', '#dc3545');
                    $('#email-available').hide();
                    $('#email-exist').show();
                    // console.log('jangan daftar');
                }
            });
        } else {
            // console.log('bukan email, jangan cek');
        }
    });

    $('#registerForm').submit(function(e) {

        if (!nameVal && !phoneVal & !emailVal & !cvVal) {
            // console.log('jangan submit');
            e.preventDefault();
        } else {
            // console.log('ok boleh');
            $(this).submit();
        }
    });
</script>