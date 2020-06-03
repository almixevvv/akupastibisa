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

<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="banner_content text-center">
                        <h2>Contact Us</h2>
                        <!-- <div class="page_link">
                            <a href="index-2.html">Home</a>
                            <a href="contact.html">Contact</a>
                        </div> -->
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


<section class="contact_area section_gap about_area">
    <div class="container">
        <div id="mapBox" class="mapBox" data-lon="106.7942" data-lat="-6.1303" data-zoom="13" data-info="AkuPastiBisa" data-mlon="106.7942" data-mlat="-6.1303"></div>
        <!-- <div id="mapBox" class="mapBox" data-lat="40.701083" data-lon="-74.1522848" data-zoom="13" data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia." data-mlat="40.701083" data-mlon="-74.1522848"></div> -->
        <div class="row">
            <div class="col-lg-3">
                <div class="contact_info">
                    <div class="info_item">
                        <i class="ti-home"></i>
                        <h4>Alamat</h4>
                        <p style="font-size: 12px;">Jalan Jembatan 3 Raya No.36 AA-AB<br>Penjaringan, Pluit, Jakarta Utara, 14440<br>DKI Jakarta</p>
                    </div>
                    <div class="info_item">
                        <i class="ti-headphone"></i>
                        <h4>Kontak</h4>
                        <p style="font-size: 12px;">021-668-1571/72</p>
                    </div>
                    <div class="info_item">
                        <i class="ti-email"></i>
                        <!-- <h6><a href="#"><span class="__cf_email__" data-cfemail="4d3e383d3d223f390d2e2221223f21242f632e2220">[email&#160;protected]</span></a></h6> -->
                        <h4>Email</h4>
                        <p style="font-size: 12px;">info@mditack.co.id</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <form class="row contact_form" action="<?php echo base_url('AddContactUs/addContact'); ?>" method="post">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="contact_name" placeholder="Masukkan Nama" required />
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="contact_email" placeholder="Masukkan Email" required />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" name="contact_subject" placeholder="Masukkan Subjek" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea class="form-control" name="contact_message" id="message" rows="1" placeholder="Masukkan Pesan" required></textarea>
                        </div>
                    </div>
                    <div class="col-md-6 text-left">
                        <div class="g-recaptcha" data-sitekey="6Ld2qPIUAAAAACBW438Lt3L5DJJhSQoOCm4GkUli" required></div>
                    </div>
                    <div class="col-md-6 text-right">
                        <button type="submit" value="submit" class="btn primary-btn btn-sm" style="color: white;">
                            Kirim
                        </button>
                    </div>
                </form>
            </div>
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