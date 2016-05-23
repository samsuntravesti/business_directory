<?php
$user_name = "root";
	$password = "fanatik";
	$database = "businessdirectory";
	$server = "127.0.0.1";
	$activity = $_GET['details'];
	$title = $_GET['title'];
	$region = $_GET['region'];
	function database($user_name, $password, $database, $server, $activity, $title, $region){
		$mysqli = new mysqli($server, $user_name, $password, $database);
		//echo '<meta charset="utf-8">';
		if($region == ""){
			$sql = "SELECT name, number FROM businessdirectory.mytable WHERE details in ('".$activity."') and type='". $title ."'";
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
		    array_push($arr);
		}
		$mysqli->close();
		return json_encode($arr, JSON_UNESCAPED_UNICODE);

		}else{
		
		$sql = "SELECT name, number FROM businessdirectory.mytable WHERE details in ('".$activity."') and type='". $title ."' and region in ('". $region ."')";
			
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
		    array_push($arr);
		}
		$mysqli->close();
		return json_encode($arr, JSON_UNESCAPED_UNICODE);
	}
	}
	echo database($user_name, $password, $database, $server, $activity, $title, $region);

?>	