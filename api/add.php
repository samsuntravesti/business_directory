<?php
//echo($_SERVER['REQUEST_METHOD']);
	$title =  $_GET["title"];
	 //print_r($_GET["title"]);
	$user_name = "root";
	$password = "student";
	$database = "businessDirectory";
	$server = "127.0.0.1";
	function database($user_name, $password, $database, $server, $title){
		$mysqli = new mysqli($server, $user_name, $password, $database);
		//echo '<meta charset="utf-8">';
		$sql = 'INSERT INTO businessDirectory.mytable (`number`, `name`, `type`, `region`, `address`, `activity`, `detalis`, `website`, `phone`, `email`, `president`) VALUES('$_POST["inputId"]', '$_POST["inputName"]', '$_POST["inputType"]', '$_POST["inputRegion"]', '$_POST["inputAddress"]', '$_POST["inputAct"]', '$_POST["inputActivityType"]', '$_POST["inputWeb"]', '$_POST["inputTel"]', '$_POST["inputMail"]', '$_POST["inputDir"]',)';
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
	echo database($user_name, $password, $database, $server, $title);
?>