<?php
session_start ();

 if (isset ( $_POST ["username"] ) && isset ( $_POST ["password"] )) {
	require_once 'class/User.class.php';
	$user = new User();
	$user->createUser($_POST ["username"], $_POST ["password"], $_POST ["regname"], 0,  $_POST ["regphone"],$_POST ["regadd"], 1);
	$user->login($_POST ["username"], $_POST ["password"]);
	$user->isAdmin($_POST ["username"], $_POST ["password"]);
	$_SESSION["userID"] = $user->id;
	$_SESSION["username"] = $user->username;
	$_SESSION["password"] = $user->password;
	$_SESSION["name"] = $user->name;
	$_SESSION["phoneNumber"] = $user->mobileno;
	$_SESSION["address1"] = $user->address;
	$_SESSION["name"] = $user->name;
	$_SESSION["isAdmin"] = $user->isAdmin;
	include ("index.php");
}else{
	include ("registerForm.php");
}

?>
