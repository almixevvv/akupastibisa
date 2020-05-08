<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/cms/cssupload/normalize.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/cms/cssupload//demo.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/cms/cssupload//component.css" />

<?php echo form_open_multipart('Terms_cms/updateTerms');?>
<?php foreach($terms->result() as $data): ?>

<!-- HEADER -->
<div class="modal-header" style="background-color: orange;padding: 0.2rem;">
  <p style="color: white;margin-top: 0.5em; margin-left: 0.5em; font-size: 20px; font-weight: bold;">Edit File Measurements</p>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

  <!-- Edit Margin -->
<div class="modal-body" style="font-size: 14px;">
  <div class="row" style=" margin-bottom: 1em;">
    <div class="col-lg-6">
    	<label style="width: 7em;font-weight: bold;">Document ID</label>
      <input type="hidden" name="terms_id" value="<?php echo $data->DOCUMENT_ID;?>" />
    	<label style="margin-left: 4em;font-weight: bold;">:</label>

    </div>
    <div class="col-lg-6" style="margin-left: -4em;">
      <?php echo $data->DOCUMENT_ID;?>

    </div>
  </div> 

  <div class="row" style=" margin-bottom: 1em;">
    <div class="col-lg-6">
      <label style="width: 7em;font-weight: bold;">Title</label>
      <label style="margin-left: 4em;font-weight: bold;">:</label>

    </div>
    <div class="col-lg-6" style="margin-left: -4em;">
      <?php echo $data->TITLE;?>

    </div>
  </div>

  <div class="row" style=" margin-bottom: 1em;">
    <div class="col-lg-6">
      <label style="width: 7em;font-weight: bold;">Description</label>
      <label style="margin-left: 4em;font-weight: bold;">:</label>

    </div>
    <div class="col-lg-6" style="margin-left: -4em; ">
      <textarea style="height: 10em; width: 18em;"><?php echo $data->TITLE?></textarea>

    </div>
  </div>

  <!-- <div class="row" style=" margin-bottom: 1em;">
    <div class="col-lg-6">
      <label style="width: 7em;font-weight: bold;">Upload File</label>
      <label style="margin-left: 4em;font-weight: bold;">:</label>

    </div>
    <div class="col-lg-6" style="margin-left: -4em;">
      <input type="file" name="file_name" id="file-1" style="display: none;" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple />
          <label for="file-1" style="font-size: 12px;"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Choose PDF File&hellip;</span></label>

    </div>
  </div> -->
</div>

<div class="modal-footer">
  <button type="submit" class="btn btn-default btn-info">Save</button>
  <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
</div>

<?php endforeach; ?>
<?php echo form_close();?>


<script src="<?php echo base_url();?>/assets/cms/cssupload/custom-file-input.js"></script>
