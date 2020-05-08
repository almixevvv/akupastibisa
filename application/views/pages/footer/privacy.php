<style>
    .about_area{
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
                        <h2>Policy and Privacy</h2>
                        <!-- <div class="page_link">
                            <a href="index-2.html">Home</a>
                            <a href="about-us.html">About Us</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pages_feature_area">
    <div class="container pt-3 pb-2">
        <div class="row">
            <div class="col-lg-12">                   
                <div class="feature-title text-center">                        
                    <p></p>
                </div>
            </div>
           
        </div>
    </div>
</section>


<section class="about_area section_gap">
    <div class="container">
            <?php 
                $no=1;
                foreach($privacy->result() as $dt){
                
                  $desc = $dt->DESCRIPTION;
                
                 echo "<tr>" ?>
                <td>
                   <?php echo $desc; ?>
                </td>

               <?php
                echo "</tr>";
              }
            ?>
        </div>
</section>

<section class="home_quotes">
    <div class="container-fluid">
        <div class="d-flex justify-content-center">
            <h4 class="quotes_text">"Another text goes here, Another text goes here, Another text goes here"</h4>
        </div>
    </div>
</section>

