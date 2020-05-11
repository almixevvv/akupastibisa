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
        max-width: 70%;
        min-width: 70%;
    }

    .child_course_preview {
        width: 15%;
    }

    .child_course_duration {
        width: 15%;
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
                        <h2><?php echo $course->COURSE_NAME; ?></h2>
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
        <div class="row">
            <div class="col-lg-8 course_details_left">
                <div class="main_image">
                    <img class="img-fluid" src="<?php echo base_url($course->COURSE_IMAGE); ?>" alt="<?php echo $course->COURSE_NAME; ?>">
                </div>

                <div class="content_wrapper">
                    <h4 class="title">Objectives</h4>
                    <div class="content">
                        When you enter into any new area of science, you almost always find yourself with a
                        baffling new language of
                        technical terms to learn before you can converse with the experts. This is certainly
                        true in astronomy both in
                        terms of terms that refer to the cosmos and terms that describe the tools of the trade,
                        the most prevalent
                        being the telescope.
                        <br>
                        <br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut aliquip ex ea
                        commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum. Lorem ipsum dolor sit
                        amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim
                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis aute
                        irure dolor in reprehenderit in voluptate velit esse cillum.
                    </div>
                    <h4 class="title">Eligibility</h4>
                    <div class="content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.
                        <br>
                        <br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut aliquip ex ea
                        commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum. Lorem ipsum dolor sit
                        amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim
                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis aute
                        irure dolor in reprehenderit in voluptate velit esse cillum.
                    </div>

                    <h4 class="title">Preview</h4>
                    <div class="content">
                        <video controls width="100%">
                            <source src="<?php echo base_url('assets/video/video.mp4'); ?>" type="video/mp4">
                            Sorry, your browser doesn't support embedded videos.
                        </video>
                    </div>

                    <?php foreach ($courseData->result() as $data); ?>

                    <h4 class="title">Kontent Kursus <?php echo $courseData->num_rows(); ?></h4>
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
                                                        <a class="child_course_title pl-3 pt-2 pb-2 pr-3" href="#">
                                                            <?php echo $child->COURSE_SECTION_CATEGORY; ?>
                                                        </a>
                                                        <a class="child_course_preview pt-2 pb-2" href="#">
                                                            Pratinjau
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
                </div>
            </div>
            <div class="col-lg-4 right-contents">
                <ul>
                    <li>
                        <a class="justify-content-between d-flex" href="#">
                            <p>Nama Instruktur</p>
                            <span class="or"><?php echo $course->TRAINER_NAME; ?></span>
                        </a>
                    </li>
                    <li>
                        <a class="justify-content-between d-flex" href="#">
                            <p>Biaya Kursus </p>
                            <span>Rp. <?php echo number_format($course->COURSE_PRICE); ?></span>
                        </a>
                    </li>
                    <li>
                        <a class="justify-content-between d-flex" href="#">
                            <p>Kursi Tersisa </p>
                            <span>15</span>
                        </a>
                    </li>
                    <li>
                        <a class="justify-content-between d-flex" href="#">
                            <p>Jadwal </p>
                            <span>2.00 pm to 4.00 pm</span>
                        </a>
                    </li>
                </ul>
                <a href="#" class="primary-btn2 text-uppercase enroll rounded-0 text-white">Daftar Sekarang</a>
                <h4 class="title">Reviews</h4>
                <div class="content">
                    <div class="review-top row pt-40">
                        <div class="col-lg-12">
                            <h6 class="mb-15">Provide Your Rating</h6>
                            <div class="d-flex flex-row reviews justify-content-between">
                                <span>Quality</span>
                                <div class="star">
                                    <i class="ti-star checked"></i>
                                    <i class="ti-star checked"></i>
                                    <i class="ti-star checked"></i>
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                </div>
                                <span>Outstanding</span>
                            </div>
                            <div class="d-flex flex-row reviews justify-content-between">
                                <span>Puncuality</span>
                                <div class="star">
                                    <i class="ti-star checked"></i>
                                    <i class="ti-star checked"></i>
                                    <i class="ti-star checked"></i>
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                </div>
                                <span>Outstanding</span>
                            </div>
                            <div class="d-flex flex-row reviews justify-content-between">
                                <span>Quality</span>
                                <div class="star">
                                    <i class="ti-star checked"></i>
                                    <i class="ti-star checked"></i>
                                    <i class="ti-star checked"></i>
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                </div>
                                <span>Outstanding</span>
                            </div>
                        </div>
                    </div>
                    <div class="feedeback">
                        <h6>Your Feedback</h6>
                        <textarea name="feedback" class="form-control" cols="10" rows="10"></textarea>
                        <div class="mt-10 text-right">
                            <a href="#" class="primary-btn2 text-right rounded-0 text-white">Submit</a>
                        </div>
                    </div>
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script>
    $('.content_title_card').on('click', function() {
        $(this).children().find('.content_expand').toggleClass('active');
        $(this).children().find('.content-total').toggleClass('d-none');
        $(this).children().find('.content-duration').toggleClass('d-none');
    });
</script>