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
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="course-name" class="font-weight-bold mt-3" style="font-size: 12px; font-weight: bold;">Nama Kursus</label>
                                            <div class="input-group mb-3">
                                                <input required type="text" class="form-control" id="course-name" name="courseName">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="course-id" class="font-weight-bold mt-3" style="font-size: 12px; font-weight: bold;">ID Kursus</label>
                                            <div class="input-group mb-3">
                                                <input required type="text" class="form-control" id="course-id" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="course-req" class="font-weight-bold mt-3" style="font-size: 12px; font-weight: bold;">Persyaratan Kursus</label>
                                            <div class="input-group mb-3">
                                                <input required type="text" class="form-control" id="course-req" name="courseReq">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="course-price" class="font-weight-bold mt-3" style="font-size: 12px; font-weight: bold;">Harga Kursus</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="course-cur">IDR</span>
                                                </div>
                                                <input required type="text" class="form-control" id="course-price" name="coursePrice" aria-describedby="course-cur">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="course-desc" class="font-weight-bold mt-3" style="font-size: 12px; font-weight: bold;">Deskripsi Kursus</label>
                                            <textarea id="course-desc" name="courseDesc" class="form-control" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="course-wyg" class="font-weight-bold mt-3" style="font-size: 12px; font-weight: bold;">Apa yang anda dapat</label>
                                            <div class="input-group mb-3">
                                                <input required multiple id="course-wyg" type="text" class="form-control singleInputDynamic" name="courseWYG" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card shadow mb-4">
                                <div class="d-block card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Konten Kursus</h6>
                                </div>
                                <div class="card-body pt-1">
                                    <div class="row parent-content">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <label for="content-name" class="font-weight-bold mt-3" style="font-size: 12px; font-weight: bold;">Judul Konten</label>
                                                    <div class="input-group mb-3">
                                                        <input required type="text" class="form-control" id="content-name[]" name="contentName[]">
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <label for="content-name" class="font-weight-bold mt-3" style="font-size: 12px; font-weight: bold;">Tipe Konten</label>
                                                    <div class="input-group mb-3">
                                                        <select required class="form-control contentType" id="content-type[]" name="contentType[]">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <label for="content-duration" class="font-weight-bold mt-3" style="font-size: 12px; font-weight: bold;">Total Durasi Konten</label>
                                                    <div class="input-group mb-3">
                                                        <input disabled type="text" class="form-control" id="content-duration[]" name="contentDuration[]">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row sub-content d-none">
                                                <div class="col-12">
                                                    <hr>
                                                </div>
                                                <div class="col-6">
                                                    <label for="content-subname" class="font-weight-bold mt-3" style="font-size: 12px; font-weight: bold;">Judul Sub Konten</label>
                                                    <div class="input-group mb-3">
                                                        <input required type="text" class="form-control" id="content-subname[]" name="contentSubName[]">
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <label for="content-subduration" class="font-weight-bold mt-3" style="font-size: 12px; font-weight: bold;">Durasi Konten</label>
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" id="content-subduration[]" name="contentSubDuration[]">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12">
                                                    <div id="addParentButton" class="w-25">
                                                        <a href="#" class="btn btn-facebook btn-block"><i <i class="fas fa-plus mr-1"></i> Tambah Sub Konten</a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-12  d-flex justify-content-center">
                                            <div id="addParentButton" class="w-25">
                                                <a href="#" class="btn btn-facebook btn-block"><i <i class="fas fa-plus mr-1"></i> Tambah Konten</a>
                                            </div>
                                        </div>
                                    </div>


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
    <!-- Page level plugins -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugin/fastselect/fastselect.css'); ?>">
    <script src="<?php echo base_url('assets/plugin/fastselect/fastselect.standalone.js'); ?>"></script>
    <script>
        const getUrl = window.location;
        const baseUrl = getUrl.protocol + '//' + getUrl.host + '/' + getUrl.pathname.split('/')[0];

        $('.singleInputDynamic').fastselect({
            url: baseUrl + 'API/getWYG?key=123',
            placeholder: 'Pilih salah satu',
            searchPlaceholder: 'Pilih salah satu kategori',
            noResultsText: 'Hasil tidak ditemukan',
            userOptionPrefix: 'Tambah ',
            userOptionAllowed: true,
        });

        $.get(baseUrl + 'API/getCourseType?key=5421', function(data) {
            // console.log(data);
            $.each(data, function(index, value) {
                // console.log(.text);
                // console.log(this.text);
                // console.log(value);
                $('.contentType').append(
                    $('<option>', {
                        value: value.value,
                        text: value.text
                    })
                );
            });
        });
    </script>