<?php
session_start ();

require_once 'class/User.class.php';
$user = new User();

$products = $user->viewProducts();


//$name,$description, $price , $supplier_id, $category_id, $image



?>
<?php include ("header.php");?>
<h3>Products</h3><a href="productAdd.php">Add Product</a>
<table class="table">
<tr>
<th>Id</th>
<th>Name</th>
<th>Description</th>
<th>Price</th>
<th>Image</th>
</tr>
<?php 
foreach ($products as $product){
	?>
	<tr>
	<td><?php echo $product[0];?></td>
	<td><?php echo $product[1];?></td>
	
	<td><?php echo $product[2];?></td>
	<td><?php echo $product[3];?></td>
	<td><img src="images/<?php echo $product[6] ?>" style="width: 100px;height: 100px;"></td>
	</tr>
	<?php 
}
?>
</table>
<?php include ("footer.php");?>