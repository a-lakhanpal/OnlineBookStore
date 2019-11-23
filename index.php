
<!DOCTYPE html>
<html>
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
	<body>
		<?php include 'header.php';?>
        
        <div id = "content">
		
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="6000" style="overflow: hidden;">
				<div class="carousel-inner">
					<div class="item active">
						<img src="images/advertize.jpg"/>
                    </div>
                    </div>
						<?php
							session_start ();
							
								if($_SESSION["isAdmin"] == 0){
								
							?>
						<div class="carousel-caption" role="option">
							<p>
								<a href="products.php?category_id=0"></a>
							</p>
						</div>
						<?php
							}
							
								
						?>
					</div>
					
				</div>

				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
				<div class="row" style="position: absolute;top: 50%;width: 100%;height: auto; overflow: hidden; margin-right: 0px; margin-left: 0px;">
					
						<div class="col-md-3 col-centered">
							<img src="images/instantmaori.jpg" style="height:250px;">
							<h3 class="marketing-header" ><a href="products.php?category_id=0">Buy Maori Books</a>
							</h3>
						</div>
                    
						<div class="col-md-3 col-centered">
							<a href="products.php"><img src="images/leanstartup.jpeg" width="200" height="200"  style="height:250px;"></a>
							<h3 class="marketing-header"><a href="products.php?category_id=0">Buy Business Books</a>
							</h3>
						</div>
						<div class="col-md-3 col-centered">
							<img src="images/popart.jpeg" width="200" height="200"  style="height:250px;">
							<h3 class="marketing-header" ><a href="products.php?category_id=0">Buy Arts & Music Books</a>
							</h3>
						</div>
					
				   <div class="col-md-3 col-centered">
							<img src="images/tigerwoods.jpeg" width="200" height="200"  style="height:250px;">
							<h3 class="marketing-header" ><a href="products.php?category_id=0">Buy Sports Books</a>
							</h3>
						</div>

				</div>
			</div>

		</div>
		<?php include 'footer.php';?>
		

	</body>
</html>
