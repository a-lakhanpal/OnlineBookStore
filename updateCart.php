<?php
session_start();
	$userId = $_SESSION["userID"];
require_once 'class/User.class.php';
	$user = new User();
$cart = $user->emptyCart($userId);
echo $userId;
	include ("cart.php");
//header('Location: /naazh01/quality/shopping_cart/cart.php')
?>