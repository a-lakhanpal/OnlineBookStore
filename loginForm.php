<?php include ("header.php");?>
<div class="maincontent-area">
    <div class="container">
        <div class="row" style="TEXT-ALIGN: -webkit-center;">
            <div class="col-md-8">
                <section>
					<form action="login.php"
						method="post">
						
						<h4>Log in</h4>
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
                            <button type="submit" name="Login" class="btn btn-default">Log in</button>
                        </div>
                        <div class="form-group">
                            <p>
                                <a>Forgot your password?</a>
                            </p>
                            <p>
                                <a href="registerForm.php">Register as a new user?</a>
                            </p>
                        </div>
					</form>
				</section>
            </div>
        </div>
    </div>
</div>
<?php include ("footer.php");?>