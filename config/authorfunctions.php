<?php

function GetAuthorById($conn,$id){
	$stmt = $conn->prepare("SELECT * FROM table_author WHERE a_id=:id");
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

function DeleteAuthorById($conn,$id){
	$book = GetBookById($conn,$id);
	$stmt= $conn->prepare("DELETE FROM table_author WHERE a_id=:id");
	$stmt->bindParam(":id",$id);
	if($stmt->execute()){
		return true;
	}
	else{
		return false;
	}
}

function UpdateAuthor($conn,$data,$tableName,$id){

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
	$updateQuery = "UPDATE ".$tableName." SET ".$crap." WHERE a_id=:id";
	
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




?>