<?php
	require_once('/home/git/Desktop/businessDirectory/api/config.php');
 	require_once(SITE_URI . '/template/header.php');
 	require_once(SITE_URI . '/api/functions.php');
 	$organization = search();
// var_dump($organization);
//print_r($_GET['region']);
?>
<section id="core">
	<div class="row">
		<form action="<?php echo  SITE_URL . '/api/functions.php' ?>" method="get">
			<div class="col-md-3 filter">
			<span>Ըստ տարածաշրջանի</span>
				<div class="checkbox">
				  <label> <input type="checkbox" value="Ստեփանակերտ" name="region" onclick="region_value()">Ստեփանակերտ </label>
				</div> 
				<div class="checkbox">
				  <label> <input type="checkbox" value="Մարտակերտ" name="region" onclick="region_value()">Մարտակերտ</label> 
				</div>
				<div class="checkbox">
				  <label> <input type="checkbox" value="Շահումյան" name="region" onclick="region_value()">Շահումյան </label> 
				</div>
				<div class="checkbox">
				  <label> <input type="checkbox" value="Քաշաթաղ" name="region" onclick="region_value()">Քաշաթաղ</label> 
				</div>
				<div class="checkbox">
					<label> <input type="checkbox" value="Մարտունի" name="region" onclick="region_value()">Մարտունի</label>
				</div>	
				<div class="checkbox">
				  <label> <input type="checkbox" value="Ասկերան" name="region" onclick="region_value()">Ասկերան</label> 
				</div>
				<div class="checkbox">
				  <label> <input type="checkbox" value="Հադրութ" name="region" onclick="region_value()">Հադրութ</label> 
				</div>
				<div class="checkbox">
				  <label> <input type="checkbox" value="Շուշի" name="region" onclick="region_value()">Շուշի</label> 
				</div>
				
			<span>Ըստ գործնեության ոլորտի</span>
				<div class="checkbox">
				  <label> <input type="checkbox" name="details" value="Շինարարություն" onclick="details_value()"> Շինարարություն</label>
				</div> 
				<div class="checkbox">
				  <label> <input type="checkbox" name="details" value="Արտադրություն" onclick="details_value()">Արտադրություն</label> 
				</div>
				<div class="checkbox">
				  <label> <input type="checkbox" name="details" value="Ծառայություն" onclick="details_value()">Ծառայություն</label> 
				</div>
				<div class="checkbox">
				  <label> <input type="checkbox" name="details" value="Առևտուր" onclick="details_value()">Առևտուր</label> 
			 </div>
			</div>
			<div class="col-md-7" id="resultId">
				<ol>

				<?php 
					if  ($organization === null) {
						echo "<li>No result</li>";
					} else {				
					foreach ($organization as $key => $value) {
						//print_r($value);
					echo '<li><div class="info"><a href="'.SITE_URL.'/template/view.php?number='. $value['number'].'">'. $value['name']. '</a><a class="glyphicon glyphicon-pencil" title="Խմբագրել" href="'.SITE_URL.'/template/modification.php?number='. $value['number'] . '" style="float: right; margin-right: -5%"></a><a href="'.SITE_URL.'/api/functions.php?number='. $value['number'].'" class="glyphicon glyphicon-trash" title="Ջնջել" style="float: right; margin-right: 1%"></a></div></li>';
					}
				}
				?>
				</ol>
		    </div>
		</form>
	</div>
</section>
<?php
 	require_once(SITE_URI . '/template/footer.php');
?>	
