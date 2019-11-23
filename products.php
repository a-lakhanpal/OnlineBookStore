<?php
session_start ();
$category_id = isset($_GET['category_id']) ? $_GET['category_id'] : die('ERROR: missing ID.');
require_once 'class/User.class.php';
//require_once 'class/Product.class.php';
$user = new User();
//$prod = new Product();

$products = $user->viewProduct($category_id);

$categories = $user->categories();
?>
<?php include ("header.php");?>
<div>

	<div class="col-md-3" style="float: left;
    height: 100%;">
		<div class="list-group" id="categories" style="box-shadow: 0 1px 8px 0 rgba(0,0,0,.06);background: #fff;">
			<a class="list-group-item" href="products.php?category_id=0">All Categories</a>
			 <?php 
				foreach ($categories as $category){
			?>
			<a class="list-group-item" href="products.php?category_id=<?php echo $category[0]?>"><?php echo $category[1]; ?></a>
			 
			<?php
			}
			?>
		</div>
	</div>
	<div class="col-md-9" style="float: left;background: #fff;padding-top: 10px;box-shadow: 0 1px 8px 0 rgba(0,0,0,.06)">

	   <?php 
			foreach ($products as $product){
				?>
		 
			<div class="col-md-4" style="float:left !Important">
				<div class="single-product">
					<div class="product-f-image" style="height: 250px;width: 220px;margin-left: 14px;">
						<img src="images/<?php echo $product[6] ?>" style="width: 100%;height: 90%;">
					</div>
					<h2><span><?php echo $product[1]?></span></h2>
					
					<div class="product-carousel-price">
						<ins><?php echo $product[3]?></ins>
					</div>
					
					   <div ><a href="cart.php?pID=<?php echo $product[0] ?>" class="addBut">Add to cart</a></div>
					  	
					
				</div>
			</div>
			<?php
		}
		?>
	</div>

</div>
<div id="addToCartDiv" style="clear: both;"></div>
<?php include ("footer.php");?>
<script>

$( document ).ready(function() {
	$("#productNumDiv").load("showProductQuanties.php");
    $(".addBut").click(function(){
    	var num = Number($(this).parent().children('input').val());
    	var productID = Number($(this).parent().children('input').attr("proid"));
		var targetUrl = "addToCart.php?pID="+productID+"&quantity="+num;
		$.ajax({url: targetUrl, success: function(result){
			$("#productNumDiv").empty();
			$("#productNumDiv").load("showProductQuanties.php");
		}});
		
		
    });
		
    
});

</script>