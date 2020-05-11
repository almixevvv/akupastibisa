<style>
    .section_gap {

        padding-top: 2.3rem;

    }


    .footer-area .single-footer-widget .click-btn {
        background: #fdc632;
        background-size: 200% auto;
        color: #002347;
        border-radius: 0;
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
        padding: 8px 20px;
        margin-left: -110px;
        font-size: 12px;
        text-transform: uppercase;
        font-family: rubik, sans-serif;
        font-weight: 600;
        border: 0;
        -webkit-transition: all .3s ease 0s;
        -moz-transition: all .3s ease 0s;
        -o-transition: all .3s ease 0s;
        transition: all .3s ease 0s;
    }
</style>



<footer class="footer-area section_gap">

    <div class="container">

        <div class="row">

            <div class="col-lg-2 pl-0 mb-4">

                <img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="Akupastibisa Logo" />

            </div>

        </div>

        <div class="row">

            <div class="col-lg-2 col-md-6 single-footer-widget">
                <h4>Prakerja</h4>
                <div>
                    <!-- SELECT ALL FOOTER ITEMS FROM DATABASE -->
                    <?php
                    $this->db->select('*');
                    $this->db->from('g_footer');
                    $this->db->where('PARENT', 'PRAKERJA');
                    $this->db->order_by('REC_ID', 'ASC');

                    $query = $this->db->get();
                    ?>
                    <?php foreach ($query->result() as $data) : ?>
                        <a href="<?php echo base_url() . $data->PATH; ?>">
                            <p style="margin-bottom: 0!important; font-size: 0.85em; color: white"><?php echo $data->TITLE; ?></p>
                        </a>
                    <?php endforeach; ?>
                    <!-- <a href="<?php echo base_url('contact'); ?>">-->
                    <!--    <p style="margin-bottom: 0!important; font-size: 0.85em; color: white">Contact Us</p>-->
                    <!--</a>-->
                </div>
            </div>

            <div class="col-lg-2 col-md-6 single-footer-widget">
                <h4>Kategori</h4>
                <div>
                    <!-- SELECT ALL FOOTER ITEMS FROM DATABASE -->
                    <?php
                    $this->db->select('*');
                    $this->db->from('g_course_categories');
                    // $this->db->where('PARENT', 'MORE INFO');
                    $this->db->order_by('REC_ID', 'ASC');

                    $query = $this->db->get();
                    ?>
                    <?php foreach ($query->result() as $data) : ?>
                        <a href="<?php echo base_url() . $data->CATEGORY_NAME; ?>">
                            <p style="margin-bottom: 0!important; font-size: 0.85em; color: white"><?php echo $data->CATEGORY_NAME; ?></p>
                        </a>
                    <?php endforeach; ?>
                    <!-- <a href="<?php echo base_url('contact'); ?>">-->
                    <!--    <p style="margin-bottom: 0!important; font-size: 0.85em; color: white">Contact Us</p>-->
                    <!--</a>-->
                </div>
            </div>

            <div class="col-lg-2 col-md-6 single-footer-widget">
                <h4>Kontak</h4>
                <div>
                    <!-- SELECT ALL FOOTER ITEMS FROM DATABASE -->
                    <?php
                    $this->db->select('*');
                    $this->db->from('g_footer');
                    $this->db->where('PARENT', 'KONTAK');
                    $this->db->order_by('REC_ID', 'ASC');

                    $query = $this->db->get();
                    ?>
                    <?php foreach ($query->result() as $data) : ?>
                        <a href="<?php echo base_url() . $data->PATH; ?>">
                            <p style="margin-bottom: 0!important; font-size: 0.85em; color: white"><?php echo $data->TITLE; ?></p>
                        </a>
                    <?php endforeach; ?>
                    <!-- <a href="<?php echo base_url('contact'); ?>">-->
                    <!--    <p style="margin-bottom: 0!important; font-size: 0.85em; color: white">Contact Us</p>-->
                    <!--</a>-->
                </div>
            </div>

            <!-- <div class="col-lg-2 col-md-6 single-footer-widget">
                <h4>Instruktur</h4>
                <div>
                    <a href="<?php echo base_url('home/instruktur'); ?>">
                        <p style="margin-bottom: 0!important; font-size: 0.85em; color: white">Daftar Sekarang</p>
                    </a>
                </div>
            </div> -->

            <div class="col-lg-2 col-md-6 single-footer-widget">
                <h4>Info Lain</h4>
                <div>
                    <!-- SELECT ALL FOOTER ITEMS FROM DATABASE -->
                    <?php
                    $this->db->select('*');
                    $this->db->from('g_footer');
                    $this->db->where('PARENT', 'MORE INFO');
                    $this->db->order_by('TITLE', 'ASC');

                    $query = $this->db->get();
                    ?>
                    <?php foreach ($query->result() as $data) : ?>
                        <a href="<?php echo base_url() . $data->PATH; ?>">
                            <p style="margin-bottom: 0!important; font-size: 0.85em; color: white"><?php echo $data->TITLE; ?></p>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 single-footer-widget">
                <h4>Newsletter</h4>
                <p>You can trust us. we only send promo offers,</p>
                <div class="form-wrap" id="mc_embed_signup">
                    <form target="_blank" action="#" method="get" class="form-inline">
                        <input class="form-control" name="EMAIL" placeholder="Your Email Address" type="email" style="width: 5em;" />
                        <button class="click-btn btn btn-default">
                            <span>subscribe</span>
                        </button>

                        <div style="position: absolute; left: -5000px;">
                            <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text" />
                        </div>
                        <div class="info"></div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row footer-bottom d-flex justify-content-between">
            <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
                Copyright &copy;<script type="7b186b6467d792eb87279585-text/javascript">
                    document.write(new Date().getFullYear());
                </script> Incube Solutions
            </p>

            <div class="col-lg-4 col-sm-12 footer-social">
                <a href="<?php echo ('https://www.facebook.com/akupastibisa.akupastibisa.3388'); ?>"><i class="ti-facebook"></i></a>
                <a href="<?php echo ('https://www.instagram.com/akupastibisa.id/'); ?>"><i class="ti-instagram"></i></a>
                <a href="<?php echo ('https://www.gmail.com/'); ?>"><i class="ti-email"></i></a>
                <!-- <a href="#"><i class="ti-dribbble"></i></a>
                <a href="#"><i class="ti-linkedin"></i></a> -->
            </div>
        </div>
    </div>
