<?php
session_start ();

require_once 'class/User.class.php';
$user = new User();

$suppliers = $user->suppliers();

?>
<?php include ("header.php");?>
<h3>Supplier</h3><a href="supplierAdd.php">Add Supplier</a>
<table class="table">
<tr>
<th>Id</th>
<th>Name</th>
<th>Email</th>
<th>Mobile Number</th>
</tr>
<?php 
foreach ($suppliers as $supplier){
?>
	<tr>
	<td><?php echo $supplier[0];?></td>
	<td><?php echo $supplier[1];?></td>
	<td><?php echo $supplier[2];?></td>
	<td><?php echo $supplier[3];?></td>	
	</tr>
<?php 
}
?>
</table>
<?php include ("footer.php");?>