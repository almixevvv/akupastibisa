<link rel="stylesheet" href="<?php echo base_url('assets/plugin/dropzone/dropzone.css'); ?>">
<style>
    .table td {
        vertical-align: center !important;
    }

    .form__group {
        position: relative;
        padding: 15px 0 0;
    }

    .form__field {
        font-family: inherit;
        width: 100%;
        border: 0;
        border-bottom: 2px solid #9b9b9b;
        outline: 0;
        font-size: 1.3rem;
        color: black;
        padding: 7px 0;
        background: transparent;
        transition: border-color 0.2s;
    }

    .form__field::placeholder {
        color: transparent;
    }

    .form__field:placeholder-shown~.form__label {
        font-size: 1.3rem;
        cursor: text;
        top: 20px;
    }

    .form__label {
        position: absolute;
        top: 0;
        display: block;
        transition: 0.2s;
        font-size: 1rem;
        color: #9b9b9b;
    }

    .form__field:focus {
        padding-bottom: 6px;
        font-weight: 700;
        border-width: 3px;
        border-image: linear-gradient(to right, #11998e, #38ef7d);
        border-image-slice: 1;
    }

    .form__field:focus~.form__label {
        position: absolute;
        top: 0;
        display: block;
        transition: 0.2s;
        font-size: 1rem;
        color: #11998e;
        font-weight: 700;
    }

    /* reset input */
    .form__field:required,
    .form__field:invalid {
        box-shadow: none;
    }

    .parent-content {
        margin: 10px;
        margin-top: 15px;
        border: 1px solid black;
        border-radius: 7px;
        padding-left: 10px;
        padding-right: 10px;
        padding-bottom: 10px;
        padding-top: 5px;
    }

    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background: rgba(255, 255, 255, .8) url('https://akupastibisa.local/assets/img/Pulse-1s-204px.gif') 50% 50% no-repeat;
    }

    /* When the body has the loading class, we turn
   the scrollbar off with overflow:hidden */
    body.loading .modal {
        overflow: hidden;
    }

    /* Anytime the body has the loading class, our
   modal element will be visible */
    body.loading .modal {
        display: block;
    }

    .dropzone {
        border: 2px dashed #0087F7;
        border-radius: 5px;
        background: white;
    }
