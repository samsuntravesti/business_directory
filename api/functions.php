<?php
	require_once('/home/git/Desktop/businessDirectory/api/config.php');

	function add(){
		$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
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

		//echo $sql;
		$collation="SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'";
		$mysqli->query($collation);
		$result = $mysqli->query($sql);
		$arr = array();
		
		$mysqli->close();
		//return json_encode($arr, JSON_UNESCAPED_UNICODE);
	}


	function delete(){
		$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		$number =  $_GET["number"];
		$sql = 'DELETE FROM businessdirectory.mytable WHERE number="'.$number.'"';
		echo $sql;
		$collation="SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'";
		$mysqli->query($collation);
		$result = $mysqli->query($sql);
		$arr = array();
		/*if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		    	array_push($arr, $row);
		    }
		} else {
		    echo "0 results";
		}*/
		$mysqli->close();
		//return json_encode($arr, JSON_UNESCAPED_UNICODE);
	}

	
	function search(){
		$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		$type =  (isset($_GET["title"])) ? $_GET["title"] : '';
		$details = (isset($_GET["details"])) ? $_GET["details"] : '';
		$region =  (isset($_GET["region"])) ? $_GET["region"] : '';

		if ($type !== "") {
			$search_options = ['type = "' . $type . '"'];
			if ($region) {
				array_push($search_options, 'region in ("' . $region . '")');
			}
			if ($details) {
				array_push($search_options, 'details in ("' . $details . '")');
			}
			$sql = 'SELECT name, number FROM businessdirectory.mytable WHERE ' . implode(' AND ', $search_options);
			/*echo $_GET["region"];
			echo '<br>';*/
			echo $sql; //exit;
			$collation="SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'";
			$mysqli->query($collation);
			$result = $mysqli->query($sql);
            $arr = array();
			if ($result->num_rows > 0) {
			    while($row = $result->fetch_assoc()) {
			    	array_push($arr, $row);
			    }
			} else {
			    echo "0 results";
			}
			$mysqli->close();
			return $arr;
			}
	}

	function view(){
		$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		$number =  $_GET["number"];
		$sql = 'SELECT * FROM businessdirectory.mytable WHERE number="'.$number.'"';
		$collation="SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'";
		$mysqli->query($collation);
		$result = $mysqli->query($sql);
		$mysqli->close();
		return $result->fetch_assoc();
	}

	function update(){
		$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
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

		$sql = 'UPDATE businessdirectory.mytable SET name="'.$name.'", type="'.$type.'", region="'.$region.'", address="'.$address.'", activity="'.$activity.'", details="'.$detalis.'", website="'.$website.'", phone="'.$phone.'", email="'.$email.'", president="'.$president.'" WHERE number="'.$number.'"';
		//echo $sql;
		$collation="SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'";
		$mysqli->query($collation);
		$result = $mysqli->query($sql);
		$arr = array();
		
		$mysqli->close();
		return json_encode($arr, JSON_UNESCAPED_UNICODE);
	}
	if (isset($_GET["action"])) {
		$action = $_GET["action"];
		if ($action == 'Add'){
			add();
		} else {
			update();
		}
	}
?>