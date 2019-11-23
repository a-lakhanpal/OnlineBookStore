<?php
session_start ();

require_once 'class/User.class.php';
$user = new User();
$orders = $user->orders($_SESSION["userID"]);

//$orders = $_SESSION["orders"];
$Total = $_SESSION["totalamt"];
?>
<?php include ("header.php");?>
<h3>Orders</h3>
<table class="table">
<tr>
<th>User Id</th>
<th>Sub Total</th>
<th>GST</th>
<th>Grand Total</th>
<th>Date</th>
<th>Status</th>
</tr>
<?php 
foreach ($orders as $order){
	?>
	<tr>
	
	<td><?php echo $order[1];?></td>
	<td><?php echo $order[2];?></td>
	<td><?php echo 15;?></td>
	<td><?php echo $order[4];?></td>
	<td><?php echo $order[5];?></td>
	<td><a href="orderdetails.php?order_Id=<?php echo $order[0];?>&total=<?php echo $order[2];?>">Order Details</a></td>
	</tr>
	<?php 
}
?>
</table>
<?php include ("footer.php");?>