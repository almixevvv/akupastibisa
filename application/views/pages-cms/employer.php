<script>

function module_action(action, id){

	document.form_action.target='_self';

	document.form_action.id.value=id;

	var path='<?php echo base_url('form_employer_cms?id=');?>';

	var path2='<?php echo base_url('form_employer_cms/delete/');?>';

	var path3='<?php echo base_url('form_employer_addlots_cms?id=');?>';

	switch (action) {

		case 'UPDATE':

			tb_show('', 'blank.php?keepThis=true&TB_iframe=true&height=500&width=600&modal=true');

			document.form_action.target='TB_iframeContent';		

			document.form_action.action=path+document.form_action.id.value;		

			break;

		case 'DELETE':

			if (confirm('Please confirm deleting data')==false){ return false;}	

			document.form_action.action=path2+'/'+document.form_action.id.value;

			break;

		case 'ADDLOTS':

			tb_show('', 'blank.php?keepThis=true&TB_iframe=true&height=500&width=600&modal=true');

			document.form_action.target='TB_iframeContent';		

			document.form_action.action=path3+document.form_action.id.value;		

			break;	

							

	}

	document.form_action.submit();

}

function printData()

{

   var divToPrint=document.getElementById("subscription_table1");

   newWin= window.open();

   newWin.document.write(divToPrint.outerHTML);

   newWin.print();

   newWin.close();

}



</script> 

				

<style type="text/css">

	.form-group{

		padding:0px;

	}

	.paddingleft0{

		padding-left:0px;

	}

	.paddingright0{

		padding-right:0px;

	}

	.paddingleft35{

		padding-left:35px;

	}

