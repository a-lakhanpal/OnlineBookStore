<?php include ("header.php");?>
<div class="maincontent-area">
    <div class="container">
        <div class="row">
            <div style="width:100%"><h4>Supplier</h4></div>
            <div class="row">
                <div>
                    <form action="userController.php" method="post">
                        <div class="form-group">
                            <label  class="control-label">User Name</label>
							<input class="form-control" name="usrname"/>
                            
                        </div>
                        <div class="form-group">
                            <label  class="control-label">Password</label>
							<input  class="form-control"  name="usrpwd"/>
                            
                        </div>
                        <div class="form-group">
                            <label  class="control-label">Name</label>
                            <input  class="form-control"  name="usrfirstname"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">isAdmin</label>
                            <input class="form-control" name="usradmin"/>
              
                        </div>
						<div class="form-group">
                            <label class="control-label">Mobile</label>
                            <input class="form-control" name="ursmobile"/>
              
                        </div>
						<div class="form-group">
                            <label class="control-label">Address</label>
                            <input class="form-control" name="ursaddress"/>
              
                        </div>
						<div class="form-group">
                            <label class="control-label">Status</label>
                            <input class="form-control" name="ursstatus"/>
              
                        </div>
						
                        <div class="form-group">
                            <input type="submit" value="Create" class="btn btn-default" />
                        </div>
                    </form>
                </div>
            </div>
            <div>
                <a href="user.php">Back to List</a>
            </div>
        </div>
    </div>
</div>
<?php include ("footer.php");?>