</footer>

<script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js'); ?>" type="4063bac1d4ccabf8fe6073bb-text/javascript"></script>

<script src="<?php echo base_url('assets/js/popper.js'); ?>" type="4063bac1d4ccabf8fe6073bb-text/javascript"></script>

<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>" type="4063bac1d4ccabf8fe6073bb-text/javascript"></script>

<script src="<?php echo base_url('vendors/nice-select/js/jquery.nice-select.min.js'); ?>" type="4063bac1d4ccabf8fe6073bb-text/javascript"></script>

<script src="<?php echo base_url('vendors/owl-carousel/owl.carousel.min.js'); ?>" type="4063bac1d4ccabf8fe6073bb-text/javascript"></script>

<script src="<?php echo base_url('assets/js/owl-carousel-thumb.min.js'); ?>" type="4063bac1d4ccabf8fe6073bb-text/javascript"></script>

<script src="<?php echo base_url('assets/js/jquery.ajaxchimp.min.js'); ?>" type="4063bac1d4ccabf8fe6073bb-text/javascript"></script>

<script src="<?php echo base_url('assets/js/mail-script.js'); ?>" type="4063bac1d4ccabf8fe6073bb-text/javascript"></script>



<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE" type="4063bac1d4ccabf8fe6073bb-text/javascript"></script>

<script src="<?php echo base_url('assets/js/gmaps.min.js'); ?>" type="4063bac1d4ccabf8fe6073bb-text/javascript"></script>

<script src="<?php echo base_url('assets/js/theme.js'); ?>" type="4063bac1d4ccabf8fe6073bb-text/javascript"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="4063bac1d4ccabf8fe6073bb-text/javascript"></script>

<script type="4063bac1d4ccabf8fe6073bb-text/javascript">
    window.dataLayer = window.dataLayer || [];



    function gtag() {

        dataLayer.push(arguments);

    }

    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>

<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="4063bac1d4ccabf8fe6073bb-|49" defer=""></script>

</body>



</html>