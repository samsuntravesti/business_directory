<?php
$user_name = "root";
	$password = "student";
	$database = "businessDirectory";
	$server = "127.0.0.1";
	$activity = $_GET['details'];
	$title = $_GET['title'];
	function database($user_name, $password, $database, $server, $activity, $title){
		$mysqli = new mysqli($server, $user_name, $password, $database);
	/*if (count($region)>1) {
			for ($i=0; $i<count($region);$i++){
				$var .= $delimiter.'\''.$region[$i].'\'';
				$delimiter = ',';
			}
			echo $var;
		}*/
		$sql = "SELECT name, number FROM businessDirectory.mytable WHERE details in ('".$activity."') and type='". $title ."'";
			
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
	echo database($user_name, $password, $database, $server, $activity, $title);

?>	