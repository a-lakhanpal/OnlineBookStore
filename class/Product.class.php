<?php 

require_once( 'DB.class.php' );

class Product{
	var $id;
	var $name;
	var $description;
	var $price;
	var $supplier_id;
	var $category_id;
	var $image;
	var $db;

	
	
	public function Product($id){
		$this->db = new DB();
		$aSQL="SELECT * from products where id = '$id'";
		$query = mysqli_query($this->db->conn, $aSQL);
		while ($row = mysqli_fetch_array($query)){
			$this->id = $row["id"];
			$this->name = $row["name"];
			$this->description = $row["description"];
			$this->price = $row["price"];
			$this->supplier_id = $row["supplier_id"];
			$this->category_id = $row["category_id"];
			$this->image = $row["image"];
			
		}

	}
	
}
?>