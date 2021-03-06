<style>
    .btn-custom {
        background-color: #008ab1;
        border-color: #008ab1;
        color: white;
    }

    .content-title {
        min-width: 60%;
        max-width: 60%;
    }

    .content-total {
        width: 20%;
        font-weight: 500;
    }

    .content-duration {
        width: 20%;
        font-weight: 500;
    }

    .child_course_title {
        max-width: 80%;
        min-width: 80%;
        font-size: 14px;
        padding-left: 3.8rem;
        color: #242424;
    }

    .child_course_preview {
        width: 15%;
    }

    .child_course_duration {
        width: 18%;
    }

    .content_expand {
        width: 5%;
        height: 5%;
        font-size: 20px;
    }

    .plus,
    .minus {
        color: #000;
        padding: 10px;
        width: 70px;
        height: 70px;
        line-height: 50px;
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        text-align: center;
        box-sizing: border-box;
        transition: .5s all ease-out;
    }

    .plus {
        opacity: 0.7;
        transform: rotate(0deg);
    }

    .content_expand.active .plus {
        opacity: 0;
        transform: rotate(90deg);
    }

    .minus {
        opacity: 0;
        transform: rotate(-90deg);
    }

    .content_expand.active .minus {
        opacity: 0.7;
        transform: rotate(0deg);
    }

    .course_content_headers,
    .course_content_expand,
    .course_content_lessons,
    .course_content_duration>p {
        font-size: 1rem;
    }

    .course_content_headers {
        width: 65%;
    }

    .course_content_expand {
        width: 10%;
    }

    .course_content_lessons {
        width: 20%;
    }

    .course_content_duration {
        width: 15%;
    }

    .trainer-image {
        height: 100px;
        border-radius: 75%;
        object-fit: cover;
        width: 100px;
        object-position: top;
        border: #b9b9b961 solid 1px;
    }
</style>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" />


<?php foreach ($courseDetail->result() as $course); ?>

