<?php

function InsertData($conn,$data,$tablename){
	unset($data['submitbtn']);
	$fields = array_keys($data);
	$queryFields = implode(', ', $fields);
	 // prepare sql and bind parameters
    //$stmt = $conn->prepare("INSERT INTO user (user, pass, status) 
    //VALUES (:user, :pass, :status)");
	if(isset($data['password'])){
		$data['password'] = md5($data['password']);
	}
	$queryValue = implode(' , :', $fields);
	
	//print_r($_POST);
	$insertQuery = "INSERT INTO ".$tablename." (".$queryFields.")
					VALUES (:".$queryValue.")";
	
	$stmt = $conn->prepare($insertQuery);

	

	/*
	foreach ($data as $key => $value) {

		$shit = ':'.$key;
		$stmt->bindParam($shit,$value);
		
	}
	*/
	
	foreach ($data as $key => $value) {

		$shit = ':'.$key;
		$stmt->bindParam($shit,$data[$key]);
		
	}
	
	try{
		if($stmt->execute()){
			return true;
		}
		
		return false;
		
	}
	catch(Exception $e){
		echo $e->getMessage();
	}
	
}



function GetUsers($conn){
	$stmt = $conn->prepare("SELECT * FROM table_admin");
	$stmt->execute();
	if($stmt->rowCount()>0){
		return $stmt->fetchAll();
	}
	else{
		return false;
	}
}
?>