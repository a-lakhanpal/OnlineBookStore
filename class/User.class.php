<?php 

require_once( 'DB.class.php' );

class User{
	var $id;
	var $username;
	var $password;
	var $name;
	var $isAdmin;
	var $mobileno;
	var $address;
	var $status;
	var $db;

	public function __construct()
	{
		$this->db = new DB();
	}
	
	public function isUser($username, $password){
		$aSQL="SELECT * from users where username = '$username' and password = '$password' and status = 1";
		$query = mysqli_query($this->db->conn, $aSQL);
		
		$rowcount = mysqli_num_rows($query);
		if ($rowcount > 0){
			return true;
		}
		return false;
	}
	public function allUser(){
		$users = array();
		$aSQL="SELECT * FROM users";
		$query = mysqli_query($this->db->conn, $aSQL);
		while ($row = mysqli_fetch_array($query)){
			$induser = array($row["id"], $row["username"], $row["password"], $row["name"], $row["isAdmin"], $row["mobileno"],$row["address"],$row["status"]);
			array_push($users, $induser);
		}
		return $users;
	}
	public function activate($id, $isactive){
		$users = array();
		$aSQL="UPDATE users SET status = '$isactive' WHERE id = '$id';";
		$query = mysqli_query($this->db->conn, $aSQL);
		while ($row = mysqli_fetch_array($query)){
			$induser = array($row["id"], $row["username"], $row["password"], $row["name"], $row["isAdmin"], $row["mobileno"],$row["address"],$row["status"]);
			array_push($users, $induser);
		}
		return $users;
	}
	public function shipOrder($user_id){
		$orders = array();
		$aSQL="UPDATE orders SET status = 1 WHERE  id = '$user_id'";
		$query = mysqli_query($this->db->conn, $aSQL);
		while ($row = mysqli_fetch_array($query)){
			$order = array($row["id"], $row["user_id"], $row["sub_total"],  $row["gst"], $row["grand_total"],$row["order_date"],$row["status"]);
			array_push($orders, $order);
		}
		return $orders;
	}
	
	public function categories(){
		$categories = array();
		$aSQL="SELECT * FROM categories";
		$query = mysqli_query($this->db->conn, $aSQL);
		while ($row = mysqli_fetch_array($query)){
			$category = array($row["id"], $row["name"]);
			array_push($categories, $category);
		}
		return $categories;
	}
	
	public function orders($user_id){
		$orders = array();
		$aSQL="SELECT * FROM orders where user_id = '$user_id'";
		$query = mysqli_query($this->db->conn, $aSQL);
		while ($row = mysqli_fetch_array($query)){
			$order = array($row["id"], $row["user_id"], $row["sub_total"],  $row["gst"], $row["grand_total"],$row["order_date"],$row["status"]);
			array_push($orders, $order);
		}
		return $orders;
	}
	
	public function ordersAdmin(){
		$orders = array();
		$aSQL="SELECT * FROM orders";
		$query = mysqli_query($this->db->conn, $aSQL);
		while ($row = mysqli_fetch_array($query)){
			$order = array($row["id"], $row["user_id"], $row["sub_total"],  $row["gst"], $row["grand_total"],$row["order_date"],$row["status"]);
			array_push($orders, $order);
		}
		return $orders;
	}
	public function insertCart($userID,$pID ,$quantity, $prodname, $prodprice ){
		$cart = array();
		$sql = "INSERT INTO cart_items (product_id,cart_id, count, prod_name, prod_price)VALUES ('$pID','$userID', '$quantity', '$prodname', '$prodprice')";
		$query = mysqli_query($this->db->conn, $sql);		
		while ($row = mysqli_fetch_array($query)){
			$cart = $row["id"];
		}
		return $cart;
	}
	
	public function deleteCart($userID){
		$cart = "";
		$sql = "DELETE FROM cart_items WHERE id ='$userID'";
		$query = mysqli_query($this->db->conn, $sql);		
		while ($row = mysqli_fetch_array($query)){
			$cart = $row["id"];
		}
		return $cart;
	}
	
