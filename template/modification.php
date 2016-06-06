<?php
	require_once('/home/git/Desktop/businessDirectory/api/config.php');
 	require_once(SITE_URI . '/template/header.php');
  	require_once(SITE_URI . '/api/functions.php');
  	$organization_type = array("Ընտրել", "Սահմանափակ պատասխանատվությամբ ընկերություն", "Պետական (իշխ.տեղ.մարմ.) ձեռնարկություն", "Պետական ոչ առևտրային կազմակերպություն", "Փակ բաժնետիրական ընկերություն", "Բաց բաժնետիրական ընկերություն", "Պետական կառավարչական հիմնարկ", "Հասարակական կազմակերպություն", "Բյուջետային ձեռնարկություն", "Անհատական ձեռնարկություն", "Ֆինանսական հաստատություն", "Դուստր ձեռնարկություն", "Արտադրական կոոպերատիվ", "Անհատ ձեռնարկատեր", "Հիմնադրամ");
  	$activity_type = array("Ընտրել", "Շինարարություն", "Ծառայություն", "Արտադրություն", "Առևտուր");
  	$region = array("Ընտրել", "Ստեփանակերտ","Մարտունի", "Մարտակերտ", "Ասկերան", "Շուշի", "Շահումյան", "Քաշաթաղ", "Հադրութ");
 	$organization = view();

	if($organization == NULL){
		$action = "Add";
	} else {
		$action = "Update";
	}
?>
<section id="edit">
			<div class="row">
				<div class="col-md-2"> </div>
				<div class="col-md-8 registrForm">
					<h5>Կազմակերպության տվյալներ</h5>
					<form class="form-horizontal" action="<?php echo  SITE_URL.'/template/modification.php' ?>" method="get" id="formId">
						 <div class="form-group">
						    <label for="number" class="col-md-6 control-label">ՀՎՀՀ*</label>
							    <div class="col-md-6">
							      <input type="text" class="form-control" id="inputId" name="number" pattern="[0-9]{6,8}" onkeypress="if(isNaN( String.fromCharCode(event.keyCode) )) return false;" required="" value="<?php echo $organization['number']; ?>">
							    </div>
						  </div>
 						 <div class="form-group">
						    <label for="inputName" class="col-md-6 control-label">Կազմակերպության անվանում*</label>
							    <div class="col-md-6">
							      <input type="text" class="form-control" id="inputName" name="name" required="" value="<?php echo $organization['name']; ?>">
							    </div>
						  </div>
						 <div class="form-group">
						    <label for="sel1" class="col-md-6 control-label">Կազմակերպաիրավական տեսակ*</label>
  							<select class="col-md-6 form-control" style="width: 29.7%" id="sel1" name="inputType" required="">
  							<?php 
  							 	foreach($organization_type as $type_key => $type_value) {
  							 		$selected = ($organization['type'] == $type_value) ? ' selected': '';
  							 		echo '<option' . $selected . '>' . $type_value . '</option>';
  								}
  							?>
							</select>
						</div>
								
							<div class="form-group">
						   	 	 <label for="sel2" class="col-md-6 control-label">Գործնեության ոլորտ*</label>
  									<select class="col-md-6 form-control" style="width: 29.7%" id="sel2" name="inputActivityType" required="">
										<?php 
			  							 	foreach($activity_type as $type_key => $type_value) {
			  							 		$selected = ($organization['details'] == $type_value) ? ' selected':'';
			  									echo '<option' . $selected . '>' . $type_value . '</option>';
			  								}
			  							?>
									</select>
						 	 </div>
							<div class="form-group">
						   		 <label for="sel3" class="col-md-6 control-label">Համայնք*</label>
  									<select class="col-md-6 form-control" style="width: 29.7%" id="sel3" name="inputRegion" required="">
										<?php 
			  							 	foreach($region as $type_key => $type_value) {
			  									$selected = ($organization['region'] == $type_value) ? ' selected':'';
			  									echo '<option' . $selected . '>' . $type_value . '</option>';
			  								}
			  							?>
									</select>
						 	 </div>

							 <div class="form-group">
						   		 <label for="sel4" class="col-md-6 control-label">Գործնեություն</label>
							   		 <div class="col-md-6">
							     		 <input type="text" class="form-control" id="sel4" name="inputAct" value="<?php echo $organization['activity']; ?>">
							   		 </div>
						 	 </div>

							 <div class="form-group">
						   		 <label for="inputAddress" class="col-md-6 control-label">Հասցե</label>
							   		 <div class="col-md-6">
							     		 <input type="text" class="form-control" id="inputAddress" name="inputAddress" value="<?php echo $organization['address']; ?>">
							   		 </div>
						 	 </div>

							 <div class="form-group">
						   		 <label for="inputWeb" class="col-md-6 control-label">Վեբ֊կայք</label>
							   		 <div class="col-md-6">
							     		 <input type="url" class="form-control" id="inputWeb" name="inputWeb" value="<?php echo $organization['website']; ?>">
							   		 </div>
						 	 </div>
							 <div class="form-group">
						   		 <label for="inputTel" class="col-md-6 control-label">Հեռախոս</label>
							   		 <div class="col-md-6">
							     		 <input type="text" onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;" class="form-control" id="inputTel" name="inputTel" value="<?php echo $organization['phone']; ?>">
							   		 </div>
						 	 </div>
							 <div class="form-group">
						   		 <label for="inputMail" class="col-md-6 control-label">Էլ․ փոստ</label>
							   		 <div class="col-md-6">
							     		 <input type="email" class="form-control" id="inputMail" name="inputMail" value="<?php echo $organization['email']; ?>">
							   		 </div>
						 	 </div>
							 <div class="form-group">
						   		 <label for="inputDir" class="col-md-6 control-label">Ղեկավար</label>
							   		 <div class="col-md-6">
							     		 <input type="text" class="form-control" id="inputDir" onkeypress="if ( !isNaN( String.fromCharCode(event.keyCode) )) return false;" name="inputDir" required="" value="<?php echo $organization['president']; ?>">
							   		 </div>
						 	 </div>
							<div class="col-md-6"></div>
							<input name='action' value="<?php echo $action; ?>" type="hidden">
							<input name='number' value="<?php echo $_GET['number']; ?>" type="hidden">
							<input class="btn btn-default" type="submit" value="<?php echo $action; ?>"  name="upd_company" id="upd_company">
					</form>

				 </div>
				<div class="col-md-2"> </div>
			</div>
</section>
<?php  require_once(SITE_URI . '/template/footer.php'); ?>	