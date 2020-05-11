<style>
    .btn-custom {
        background-color: #008ab1;
        border-color: #008ab1;
        color: white;
    }
</style>


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
                    <video width="400" controls>
                        <source src="<?php echo base_url($course->COURSE_IMAGE); ?>" type="video/mp4">
                        <source src="<?php echo base_url($course->COURSE_IMAGE); ?>" type="video/ogg">
                        Your browser does not support HTML video.
                    </video>
                    <!-- <img class="img-fluid" src="<?php echo base_url($course->COURSE_IMAGE); ?>" alt="<?php echo $course->COURSE_NAME; ?>"> -->
                </div>



                <div class="content_wrapper">
                    <h4 class="title">Penjelasan Kursus</h4>
                    <div class="content">
                        <?php echo $course->COURSE_DESCRIPTION; ?>
                    </div>
                    <h4 class="title">Materi Pembelajaran</h4>
                    <div class="content">

                        <?php echo $course->COURSE_WHAT_YOU_GET; ?>
                    </div>

                    <h4 class="title">Persyaratan</h4>
                    <div class="content">
                        <?php echo $course->COURSE_REQUIREMENT; ?>
                    </div>

                    <h4 class="title">Course Outline</h4>
                    <div class="content">
                        <ul class="course_list">
                            <li class="justify-content-between d-flex">
                                <p>Introduction Lesson</p>
                                <a class="primary-btn text-uppercase" href="#">View Details</a>
                            </li>
                            <li class="justify-content-between d-flex">
                                <p>Basics of HTML</p>
                                <a class="primary-btn text-uppercase" href="#">View Details</a>
                            </li>
                            <li class="justify-content-between d-flex">
                                <p>Getting Know about HTML</p>
                                <a class="primary-btn text-uppercase" href="#">View Details</a>
                            </li>
                            <li class="justify-content-between d-flex">
                                <p>Tags and Attributes</p>
                                <a class="primary-btn text-uppercase" href="#">View Details</a>
                            </li>
                            <li class="justify-content-between d-flex">
                                <p>Basics of CSS</p>
                                <a class="primary-btn text-uppercase" href="#">View Details</a>
                            </li>
                            <li class="justify-content-between d-flex">
                                <p>Getting Familiar with CSS</p>
                                <a class="primary-btn text-uppercase" href="#">View Details</a>
                            </li>
                            <li class="justify-content-between d-flex">
                                <p>Introduction to Bootstrap</p>
                                <a class="primary-btn text-uppercase" href="#">View Details</a>
                            </li>
                            <li class="justify-content-between d-flex">
                                <p>Responsive Design</p>
                                <a class="primary-btn text-uppercase" href="#">View Details</a>
                            </li>
                            <li class="justify-content-between d-flex">
                                <p>Canvas in HTML 5</p>
                                <a class="primary-btn text-uppercase" href="#">View Details</a>
                            </li>
                        </ul>
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