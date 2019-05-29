<?php
include 'layouts/frontheader.php';

$bookId = $_GET['ref'];
if(isset($_SESSION['customer']) && isset($_SESSION['c_id'])){
	if(AddToCart($conn,1,$bookId)){
		redirection('cart.php');
	}
}

redirection('login.php');




?>

