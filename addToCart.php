<?php
session_start();
$pID = $_GET["pID"];
$pID = $_GET["pID"];
$pID = $_GET["pID"];
$quantity = $_GET["quantity"];
if (isset($_SESSION["pids_cart"])){
	$pids = $_SESSION["pids_cart"];
	$quantities = $_SESSION["quantities_cart"];
	if (in_array($pID, $pids)){
		$ind = array_search($pID, $pids);
		$quantities[$ind] = $quantities[$ind] + $quantity;
	}else {
		array_push($pids, $pID);
		array_push($quantities, $quantity);
	}
	$_SESSION["pids_cart"] = $pids;
	$_SESSION["quantities_cart"] = $quantities;
	
}else {
	$pids = array();
	$quantities = array();
	array_push($pids, $pID);
	array_push($quantities, $quantity);
	$_SESSION["pids_cart"] = $pids;
	$_SESSION["quantities_cart"] = $quantities;
}

require_once 'class/User.class.php';
	$user = new User();
	$prod = $user->getProductsNameandPrice($pID);
	//prod_name, prod_price
	$cartItem = $user->insertCart($_SESSION["userID"],$pID ,$quantity ,$prod[0], $prod[1]);

//include ("cart.php");

?>
