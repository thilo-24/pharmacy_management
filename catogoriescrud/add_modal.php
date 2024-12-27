
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Item Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="itemname" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Category Type:</label>
					</div>
					<div class="col-sm-10">
					<select name="type" class="form-control">
						<option value="">Select Category</option>
                        <option value="category1">Kids Items</option>
                        <option value="category2">Women Items</option>
                        <option value="category3">Mans Items</option>
						<option value="category3">Animal Items</option>
						<option value="category3">Common Things</option>
                    </select>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Quantity:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="quantity" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Item Details:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="itemdetail" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Item image:</label>
					</div>
					<div class="col-sm-10">
						<input type="file" class="form-control" name="image" required>
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>

        </div>
    </div>
</div>