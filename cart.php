<?php 
session_start();
$pID = $_GET["pID"];
require_once( 'class/User.class.php' );
$user = new User();
$prod = $user->getProductsNameandPrice($pID);
$cart = $user->insertCart($_SESSION["userID"],$pID ,1 ,$prod[0], $prod[1]);
$cartItem = $user->getCart($_SESSION["userID"]);

$total = 0;
$orders =  array();

?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<?php include 'header.php';?>
<div id = "header"><h1>Shop</h1></div>
<div id = "content">

<table class="table">
<tr>
<th>
Product
</th>
<th>
Price
</th>
<th>
Quantity
</th>

<th>
</th>
</tr>
<?php

foreach($cartItem as $cart){
		$order = array($cart[1], $cart[4], $cart[5], $cart[3]);
		array_push($orders, $order);
	?>
	<tr id= "<?php echo $cart[0]; ?>">
	<td>
	<?php echo $cart[4]; ?>
	</td>
	<td>
	<?php echo $cart[5]; ?>
	</td>
	<td>
	<input type = "number" value = "<?php  echo $cart[3]; ?>">
	</td>
	<td>
	
	<a href="deleteCart.php?uId=<?php echo $cart[0]; ?>" class = "remBut">Remove</a>
	</td>
	</tr>
	<?php
	$quanty = (int)$cart[3];
	 $singlecost =  (int)$cart[5];
	 $cost =  $quanty * $singlecost;
	 $total = $total + $cost;

}
 $_SESSION["orders"]= $orders;
 $_SESSION["totalamt"]= $total;

?>
</table>
<?php

if (sizeof($cartItem) > 0){
	
	?>
<div style="text-align: center; padding-top:10px;">Total: <span class = "inline" id = "calculatePriceDiv"><?php echo $total; ?></span></div>
</div>

<div>
	<a href="products.php?category_id=0">Back to List</a>
</div>
<div style="text-align: right;margin: 20px 100px;">
<button id="clearcart" onclick="removeFromCart()">Clear Cart</button><a style="    -webkit-appearance: button;
    color: buttontext;
    background-color: buttonface;
    box-sizing: border-box;
    padding: 1px 6px 1px;
    border-width: 2px;
    border-style: outset;
    border-color: buttonface;
    border-image: initial;
    margin-left: 10px;" href="address.php">Proceed To Checkout</a>

</div>


<?php 
}
if($_SERVER['REQUEST_URI'] !== "/QualityBooks/cart.php"){
	header('Location: /QualityBooks/cart.php');
}
 ?>
<?php include ("footer.php");?>


<script>

function removeFromCart(){
	//alert(0);
	//var productID = Number($(this).parent().children('input').attr("proid"));
	var targetUrl = "updateCart.php";
	$.ajax({url: targetUrl, success: function(result){
			//$("#"+id).empty();

			//$("#"+id).load("showProductQuanties.php");
		}});
		document.location.reload()
}

</script>
