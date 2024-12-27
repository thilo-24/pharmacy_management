<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Member</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Item Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="itemname" value="<?php echo $row['itemname']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Category Type:</label>
					</div>
					<div class="col-sm-10">
					<select name="type" class="form-control">
						<option value=""><?php echo $row['type']; ?></option>
                        <option value="category1">kids items</option>
                        <option value="category2">woman items</option>
                        <option value="category3">man item</option>
						<option value="category3">Animal items</option>
						<option value="category3">Common item</option>
                        
                    </select>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Quantity:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="quantity" value="<?php echo $row['quantity']; ?>">
					</div>
				</div>
					<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Item Details:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="itemdetail" value="<?php echo $row['itemdetail']; ?>">
					</div>
				</div>
					<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Item image:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="image" value="<?php echo $row['image']; ?>">
					</div>
				</div>
            </div> 
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Member</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['itemname'].' '.$row['type']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>