<?php include ("header.php");?>
<div class="maincontent-area">
    <div class="container">
        <div class="row">
            <div style="width:100%"><h4>Supplier</h4></div>
            <div class="row">
                <div>
                    <form action="supplierController.php" method="post">
                        <div class="form-group">
                            <label  class="control-label">Name</label>
							<input class="form-control" name="suppliername"/>
                            
                        </div>
                        <div class="form-group">
                            <label  class="control-label">Email</label>
							<input  class="form-control"  name="supplieremail"/>
                            
                        </div>
                        <div class="form-group">
                            <label  class="control-label">Address</label>
                            <input  class="form-control"  name="supplieraddress"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Mobile</label>
                            <input class="form-control" name="suppliermobile"/>
              
                        </div>
						
                        <div class="form-group">
                            <input type="submit" value="Create" class="btn btn-default" />
                        </div>
                    </form>
                </div>
            </div>
            <div>
                <a href="supplier.php">Back to List</a>
            </div>
        </div>
    </div>
</div>
<?php include ("footer.php");?>