</style>	

		<!-- start: Content -->

		<div class="main" style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif">

		

    <form name="form_action" method="post">

          <input type="hidden" name="id" value=""  />

        </form>        

                                       





	<div class="row">

		<div class="col-lg-6"><a id="add" href="#"><span class="glyphicon glyphicon-plus"></span>Add</a></div>

				<div class="col-lg-6" style="text-align: right; color: blue;">



				<?php

					if($this->session->userdata('success'))

					{

				?>

						<span> Add Success</span> <span class="glyphicon glyphicon-ok"></span>

				<?php

					}

					

					$this->session->unset_userdata('success');

				?>

				</div>

				<div class="col-lg-12" id="tabel">

					<div class="panel panel-default">

						<div class="panel-heading" data-original-title>

							<h2><span class="break"></span>Member</h2>

						

						</div>

						<div class="panel-body">

						    	<form action="<?php echo base_url();?>CMS/employer" method="post">

						    	    <span style="float: left; font-size:11px;padding-top:5px;">Join Date :&nbsp; </span>

							<input type="date" name="search" class="form-control" style="width:15%;float: left;" value="<?php echo @$date;?>"> <label style="float: left; font-size:20px;">&nbsp;-&nbsp; </label> 

							<input type="date" name="dateto" class="form-control" style="width:15%;float: left;" value="<?php echo @$dateto;?>">&nbsp;

							&nbsp;<input type="submit" value="Find" class="btn btn-success" style="margin-left:10px;margin-right:10px;float:left;">&nbsp;

						       <!--buttom class="btn btn-warning" style="float:left;" onclick="printData();">Print</buttom-->

						       <!--<a href="<?php echo base_url(); ?>Employer_cms/export_print?search=<?php echo @$date;?>&dateto=<?php echo @$dateto;?>" target="_blank" class="btn btn-warning">Print</a> -->

						       <!--a href="javascript:window.open();">Print</a-->

						</form>	

						

						<br style="clear: both;">

							<table id="subscription_table" name="subscription_table" class="table table-striped table-bordered bootstrap-datatable datatable" style="clear: both;">

							  <thead>

								  <tr>

									  <th>Info Member</th>

									  <th>Detail Member</th>

									  <th>Profile Image</th>

									  <th>Bank Account</th>

									  <th width="20%">Detail Downline</th>

									  <th>Info Transaction</th>

									  <th>Action</th>

								  </tr>

							  </thead>   

							  <tbody>

								<?php

								$n = 0;

									foreach($employer->result() as $emp){

										$idEmp = $emp->id_job_seeker;

										$name = $emp->first_name." ".$emp->last_name;

										$username = $emp->username;

										

										$birth_date = $emp->birth_date;

										$gender=$emp->gender;

										$address = $emp->address;

										$phone = $emp->phone_number;

										$email = $emp->email;

										$type = $emp->mem_type;

										$group = $emp->mem_group;

										$image=$emp->image_profile;

										$id_country=$emp->id_country;

										

										$verify=$emp->verify;

										if($verify =="1"){ $verify="<span style='color:green;'><u>VERIFIED</u></span>"; }

										else if($verify =="0"){ $verify="<span style='color:red;'><u>NOT VERIFIED</u></span>"; }

										$status=$emp->status;

										if($status =="NEW"){ $status="<span style='color:orange;font-weight:bold;'>NEW / NOT ACTIVE</span>"; }

										else if($status =="ACTIVE"){ $status="<span style='color:green;font-weight:bold;'>ACTIVE</span>"; }

										else if($status =="NONACTIVE"){ $status="<span style='color:red;font-weight:bold;'>BLOCKED</span>"; }

										

										$account_name=$emp->account_name;

										$card_number=$emp->id_card_number;

										$no_rec=$emp->no_rec;

										$npwp=$emp->npwp;

										$bank=$emp->bank_name;

										$join_date=$emp->join_date;

										

										$sponsor=$emp->sponsor;

										if($sponsor ==""){ $sponsor="bitrexgo"; }

										$status_payment=$emp->status_payment;

										$id_forex=$emp->id_bitcontinental;

										$id_crypto=$emp->user_crypto;

										if($id_forex == 0 OR $id_forex == NULL OR empty($id_forex)){

											$id_forex = "- empty";

										}

										if($id_crypto == 0 OR $id_crypto == NULL OR empty($id_crypto)){

											$id_crypto = "- empty";

										}

										

										if($image == ""){$image = "logo.png";}else{ $image = "image_profile/".$image;}

										echo "<tr>"; ?>

												<td width="200px" >

													<p style='line-height:20px;'>	

														<b>ID Member : <?php echo $idEmp;?> </b><br>

														<!--<b>ID Forex : <span style="color:red;"><?php echo $id_forex;?></span></b> <br>-->

														<!--<b>ID Crypto : <span style="color:blue;"><?php echo $id_crypto;?></span></b> <br>-->

														<b>Username : <?php echo $username;?></b> <br>

														<b>Sponsor : <span style="color:blue;"><?php echo $sponsor;?></span></b> <br>

														<b>Email : </b><?php echo $email;?><br>

														<b>Email Verified : </b><?php echo $verify;?><br>

														<b>Status Member : </b><?php echo $status;?><br>

														<b>Type : </b><?php echo $type;?><br>

														<b>Group : </b><?php echo $group;?><br>

													</p>

												</td>

												<td width="200px" >

													<p style='line-height:20px;'>	

														<b>NIK/KTP : </b><?php echo $card_number;?><br>

														<b>Name : </b><?php echo $name;?> <br>

														<b>Birth Date : </b><?php echo $birth_date;?><br>

														<b>Address : </b><?php echo $address;?><br>

														<b>Phone : </b><?php echo $phone;?><br>

														<b>NPWP : </b><?php echo $npwp;?><br>

														<b>Join Date : </b><?php echo $join_date;?><br>

													</p>

												</td>

												<td width='160px'>

												<?php	

												// if (file_exists(base_url().'assets/img/'.$image)) { 

												// 	echo "<img width='150px' src='".base_url()."assets/img/image_profile/".$image."'></img>"; 

												// }else{

													echo "<img width='150px' src='".base_url()."assets/img/".$image."'></img>";                  

												// }

												?>

												</td>

												<td >

													<p style='line-height:20px;'>	

														<b>Account Name : </b><?php echo strtoupper($account_name);?> <br>

														<b>No Rec : </b><?php echo $no_rec;?> <br>

														<b>BANK : </b><?php echo strtoupper($bank);?> <br>

													</p>

												</td>

												<td>

													<?php 

														$sql1="SELECT (select CONCAT(first_name,' ',last_name) from g_employer where id_job_seeker=a.downlineleft) as name_downlineleft ,(select CONCAT(first_name,' ',last_name) from g_employer where id_job_seeker=a.downlinemid) as name_downlinemid,(select CONCAT(first_name,' ',last_name)

														        from g_employer where id_job_seeker=a.downlineright) as name_downlineright,(select CONCAT(first_name,' ',last_name) from g_employer

														        where id_job_seeker=a.uplineid) as name_upline,uplineside  FROM `chain` as a where a.userid='".$idEmp."' ";

															

														$num=$this->db->query($sql1)->num_rows();

														

														if($num >0){

															$rsql=$this->db->query($sql1)->result();

															if($rsql[0]->uplineside == "L"){

																$uplineside = "LEFT";

															}else if($rsql[0]->uplineside == "M"){

																$uplineside = "MIDDLE";

															}else {

																$uplineside = "RIGHT";

															}

															?>

															<p style='line-height:20px;'>	

																<b>Upline Side: </b><?php echo $rsql[0]->name_upline;?> <br>

																<b>Member Side : </b><u style='color:#ff1111;'><?php echo $uplineside;?></u><br/>

																<b>Downline Left : </b><?php echo $rsql[0]->name_downlineleft;?> <br>

																<b>Downline Mid : </b><?php echo $rsql[0]->name_downlinemid;?> <br>

																<b>Downline Right : </b><?php echo $rsql[0]->name_downlineright;?> <br>

															</p>

															<?php

														}

														else{

															?>

															<p style='line-height:20px;'>	

																<b>Upline Side : </b> - <br>

																<b>Upline Side : </b> - <br>

																<b>Downline Left : </b> - <br>

																<b>Downline Mid : </b> - <br>

																<b>Downline Right : </b> - <br>

															</p>

															<?php

														}



													?>

												 

												</td>

												<td >

													<?php 

														$qrty = "SELECT 

														count(TRANS_NO) JMLALL,

														(SELECT count(TRANS_NO) FROM g_transaction where MEMBER_ID='$idEmp' AND STATUS='NEW') JML_NEW,

														(SELECT count(TRANS_NO) FROM g_transaction where MEMBER_ID='$idEmp' AND STATUS='CANCEL') JML_CANCEL,

														(SELECT count(TRANS_NO) FROM g_transaction where MEMBER_ID='$idEmp' AND STATUS='PAID') JML_PAID,

														(SELECT count(TRANS_NO) FROM g_transaction where MEMBER_ID='$idEmp' AND STATUS='CONFIRM PAYMENT') JML_CONFIRM

														 FROM g_transaction where MEMBER_ID='$idEmp' ";

														$rqrty = $this->db->query($qrty)->result();

													?>

													<p style='line-height:20px;'>	

														<b>NEW : </b><?php echo $rqrty[0]->JML_NEW;?> <br>

														<b>Confirm Payment : </b><?php echo $rqrty[0]->JML_CONFIRM;?> <br>

														<b>PAID : </b><?php echo $rqrty[0]->JML_PAID;?> <br>

														<b>Canceled : </b><?php echo $rqrty[0]->JML_CANCEL;?> <br>

														<b>Total : </b><?php echo $rqrty[0]->JMLALL;?> <br>

													</p>

												</td>

												<td>

												  	<input type="text" id="status<?php echo $n;?>" style="display: none;" value="<?php echo $status;?>">

													<input type="text" id="m_id<?php echo $n;?>" style="display: none;" value="<?php echo $idEmp;?>">

												  	

												  	<?php $ROLE = $this->session->userdata("user_group");

												  	if($ROLE != "FINANCE"){ ?> 

												  	<button type="button" class="btn btn-info" title="Edit info member" onclick="module_action('UPDATE','<?php echo $idEmp;?>');" style="width: 80px;">Edit</button><br>

												  	<button type="button" class="btn btn-warning" disabled title="Delete this member" onclick="module_action('DELETE','<?php echo $idEmp;?>');" style="width: 80px;">Delete</button><br>



												  	<button type="button" id="btnActive<?php echo $n;?>" class="btn btn-success" style="display: none;width: 80px;" title="Set to Active" >Active</button>

													<button type="button" id="btnNonActive<?php echo $n;?>" class="btn btn-danger" style="display: none;width: 80px;" title="Set to Non-Active" >Block</button>

												  	<?php } ?>

													

													<!-- <button type="button" id="btnAddLots<?php echo $n;?>"  onclick="module_action('ADDLOTS','<?php echo $idEmp;?>');" class="btn btn-default" style="width: 80px;display: block;" title="Manually add Lots values" >Add Lot</button> -->

	                                            </td>

                                            <?php



										echo "</tr>";

											$n++;

									}

								?>

								

						

								

							  </tbody>

						  </table>  

						  

						</div>

					</div>

				</div><!--/col-->





				<div class="col-lg-12" style="margin-top: 5px; display: none; padding-left:50px;padding-right: 50px;" id="form">

					<?php echo form_open_multipart('Employer_cms/add');?>

                    

                    <div class="form-group col-lg-12">

                    	<div class=" col-md-6 paddingleft0 paddingright0">

                    		<div class="col-sm-3 paddingleft0" >First Name</div>

							<div class="col-sm-9 paddingleft0">

								<input type="text" name="first_Name" id="tags" class="form-control" required/>                  							

								<input type="hidden" name="corporate_id" id="corporate_id" class="form-control" />

							</div>

                    	</div>

                    	<div class=" col-md-6 paddingleft0 paddingright0">

                    		<div class="col-sm-3 paddingleft0">Last Name</div>

							<div class="col-sm-9 paddingleft0">

								<input type="text" name="last_name" id="tags" class="form-control" required/>                  							

								<input type="hidden" name="corporate_id" id="corporate_id" class="form-control" />

							</div>

                    	</div>

						

					</div>                    

                    <br/>



                    <div class="form-group col-lg-12">

                    	<div class="col-md-12">

                    		<div class="col-sm-1">Date</div>

							<div class="col-sm-11 paddingleft35 paddingright0">

								<input type="date" name="birth_date" id="tags" class="form-control" required/>                  							

								<input type="hidden" name="corporate_id" id="corporate_id" class="form-control" />

							</div>

                    	</div>

						

					</div>                    

                    <br/>

                     <div class="form-group col-lg-12">

                      	<div class='col-md-12'>

                      		<div class="col-sm-1">ID Card Number</div>

							<div class="col-sm-11 paddingleft35 paddingright0">

							<input type="text" name="id_card_numberrd" class="form-control" required>

							</div>

                      	</div>

						

					</div>                    

                    <br/>

                      <div class="form-group col-lg-12">

                      	<div class='col-md-12'>

                      		<div class="col-sm-1">Bank</div>

							<div class="col-sm-11 paddingleft35 paddingright0">

							<select name="bank_name" class="form-control" required>

								<option value=''>- bank -</option>

								<option value='BCA'>BCA</option>

								<option value='Male'>BRI</option>

							</select>



							</div>

                      	</div>

						

					</div>                    

                    <br/> 

                    <div class="form-group col-lg-12">

                      	<div class='col-md-12'>

                      		<div class="col-sm-1">Account Name</div>

							<div class="col-sm-11 paddingleft35 paddingright0">

							<input type="text" name="account_name" class="form-control" required>

							</div>

                      	</div>

						

					</div>                    

                    <br/>  

                    <div class="form-group col-lg-12">

                      	<div class='col-md-12'>

                      		<div class="col-sm-1">Account Number</div>

							<div class="col-sm-11 paddingleft35 paddingright0">

							<input type="text" name="no_rec" class="form-control" required>

							</div>

                      	</div>

						

					</div> 

					 <div class="form-group col-lg-12">

                      	<div class='col-md-12'>

                      		<div class="col-sm-1">NPWP</div>

							<div class="col-sm-11 paddingleft35 paddingright0">

							<input type="text" name="npwp" class="form-control" required>

							</div>

                      	</div>

						

					</div>                    

                    <br/>

                    <div class="form-group col-lg-12">

                      	<div class='col-md-12'>

                      		<div class="col-sm-1">Gender</div>

							<div class="col-sm-11 paddingleft35 paddingright0">

							<select name="gender" class="form-control" required>

								<option value=''>- Gender -</option>

								<option value='Female'>Female</option>

								<option value='Male'>Male</option>

							</select>



							</div>

                      	</div>

						

					</div>                    

                    <br/>

                    <div class="form-group col-lg-12">

                      	<div class='col-md-12'>

                      		<div class="col-sm-1">Address</div>

							<div class="col-sm-11 paddingleft35 paddingright0">

							<textarea class='form-control' name='address' required></textarea>

							</div>

                      	</div>

						

					</div>                    

                    <br/>

                    <div class="form-group col-lg-12">

                      	<div class='col-md-12'>

                      		<div class="col-sm-1">Phone</div>

							<div class="col-sm-11 paddingleft35 paddingright0">

							<input type="text" name="phone_number" class="form-control" required>

							</div>

                      	</div>

						

					</div>                    

                    <br/>



                       <div class="form-group col-lg-12">

                      	<div class='col-md-12'>

                      		<div class="col-sm-1">Email</div>

							<div class="col-sm-11 paddingleft35 paddingright0">

							<input type="email" name="email" class="form-control" required>

							</div>

                      	</div>

						

					</div>                    

                    <br/>

                    <div class="form-group col-lg-12">

                      	<div class='col-md-12'>

                      		<div class="col-sm-1">Username</div>

							<div class="col-sm-11 paddingleft35 paddingright0">

								 <span style="float: right;color:green;font-size: 13px;font-weight: bold;display: none;" id="usernamenotexist"><i>Username bisa digunakan.</i></span>

							    <span style="float: right;color:red;font-size: 13px;font-weight: bold;display: none;" id="usernameexist"><i>Username telah digunakan!</i></span>

							<input type="text" name="username" class="form-control" id="username" required>

							</div>

                      	</div>

						

					</div>                    

                    <br/>

                       <div class="form-group col-lg-12">

                      	<div class='col-md-12'>

                      		<div class="col-sm-1">Type</div>

							<div class="col-sm-11 paddingleft35 paddingright0">

							<select name="type_member" class="form-control" required>

								<option value=''>- Type -</option>

								<option value='PLATINUM'>Platinum</option>

								<option value='FLEET'>Fleet</option>

							</select>



							</div>

                      	</div>

						

					</div>                    

                    <br/>

                      <div class="form-group col-lg-12">

                      	<div class='col-md-12'>

                      		<div class="col-sm-1">Password</div>

							<div class="col-sm-11 paddingleft35 paddingright0">

							<input type="password" name="password" class="form-control" required>

							</div>

                      	</div>

						

					</div>                    

                    <br/>

 					<div class="form-group col-lg-12">

                      	<div class='col-md-12'>

                      		<div class="col-sm-1"> Confirm Password</div>

							<div class="col-sm-11 paddingleft35 paddingright0">

							<input type="password" name="confirm_password" class="form-control" required>

							</div>

                      	</div>

						

					</div>   



                    <br/>



                    		  <div class="form-group col-lg-12">

								<!-- update bsok -->

							    <label for="k_password">Foto Profile:</label>

								

								<?php

									if(!empty($id))

									{

								?>

										<div class="col-lg-4 col-xs-12 col-sm-4">

											<img src="assets/img/image_profile/<?php echo $img;?>" id="preview" style="width: 100%; margin-bottom: 10px;">

										</div>

										<input type="file" id="f_profile2" name="f_profile2" accept="image/*"  onchange="tampilkanPreview(this,'preview')"/><br />

								<?php 

									} 

									else

									{

								?>

										<div class="col-lg-4 col-xs-12 col-sm-4">

											<img src="assets/img/no-image.png" id="preview" style="width: 100%; margin-bottom: 10px;">

										</div>									

										<input type="file" id="f_profile" name="f_profile" accept="image/*"  onchange="tampilkanPreview(this,'preview')"/><br />

								<?php

									}

								?>

								<span style="font-size: 12px; color: red;">minimal size image 80kb &nbsp;<span class="glyphicon glyphicon-exclamation-sign"></span></span>

								<hr style="margin-top: 35px;" />



							  </div>

							  <br>

                   



					<div class="form-group col-lg-12">

						<div class="col-sm-6"></div>

						<div class="col-sm-2">

							<a id="cancel" class="btn btn-primary col-xs-12" style="margin-bottom: 10px;">Cancel</a>

						</div>

						<div class="col-sm-2">

							<button class="btn btn-primary col-xs-12" id="signup" disabled style="margin-bottom: 10px;">Add</button>

						</div>

					</div>

					<?php echo form_close();?>

				</div>



