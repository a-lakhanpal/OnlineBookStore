<?php
session_start ();
function customError($errno, $errstr) {
  echo "<b>Error:</b> [$errno] $errstr<br>";
  echo "Ending Script";
  die();
}

//set error handler
set_error_handler("customError",E_USER_WARNING);

 if (isset ( $_POST ["username"] ) && isset ( $_POST ["password"] )) {
	require_once 'class/User.class.php';
	$user = new User();
	if ($user->isUser($_POST ["username"], $_POST ["password"])){		
		$user->login($_POST ["username"], $_POST ["password"]);
		$user->isAdmin($_POST ["username"], $_POST ["password"]);
		$_SESSION["userID"] = $user->id;
		$_SESSION["username"] = $user->username;
		$_SESSION["password"] = $user->password;
		$_SESSION["phoneNumber"] = $user->mobileno;
		$_SESSION["address1"] = $user->address;
		$_SESSION["name"] = $user->name;
		$_SESSION["isAdmin"] = $user->isAdmin;
		$_SESSION["prodFilter"] = "0";
		include ("index.php");
		?>
		
		<?php 
	}else{
		echo "wrong login";
		include ("loginForm.php");
		error_log("Invalid Login", 0, "/tmp/errors.log");
	}
}else{
	//trigger error
	error_log("Invalid Session", 0);
	trigger_error("Invalid Session",E_USER_WARNING);
	include ("loginForm.php");
}

?>
