<?php
include 'layouts/frontheader.php';

$bookId = $_GET['ref'];
if(isset($_SESSION['customer']) && isset($_SESSION['c_id'])){
	if(AddToCart($conn,$_SESSION['c_id'],$bookId)){
		redirection('cart.php');
	}
}

redirection('login.php');




?>

