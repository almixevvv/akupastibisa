<style>
    .home_feature_area {
        background: rgb(0, 138, 177);
        background: -moz-linear-gradient(90deg, rgba(0, 138, 177, 1) 30%, rgba(0, 181, 198, 1) 100%);
        background: -webkit-linear-gradient(90deg, rgba(0, 138, 177, 1) 30%, rgba(0, 181, 198, 1) 100%);
        background: linear-gradient(90deg, rgba(0, 138, 177, 1) 30%, rgba(0, 181, 198, 1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#008ab1", endColorstr="#00b5c6", GradientType=1);
        font-size: 14px;
        font-family: "Arial";
        line-height: 1.5 em;
    }

    .pages_feature_area {
        background: rgb(0, 138, 177);
        background: -moz-linear-gradient(90deg, rgba(0, 138, 177, 1) 30%, rgba(0, 181, 198, 1) 100%);
        background: -webkit-linear-gradient(90deg, rgba(0, 138, 177, 1) 30%, rgba(0, 181, 198, 1) 100%);
        background: linear-gradient(90deg, rgba(0, 138, 177, 1) 30%, rgba(0, 181, 198, 1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#008ab1", endColorstr="#00b5c6", GradientType=1);
        font-size: 18px;
        font-family: "Arial";
        font-weight: thin;
        line-height: 1.2 em;
        color: #FFF;
    }


    .feature-title>b,
    p {
        color: #fff;
    }

    #popular_separator {
        border-bottom: 1px solid #0000001f;
        padding-left: 0;
        margin-left: 1rem;
    }

    .course_head>img {
        border: solid 2px #b1b1b1;
        border-radius: 5px;
        object-fit: cover;
        /* height: 8rem; */
        height: 130px;
        width: 500px;
    }

    .trainer_image {
        border-radius: 5px;
        object-fit: cover;
        height: 60vh;
        width: 500px;
    }

    .course-link {
        text-decoration: none;
        color: black;
    }

    .popular-title>h5 {
        padding-top: 0.5rem;
        color: #434242;
        margin-bottom: 0;
    }

    .popular-lecturer>p {
        padding-top: 0.1rem;
        color: #43424278;
        margin-bottom: 0;
    }

    .popular-rating {
        padding-top: 0.3rem;
    }

    .rating-star:before {
        content: "\2605";
        color: #f4c150;
    }

    .rating-star-unmarked:before {
        content: "\2605";
        color: #d6d6d6;
    }

    .rating-text,
    .rating-text>b {
        color: #4a4a4a;
        padding-right: 0.2rem;
    }

    .rating-numbers {
        padding-left: 0.5rem;
        color: #4a4a4a;
    }

    .price-regular {
        padding-left: 0.8rem;
        color: #aeaeae;
        font-size: 0.8rem;
    }

    .price-promo>b {
        color: #4a4a4a;
    }

    .popular-price {
        padding-top: 0.5rem;
    }

    .popular-tag {
        background-color: #fdc632;
        color: black;
        padding-left: 0.4rem;
        padding-top: 0.2rem;
        padding-right: 0.4rem;
        padding-bottom: 0.2rem;
    }

    .popular-tag>b {
        color: #535353;
        font-size: 0.8rem;
    }

    .p-color {
        color: #4a4a4a;
    }

    .main-title {
        margin-bottom: 30px;
    }

    .events_area {
        background: #d1d1d1;
        padding-top: 2.5rem;
        padding-bottom: 2.5rem;
    }

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



<section class="trainer_area section_gap_top" style="font-size: 14px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="main_title">
                    <h2 class="mb-3">List Instruktur</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center d-flex align-items-center">
            <?php foreach ($topTrainer->result() as $trainer) { ?>
                <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                    <div class="thumb d-flex justify-content-sm-center">
                        <img class="img-fluid trainer_image" src="<?php echo base_url($trainer->TRAINER_IMAGE); ?>" alt="<?php echo $trainer->TRAINER_NAME; ?>" />
                    </div>
                    <div class="meta-text text-sm-center">
                        <h4 class="text-capitalize"><?php echo $trainer->TRAINER_NAME; ?></h4>
                        <p class="designation p-color text-capitalize"><?php echo $trainer->TRAINER_TITLE; ?></p>
                        <div class="mb-4" style="min-height: 100px;">
                            <p class="p-color">
                                <?php echo $trainer->TRAINER_BIO; ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<section class="home_quotes">
    <div class="container-fluid">
        <div class="d-flex justify-content-center">
            <h4 class="quotes_text">"Another text goes here, Another text goes here, Another text goes here"</h4>
        </div>
    </div>
</section>
<section class="trainer_area section_gap_top" style="background-color:#e5e5e5;">
    <div class="container">
        <div class="form-row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8" style="background-color:#fff; padding:50px; font-size: 90%; ">
                <?php echo form_open_multipart('Instructor/addInstruktur') ?>
                <div class="row">
                    <div class="form-group col-md-12">
                        <h3>Form Pendaftaran Instruktur</h3>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Nama Lengkap*</label>
                        <input type="text" name="instruktur_name" class="form-control" id="inputEmail4" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">No. Handphone*</label>
                        <input type="text" name="instruktur_hp" class="form-control" id="inputPassword4" placeholder="No. Handphone">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email*</label>
                        <input type="email" name="instruktur_email" class="form-control" id="inputEmail4" placeholder="Email">
                    </div>
                </div>
                <hr />
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <h5 for="inputEmail4">Kelengkapan Dokumen</h5>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlFile1">Curriculum Vitae*</label>
                        <label style="font-size: 12px;">(Harap Upload File dalam Bentuk PDF atau PNG)</label>
                        <input type="file" name="instruktur_cv" class="form-control-file" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Topik yang Ingin Diajukan</label>
                        <input type="text" name="instruktur_topik" class="form-control" id="inputPassword4" placeholder="Judul Topik">
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
                        <label for="inputEmail4">Youtube</label>
                        <input type="text" name="instruktur_youtube" class="form-control" id="inputEmail4" placeholder="Link Akun Youtube">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Instagram</label>
                        <input type="text" name="instruktur_instagram" class="form-control" id="inputPassword4" placeholder="Link Akun Instagram">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">LinkedIn</label>
                        <input type="text" name="instruktur_linkedin" class="form-control" id="inputEmail4" placeholder="Link Akun LinkedIn">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Facebook</label>
                        <input type="text" name="instruktur_facebook" class="form-control" id="inputPassword4" placeholder="Link Akun Facebook">
                    </div>
                </div>
                <div class="g-recaptcha" data-sitekey="6Ld2qPIUAAAAACBW438Lt3L5DJJhSQoOCm4GkUli"></div>
                <br>
                <button type="submit" class="btn btn-primary">Daftar</button>
                <?php echo form_close(); ?>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</section>