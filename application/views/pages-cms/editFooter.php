<form action="<?php echo base_url('EditFooter/editFooter');?>" method="POST">

	<div style="margin-left:3em; margin-right: 3em; margin-top: 1em;">

		<div class="form-group row">

			<div class="col-md-12">

				<div class="row">

					<label class="col-md-2 col-form-label" style="font-weight: bold;">Document ID</label>

					<!-- <input type="hidden" name="id" value="<?php echo $REC_ID?>"> -->

					<input type="text" name="footer_id" class="form-control col-md-10" value="<?php echo $DOCUMENT_ID?>">

				</div>

			</div>   

		</div>

		<div class="form-group row">

			<div class="col-md-12">

				<div class="row">

					<label class="col-md-2 col-form-label" style="font-weight: bold;">Title</label>

					<input type="text" name="footer_title" class="form-control col-md-10" value="<?php echo $TITLE?>">

				</div>

			</div>   

		</div>

		<div class="form-group row">

			<div class="col-md-12">

				<div class="row">

					<label class="col-md-2 col-form-label" style="font-weight: bold;">Description</label>

					<textarea name="footer_desc" class="form-control col-md-10" style="height: 30em; width:66.8em;"><?php echo $DESCRIPTION?></textarea>

				</div>

			</div>   

		</div>

	</div>

	<div style="margin-left: 3em; margin-top: 3em;">

		<input type="hidden" id="hiddenBatch" name="hiddenBatch" value="<?php echo $this->input->get('id'); ?>">

		<button type="submit" class="btn btn-default btn-info">Save</button>

		<button type="button" class="btn btn-outline-danger" onclick="location.href='<?php echo base_url('cms/footer');?>'">Close</button>	

	</div>

</form>





<script src="<?= base_url('assets/tinymce/js/tinymce/tinymce.min.js')?>"></script>

<script>tinymce.init({selector:'textarea'});</script>

