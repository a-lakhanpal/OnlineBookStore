<?php
session_start ();

require_once 'class/User.class.php';
$user = new User();

$suppliers = $user->suppliers();
$categories = $user->categories();
?>

<?php include ("header.php");?>
<div class="maincontent-area">
    <div class="container">
        <div class="row">
            <div style="width:100%"><h4>Product</h4></div>
            <div class="row">
                <div>
                    <form action="productcontroller.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label  class="control-label">Category</label>
							<select name="prodcategory" class="form-control">
                                <option value="">-- Select Category --</option>
								
								<?php  foreach($categories as $category){?>
								<option value="<?php echo $category[0]; ?>"><?php echo $category[1]; ?></option>
								
								<?php } ?>
                            </select>
                            
                        </div>
                        <div class="form-group">
                            <label  class="control-label">Supplier</label>
							<select name="prodsupplier" class="form-control">
                                <option value="">-- Select Supplier --</option>
								
								<?php  foreach($suppliers as $supplier){?>
								<option value="<?php echo $supplier[0]; ?>"><?php echo $supplier[1]; ?></option>
								
								<?php } ?>
                            </select>
                            
                        </div>
                        <div class="form-group">
                            <label  class="control-label">Name</label>
                            <input  class="form-control" type= "text" name="prodname"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Description</label>
                            <input class="form-control" type= "text" name="proddescription"/>
              
                        </div>
						<div class="form-group">
                            <label class="control-label">Price</label>
                            <input class="form-control" type= "text" name="prodprice"/>
              
                        </div>
                        <div class="form-group">
                            <label class="control-label">Add Image</label>
                            <input type="file" name="prodimage" />
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Create" class="btn btn-default" />
                        </div>
                    </form>
                </div>
            </div>
            <div>
                <a href="adminProduct.php">Back to List</a>
            </div>
        </div>
    </div>
</div>
<?php include ("footer.php");?>