<?php
session_start ();

require_once 'class/User.class.php';
$user = new User();
$orderId = isset($_GET['order_Id']) ? $_GET['order_Id'] : die('ERROR: missing ID.');
//$orders = $user->ordersDetails($orderId);

?>
<?php include ("header.php");?>
<h3>Orders</h3>
<table class="table">
<tr>
<th>Id</th>
<th>Name</th>
<th>Id</th>
<th>Name</th>
<th>Id</th>
<th>Name</th>
<th>Name</th>
</tr>
<?php 

?>
</table>
<?php include ("footer.php");?>