</style>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php $this->load->view('templates-instructor/sidebar'); ?>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">
                <?php $this->load->view('templates-instructor/navbar'); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">


                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Tambah Kursus Baru</h1>

                    <div class="row">
                        <div class="col-12">
                            <div class="card shadow mb-4">
                                <div class="d-block card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Detail Kursus</h6>
                                </div>
                                <div class="card-body pt-1">
                                    <form class="needs-validation" novalidate id="formAddCourse">
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="course-name" class="font-weight-bold mt-3" style="font-size: 12px; font-weight: bold;">Nama Kursus*</label>
                                                <div class="input-group mb-3">
                                                    <input required type="text" class="form-control" id="course-name" name="courseName">
                                                    <div class="invalid-feedback">
                                                        Nama kursus tidak boleh kosong
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-6">
                                                <label for="course-id" class="font-weight-bold mt-3" style="font-size: 12px; font-weight: bold;">ID Kursus*</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" id="course-id" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="course-req" class="font-weight-bold mt-3" style="font-size: 12px; font-weight: bold;">Persyaratan Kursus*</label>
                                                <div class="input-group mb-3">
                                                    <input required type="text" class="form-control" id="course-req" name="courseReq">
                                                    <div class="invalid-feedback">
                                                        Syarat kursus tidak boleh kosong
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <label for="course-price" class="font-weight-bold mt-3" style="font-size: 12px; font-weight: bold;">Harga Kursus*</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="course-cur">IDR</span>
                                                    </div>
                                                    <input required class="form-control input-numeral" id="course-price" name="coursePrice" aria-describedby="course-cur">
                                                    <div class="invalid-feedback">
                                                        Harga kursus tidak boleh kosong
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <label for="course-desc" class="font-weight-bold mt-3" style="font-size: 12px; font-weight: bold;">Deskripsi Kursus*</label>
                                                <textarea required id="course-desc" name="courseDesc" class="form-control" rows="3"></textarea>
                                                <div class="invalid-feedback">
                                                    Deskripsi kursus tidak boleh kosong
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <label for="course-category" class="font-weight-bold mt-3" style="font-size: 12px; font-weight: bold;">Kategori Kursus*</label>
                                                <div class="input-group mb-3">
                                                    <input required multiple id="course-category" type="text" class="form-control" name="courseCategory" />
                                                    <div id="category-box" class="invalid-feedback">
                                                        Kategori kursus tidak boleh kosong
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <label for="course-wyg" class="font-weight-bold mt-3" style="font-size: 12px; font-weight: bold;">Apa yang anda dapat*</label>
                                                <div class="input-group mb-3">
                                                    <input required multiple id="course-wyg" type="text" class="form-control" name="courseWYG" />
                                                    <div id="wyg-box" class="invalid-feedback">
                                                        Apa yang anda dapat tidak boleh kosong
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group form-group-default">
                                                    <label for="dz-upload" class="font-weight-bold mt-3" style="font-size: 12px; font-weight: bold;">Pengenalan Kursus*</label>
                                                    <div class="dropzone" id="dz-upload">
                                                        <!-- <div class="dz-default dz-message"></div> -->
                                                        <div class="dz-message" data-dz-message>
                                                            <span class="d-flex justify-content-center">Klik / drag file kesini untuk memulai proses upload </span>
                                                        </div>

                                                    </div>
                                                    <div id="file-box" class="invalid-feedback">
                                                        Pengenalan kursus tidak boleh kosong
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <small>*Wajib di isi</small>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="d-flex justify-content-end">
                                                    <!-- <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>"> -->
                                                    <div id="submitCourse" class="mx-4">
                                                        <button type="submit" class="btn btn-primary">Tambah</button>
                                                    </div>
                                                    <div id="cancelCourse">
                                                        <button type="button" class="btn btn-danger">Batal</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Akupastibisa <script type="text/javascript">
                                document.write(new Date().getFullYear());
                            </script></span>
                    </div>
                </div>
            </footer>

        </div>
    </div>
    <div class="modal">
    </div>
    <!-- Page level plugins -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugin/fastselect/fastselect.css'); ?>">
    <script src="<?php echo base_url('assets/plugin/fastselect/fastselect.standalone.js'); ?>"></script>

    <script src="<?php echo base_url('assets/plugin/dropzone/dropzone.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plugin/cleave/cleave.min.js'); ?>"></script>
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

        var startLoading = function() {
            $body = $("body");
            $body.addClass("loading");
        }

        var stopLoading = function() {
            $body = $("body");
            $body.removeClass("loading");
        }

        var cleaveNumeral = new Cleave('.input-numeral', {
            numeral: true,
            numeralThousandsGroupStyle: 'thousand'
        });


        let unformattedPrice, formattedPrice, fileName, fileType;

        $('#course-category').fastselect({
            url: baseUrl + 'API/getCourseType?key=123',
            placeholder: 'Pilih kategori kursus',
            searchPlaceholder: 'Pilih kategori',
            noResultsText: 'Hasil tidak ditemukan',
            focusFirstItem: true,
            userOptionAllowed: false,
        });

        $('#course-wyg').fastselect({
            url: baseUrl + 'API/getWYG?key=123',
            placeholder: 'Pilih apa yang Anda dapat',
            searchPlaceholder: 'Pilih salah satu',
            noResultsText: 'Hasil tidak ditemukan',
            focusFirstItem: true,
            userOptionAllowed: false,
        });

        $('#course-name').on('change paste keyup', function(ex) {
            let curValue = $(this).val().toLowerCase();
            curValue = curValue.replace(/\s+/g, '-');

            $('#course-id').val(curValue);
        });

        Dropzone.autoDiscover = false;

        $('#dz-upload').dropzone({
            url: baseUrl + '/API/postIntroFiles',
            paramName: 'imgUpload',
            acceptedFiles: 'image/*',
            addRemoveLinks: true,
            autoProcessQueue: true,
            dictFallbackMessage: 'Browser tidak mendukung untuk upload file',
            dictFileTooBig: 'Upload gagal, file terlalu besar',
            dictInvalidFileType: 'Tipe file tidak sesuai format',
            dictCancelUpload: 'Batalkan Upload',
            dictRemoveFile: 'Hapus file',
            maxFiles: 1,
            maxfilesexceeded: function(file) {
                this.removeAllFiles();
                this.addFile(file);
            },
            success: function(file, resp) {
                // console.log(resp);
                fileName = resp.upload_data.file_name;
                fileType = resp.upload_data.file_type;
            },
            removedfile: function(file) {
                $.post(baseUrl + '/API/deleteIntroFiles', {
                    images: fileName
                }, function(resp) {
                    // console.log(resp);
                });

                var _ref;
                return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
            }
        });

        $('#formAddCourse').submit(function(ex) {
            ex.preventDefault();
            let formData = $('#formAddCourse').serialize();

            let nameCourse = $('#course-name').val().length;
            let reqCourse = $('#course-req').val().length;
            let priceCourse = $('#course-price').val().length;
            let desCourse = $('#course-desc').val().length;
            let wygCourse = $('#course-wyg').val().length;

            let errStyle = {
                'border-color': '#e74a3b'
            }

            if (nameCourse != 0 && reqCourse != 0 && priceCourse != 0 && desCourse != 0 && wygCourse != 0 && fileName.length != 0 && fileType.length != 0) {
                startLoading();

                $.post(baseUrl + 'Instructor-CMS/Courses/addNewCourse', formData + '&fileName=' + fileName + '&fileType=' + fileType, function(ex) {
                    console.log(ex);
                    if (ex.code == 200) {
                        Swal.fire({
                            title: 'Berhasil',
                            text: "Kursus Anda Telah Berhasil Ditambahkan",
                            type: 'success',
                            confirmButtonColor: '#3085d6',
                        }).then((result) => {
                            if (result.value) {
                                window.location.href = baseUrl + 'instruktur/cms/courses?id=' + '<?php echo $this->session->userdata('user_data')['id']; ?>';
                            }
                        })
                    } else {
                        Swal.fire({
                            title: 'Gagal',
                            text: "Kursus Anda Tidak Berhasil Ditambahkan, Silahkan Coba Kembali",
                            type: 'warning',
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                        });
                    }
                });
            } else {
                $('.fstElement').css(errStyle);
                $('.dropzone').css(errStyle);
                $('#wyg-box').css('display', 'block');
                $('#file-box').css('display', 'block');
                stopLoading();
            }
        });
    </script>