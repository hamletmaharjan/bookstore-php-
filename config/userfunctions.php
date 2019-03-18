<?php

function InsertData($conn,$data,$tablename){
	unset($data['submitbtn']);
	$fields = array_keys($data);
	$queryFields = implode(', ', $fields);
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

function GetUserById($conn,$id){
	$stmt = $conn->prepare("SELECT * FROM table_admin WHERE id=:id");
	$stmt->bindParam(":id",$id);
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	if($stmt->rowCount()>0){
		return $stmt->fetch();
	}
	else{
		return false;
	}
}

function UpdateData($conn,$data,$tableName,$id){

//$stmt = $conn->prepare("UPDATE user SET user=:user, pass=:pass, status=:status where id=:id";

	unset($data['savebtn']);
	$fields = array_keys($data);
	//$queryFields = implode(', ', $fields);
	//$queryValue = implode(' , :', $fields);
	$crap ='';
	foreach ($data as $key => $value) {
		$crap = $crap.$key."=:".$key.",";
	}
	$length = strlen($crap);
	$crap = substr($crap,0,$length-1);
	$updateQuery = "UPDATE ".$tableName." SET ".$crap." WHERE id=:id";
	
	$stmt = $conn->prepare($updateQuery);

	foreach ($data as $key => $value) {
		$shit = ':'.$key;
		$stmt->bindParam($shit,$data[$key]);
		
	}
	$stmt->bindParam(":id",$id);


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



function DeleteData($conn,$id){
	$stmt= $conn->prepare("DELETE FROM table_admin WHERE id=:id");
	$stmt->bindParam(":id",$id);
	if($stmt->execute()){
		return true;
	}
	else{
		return false;
	}
}

?>