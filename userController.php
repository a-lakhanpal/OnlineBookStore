
<?php
session_start ();
require_once 'class/User.class.php';
	$user = new User();
 if (isset ( $_POST ["usrname"] ) && isset ( $_POST ["usrpwd"] )) {
			
		$user->createUser($_POST ["usrname"], $_POST ["usrpwd"],$_POST ["usrfirstname"], $_POST ["usradmin"],$_POST ["ursmobile"], $_POST ["ursaddress"], $_POST ["ursstatus"]);

	
	include ("user.php");
}else{
	include ("userAdd.php");
}

?>