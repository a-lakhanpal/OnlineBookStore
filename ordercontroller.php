
<?php
session_start ();
require_once 'class/User.class.php';
	$user = new User();
	$orders = $_SESSION["orders"];
	$Total = $_SESSION["totalamt"];
	$userId = $_SESSION["userID"];
	
	
	$orderId = $user->createOrder($userId, $Total, $orders);
	foreach ($orders as $order){
		$a = (int)$order[0];
		$b = (int)$order[2];
		$c = (int)$order[3];
		 $user->createOrderitem( $a, $b, $c);
	}
	

	
	include ("order.php");

$cart = $user->emptyCart($userId);

?>