<style>
    .about_area {
        background-image: url(<?php echo base_url('assets/img/polygonlineart.png'); ?>);
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

<?php foreach ($content->result() as $details); ?>
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="banner_content text-center">
                        <h2><?php echo $details->TITLE; ?></h2>
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
    <div class="container pt-3 pb-2">
        <div class="row">
            <div class="col-lg-12">
                <div class="feature-title text-center">
                    <?php echo $details->DESCRIPTION; ?>
                </div>
            </div>

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



<?php if ($this->uri->segment(1) == 'about-us') { ?>
    <section class="feature_area title-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="classol-lg-5">
                    <div class="page_title">
                        <h2 class="mb-3 black">Di <strong>Akupastibisa</strong> ingin selalu ...</h2>
                        <p>

                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_feature">
                        <div class="icon text-center mb-4" style="color: #DDD;"><span class="flaticon-earth"></span></div>
                        <div class="desc text-center">
                            <p>
                                Menginspirasi dan memberikan kelas yang praktis bagi para pembelajar
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_feature">
                        <div class="icon text-center mb-4"><span style="color:#DDD;" class="flaticon-student"></span></div>
                        <div class="desc text-center">
                            <p>
                                Memberikan kesempatan berbagi dan mendapatkan penghasilan
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_feature">
                        <div class="icon text-center mb-4"><span class="flaticon-book"></span></div>
                        <div class="desc text-center">
                            <p>
                                Meningkatkan daya saing Indonesia melalui SDM nya
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>