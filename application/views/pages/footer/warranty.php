<?php $this->load->view('templates/header/doc-header'); ?>
<div class="super_container">
    <?php $this->load->view('templates/header/nav-header'); ?>
    <div class="article_page" style="margin-top: 120px!important; margin-bottom: 10em;">
        <div class="container">
            <h2 class="page_title">Shipping, Returns and Warranty</h2>
            <?php 
                $no=1;
                foreach($warranty->result() as $dt){
                
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
                    <h4 class="mt-5"><u>Frame Warranty Policy</u></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="mt-2">
                        At Jnr.Specs we want you to be happy with your purchase. </br></br>
                        Our 365-Day Product Guarantee means one-time replacement pair of frame within 365 days
                        only if there is a clear manufacturer defect in the material or workmanship such as
                        warping or broken hinges. This warranty excludes lenses.
                        In the instance where the same frame is no longer in stock or available, an alternative
                        colour in the same range will be offered. In the instance where none of the same frame
                        are no longer in stock in any colour, Jnr. Specs will replace with a new frame model
                        with new lenses included. No change of frame model is allowed under the 365-Day Product Guarantee.</br></br>
                        We reserve the right to approve or disapprove frame warranty upon receiving the returned frame.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h4 class="mt-5"><u>Lens Warranty Policy</u></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="mt-2">
                        Our lens replacement warranty means we will send you a new lens or a pair of lenses should the lens be damaged upon arrival.
                        Notify Jnr. Email us, at <a href="info:warranty@jnrspecs.com"> info@jnrspecs.com </a>, a clear photo of the product with the defect within three days of
                        receiving the product to be eligible for this warranty. </br></br>
                        A 365 days Lens Warranty means a one-time replacement lens or a pair of lens within 365 days for manufacturer defect for a small handling fee of $20 plus postage.
                        Jnr. Specs will not pay for the customer’s cost in returning the goods. </br></br>
                        Manufacturer defect are defined as those on the surface coating and not in the lens itself.
                        Example of a manufacturer defect is crazing of the super hydrophobic anti-reflective coating. </br></br>
                        Product and lens warranty does not cover damage caused by accidents, negligence, or improper care such as scratches to the frame or lenses.
                        Our scratch resistant coating does not mean the lens is scratch proof or anti-scratch.
                        We reserve the right to approve or disapprove frame and lens warranty upon receiving the returned frame and or lens.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h4 class="mt-5"><u>Warranty Procedure</u></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="mt-2">
                        Email us at <a href="mailto:warranty@jnrspecs.com"> warranty@jnrspecs.com </a>with your photos of the damaged product and
                        we will provide you with a return authority number</br></br>
                        Send your glasses back to us with the return authority number
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h4 class="mt-5"><u>Refunds and Change of Mind</u></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="mt-2">
                        Jnr. Specs is committed to making sure you are happy with your frame choice.
                        As such, <strong>Home Trial</strong> is available for your convenience and peace of mind.
                        As you have tried the frames, <strong>NO</strong> exchanges will be given for change of mind and <strong>NO</strong> refunds given at any circumstances.
                        Should there be a fault in the glasses, we provide <strong>365-Day Product Guarantee</strong>. Please refer above for terms and conditions.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h4 class="mt-5"><u>Shipping Policy</u></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ol class="mt-2 pl-4" style="list-style: outside;">
                        <li>
                            <p>
                                Jnr. Specs provides Home Trial for a low postage and handling fee of $10.
                                Only one set of Home Trial will be sent at one time. If you have ordered two Home Trials, the second
                                will be delivered only after the first Home Trial is returned.
                            </p>
                        </li>
                        <li>
                            <p>
                                The items you have ordered will be delivered to the specified delivery address provided by you
                                only after payment has been received. Delivery times may vary and depends on the complexity of
                                the prescription. It generally ranges between 7-14 working days
                            </p>
                        </li>
                        <li>
                            <p>
                                To ensure the product you receive is satisfactory, the items you have ordered will undergo a quality control check.
                                We do not take any responsibility in delays caused by our suppliers. Should there be a delay, you will receive a notification
                                email.
                            </p>
                        </li>
                    </ol>
                    <p class="mt-2">
                        If you have any issues with the frames, lenses or any other part of our product, please do not hesitate to send an email
                        at <a href="mailto:info@jnrspecs.com">info@jnrspecs.com</a> and we will do our best to sort it out straight away.
                    </p>
                </div>
            </div> -->




        </div>
    </div>
    <?php $this->load->view('templates/footer/nav-footer'); ?>
</div>
<?php $this->load->view('templates/footer/doc-footer'); ?>