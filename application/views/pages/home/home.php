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
        min-height: 60vh;
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

<section class="home_banner_area">
    <div class="banner_inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner_content text-center">
                        <p class="text-uppercase" style="color: #ffff; color: #ffff; margin-bottom: 15px;">
                            Anda Dapat Membeli Kelas Kami dengan
                        </p>
                        <p class="text-uppercase" style="color: #ffff; ">
                            Gratis Melalui Platform Prakerja
                        </p>
                        <h2 class="text-uppercase mt-4 mb-5" style="color: #ffff;">
                            Dapatkan insentif Rp 2.550.000
                        </h2>
                        <div>
                            <a href="<?php echo base_url('courses/list/prakerja') ?>" class="primary-btn2 mb-3 mb-sm-0" style="color: #ffff;">Lihat Info</a>
                            <a href="<?php echo base_url('courses/search?query=') ?>" class="primary-btn ml-sm-3 ml-0" style="color: #ffff;">Lihat Kategori</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="home_feature_area">
    <div class="container pt-3 pb-2">
        <div class="row">
            <div class="col-lg-4">
                <div class="d-flex flex-row">
                    <img class="h-100 mr-3 pt-2" src="<?php echo base_url('assets/img/feature/schedule.png'); ?>" alt="Beragam Pilihan Kelas Online">
                    <div class="feature-title">
                        <b>Beragam pilihan kelas online</b>
                        <p>Kembangkan diri dengan berbagai pilihan kelas sesuai kategori</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex flex-row">
                    <img class="h-100 mr-3 pt-2" src="<?php echo base_url('assets/img/feature/time.png'); ?>" alt="Beragam Pilihan Kelas Online">
                    <div class="feature-title">
                        <b>Akses kelas seumur hidup</b>
                        <p>Kelas beserta materi akan dapat diakses selamanya</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex flex-row">
                    <img class="h-100 mr-3 pt-2" src="<?php echo base_url('assets/img/feature/certificate.png'); ?>" alt="Beragam Pilihan Kelas Online">
                    <div class="feature-title">
                        <b>Sertifikasi & Badge</b>
                        <p>Dapatkan sertifikasi untuk setiap kelas yang telah anda selesaikan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="populer_courses">
    <div class="container mt-5 pt-3">
        <div class="row">
            <div class="col-12" id="popular_separator">
                <h3>Mulai sekarang</h3>
            </div>
        </div>
        <div class="row pt-2">
            <div class="col-12">
                <p style="color: #838080;">Mari <a href="<?php echo base_url('login'); ?>">bergabung</a> bersama kami dan pilih dari ribuan kelas online dan </br>terus bertambah setiap bulannya</p>
            </div>
        </div>

        <div class="d-flex">
            <?php foreach ($topCourses->result() as $data) { ?>
                <div class="d-flex flex-column mx-auto p-1">
                    <a class="course-link" href="<?php echo base_url('courses/' . $data->COURSE_URL . '/' . $data->COURSE_ID); ?>">
                        <div class="course_head">
                            <img class="img-fluid" src="<?php echo base_url($data->COURSE_IMAGE); ?>" alt="<?php echo $data->COURSE_NAME; ?>" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/courses/2Panduan Cepat Mendapatkan Kerja Untuk Milenial.png'); ?>';" />
                        </div>
                        <div class="popular-title">
                            <h5 class="text-capitalize"><?php echo $data->COURSE_NAME; ?></h5>
                        </div>
                        <div class="popular-lecturer">
                            <p><?php echo $data->TRAINER_NAME; ?></p>
                        </div>
                        <div class="popular-rating">
                            <div class="d-flex">
                                <span class="rating-text"><b><?php echo $data->COURSE_AVERAGE_RATING; ?></b></span>
                                <div class="d-flex flex-row">
                                    <span class="rating-star pt-1" style="--rating:<?php echo $data->COURSE_AVERAGE_RATING; ?>" aria-label="the rating is <?php echo $data->COURSE_AVERAGE_RATING; ?> out of 5"></span>
                                </div>
                                <span class="rating-numbers">(<?php echo number_format($data->COURSE_RATING); ?>)</span>
                            </div>
                        </div>
                        <div class="popular-price pb-2">
                            <div class="d-flex">
                                <span class="price-promo"> <b>Rp. <?php echo number_format($data->COURSE_PRICE); ?></b> </span>

                                <span class="price-regular">
                                    <?php echo ($data->COURSE_DISCOUNT_PRICE != 0 ? '<del>Rp. ' . number_format($data->COURSE_DISCOUNT_PRICE) . '<del>' : ' '); ?>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>

    </div>
</section>

<section class="home_quotes">
    <div class="container-fluid">
        <div class="d-flex justify-content-center">
            <?php foreach ($randomQuotes1->result() as $result) { ?>
            <h4 class="quotes_text"><?php echo $result->CONTENT;?></h4>
            <?php } ?>
        </div>
    </div>
</section>

<!-- <section class="events_area">
    <div class="container">
        <div class="d-flex mb-4">
            <div class="mr-auto">
                <h3>Event & Acara</h3>
            </div>
            <div>
                <a href="">
                    <h5>Lihat Semua</h5>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="single_event position-relative">
                    <div class="event_thumb">
                        <img src="<?php echo base_url('assets/img/event/e1.jpg'); ?>" alt="" />
                    </div>
                    <div class="event_details">
                        <div class="d-flex mb-4">
                            <div class="date"><span>15</span> Jun</div>
                            <div class="time-location">
                                <p>
                                    <span class="ti-time mr-2"></span> 12:00 AM - 12:30 AM
                                </p>
                                <p>
                                    <span class="ti-location-pin mr-2"></span> Hilton Quebec
                                </p>
                            </div>
                        </div>
                        <p>
                            One make creepeth man for so bearing their firmament won't
                            fowl meat over seas great
                        </p>
                        <a href="#" class="primary-btn rounded-0 mt-3">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single_event position-relative">
                    <div class="event_thumb">
                        <img src="<?php echo base_url('assets/img/event/e2.jpg'); ?>" alt="" />
                    </div>
                    <div class="event_details">
                        <div class="d-flex mb-4">
                            <div class="date"><span>15</span> Jun</div>
                            <div class="time-location">
                                <p>
                                    <span class="ti-time mr-2"></span> 12:00 AM - 12:30 AM
                                </p>
                                <p>
                                    <span class="ti-location-pin mr-2"></span> Hilton Quebec
                                </p>
                            </div>
                        </div>
                        <p>
                            One make creepeth man for so bearing their firmament won't
                            fowl meat over seas great
                        </p>
                        <a href="#" class="primary-btn rounded-0 mt-3">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="trainer_area section_gap_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="main_title">
                    <h2 class="mb-3">Berkenalan dengan instruktur kami</h2>
                    <p class="p-color" style="font-style: normal;">
                        Instruktur terbaik dari seluruh dunia mengajar jutaan peserta di Akupastibisa. </br>Kami menyediakan alat dan keterampilan untuk mengajarkan hal yang Anda sukai.
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center d-flex align-items-top">
            <?php foreach ($topTrainer->result() as $trainer) { ?>
                <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                    <div class="thumb d-flex justify-content-sm-center">
                        <img class="img-fluid trainer_image" src="<?php echo base_url($trainer->TRAINER_IMAGE); ?>" alt="<?php echo $trainer->TRAINER_NAME; ?>" />
                    </div>
                    <div class="meta-text text-sm-center meta-text text-sm-center pl-0 pr-0">
                        <h4 class="text-capitalize"><?php echo $trainer->TRAINER_NAME; ?></h4>
                        <p class="designation p-color text-capitalize px-1"><?php echo $trainer->TRAINER_TITLE; ?></p>
                        <div class="mb-4" style="min-height: 75px;">
                            <p class="p-color">
                                <?php echo $trainer->TRAINER_BIO; ?>
                            </p>
                        </div>
                        <!-- <div class="align-items-center justify-content-center d-flex">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter"></i></a>
                            <a href="#"><i class="ti-linkedin"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a>
                        </div> -->
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="row justify-content-center d-flex align-items-center">
            <h4 class="p-color">Ayo, jadi <a class="colored-link" href="<?php echo base_url('instruktur'); ?>">instruktur</a> sekarang! </h4>
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