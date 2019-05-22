<?php

include '../config/call.php';


$authorId = $_GET['ref'];
if(DeleteAuthorById($conn,$authorId)){
	ShowMessage("Author Deleted Successfully","success");
    redirection('manageauthors.php');
}

?>