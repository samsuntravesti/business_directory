<?php
	require_once('/home/git/Desktop/businessDirectory/api/config.php');
 	require_once(SITE_URI . '/header.php');
 	require_once(SITE_URI . '/api/functions.php');
 	$organization = search();
 	$region = array("Ստեփանակերտ", "Մարտակերտ", "Շահումյան", "Քաշաթաղ", "Մարտունի", "Ասկերան", "Հադրութ", "Շուշի");
 	$details = array("Շինարարություն", "Արտադրություն", "Ծառայություն", "Առևտուր");
 	//var_dump($organization);
 	//var_dump($_GET['title']);
 	//var_dump($_GET['region']);
 	//var_dump($_GET['details']);
 	$det = preg_replace('/"/', '', $_GET['details']);
	$det = explode(",", $det);
 	$reg = preg_replace('/"/', '', $_GET['region']);
	$reg = explode(",", $reg);
?>
<section id="core">
	<div class="row">
		<form action="<?php echo  SITE_URL . '/api/functions.php' ?>" method="get"> 
			<div class="col-md-3 filter">
			<span>Ըստ շրջանի</span>
				<?php 
				 	foreach($region as $type_key => $type_value) {
				 		$checked = (in_array($type_value, $reg)) ? ' checked': '';
				 		//echo $checked;
						echo '<div class="checkbox"><label><input type="checkbox" value="' . $type_value . '" name="region" ' . $checked . '>' . $type_value . '</label></div> ';
					}
				?>
	
			<span>Ըստ գործնեության ոլորտի</span>
				<?php 
				 	foreach($details as $type_key => $type_value) {
				 		$checked = (in_array($type_value, $det)) ? ' checked': '';
						echo '<div class="checkbox"><label><input type="checkbox" value="' . $type_value . '" name="details" ' . $checked . '>' . $type_value . '</label></div> ';
					}
				?>
				
			</div>
			<div class="col-md-7" id="resultId">
				<ol>
				<?php 
					if($_GET['title'] == null & $_GET['region'] == null & $_GET['details'] == null & $organization === Array ()){
							echo " ";
							exit;
					} else {
						if  ($organization === Array () ) {
							echo "<li>No results!</li>";
						} else {				
						foreach ($organization as $key => $value) {
							//print_r($value);
						echo '<li><div class="info"><a href="'.SITE_URL.'/view.php?hvhh='. $value['number'].'">'. $value['name']. '</a><a class="glyphicon glyphicon-pencil" title="Խմբագրել" href="'.SITE_URL.'/modification.php?hvhh='. $value['number'] . '" style="float: right; margin-right: -5%"></a><a href="'.SITE_URL.'/delete.php?hvhh='. $value['number'].'" class="glyphicon glyphicon-trash" title="Ջնջել" style="float: right; margin-right: 1%"></a></div></li>';
						
						}
					}
					}

				?>
				</ol>
		    </div>
		</form>
	</div>
</section>
<?php
 	require_once(SITE_URI . '/footer.php');
?>	