	public function emptyCart($userID){
		$cart = "";
		$sql = "DELETE FROM cart_items WHERE cart_id ='$userID'";
		$query = mysqli_query($this->db->conn, $sql);		
		while ($row = mysqli_fetch_array($query)){
			$cart = $row["id"];
		}
		return $cart;
	}
	
	public function getCart($userID){
		$cart = array();
		$sql = "SELECT * FROM cart_items WHERE cart_id ='$userID'";
		$query = mysqli_query($this->db->conn, $sql);		
		while ($row = mysqli_fetch_array($query)){
			$cartitem = array($row["id"], $row["product_id"], $row["cart_id"],  $row["count"],  $row["prod_name"],  $row["prod_price"]);
			array_push($cart, $cartitem);
		}
		return $cart;
	}
	
	public function orderDetails($orderId){
		$orders = array();
		$productId = "";
		$prod = "";
		$orderdet = array();
		
		
			$aSQL="SELECT * FROM order_items where order_id='$orderId'";
			$query = mysqli_query($this->db->conn, $aSQL);
			while ($row = mysqli_fetch_array($query)){
				$productId = $row["product_id"];
				$orderdetail = array($row["product_id"], $row["order_id"], $row["price"], $row["qty"]);
				
				
				array_push($orderdet, $orderdetail);
			}
			
		
		
		
		return $orderdet;
	}
	
	public function suppliers(){
		$suppliers = array();
		$aSQL="SELECT * FROM suppliers";
		$query = mysqli_query($this->db->conn, $aSQL);
		while ($row = mysqli_fetch_array($query)){
			$supplier = array($row["id"], $row["name"],$row["email"], $row["address"],$row["mobile_no"]);
			array_push($suppliers, $supplier);
		}
		return $suppliers;
	}
	
	public function isAdmin($username, $password){
		$aSQL="SELECT * from users where username = '$username' and password = '$password' and isAdmin = 1";
		$query = mysqli_query($this->db->conn, $aSQL);
		
		$rowcount = mysqli_num_rows($query);
		if ($rowcount > 0){
			return true;
		}
		return false;
	}
	
	public function login($username, $password){
		$aSQL="SELECT * from users where username = '$username' and password = '$password'";
		$query = mysqli_query($this->db->conn, $aSQL);
		while ($row = mysqli_fetch_array($query)){
			$this->id = $row["id"];
			$this->username = $row["username"];
			$this->password = $row["password"];
			$this->name = $row["name"];
			$this->isAdmin = $row["isAdmin"];
			$this->address = $row["address"];
			$this->mobileno = $row["mobileno"];
		}
	}
	public function createProduct($name,$description, $price , $supplier_id, $category_id, $image){
		$productId = "";
		$sql = "INSERT INTO products (name,description, price,supplier_id,category_id,image) VALUES ('$name','$description', '$price' , '$supplier_id', '$category_id', '$image')";
		$query = mysqli_query($this->db->conn, $sql);
		while ($row = mysqli_fetch_array($query)){
			$productId = $row["id"];
		}
		return $productId;
	}
	
	public function createSupplier($name, $email, $address , $phone){
		$supplierId = "";
		$sql = "INSERT INTO suppliers (name,email, address, mobile_no)VALUES ('$name','$email', '$address' , '$phone')";
		$query = mysqli_query($this->db->conn, $sql);		
		while ($row = mysqli_fetch_array($query)){
			$supplierId = $row["id"];
		}
		return $supplierId;
	}
	
