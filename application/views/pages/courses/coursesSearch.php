<style>
    .banner_area {
        min-height: 275px;
    }

    .banner_area .banner_inner {
        height: 275px;
        min-height: 275px;
    }

    .section_gap_top {
        padding-top: 35px;
    }

    .rating-star:before {
        content: "\2605";
        color: #f4c150;
    }

    .rating-star-unmarked:before {
        content: "\2605";
        color: #d6d6d6;
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

    .subcategory_filter,
    .skill_filter,
    .rating_filter,
    .price_filter {
        border-top: solid 1px #3d3d3d2b;
    }

    .custom_course_list {
        width: 25%;
        padding-top: 2.5px;
        padding-left: 0.5em;
        padding-right: 0.5em;
        padding-bottom: 1em;
    }

    .single_course_list {
        height: 26.5em
    }

    .trainer-image {
        height: 50px;
        border-radius: 50%;
        object-fit: cover;
        width: 50px;
        object-position: top;
        border: #b9b9b961 solid 1px;
    }

    .card-price-separator {
        border-top: 1px solid #d5d5d5;
    }

    .card-trainer-title {
        line-height: 13px;
        font-size: 14px;
        padding-top: 3px;
    }

    a {
        color: inherit;
    }

    a:hover {
        color: inherit;
    }

    .card-img-top {
        height: 150px;
        object-fit: cover;
    }

    .primary-btn2 {
        padding: 8px 20px;
        line-height: 25px;
    }

    .input-harga-left {
        background-color: white;
        border-right: none;
    }

    .input-harga-right {
        text-align: right;
        border-left: none;
    }

    .form-control:focus {
        border-color: #CCC;
        outline: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    .sort_by_filter {
        border-bottom: 1px solid #0000004a;
        padding-bottom: 5px;
    }

    .card-trainer-name {
        color: #010101;
        font-weight: 600;
        line-height: 17px;
    }
</style>

<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="banner_content text-center">
                        <h2><?php echo ucwords($this->input->get('query')); ?></h2>
                        <div class="page_link">
                            <a href="<?php echo base_url(); ?>">Home</a>
                            <a href="<?php echo base_url('courses/serach?query=' . $this->input->get('query')); ?>"><?php echo ucwords($this->input->get('query')); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="popular_courses section_gap_top">
    <div class="container-fluid px-5">

        <!-- BEST COURSE SECTION -->
        <div class="row">
            <div class="col-lg-5">
                <div class="main_title text-left mb-0">
                    <h2>Kursus Unggulan</h2>
                </div>
            </div>
        </div>
        <!-- MAIN SECTION -->
        <div class="row mt-4">
            <div class="col-3">
                <div class="filter_container">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span class="filter_header">Filter Kursus</span>
                        </li>
                        <li class="list-group-item">
                            <span class="filter_child">
                                <div class="topic_filter d-flex flex-column">
                                    <span class="filter_child_header font-weight-bold mb-2 pt-1">Topik</span>
                                    <span class="filter_child_item pl-4">
                                        <input class="form-check-input" type="checkbox" value="" id="topic1">
                                        <label class="form-check-label" for="topic1">
                                            Keahlian Manajemen
                                        </label>
                                    </span>
                                    <span class="filter_child_item pl-4">
                                        <input class="form-check-input" type="checkbox" value="" id="topic2">
                                        <label class="form-check-label" for="topic2">
                                            Kepemimpinan
                                        </label>
                                    </span>
                                    <span class="filter_child_item pl-4">
                                        <input class="form-check-input" type="checkbox" value="" id="topic3">
                                        <label class="form-check-label" for="topic3">
                                            Strategi Bisnis
                                        </label>
                                    </span>
                                    <span class="filter_child_item pl-4">
                                        <input class="form-check-input" type="checkbox" value="" id="topic4">
                                        <label class="form-check-label" for="topic4">
                                            Pelatihan Manajer
                                        </label>
                                    </span>
                                </div>
                                <div class="price_filter mt-2 d-flex flex-column">
                                    <span class="filter_child_header font-weight-bold mb-2 pt-1">Harga</span>
                                    <span class="filter_child_item pl-1">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-harga-left input-group-text" id="minimal-rp"><strong>Rp.</strong></span>
                                            </div>
                                            <input type="text" class="input-harga-right form-control" placeholder="Minimal" aria-label="Harga minimal" aria-describedby="minimal-rp">
                                        </div>
                                    </span>
                                    <span class="filter_child_item pl-1">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-harga-left input-group-text" id="maksimal-rp"><strong>Rp.</strong></span>
                                            </div>
                                            <input type="text" class="input-harga-right form-control" placeholder="Maksimal" aria-label="Harga maksimal" aria-describedby="maksimal-rp">
                                        </div>
                                    </span>
                                </div>
                                <div class="skill_filter mt-2 d-flex flex-column">
                                    <span class="filter_child_header font-weight-bold mb-2 pt-1">Tingkat</span>
                                    <span class="filter_child_item pl-4">
                                        <input class="form-check-input" type="checkbox" value="" id="tingkat1">
                                        <label class="form-check-label" for="tingkat1">
                                            Semua Tingkat
                                        </label>
                                    </span>
                                    <span class="filter_child_item pl-4">
                                        <input class="form-check-input" type="checkbox" value="" id="tingkat2">
                                        <label class="form-check-label" for="tingkat2">
                                            Pemula
                                        </label>
                                    </span>
                                    <span class="filter_child_item pl-4">
                                        <input class="form-check-input" type="checkbox" value="" id="tingkat3">
                                        <label class="form-check-label" for="tingkat3">
                                            Menengah
                                        </label>
                                    </span>
                                    <span class="filter_child_item pl-4">
                                        <input class="form-check-input" type="checkbox" value="" id="tingkat4">
                                        <label class="form-check-label" for="tingkat4">
                                            Ahli
                                        </label>
                                    </span>
                                </div>
                                <div class="rating_filter mt-2 d-flex flex-column">
                                    <span class="filter_child_header font-weight-bold mb-2 pt-1">Rating</span>
                                    <span class="filter_child_item pl-4">
                                        <input class="form-check-input" type="checkbox" value="" id="rating1">
                                        <label class="form-check-label" for="rating1">
                                            <span class="rating-star"></span>
                                            <span class="rating-star"></span>
                                            <span class="rating-star"></span>
                                            <span class="rating-star"></span>
                                            <span class="rating-star"></span>
                                            <span class="rating-star-unmarked"></span>
                                            <span>5 bintang</span>
                                        </label>
                                    </span>
                                    <span class="filter_child_item pl-4">
                                        <input class="form-check-input" type="checkbox" value="" id="rating2">
                                        <label class="form-check-label" for="rating2">
                                            <span class="rating-star"></span>
                                            <span class="rating-star"></span>
                                            <span class="rating-star"></span>
                                            <span class="rating-star"></span>
                                            <span class="rating-star-unmarked"></span>
                                            <span class="rating-star-unmarked"></span>
                                            <span>4 bintang</span>
                                        </label>
                                    </span>
                                    <span class="filter_child_item pl-4">
                                        <input class="form-check-input" type="checkbox" value="" id="rating3">
                                        <label class="form-check-label" for="rating3">
                                            <span class="rating-star"></span>
                                            <span class="rating-star"></span>
                                            <span class="rating-star"></span>
                                            <span class="rating-star-unmarked"></span>
                                            <span class="rating-star-unmarked"></span>
                                            <span class="rating-star-unmarked"></span>
                                            <span>3 bintang</span>
                                        </label>
                                    </span>
                                    <span class="filter_child_item pl-4">
                                        <input class="form-check-input" type="checkbox" value="" id="rating4">
                                        <label class="form-check-label" for="rating4">
                                            <span class="rating-star"></span>
                                            <span class="rating-star"></span>
                                            <span class="rating-star-unmarked"></span>
                                            <span class="rating-star-unmarked"></span>
                                            <span class="rating-star-unmarked"></span>
                                            <span class="rating-star-unmarked"></span>
                                            <span>2 bintang</span>
                                        </label>
                                    </span>
                                </div>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-9">

                <div class="row mb-3 sort_by_filter">
                    <div class="col-10">
                        <div id="filterDropdown" data-toggle="dropdown" aria-expanded="false">
                            <i class="ti-angle-down pr-2"></i>
                            Urutkan
                        </div>
                        <div class="dropdown-menu" aria-labelledby="filterDropdown">
                            <a class="dropdown-item" href="#">Popularitas</a>
                            <a class="dropdown-item" href="#">Peringkat Tertinggi</a>
                            <a class="dropdown-item" href="#">Terbaru</a>
                            <a class="dropdown-item" href="#">Harga Termurah</a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="d-flex justify-content-end">
                            <?php echo $courseList->num_rows() . ' Kursus'; ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <?php if ($courseList->num_rows() == 0) { ?>
                        <div class="col-12 mt-4">
                            <div class="d-flex justify-content-center">
                                <h3>Kursus dengan kata kunci <?php echo $this->input->get('query'); ?> tidak ditemukan</h3>
                            </div>
                        </div>
                    <?php } ?>
                    <?php foreach ($courseList->result() as $list) { ?>
                        <div class="custom_course_list">
                            <div class="card single_course_list">
                                <a href="<?php echo base_url('courses/' . $list->COURSE_URL . '/' . $list->COURSE_ID); ?>" class="h-100">
                                    <img src="<?php echo base_url($list->COURSE_IMAGE); ?>" alt="<?php echo $list->COURSE_NAME; ?>" class="card-img-top">
                                    <div class="card-body p-0">
                                        <div class="card-course-title pl-2 pt-1 mb-3">
                                            <strong><?php echo strlen($list->COURSE_NAME) >= 45 ? substr($list->COURSE_NAME, 0, 45) . "..." : $list->COURSE_NAME; ?></strong>
                                        </div>
                                        <div class="pl-2 mb-2">
                                            <div class="d-flex">
                                                <img class="trainer-image" src="<?php echo base_url($list->TRAINER_IMAGE); ?>" alt="Instruktur <?php echo $list->TRAINER_NAME; ?>">
                                                <div class="d-flex flex-column pt-1 pl-3">
                                                    <span class="card-trainer-name"><?php echo $list->TRAINER_NAME; ?></span>
                                                    <span class="card-trainer-title"><?php echo $list->TRAINER_TITLE; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pl-2 mb-2">
                                            <div class="d-flex">
                                                <span class="pr-1"> <b><?php echo number_format($list->COURSE_AVERAGE_RATING); ?></b></span>
                                                <?php for ($i = 0; $i < $list->COURSE_AVERAGE_RATING; $i++) { ?>
                                                    <span class="rating-star"></span>
                                                <?php } ?>
                                                <?php for ($j = $i; $j <= 5; $j++) { ?>
                                                    <span class="rating-star-unmarked"></span>
                                                <?php } ?>
                                                <span class="pl-2" style="font-size: 14px;"> (<?php echo number_format($list->COURSE_RATING); ?> rating) </span>
                                            </div>
                                        </div>
                                        <div class="card-price-separator px-2 pt-2 pb-2">
                                            <div class="d-flex justify-content-between">
                                                <?php if ($list->COURSE_DISCOUNT_PRICE == 0) { ?>
                                                    <span class="price-promo">
                                                        <b>Rp. <?php echo number_format($list->COURSE_PRICE); ?></b>
                                                    </span>
                                                <?php } else { ?>
                                                    <span class="price-promo">
                                                        <b>Rp. <?php echo number_format($list->COURSE_PRICE); ?></b>
                                                    </span>
                                                    <span class="price-regular">
                                                        <del>Rp. <?php echo number_format($list->COURSE_DISCOUNT_PRICE); ?><del>
                                                    </span>
                                                <?php } ?>

                                            </div>
                                        </div>
                                        <div class="p-2 mb-2">
                                            <div class="d-flex justify-content-center">
                                                <span class="price-regular">
                                                    <a href="<?php echo base_url('courses/' . $list->COURSE_URL . '/' . $list->COURSE_ID); ?>" class="primary-btn2" style="color: #ffff;">Beli kelas online</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>

        </div>
    </div>

    <!-- END OF MAIN SECTION -->
</div>
</div>