</div>

<script>

// Looping function for Button Active /Non-Active and Update Status

<?php for($i=0;$i<=$n;$i++) {?>

	if($("#status<?php echo$i;?>").val() == 0){

		$("#btnNonActive<?php echo$i;?>").hide();

		$("#btnActive<?php echo$i;?>").show();

	}else{

		$("#btnNonActive<?php echo$i;?>").show();

		$("#btnActive<?php echo$i;?>").hide();

	}

	$("#btnNonActive<?php echo$i;?>").click(function() {

		var status = $("#status<?php echo $i;?>").val();

		var m_id = $("#m_id<?php echo $i;?>").val();

		var data = m_id+"||||"+status;

		if(status == "NONACTIVE"){

			new_status = "Active" ;

		}else{

			new_status ="NONACTIVE" ;

		}

		$.ajax({

			url: '<?php echo base_url();?>form_employer_cms/status',

			type: 'POST',

			data: "data="+data,

			success: function(html) {

				$("#status<?php echo$i;?>").val(new_status);

				$("#btnNonActive<?php echo$i;?>").hide();

				$("#btnActive<?php echo$i;?>").show();

			}

		});

	});

	$("#btnActive<?=$i;?>").click(function() {

		var status = $("#status<?php echo $i;?>").val();

		var m_id = $("#m_id<?php echo $i;?>").val();

		var data = m_id+"||||"+status;

		if(status == "NONACTIVE"){

			new_status = "Active" ;

		}else{

			new_status ="NONACTIVE" ;

		}

		$.ajax({

			url: '<?php echo base_url();?>Form_employer_cms/status',

			type: 'POST',

			data: "data="+data,

			success: function(html) {

				$("#status<?php echo $i;?>").val(new_status);

				$("#btnNonActive<?php echo $i;?>").show();

				$("#btnActive<?php echo $i;?>").hide();

			}

		});

	});

<?php } ;?>

