<?php

include '../config/call.php';

$userId= $_GET['ref'];
if(DeleteData($conn,$userId)){
	ShowMessage("Data Deleted Successfully","success");
	redirection('manageusers.php');
}


?>