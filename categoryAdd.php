<?php include ("header.php");?>
<div class="maincontent-area">
    <div class="container">
        <div class="row">
            <div style="width:100%"><h4>Category</h4></div>
            <div class="row">
                <div>
                    <form action="categoryController.php" method="post">
                        <div class="form-group">
                            <label  class="control-label">Category Name</label>
							<input class="form-control" name="categoryName"/>                            
                        </div>						
                        <div class="form-group">
                            <input type="submit" value="Create" class="btn btn-default" />
                        </div>
                    </form>
                </div>
            </div>
            <div>
                <a href="category.php">Back to List</a>
            </div>
        </div>
    </div>
</div>
<?php include ("footer.php");?>