<?php 

function GetBooks($conn){
	$stmt = $conn->prepare("SELECT * FROM table_book inner join table_author on table_book.author_id = table_author.a_id");
	$stmt->execute();
	if($stmt->rowCount()>0){
		return $stmt->fetchAll();
	}
	else{
		return false;
	}
}

function GetAuthors($conn){
	$stmt = $conn->prepare("SELECT * FROM table_author");
	$stmt->execute();
	if($stmt->rowCount()>0){
		return $stmt->fetchAll();
	}
	else{
		return false;
	}
}

?>