<style>
    .prakerja_banner_area {
    	z-index: 1;
    	position: relative;
    	background: url(../../assets/img/banner/prakerja-banner.jpg) no-repeat center;
    	background-size: cover;
    	height: 350px;
    	background-position: 50% 20%;
    }
    .prakerja_banner_area .banner_inner {
    	position: absolute;
    	top: 60%;
    	-webkit-transform: translateY(-70%);
    	-moz-transform: translateY(-70%);
    	-ms-transform: translateY(-70%);
    	-o-transform: translateY(-70%);
    	transform: translateY(-70%);
    	z-index: 10;
    	width: 100%;
    }
    @media (max-width: 991px) {
    	.prakerja_banner_area .banner_inner {
    		top: 50%;
    	}
    }
    .prakerja_banner_area .banner_inner .banner_content h2 {
    	font-size: 48px;
    	font-weight: 500;
    }
    .prakerja_banner_area .banner_inner .banner_content p {
    	font-size: 20px;
    	color: #002347;
    	font-weight: 500;
    }
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

    .sansserif {
      font-family: Arial, Helvetica, sans-serif;
    }

    .tahoma {
      font-family: Tahoma, Geneva, sans-serif;
    }

    .text_content{
        text-indent: 20px;
    }

</style>

<section class="prakerja_banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="banner_content text-center">
                        <h2 class="text-white">Kumpulan Artikel</h2>
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


<div class="container about_area">
    <hr>
    <?php foreach ($artikel->result() as $result) { 
        $date = date_create($result->ARTIKEL_CREATED);
        ?>
    <div class="row">
        <div class="col-md-8">
                <div class="col-md-12">
                    <h2 style="color: #30b29e;" class="tahoma"><?php echo $result->JUDUL;?></h3>
                    <p style="font-size: 12px;"><?php echo date_format($date,'d M Y');?></p>
                    <!-- <p style="font-size: 12px;"><?php echo $result->USER_ID;?></p> -->
                </div>
                <div class="col-md-12" >
                    <img src="<?php echo base_url($result->IMAGE); ?>" alt="<?php echo $result->IMAGE; ?>" class="card-img-top" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/no-image.png'); ?>';">
                </div>
                <hr>
                <div class="col-md-12">
                    <?php echo $result->CONTENT;?>
                </div>
                <?php } ?>
        </div>
        <div class="col-md-4">
            <h3 style="background-color: #00c5dd; height: 2em; padding-left: 1em; padding-top: 0.5em; color: white;">Artikel Lainnya</h3>
            <hr>
            <?php foreach ($artikel_all->result() as $result) { ?>
            <div class="row">
                <div class="col-md-4" style="margin-bottom: 1em;">
                    <img src="<?php echo base_url($result->IMAGE); ?>" alt="<?php echo $result->IMAGE; ?>" class="card-img-top" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/no-image.png'); ?>';">
                </div>
                <div class="col-md-8">
                    <a style="color: #30b29e;" class="course-link" href="<?php echo base_url('artikel/' . $result->ARTIKEL_ID); ?>"><?php echo $result->JUDUL;?>
                    </a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>


<section class="home_quotes">
    <div class="container-fluid">
        <div class="d-flex justify-content-center">
            <?php foreach ($randomQuotes->result() as $result) { ?>
            <h4 class="quotes_text"><?php echo $result->CONTENT;?></h4>
            <?php } ?>
        </div>
    </div>
</section>