<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="banner_content text-center">
                        <h2 style="margin-top: 2em;"><?php echo $course->COURSE_NAME; ?></h2>
                        <div class="page_link">
                            <a href="<?php echo base_url(); ?>">Home</a>
                            <a href="<?php echo base_url('courses/list/' . $course->COURSE_URL); ?>"><?php echo $course->COURSE_CATEGORY_NAME; ?></a>
                            <a href="<?php echo base_url('/courses/' . $course->COURSE_ID); ?>"><?php echo $course->COURSE_NAME; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="course_details_area section_gap">
    <div class="container">
        <div class="row ml-3">
            <div class="col-lg-8 course_details_left">
                <div class="main_image">
                    <video class="w-100" controls>
                        <source src="<?php echo base_url($course->INTRO); ?>" type="video/mp4">
                        <source src="<?php echo base_url($course->INTRO); ?>" type="video/ogg">
                        Your browser does not support HTML video.
                    </video>
                    <!-- <img class="img-fluid" src="<?php echo base_url($course->COURSE_IMAGE); ?>" alt="<?php echo $course->COURSE_NAME; ?>"> -->
                </div>



                <div class="content_wrapper">
                    <h4 class="title">Penjelasan Kursus</h4>
                    <div class="content">
                        <?php echo $course->COURSE_DESCRIPTION; ?>
                    </div>

                    <?php $duration = $this->courses->countCourseDuration($course->COURSE_ID); ?>
                    <?php foreach ($duration->result() as $duration); ?>

                    <div class="d-flex flex-row title">
                        <h4 class="course_content_headers">Konten Kursus</h4>
                        <span class="course_content_lessons">
                            <p class="mb-0 text-right">
                                <b><?php echo $duration->COURSE_AMOUNT; ?></b> Pelajaran
                            </p>
                        </span>
                        <span class="course_content_duration">
                            <p class="mb-0 text-right">
                                <?php echo $duration->COURSE_DURATION; ?>
                            </p>
                        </span>
                    </div>

                    <div class="content">
                        <div class="accordion" id="course-content-accordion">

                            <?php foreach ($courseContent->result() as $result) { ?>
                                <?php $childQuery = $this->courses->getChildCourseContent($result->REC_ID); ?>
                                <div class="card">
                                    <div class="card-header" id="content_title_<?php echo $result->REC_ID; ?>">
                                        <a class="content_title_card font-weight-bold" data-toggle="collapse" data-target="#course_section_<?php echo $result->REC_ID; ?>" aria-expanded="false" aria-controls="course_section_<?php echo $result->REC_ID; ?>">
                                            <div class="d-flex">
                                                <div class="content_expand">
                                                    <span class="plus"><i class="ti-plus"></i></span>
                                                    <span class="minus"><i class="ti-minus"></i></span>
                                                </div>
                                                <div class="p-2 content-title text-wrap">
                                                    <?php echo $result->COURSE_SECTION_CATEGORY; ?>
                                                </div>
                                                <div class="p-2 content-total text-right">
                                                    <p class="mb-0">
                                                        <?php echo ($childQuery->num_rows() == 0 ? '' : $childQuery->num_rows() . ' Pelajaran'); ?>
                                                    </p>
                                                </div>
                                                <div class="p-2 content-duration text-right">
                                                    <?php echo $result->COURSE_SECTION_DURATION; ?>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div id="course_section_<?php echo $result->REC_ID; ?>" class="collapse" aria-labelledby="content_title_<?php echo $result->REC_ID; ?>" data-parent="#course-content-accordion">
                                        <div class="card-body p-0">
                                            <ul class="course_list pl-0">
                                                <?php foreach ($childQuery->result() as $child) { ?>
                                                    <li class="course_child d-flex mb-0">
                                                        <a class="child_course_title pt-2 pb-2 pr-3" href="#">
                                                            <?php echo $child->COURSE_SECTION_CATEGORY; ?>
                                                        </a>
                                                        <div class="child_course_duration pt-2 pb-2 pr-2 text-right">
                                                            <?php echo $child->COURSE_SECTION_DURATION; ?>
                                                        </div>
                                                    </li>
                                                    <hr class="mt-0 mb-0">
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            <?php } ?>

                        </div>

                    </div>
                    <div class="d-flex flex-row title">
                        <h4 class="course_content_headers">Kelas Lainnya</h4>
                    </div>



                    <div class="content">
                        <div class="card-group">
                            <?php
                            $this->db->select('*');
                            $this->db->from('v_g_courses');
                            $this->db->where('COURSE_TRAINER_ID', $course->COURSE_TRAINER_ID);
                            $this->db->limit(4);

                            $query = $this->db->get();
                            ?>

                            <?php foreach ($query->result() as $data) : ?>
                                <div class="card" style="width: 18rem;">
                                    <img src="<?php echo base_url($data->COURSE_IMAGE); ?>" alt="<?php echo $data->COURSE_NAME; ?>" class="card-img-top" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/courses/2Panduan Cepat Mendapatkan Kerja Untuk Milenial.png'); ?>';">
                                    <div class="card-body">
                                        <strong><?php echo strlen($data->COURSE_NAME) >= 45 ? substr($data->COURSE_NAME, 0, 45) . "..." : $data->COURSE_NAME; ?></strong>
                                        <div class="pl-2 mb-2">
                                            <div class="d-flex">
                                                <img class="trainer-image" src="<?php echo base_url($data->TRAINER_IMAGE); ?>" alt="Instruktur <?php echo $data->TRAINER_NAME; ?>">
                                                <div class="d-flex flex-column pt-1 pl-3">
                                                    <span class="card-trainer-name" style="font-weight: bold; color: #30b29e;"><?php echo $course->TRAINER_NAME; ?></span>
                                                    <span class="card-trainer-title"><?php echo $data->TRAINER_TITLE; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pl-2 mb-2">
                                            <div class="d-flex">
                                                <span class="pr-1"> <b><?php echo number_format($data->COURSE_AVERAGE_RATING); ?></b></span>
                                                <span class="rating-star pt-1 pl-1" style="--rating: <?php echo $data->COURSE_AVERAGE_RATING; ?>" aria-label="rating is <?php echo $data->COURSE_AVERAGE_RATING; ?> out of 5"></span>
                                                <span class="pl-2" style="font-size: 14px;"> (<?php echo number_format($data->COURSE_RATING); ?> rating) </span>
                                            </div>
                                        </div>
                                        <a href="<?php echo base_url('courses/' . $data->COURSE_URL . '/' . $data->COURSE_ID); ?>" class="btn btn-primary">Lihat Detail</a>
                                    </div>
                                </div>
                            <?php
                            endforeach;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 right-contents">
                <ul>
                    <div class="pl-2 mb-2">
                        <div class="d-flex">
                            <img class="trainer-image" src="<?php echo base_url($course->TRAINER_IMAGE); ?>" alt="Instruktur <?php echo $course->TRAINER_NAME; ?>">
                            <div class="d-flex flex-column pt-1 pl-3">
                                <span class="card-trainer-name" style="font-weight: bold; color: #30b29e;"><?php echo $course->TRAINER_NAME; ?></span>
                                <span class="card-trainer-title" style="font-size:80%; color: black"><?php echo $course->TRAINER_TITLE; ?></span>
                            </div>
                        </div>
                    </div>
                    <li>
                        <a class="justify-content-between d-flex" href="#">
                            <p>Rating</p>
                            <div><?php echo number_format($course->COURSE_AVERAGE_RATING); ?>
                                <span class="rating-star pt-1 pl-1" style="--rating: <?php echo $course->COURSE_AVERAGE_RATING; ?>" aria-label="rating is <?php echo $course->COURSE_AVERAGE_RATING; ?> out of 5"></span></b>&nbsp&nbsp(<?php echo number_format($course->COURSE_RATING); ?> rating)</div>
                        </a>
                    </li>
                    <li>
                        <a class="justify-content-between d-flex" href="#">
                            <p>Biaya Kursus </p>
                            <span style="color: black; font-size: 16px;">IDR<span style="color: #30b29e; font-size: 28px; font-weight: bold;"> <?php echo number_format($course->COURSE_PRICE); ?></span>
                        </a>
                    </li>
                </ul>
                <a href="#" class="primary-btn2 text-uppercase enroll rounded-0 text-white">Beli Kelas</a>

                <div class="course_requirement">
                    <h4 class="title">Apa yang akan Anda dapat</h4>
                    <div class="content">
                        <div class="d-flex flex-column">
                            <?php foreach ($courseWYG->result() as $dataWYG) { ?>
                                <span class="text-capitalize mb-2">
                                    <?php if ($dataWYG->TAG_ICON == 'ti-timer') {
                                        $timestamp = strtotime($course->COURSE_DURATION);
                                    ?>
                                        <i class="<?php echo $dataWYG->TAG_ICON ?> pl-2 pr-2"></i> <?php echo $dataWYG->NAME . ' ' . date("g", $timestamp) . ' Jam'; ?>
                                    <?php } else { ?>
                                        <i class="<?php echo $dataWYG->TAG_ICON ?> pl-2 pr-2"></i> <?php echo $dataWYG->NAME; ?>
                                    <?php } ?>

                                </span>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="course_requirement">
                    <h4 class="title">Persyaratan</h4>
                    <div class="content">
                        <span class="text-capitalize"><?php echo $course->COURSE_REQUIREMENT; ?></span>
                    </div>
                </div>

                <h4 class="title">Reviews</h4>
                <div class="content">
                    <div class="comments-area mb-30">
                        <div class="comment-list">
                            <div class="single-comment single-reviews justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="<?php echo base_url('assets/img/blog/c1.jpg'); ?>" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Emilly Blunt</a>
                                            <div class="star">
                                                <span class="ti-star checked"></span>
                                                <span class="ti-star checked"></span>
                                                <span class="ti-star checked"></span>
                                                <span class="ti-star"></span>
                                                <span class="ti-star"></span>
                                            </div>
                                        </h5>
                                        <p class="comment">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                            eiusmod tempor incididunt ut labore et dolore.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list">
                            <div class="single-comment single-reviews justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="<?php echo base_url('assets/img/blog/c2.jpg'); ?>" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Elsie Cunningham</a>
                                            <div class="star">
                                                <span class="ti-star checked"></span>
                                                <span class="ti-star checked"></span>
                                                <span class="ti-star checked"></span>
                                                <span class="ti-star"></span>
                                                <span class="ti-star"></span>
                                            </div>
                                        </h5>
                                        <p class="comment">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                            eiusmod tempor incididunt ut labore et dolore.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list">
                            <div class="single-comment single-reviews justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="<?php echo base_url('assets/img/blog/c3.jpg'); ?>" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Maria Luna</a>
                                            <div class="star">
                                                <span class="ti-star checked"></span>
                                                <span class="ti-star checked"></span>
                                                <span class="ti-star checked"></span>
                                                <span class="ti-star"></span>
                                                <span class="ti-star"></span>
                                            </div>
                                        </h5>
                                        <p class="comment">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                            eiusmod tempor incididunt ut labore et dolore.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="<?php echo base_url('assets/js/courseDetail.js'); ?>"></script>