<?php

include '../config/call.php';


$bookId = $_GET['ref'];
if(DeleteBookById($conn,$bookId)){
	ShowMessage("Book Deleted Successfully","success");
    redirection('managebooks.php');
}

?>