<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="banner_content text-center">
                        <h2>About Us</h2>
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


<section class="about_area section_gap">
    <div class="container">
            <?php 
                $no=1;
                foreach($about_footer->result() as $dt){
                
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

