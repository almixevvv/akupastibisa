<head>
  <!-- <title>Your Website Title</title> -->
    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
    <?php foreach ($artikel->result() as $result) { ?>
  <meta property="og:url"           content="<?php echo base_url('artikel/' . $result->ARTIKEL_ID)?>" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Akupastibisa.com" />
  <meta property="og:description"   content="Akupastibisa.com" />
  <meta property="og:image"         content="<?php echo base_url($result->IMAGE); ?>" />
   <?php } ?>
</head>

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

    ul#menu li {
      display:inline;
    }

    .rcorners2 {
      border-radius: 15px;
      border: 2px solid #17a2b8;
      padding: 10px; 
      width: 200px;

      /*height: 150px;  */
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
                    <h2 style="color: #30b29e;" class="tahoma"><?php echo $result->JUDUL;?></h2>
                        <label style="font-size: 12px;">Era Modernisasi terus berkembang begitu juga pada bidan teknologi dan informasi</label>
                    <p style="font-size: 12px;"><?php echo date_format($date,'d M Y H:i:s');?> - <?php echo $result->USER_ID;?></p>
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
                <div class="col-md-4">
                    <img style="height: 100px" src="<?php echo base_url($result->IMAGE); ?>" alt="<?php echo $result->IMAGE; ?>" class="card-img-top" onerror="this.onerror=null;this.src='<?php echo base_url('assets/img/no-image.png'); ?>';">
                </div>
                <div class="col-md-8">
                    <a style="color: #30b29e;" class="course-link" href="<?php echo base_url('artikel/' . $result->ARTIKEL_ID); ?>"><?php echo $result->JUDUL;?>
                    </a>
                    <label style="font-size: 12px"><?php echo date_format($date,'d M Y H:i:s');?></label>
                </div>
            </div>
            <hr>
            <?php } ?>
        </div>
    </div>
</div>

<div class="container">
    <h3>Topik Terkait</h3>
    <ul id="menu" style="margin-top: 2em;">
       <li class="rcorners2">Teknologi</li> 
       <li class="rcorners2">SDM</li> 
       <li class="rcorners2">Informasi</li> 
    </ul>
</div>

<!-- Load Facebook SDK for JavaScript -->
<div class="container">
    <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <!-- Your share button code -->
  <?php foreach ($artikel->result() as $result) { 
        $date = date_create($result->ARTIKEL_CREATED);
        ?>
  <div class="fb-share-button fa fa-facebook" 
    data-href="<?php echo base_url('artikel/' . $result->ARTIKEL_ID)?>" 
    data-layout="button_count">
  </div>
  <?php } ?>

  <a class="twitter-share-button"
  href="https://twitter.com/intent/tweet?url=[<?php echo base_url('artikel/' . $result->ARTIKEL_ID)?>]">
Tweet</a>
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