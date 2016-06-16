<?php
	require_once('/home/git/Desktop/businessDirectory/api/config.php');
 	require_once(SITE_URI . '/template/header.php');
 	require_once(SITE_URI . '/api/functions.php');
 	$delete = delete();
 	/*print_r($delete);
 	echo '<br>';*/
 	$number = $_GET['number'];
 	//echo $number;
 	
?>
<h1 style="text-align: center">1 item is deleted!</h1>

<?php
 	require_once(SITE_URI . '/template/footer.php');
?>	