<ul class="sidebar navbar-nav" style="background-color: #6e6e6e;" >

  <li class="nav-item active" style="margin-bottom: -1em;">
    <a class="nav-link" href="<?php echo base_url('cms/dashboard'); ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <?php

  
    $sql ="SELECT DISTINCT c.ID, c.NAME, c.DESCRIPTION AS ICON
           FROM s_group_appl a
           INNER JOIN s_appl b ON a.APPL_ID = b.ID
           INNER JOIN s_appl_group c ON b.APPL_GROUP_ID = c.ID
           WHERE a.GROUP_ID = '".$this->session->userdata('GROUP_ID')."'
           ORDER BY c.ORDER_NO";

    $i = 1;

    $query = $this->db->query($sql);
    foreach($query->result() as $data):
  ?>
  <?php
    //SECOND QUERY TO CHECK IF THERE'S ANY CHILD MENU
    $sql2 ="SELECT DISTINCT *
            FROM s_group_appl a
            INNER JOIN s_appl b ON a.APPL_ID = b.ID
            WHERE a.GROUP_ID='".$this->session->userdata('GROUP_ID')."'
            AND APPL_GROUP_ID='".$data->ID."'
            AND b.LINK<>''
            ORDER BY ORDER_NO";

    $query2 = $this->db->query($sql2);
    $total_rows = $query2->num_rows();
  ?>
    <li class="nav-item active" style="margin-bottom: -1em; "> 
      <a class="nav-link" href="#<?php echo $data->ID; ?>" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="<?php echo $data->ID; ?>">
        <i class="<?php echo $data->ICON; ?>"></i>
        <span><?php echo $data->NAME; ?></span>
      </a>
      <!-- Start query for submenu -->
      <?php foreach($query2->result() as $data2): ?>
        <div class="collapse" id="<?php echo $data2->APPL_GROUP_ID; ?>">
          <ul style="padding-left: 15px!important; list-style: none;">
            <li class="nav-item active" style="margin-top: -1em;">
              <a class="nav-link" href="<?php echo base_url('cms/'.$data2->LINK); ?>">
                <i class='<?php echo $data2->DESCRIPTION;?>'></i>
                <span><?php echo $data2->NAME; ?></span>
              </a>
            </li>
          </ul>
        </div>
      <?php endforeach; ?>
    </li>
  <?php endforeach; ?>
</ul>