	public function createCategory($name){
		$categoreyId = "";
		$sql = "INSERT INTO categories (name) VALUES ('$name')";
		$query = mysqli_query($this->db->conn, $sql);		
		while ($row = mysqli_fetch_array($query)){
			$categoreyId = $row["id"];
		}
		return $categoreyId;		
	}
	
	
	public function createOrder($userid, $subtotal, $orders){
		//$_SESSION["totalamt"]= $total;
		$orderId = "";
		$products = $orders;
		$status = "Not Shipped";
		$orderdate = date("Y-m-d H:i:s"); 
		$granttotal = $subtotal + ((15/100)*$subtotal);
		$sql = "INSERT INTO orders (user_id,sub_total, 	gst, grand_total, order_date, 	status) VALUES ('$userid', '$subtotal',15 , '$granttotal','$orderdate', '$status' )";
		$query = mysqli_query($this->db->conn, $sql);
		$orderArray = array();
		while ($row = mysqli_fetch_array($query)){
			//$products = array();
			$orderId = $row["gst"];
		}
		// foreach ($products as $product){
				// $product_id =  $product[0];
				// $price =  $product[2];
				// $qty =  $product[3];
				// $aSQL = "INSERT INTO order_items (order_id, product_id, price, qty ) VALUES ('$orderId', '$product_id', '$price', '$qty')";
				// //$aSQL="SELECT * FROM orders";
				// $query = mysqli_query($this->db->conn, $aSQL);
				// while ($row = mysqli_fetch_array($query)){
					// $induser = array($row["id"]);
					
				// }
				// //return $users;
		
				
			// }
			// $aSQL="SELECT * FROM orders";
			// $query = mysqli_query($this->db->conn, $aSQL);
			// while ($row = mysqli_fetch_array($query)){
				// $order = array($row["id"], $row["user_id"], $row["sub_total"], $row["gst"],$row["grand_total"], $row["order_date"], $row["status"]);
				// array_push($orderArray, $order);
			// }
		 return $orderId;
	}
	
	public function createOrderitem( $product_id, $price, $qty){
		$orderId = "";
		$sql = "SELECT * FROM orders ORDER BY order_date DESC LIMIT 1";
		$query = mysqli_query($this->db->conn, $sql);
		while ($row = mysqli_fetch_array($query)){
			$orderId = $row["id"];
			$aSQL = "INSERT INTO order_items (order_id, product_id, price, qty ) VALUES ('$orderId', '$product_id', '$price', '$qty')";
			//$aSQL="SELECT * FROM orders";
			$query = mysqli_query($this->db->conn, $aSQL);
			while ($row = mysqli_fetch_array($query)){
				$induser = array($row["id"]);
				
			}
		}
		
		
	}


	
	public function createUser($usrname, $usrpwd, $usrfirstname, $usradmin, $ursmobile, $ursaddress, $ursstatus){
		$userId = "";
		$sql = "INSERT INTO users (username, password, name, isAdmin, mobileno, address, status ) VALUES ('$usrname', '$usrpwd','$usrfirstname',  '$usradmin', '$ursmobile', '$ursaddress', '$ursstatus')";
		$query = mysqli_query($this->db->conn, $sql);
		
		while ($row = mysqli_fetch_array($query)){
			$userId = $row["id"];
		}
		return $userId;
	}
	
	
	public function viewProducts(){
		$products = array();
		$aSQL="SELECT * FROM products";
		$query = mysqli_query($this->db->conn, $aSQL);
		while ($row = mysqli_fetch_array($query)){
			$product = array($row["id"], $row["name"], $row["description"], $row["price"], $row["supplier_id"], $row["category_id"],$row["image"]);
			array_push($products, $product);
		}
		return $products;
	}
	public function getProductsName($id){
		$product = "";
		$aSQL="SELECT * FROM products where id='$id'";
		$query = mysqli_query($this->db->conn, $aSQL);
		while ($row = mysqli_fetch_array($query)){
			$product = $row["name"];
			
		}
		return $product;
	}
	public function getProductsNameandPrice($id){
		$products = array();
		$aSQL="SELECT * FROM products where id='$id'";
		$query = mysqli_query($this->db->conn, $aSQL);
		while ($row = mysqli_fetch_array($query)){
			$productname = $row["name"];
			$productprice =$row["price"];
			array_push($products, $productname);
			array_push($products, $productprice);
		}
		return $products;
	}
	public function viewProduct($category_id){

		$products = array();
		if($category_id != 0){
			$aSQL="SELECT * FROM products where category_id= '$category_id'";
		}else{
			
			$aSQL="SELECT * FROM products";
		}
		$query = mysqli_query($this->db->conn, $aSQL);
		while ($row = mysqli_fetch_array($query)){
			$product = array($row["id"], $row["name"], $row["description"], $row["price"], $row["supplier_id"], $row["category_id"],$row["image"]);
			array_push($products, $product);
		}
		return $products;
	}
}
?>
