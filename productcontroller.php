<?php
session_start();
require_once 'class/User.class.php';
	$user = new User();
	/*echo "Starting Upload";
	echo $_POST["prodname"];
	echo $_FILES["prodimage"] . "<br>";
	print_r($_FILES["prodimage"]);
	$folderToUpload = "images/";
	$tempFileName = $_FILES["prodimage"]["tmp_name"];
	$fileName = $_FILES["prodimage"]["name"];
	$fileToUpload = $folderToUpload.$fileName;
	echo $tempFileName . "<br>";
	echo $fileName. "<br>";
	echo $fileToUpload . "<br>";
	*/
	
 if (isset ( $_POST["prodname"] ) ) {			
		//Get the image on folder location
		$folderToUpload = "images/";
		$tempFileName = $_FILES["prodimage"]["tmp_name"];
		$fileName = $_FILES["prodimage"]["name"];
		$fileToUpload = $folderToUpload.$fileName;
		move_uploaded_file($tempFileName,$fileToUpload);
		// Now add product in DB
		$user->createProduct($_POST["prodname"], $_POST["proddescription"],$_POST["prodprice"],$_POST["prodsupplier"],$_POST["prodcategory"], $fileName);	
		include("adminProduct.php");
}else{
		include ("productAdd.php");
}
?>