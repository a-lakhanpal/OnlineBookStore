<?php 
session_start ();
require_once 'class/User.class.php';
?>
<?php include ("header.php");?>
<div class="maincontent-area">
    <div class="container">
        <div class="row">
            <div style="width:100%"><h4>Address</h4></div>
            <div class="row">
                <div>
                    <form action="ordercontroller.php" method="post">
                        <div class="form-group">
                            <label  class="control-label">Name</label>
							<input  value="<?php echo $_SESSION["name"];?>" class="control-label" disabled/>
                        </div>

						<div class="form-group">
                            <label  class="control-label">Phone</label>
							<input  value="<?php echo $_SESSION["phoneNumber"];?>" class="control-label"/>
                        </div>		
						<div class="form-group">
                            <label  class="control-label">Address</label>
							<input type="textarea"  value="<?php echo $_SESSION["address1"];?>" class="control-label"/>
                        </div>						
                        <div class="form-group">
                            <input type="submit" value="Place Order" class="btn btn-default" />
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</div>
<?php include ("footer.php");?>