<?php

	$user_name = "root";
	$password = "student";
	$database = "businessDirectory";
	$server = "127.0.0.1";

	function database($user_name, $password, $database, $server){
		$mysqli = new mysqli($server, $user_name, $password, $database);
		//echo '<meta charset="utf-8">';
		$number =  $_GET["number"];
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

		$sql = 'UPDATE businessDirectory.mytable SET name="'.$name.'", type="'.$type.'", region="'.$region.'", address="'.$address.'", activity="'.$activity.'", details="'.$detalis.'", website="'.$website.'", phone="'.$phone.'", email="'.$email.'", president="'.$president.'" WHERE number="'.$number.'"';
			
		$collation="SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'";
		$mysqli->query($collation);
		$result = $mysqli->query($sql);
		$arr = array();
		if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	array_push($arr, $row);
	    }
		} else {
	    echo "0 results";
		}
		$mysqli->close();
		return json_encode($arr, JSON_UNESCAPED_UNICODE);
	}
	echo database($user_name, $password, $database, $server);
//}
?>