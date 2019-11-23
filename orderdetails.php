<?php
session_start ();

require_once 'class/User.class.php';
$user = new User();
$orderId = isset($_GET['order_Id']) ? $_GET['order_Id'] : "";
$orders = $user->orderDetails($orderId);
$total = isset($_GET['total']) ? $_GET['total'] : "";
$prodNames = array();
foreach ($orders as $induser){
	$prodName = $user->getProductsName($induser[0]);
	array_push($prodNames, $prodName);
}
?>
<?php include ("header.php");?>
<h3>Orders</h3>
<table class="table">
<tr>
<th>Product</th>
<th>Price</th>
<th>Quantity</th>

</tr>
<?php 
$count = 0;
foreach ($orders as $induser){
	?>
	<tr>
	<td><?php echo $prodNames[$count];?></td>
	<td><?php echo $induser[2];?></td>
	
	<td><?php echo $induser[3];?></td>
	
	</tr>
	<?php 
	$count = $count + 1;
}
?>
<tr>
	<td></td>
	<td>
		<label>Sub Total:</label>
	</td>
	<td>
	   <?php echo $total;?>
	</td>
</tr>
<tr>
	<td></td>
	<td>
		<label>GST:</label>
	</td>
	<td>
	   <?php echo "15%";?>
	</td>
</tr>
<tr>
	<td></td>
	<td>
		<label>Grand Total:</label>
	</td>
	<td>
	   <?php 
	   $gt = $total + ((15/100)*$total);
	   echo $gt;
	   ?>
	</td>
</tr>

</table>
<div>
<?php
if($_SESSION["isAdmin"] == 1){
	
    ?>            <a href="adminOrder.php">Back to List</a>
	<?php			
}else{
	?>
	<a href="order.php">Back to List</a>
	<?php
}
?>
            </div>
<div></div>
<?php include ("footer.php");?>