<?php

function AddToCart($conn,$customerId,$bookId){
	$stmt = $conn->prepare("INSERT INTO table_cart (customer_id,book_id) values(:cid,:bid)");
	$stmt->bindParam(":cid",$customerId);
	$stmt->bindParam(":bid",$bookId);

	//$stmt->execute();
	//$stmt->setFetchMode(PDO::FETCH_ASSOC);
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


function GetCartItems($conn, $customerId){
	$stmt = $conn->prepare("SELECT ca_id,customer_id,book_id,title,price,cover FROM table_cart inner join table_book on table_cart.book_id = table_book.b_id WHERE customer_id = :cid");
	$stmt->bindParam(":cid",$customerId);
	$stmt->execute();
	if($stmt->rowCount()>0){
		return $stmt->fetchAll();
	}
	else{
		return false;
	}
}

function GetAllCartItems($conn){
	$stmt = $conn->prepare("SELECT * FROM table_cart");
	if($stmt->execute()){
		return $stmt->rowCount();
	}
	else {
		return false;
	}
}
function GetAllOrders($conn){
	$stmt = $conn->prepare("SELECT * FROM table_order");
	if($stmt->execute()){
		return $stmt->rowCount();
	}
	else {
		return false;
	}
}
function GetAllBooks($conn){
	$stmt = $conn->prepare("SELECT * FROM table_book");
	if($stmt->execute()){
		return $stmt->rowCount();
	}
	else {
		return false;
	}
}


function GetOrders($conn){
	$stmt = $conn->prepare("SELECT * FROM table_order");
	$stmt->execute();
	if($stmt->rowCount()>0){
		return $stmt->fetchAll();
	}
	else{
		return false;
	}
}





function DeleteCart($conn,$cartId){
	$stmt= $conn->prepare("DELETE FROM table_cart WHERE ca_id=:id");
	$stmt->bindParam(":id",$cartId);
	if($stmt->execute()){
		return true;
	}
	else{
		return false;
	}
}

function InsertOrder($conn,$data,$tablename){
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


?>