</script>

<!-- end content -->

<script type="text/javascript">

		$(document).ready(function(){

		$("#add").click(function(){

			$("#form").slideDown(1000);

			$("#tabel").slideUp(900);

			$("#add").slideUp(900);

		});

		$("#cancel").click(function(){

			$("#form").slideUp(1000);

			$("#tabel").slideDown(900);

			$("#add").slideDown(900);

		});



			$(document).on("keyup","#username", function()   {    

		var username = document.getElementById("username").value;

		jQuery.ajax({

			url: "<?php echo base_url('Employer_cms/CheckUsername');?>",

			type: 'POST',

			data: 'username='+username,

			success: function(html,data) {

				if(data == "success"){

					if(html == 0){

						document.getElementById("usernameexist").style.display = 'none';

						document.getElementById("usernamenotexist").style.display = 'inline-block';

						$("#signup").prop('disabled',false);

					}else{

						document.getElementById("usernameexist").style.display = 'inline-block';

						document.getElementById("usernamenotexist").style.display = 'none';

						$("#signup").prop('disabled',true);

						

					}

				}



				if(username == ""){

					document.getElementById("usernameexist").style.display = 'none';

					document.getElementById("usernamenotexist").style.display = 'none';

					$("#signup").prop('disabled',true);

				}

			}

		});

	});

	});

</script>

<script>

    function tampilkanPreview(gambar,idpreview){

//                membuat objek gambar

        var gb = gambar.files;

        

//                loop untuk merender gambar

        for (var i = 0; i < gb.length; i++){

//                    bikin variabel

            var gbPreview = gb[i];

            var imageType = /image.*/;

            var preview=document.getElementById(idpreview);            

            var reader = new FileReader();

            

            if (gbPreview.type.match(imageType)) {

//                        jika tipe data sesuai

                preview.file = gbPreview;

                reader.onload = (function(element) { 

                    return function(e) { 

                        element.src = e.target.result; 

                    }; 

                })(preview);



//                    membaca data URL gambar

                reader.readAsDataURL(gbPreview);

            }else{

//                        jika tipe data tidak sesuai

                alert("Type file tidak sesuai. Khusus image.");

            }

           

        }    

    }

</script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">

 