
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>QualityBooks</title>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		
	
	</head>


<div class="header-area">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="logo">
							<a href='index.php'><img src="images/logo_orange.png" height="70" width="70"></a>
						</div>
					</div>
					<div class="col-md-10">
						<div class="user-menu">
						
							
											
							<?php
								
								if (isset ( $_SESSION["userID"] )) {
									if($_SESSION["isAdmin"] == 1){
									
							?>
							
										<ul>
											<li>
												<span>Hello <?php echo $_SESSION["name"];?>!</span>
											</li>
												<li><a href='index.php'>Home</a></li>
												<li><a href='user.php'>Users</a></li>
												<li><a href='category.php'>Categories</a></li>
												<li><a href='supplier.php'>Suppliers</a></li>
												<li><a href="adminProduct.php">Products</a></li>
												<li><a href='adminOrder.php'>Orders</a></li>
											
											<li>
												<a href="logout.php" class="btn btn-link navbar-btn navbar-link" style="border-radius: 5px;">Log out</a>
											</li>
										</ul>
							<?php
									}else{
							
							?>
										<ul>
											<li>
												<span>Hello <?php echo $_SESSION["name"];?>!</span>
											</li>
											<li><a href="index.php">Home</a></li>
											<li><a href="products.php?category_id=0">Products</a></li>
											<li>
												<a href="order.php"><i class="far fa-box-full"></i> My Orders</a>
											</li>
											<li>
												<a href="cart.php"><i class="fas fa-shopping-cart"></i> My Cart</a>
											</li>
                                            <li><a href="about.php">About Us</a></li>
                                            <li><a href="contact.php">Contact Us</a></li>
											<li>
												<a href="logout.php" class="btn btn-link navbar-btn navbar-link" style="border-radius: 5px;">Log out</a>
											</li>
										</ul>
							
							<?php
									}
								} else{
									
							?>
									<ul>
									<li><a href="products.php?category_id=0">Products</a></li>
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                    <li><a href='registerForm.php'>Register</a></li>
                                    <li><a href='loginForm.php'>Log in</a></li>
                                    
										
									</ul>
							<?php 
								}

							?>
							
							
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
