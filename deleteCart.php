<?php
session_start();
// $pID = $_GET["pID"];
// $quantity = $_GET["quantity1"];
// if (isset($_SESSION["pids_cart"]) && isset ($_GET["quantity1"])){
	// $pids = $_SESSION["pids_cart"];
	// $quantities = $_SESSION["quantities_cart"];
	// if (in_array($pID, $pids)){
		// $ind = array_search($pID, $pids);
		// echo $quantities[$ind];
		// echo count($quantities);
		// echo $pids[$ind];
		// echo count($pids)
		// //$quantities[$ind] = 0;
		// unset($pids[$ind]);
	// }
	// $_SESSION["pids_cart"] = $pids;
	// $_SESSION["quantities_cart"] = $quantities;
// }

require_once( 'class/User.class.php' );
$UID = $_GET["uId"];
$user = new User();
$cart = $user->deleteCart($UID);
//include ("cart.php");

header('Location: /naazh01/quality/shopping_cart/cart.php')
?>