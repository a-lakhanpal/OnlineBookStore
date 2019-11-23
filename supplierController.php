<?php
session_start ();
require_once 'class/User.class.php';
	$user = new User();
 if (isset ( $_POST ["suppliername"] ) && isset ( $_POST ["supplieremail"] )) {
		$user->createSupplier($_POST ["suppliername"], $_POST ["supplieremail"],$_POST ["supplieraddress"], $_POST ["suppliermobile"]);
		include ("supplier.php");
}else{
		include ("supplierAdd.php");
}
?>