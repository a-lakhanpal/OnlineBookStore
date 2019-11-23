<?php include ("header.php");?>
<div class="maincontent-area">
    <div class="container">
        <div class="row" style="TEXT-ALIGN: -webkit-center;">
			<div class="col-md-4">
			</div>
            <div class="col-md-8">
                <section>
					<form action="register.php"
						method="post">
						
						<h4 style="text-align: left;">Register</h4>
                        <hr />
                        <div asp-validation-summary="All" class="text-danger"></div>
                        <div class="form-group">
                            <label>Username</label>
                            <input class="form-control" name="username"/>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" name="password" type="password"/>
                        </div>
						<div class="form-group">
                            <label>Name</label>
                            <input class="form-control" name="regname"/>
                        </div>
                        <div class="form-group">
                            <label>Mobile</label>
                            <input class="form-control" name="regphone"/>
                        </div>
						<div class="form-group">
                            <label>Address</label>
                            <input class="form-control" name="regadd"/>
                        </div>
                      
                        <div class="form-group">
                            <button type="submit" name="Login" class="btn btn-default">Register</button>
                        </div>
					</form>
				</section>
            </div>
        </div>
    </div>
</div>
<?php include ("footer.php");?>