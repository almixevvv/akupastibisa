<?php $this->load->view('templates/header/doc-header'); ?>
<div class="super_container">
    <?php $this->load->view('templates/header/nav-header'); ?>
    <div class="article_page" style="margin-top: 120px!important; margin-bottom: 10em;">
        <div class="container">
            <h2 class="page_title">How to claim on your health funds</h2>
            <?php 
                $no=1;
                foreach($healthFunds->result() as $dt){
                
                  $desc = $dt->DESCRIPTION;
                
                 echo "<tr>" ?>
                <td>
                   <?php echo $desc; ?>
                </td>

               <?php
                echo "</tr>";
              }
            ?>
            <!-- <div class="row">
                <div class="col-12">
                    <p class="mt-2">Jnr. Specs is an Australian owned and operated business. If you have an Australian private
                        health insurance and is covered for optical benefits, you can show the tax invoice to receive a rebate if
                        you’re eligible. You can only claim on prescription glasses. There are different level of cover and to
                        find your eligibility and rebate, you can contact your Health Fund directly or simply show them your tax
                        invoice from your purchase with us. You should receive a tax invoice in your e-mail inbox but if you
                        require an additional copy of your invoice please contact <a href="mailto:info@jnrspecs.com">info@jnrspecs.com</a></p>
                </div>
            </div> -->
        </div>
    </div>
    <?php $this->load->view('templates/footer/nav-footer'); ?>
</div>
<?php $this->load->view('templates/footer/doc-footer'); ?>