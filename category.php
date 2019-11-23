<?php
session_start ();

require_once 'class/User.class.php';
$user = new User();

$categories = $user->categories();

?>
<?php include ("header.php");?>
<h3>Category</h3><a href="categoryAdd.php">Add Category</a>
<table class="table">
<tr>
<th>Id</th>
<th>Name</th>
</tr>
<?php 
foreach ($categories as $category){
	?>
	<tr>
	<td><?php echo $category[0];?></td>
	<td><?php echo $category[1];?></td>
	</tr>
	<?php 
}
?>
</table>
<?php include ("footer.php");?>