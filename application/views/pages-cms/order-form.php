<style type="text/css">
  @media print{
    #tombol{
      display: none;
    }
  }

  .sansserif {
    font-family: Arial, Helvetica, sans-serif;
  }

  .buttonBack {
    background-color: #ff4f42;
    border-color: transparent;
    color: white;
    border-radius: 5px;
    padding: 3px;
    width: 10em; 
    /*margin-left: 35em;*/
    margin-bottom: 1em;
    font-family: Arial, Helvetica, sans-serif;  
  }

  .buttonSendTop {
    background-color: #1e8c00;
    border-color: transparent;
    color: white;
    border-radius: 5px;
    padding: 3px;
    width: 10em; 
    margin-left: 1em;
    margin-bottom: 1em;
    font-family: Arial, Helvetica, sans-serif;  
  }

  .buttonSendBot {
    background-color: #1e8c00;
    border-color: transparent;
    color: white;
    border-radius: 5px;
    padding: 3px;
    width: 10em; 
    /*margin-left: 35em;*/
    margin-top: 1em;
    font-family: Arial, Helvetica, sans-serif;  
  }
</style>

<?php 
$no = 1;
foreach($details->result() as $data): ?>

<center id="tombol">
  
  <a style="text-decoration: none!important;" href="<?php echo base_url('cms/order'); ?>">
    <button type="button" class="buttonBack"> < Back </button>
  </a>
  
  <a onclick="window.print();">
    <button class="buttonSendTop"> Print </button>
  </a>
</center>

<!-- <button type="button" class="btn buttonBack"> Send </button> -->

<body class="sansserif">
  <div class="main-body" style="background-color: white; max-width:500px;margin:auto;padding:25px; border: 1px solid lightgrey;">
    <table>
      <tr>
        <td height="10">
          <img src="<?php echo base_url('templates/images/logo/logo_yellow.png'); ?>" style="width:100%; max-width:100px;"/>
        </td>
        <td>
          <div style="text-align: right;width: 10em; font-size: 12px;color: #666666;margin-left: 24em;font-weight: bold;">info@jnrspecs.com</div>
          <div style="text-align: right;width: 10em; font-size: 12px;color: #666666;margin-left: 24em;margin-top: 0.5em;font-weight: bold;">66 Eastern Avenue</div>
          <div style="text-align: right;width: 10em; font-size: 12px;color: #666666;margin-left: 24em;margin-top: 0.5em;font-weight: bold;">Kingsford NSW 2032</div>
          <div style="text-align: right;width: 10em; font-size: 12px;color: #666666;margin-left: 24em;margin-top: 0.5em;font-weight: bold;">ABN : 13941324552</div>
        </td>
      </tr>
    </table> 
      
    <table>
      <tr>
        <td height="10">
          <div style="width: 6em; font-size: 12px;color: #666666; margin-top: 1em;">Order No </div>
          <span style="color: #e09600; font-size: 14px; font-weight: bold;"><?php echo $data->ORDER_ID;?></span>
        </td>
        <td>
          <div style="width: 6em; font-size: 12px;color: #666666;margin-left: 20em; margin-top: 1em;">Order Date </div>
          <span style="color: #e09600; font-size: 14px;margin-left: 17.5em; font-weight: bold;"><?php echo date("d F Y", strtotime($data->ORDER_DATE));?></span>
        </td>
      </tr>
      <tr>
        <td height="10">
          <div style="width: 10em; font-size: 12px;color: #666666; margin-top: 1em;">Customer Name </div>
          <span style="color: #e09600; font-size: 14px; font-weight: bold;"><?php echo $data->FIRST_NAME;?> <?php echo $data->LAST_NAME;?></span>
        </td>
      </tr>
    </table> 
<?php 
$no++;
endforeach; ?>
    <hr>


