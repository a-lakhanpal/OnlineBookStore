<?php 
session_start();
$pID = $_GET["orderstatus"];
$check = $_GET["ordersid"];
require_once( 'class/User.class.php' );
$user = new User();
$prod = $user->shipOrder($pID);
?>

