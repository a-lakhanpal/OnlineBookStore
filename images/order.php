<?php
session_start ();

require_once 'class/User.class.php';
$user = new User();


$orders = $_SESSION["orders"];
$Total = $_SESSION["totalamt"];
?>
<?php include ("header.php");?>
<h3>Orders</h3>
<table class="table">
<tr>
<th>Id</th>
<th>Name</th>
</tr>
<?php 

?>
</table>
<?php include ("footer.php");?>