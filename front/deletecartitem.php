<?php
include '../config/call.php';

$cartId = $_GET['ref'];
echo $cartId;

if(DeleteCart($conn,$cartId)){
	redirection('cart.php');
}

?>