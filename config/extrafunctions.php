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
	$stmt = $conn->prepare("SELECT ca_id,title,price,cover FROM table_cart inner join table_book on table_cart.book_id = table_book.b_id WHERE customer_id = :cid");
	$stmt->bindParam("cid",$customerId);
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


?>