<?php foreach($order->result() as $data): ?>
  <table>
    <tr>
      <td>
        <div style="width: 6em; font-size: 12px;color: #666666;">Product ID </div>
        <span style="color: #e09600; font-size: 14px; font-weight: bold;"><?php echo $data->PROD_ID;?></span>
      </td>
    </tr>
  </table>

    <table style="margin-top: 1em;">
      <thead>
        <th colspan="12" width="800" style="text-align: center; padding: 4px;background-color: orange;">
          <span style="font-size: 12px;">Product Description</span>
        </th>
      </thead>
      <thead>
        <th colspan="3" width="800" style="text-align: center; padding: 4px;background-color: #f0f0f0;">
          <span style="font-size: 12px;">Frame Model</span>
        </th>
        <th colspan="3" width="800" style="text-align: center; padding: 4px;background-color: #f0f0f0;">
          <span style="font-size: 12px;">Color</span>
        </th>
        <th colspan="3" width="800" style="text-align: center; padding: 4px;background-color: #f0f0f0;">
          <span style="font-size: 12px;">Category</span>
        </th>
        <th colspan="3" width="800" style="text-align: center; padding: 4px;background-color: #f0f0f0;">
          <span style="font-size: 12px;">Size</span>
        </th>
      </thead>

      <tr>
        <td colspan="3" style="height: 10px; color: #666666; text-align: center;">
          <div style="color: #e09600;font-size: 12px;"><?php echo $data->NAME_PRODUCT;?>
        </td>
        <td colspan="3" style="height: 10px; color: #666666; text-align: center;">
          <div style="font-size: 12px;"><?php echo $data->COLOR_ID;?></div>
        </td>
        <td colspan="3" style="height: 10px; color: #666666; text-align: center;">
          <div style="font-size: 12px;text-transform: uppercase;"><?php echo $data->CATEGORY;?></div>
        </td>
        <td colspan="3" style="height: 10px; color: #666666; text-align: center;">
          <div style="font-size: 12px;"><?php echo $data->SIZE;?></div>
        </td>
      </tr>      
    </table>

    <table style="margin-top: 1em;">
      <thead>
        <th colspan="12" width="800" style="text-align: center; padding: 4px;background-color: #f0f0f0;">
          <span style="margin-left: 10px; font-size: 12px;">Lens Info</span>
        </th>
      </thead>

       <thead>
        <th colspan="4" width="800" style="text-align: center; padding: 4px;background-color: #f0f0f0;">
          <span style="font-size: 12px;">Lens Name</span>
        </th>
        <!-- <th colspan="4" width="800" style="text-align: center; padding: 4px;background-color: #f0f0f0;">
          <span style="font-size: 12px;">Lens Code</span>
        </th> -->
        <th colspan="4" width="800" style="text-align: center; padding: 4px;background-color: #f0f0f0;">
          <span style="font-size: 12px;">Lens Code 2</span>
        </th>
      </thead>

      <tr>
        <td colspan="4" style="height: 10px; color: #666666; text-align: center;">
          <div style="color: #666666;font-size: 12px;"><?php echo $data->LENS_NAME;?>
        </td>
        <!-- <td colspan="4" style="height: 10px; color: #666666; text-align: center;">
          <div style="color: #e09600;font-size: 12px;"><?php echo $data->LENS_CODE;?></div>
        </td> -->
        <td colspan="4" style="height: 10px; color: #666666; text-align: center;">
          <div style="color: #e09600;font-size: 12px;"><?php echo $data->LENS_CODE_2;?></div>
        </td>
      </tr>
    </table>

    <table style="margin-top: 1em;">
      <thead>
        <th colspan="24" width="800" style="text-align: center; padding: 4px;background-color: #f0f0f0;">
          <span style="margin-left: 10px; font-size: 12px;">Prescription Info</span>
        </th>
      </thead>

      <thead>
        <th colspan="3" width="800" style="text-align: center; padding: 4px;background-color: transparent;">
          <span style="font-size: 12px;"></span>
        </th>
        <th colspan="3" width="800" style="text-align: center; padding: 4px;background-color: #f0f0f0;">
          <span style="font-size: 12px;">Sphere</span>
        </th>
        <th colspan="3" width="800" style="text-align: center; padding: 4px;background-color: #f0f0f0;">
          <span style="font-size: 12px;">Cylinder</span>
        </th>
        <th colspan="3" width="800" style="text-align: center; padding: 4px;background-color: #f0f0f0;">
          <span style="font-size: 12px;">Prism</span>
        </th>
        <th colspan="3" width="800" style="text-align: center; padding: 4px;background-color: #f0f0f0;">
          <span style="font-size: 12px;">Axis</span>
        </th>
        <th colspan="3" width="800" style="text-align: center; padding: 4px;background-color: #f0f0f0;">
          <span style="font-size: 12px;">Add</span>
        </th>
        <th colspan="3" width="800" style="text-align: center; padding: 4px;background-color: #f0f0f0;">
          <span style="font-size: 12px;">Direction</span>
        </th>
        <th colspan="3" width="800" style="text-align: center; padding: 4px;background-color: #f0f0f0;">
          <span style="font-size: 12px;">Pupillary</span>
        </th>
      </thead>

      <tr>
        <th colspan="3" style="padding:4px;font-size: 11px;text-align: center; background-color: #f0f0f0;">Right Eye</th>
        <td colspan="3" style="height: 10px; color: #666666; text-align: center;">
          <div style="color: #e09600;font-size: 12px;"><?php echo $data->RIGHT_SPHERE;?>
        </td>
        <td colspan="3" style="height: 10px; color: #666666; text-align: center;">
          <div style="color: #e09600;font-size: 12px;"><?php echo $data->RIGHT_CYLINDER;?></div>
        </td>
        <td colspan="3" style="height: 10px; color: #666666; text-align: center;">
          <div style="color: #e09600;font-size: 12px;"><?php echo $data->RIGHT_PRISM;?></div>
        </td>
        <td colspan="3" style="height: 10px; color: #666666; text-align: center;">
          <div style="color: #e09600;font-size: 12px;"><?php echo $data->RIGHT_AXIS;?></div>
        </td>
        <td colspan="3" style="height: 10px; color: #666666; text-align: center;">
          <div style="color: #e09600;font-size: 12px;"><?php echo $data->RIGHT_ADD;?></div>
        </td>
        <td colspan="3" style="height: 10px; color: #666666; text-align: center;">
          <div style="color: #e09600;font-size: 12px;"><?php echo $data->RIGHT_DIRECTION;?></div>
        </td>
        <!--<td colspan="3" style="height: 10px; color: #666666; text-align: center;">-->
        <!--  <div style="color: #e09600;font-size: 12px;"><?php echo $data->RIGHT_PUPILLARY;?></div>-->
        <!--</td>-->
      </tr>

      <tr>
        <th colspan="3" style="padding:4px;font-size: 11px;text-align: center; background-color: #f0f0f0;">Left Eye</th>
        <td colspan="3" style="height: 10px; color: #666666; text-align: center;">
          <div style="color: #e09600;font-size: 12px;"><?php echo $data->LEFT_SPHERE;?>
        </td>
        <td colspan="3" style="height: 10px; color: #666666; text-align: center;">
          <div style="color: #e09600;font-size: 12px;"><?php echo $data->LEFT_CYLINDER;?></div>
        </td>
        <td colspan="3" style="height: 10px; color: #666666; text-align: center;">
          <div style="color: #e09600;font-size: 12px;"><?php echo $data->LEFT_PRISM;?></div>
        </td>
        <td colspan="3" style="height: 10px; color: #666666; text-align: center;">
          <div style="color: #e09600;font-size: 12px;"><?php echo $data->LEFT_AXIS;?></div>
        </td>
        <td colspan="3" style="height: 10px; color: #666666; text-align: center;">
          <div style="color: #e09600;font-size: 12px;"><?php echo $data->LEFT_ADD;?></div>
        </td>
        <td colspan="3" style="height: 10px; color: #666666; text-align: center;">
          <div style="color: #e09600;font-size: 12px;"><?php echo $data->LEFT_DIRECTION;?></div>
        </td>
        <!--<td colspan="3" style="height: 10px; color: #666666; text-align: center;">-->
        <!--  <div style="color: #e09600;font-size: 12px;"><?php echo $data->LEFT_PUPILLARY;?></div>-->
        <!--</td>-->
      </tr>
    </table>
    <hr>
<?php endforeach; ?>


</body>

