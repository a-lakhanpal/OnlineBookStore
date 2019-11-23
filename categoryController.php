<?php
session_start ();
require_once 'class/User.class.php';
	$user = new User();
 if (isset ($_POST ["categoryName"] )) {
		$user->createCategory($_POST ["categoryName"]);	
		include ("category.php");
}else{
		include ("categoryAdd.php");
}
?>