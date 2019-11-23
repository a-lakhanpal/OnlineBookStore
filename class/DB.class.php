<?php


class DB{
	var $servername = "localhost";
	
	var $username = "root";
	
	var $password = "";
	
	var $db = "QualityBooks";
	
	var $conn;
	
	function __construct(){
	
	
	
		$this->conn = new mysqli($this->servername, $this->username, $this->password, $this->db);
	
		if ($this->conn->connect_error) {
	
			echo "cannot connect";
	
		}else{
	
			//echo "connected";
	
		}
	
	}
	
}
?>
