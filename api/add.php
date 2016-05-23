<?php
	//if(isset($_POST['add_product'])){

//print_r($_GET);
	$user_name = "root";
	$password = "fanatik";
	$database = "businessdirectory";
	$server = "127.0.0.1";
	function database($user_name, $password, $database, $server){
		$mysqli = new mysqli($server, $user_name, $password, $database);
		//echo '<meta charset="utf-8">';
		$number = $_GET['number'];
		$name = $_GET['name'];
		$type = $_GET['inputType'];
		$region = $_GET['inputRegion'];
		$address = $_GET['inputAddress'];
		$activity = $_GET['inputAct'];
		$detalis = $_GET['inputActivityType'];
		$website = $_GET['inputWeb'];
		$phone = $_GET['inputTel'];
		$email = $_GET['inputMail'];
		$president = $_GET['inputDir'];
		$sql = 'insert INTO businessdirectory.mytable (number, name, type, region, address, activity, details, website, phone, email, president) values (\''.$number. '\' , \''.$name. '\', \''.$type. '\', \''.$region. '\', \''.$address. '\', \''.$activity. '\', \''.$detalis. '\', \''.$website. '\', \''.$phone. '\', \''.$email. '\', \''.$president. '\')';

		echo $sql;
		$collation="SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'";
		$mysqli->query($collation);
		$result = $mysqli->query($sql);
		$arr = array();
		
		$mysqli->close();
		//return json_encode($arr, JSON_UNESCAPED_UNICODE);
	}
	echo database($user_name, $password, $database, $server);
//}
?>