<?php 
session_start();
$pID = $_GET["activateid"];
$check = $_GET["checked"];
require_once( 'class/User.class.php' );
$user = new User();
$prod = $user->activate($pID, $check);
?>

