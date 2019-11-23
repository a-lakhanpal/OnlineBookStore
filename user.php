<?php
session_start ();

require_once 'class/User.class.php';
$user = new User();

$users = $user->allUser();

?>
<?php include ("header.php");?>
<h3>Users</h3>
<table class="table">
<tr>
<th>Id</th>
<th>Username</th>
<th>Name</th>

<th>Phone Number</th>
<th>Address</th>
<th>Activate/Deactivate</th>
</tr>
<?php 
foreach ($users as $induser){
	?>
	<tr>
	<td><?php echo $induser[0];?></td>
	<td><?php echo $induser[1];?></td>
	
	<td><?php echo $induser[3];?></td>

	<td><?php echo $induser[5];?></td>
	<td><?php echo $induser[6];?></td>
	<td><input type='checkbox' id='chkCart<?php echo $induser[0]; ?>' userid='<?php echo $induser[0]; ?>'  <?php echo ($induser[7]==1 ? 'checked' : '');?>/><label for='chkCart<?php echo $induser[0] ?>'><?php echo ($induser[7]==1 ? 'Activated' : 'Deactivated' );?></label></td>
	</tr>
	<?php 
}
?>
</table>
<?php include ("footer.php");?>
<script>
//$('#checkbox').prop('checked', true)
$( document ).ready(function() {
	$("#chkCart").click(function () {
        
		var userid = Number($this.attr("userid"));
        
		var isChecked = $(this).is(":checked");
		var targetUrl = "activate.php?activateid="+userid+"&checked="+isChecked;
		$.ajax({url: targetUrl, success: function(result){
			var lbl = $("label[for='"+$(this).attr('id')+"']");
			lbl.text($(this).is(":checked")?"Activated":"Deactivated");
		}});
    });
});

</script>