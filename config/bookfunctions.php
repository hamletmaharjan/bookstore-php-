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

function GetBookById($conn,$id){
	$stmt = $conn->prepare("SELECT * FROM table_book WHERE b_id=:id");
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

function UpdateBook($conn,$data,$tableName,$id){

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
	$updateQuery = "UPDATE ".$tableName." SET ".$crap." WHERE b_id=:id";
	
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

function DeleteBookById($conn,$id){
	$book = GetBookById($conn,$id);
	$stmt= $conn->prepare("DELETE FROM table_book WHERE b_id=:id");
	$stmt->bindParam(":id",$id);
	if($stmt->execute()){
		@unlink("uploads/".$book['cover']);
		return true;
	}
	else{
		return false;
	}
}

function GetBookDetails($conn,$id){
	$stmt = $conn->prepare("SELECT * FROM table_book inner join table_author on table_book.author_id = table_author.a_id WHERE b_id = :id");
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

function GetBooksByAuthor($conn,$authorId){
	$stmt = $conn->prepare("SELECT * FROM table_book inner join table_author on table_book.author_id = table_author.a_id WHERE author_id = :authorid");
	$stmt->bindParam(":authorid",$authorId);
	$stmt->execute();
	if($stmt->rowCount()>0){
		return $stmt->fetchAll();
	}
	else{
		return false;
	}
}

function Pagination($conn,$offset){
	$stmt = $conn->prepare("SELECT * FROM table_book inner join table_author on table_book.author_id = table_author.a_id lIMIT ".$offset ." ,8");
	//$stmt->bindParam(":os",$offset);
	$stmt->execute();
	if($stmt->rowCount()>0){
		return $stmt->fetchAll();
	}
	else{
		return false;
	}
}


?>