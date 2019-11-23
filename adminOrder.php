<?php
session_start ();

require_once 'class/User.class.php';
$user = new User();
$orders = $user->ordersAdmin();

//$orders = $_SESSION["orders"];
//$Total = $_SESSION["totalamt"];
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
<th>Details</th>
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
	<td><button onclick="changestatus(<?php echo $order[6];?>, <?php echo $order[0];?>)" id="<?php echo $order[0];?>"><?php echo ($order[6]==0 ? 'Order Placed' : 'Shipped'); ?></button></td>
	</tr>
	<?php 
}
?>
</table>
<?php include ("footer.php");?>
<script>
$( document ).ready(function() {
function changestatus (status, id){
	if(status==0){
		var targetUrl = "shipOrder.php?orderstatus="+status+"&ordersid="+id;
		$.ajax({url: targetUrl, success: function(result){
			var lbl = $(this).attr('id');
			lbl.html("Shipped");
		}});
	}
}
});
</script>