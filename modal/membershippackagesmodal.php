<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add New Plan</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="../controller/membershippackagesController.php">
                <div class="form-group">
                    <label for="promo" class="col-sm-3 control-label">Promo</label>
                    <div class="col-sm-9">
                      <select class="form-control" name="promo">
                        <option value="No">Set a Promo?</option>
                        <option class="Yes">Yes</option>
                        <option class="No">No</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="category" class="col-sm-3 control-label">Category</label>
                    <div class="col-sm-9">
                      <input class="form-control" name="category" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="plan" class="col-sm-3 control-label">Plan</label>
                    <div class="col-sm-9">
                      <input class="form-control" name="plan" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="amount" class="col-sm-3 control-label">Amount</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" name="amount" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-sm-3 control-label">Description</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="description" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="startdate" class="col-sm-3 control-label">Start Date</label>
                    <div class="col-sm-9">
                            
                      <input type="date" class="form-control" name="startdate" min="<?php echo date('Y-m-d'); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="enddate" class="col-sm-3 control-label">End Date</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" name="enddate" min="<?php echo date('Y-m-d'); ?>">
                    </div>
                </div>
                <!-- <div class="form-group">
                    <label for="timein" class="col-sm-3 control-label">Time-in</label>
                    <div class="col-sm-9">
                      <input type="time" class="form-control" name="timein" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="timeout" class="col-sm-3 control-label">Time-out</label>
                    <div class="col-sm-9">
                      <input type="time" class="form-control" name="timeout" required>
                    </div>
                </div> -->
                <div class="form-group">
                    <label for="available" class="col-sm-3 control-label">Available</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" name="available" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>
<script>
	  		$( function() {
	   			$( "#startdate" ).datepicker({
	   				minDate: 0
	   			});
	  		});
        $( function() {
	   			$( "#enddate" ).datepicker({
	   				minDate: 0
	   			});
	  		});
	  	</script>

<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Edit Plan</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="../controller/membershippackagesController.php">
                <input type="hidden" class="form-control" id="edit_membershippackages_id" name="edit_membershippackages_id" required>
                <div class="form-group">
                    <label for="category" class="col-sm-3 control-label">Category</label>
                    <div class="col-sm-9">
                      <input class="form-control" id="edit_membershippackages_category" name="category">
                    </div>
                </div>
                <div class="form-group">
                    <label for="plan" class="col-sm-3 control-label">Plan</label>
                    <div class="col-sm-9">
                      <input class="form-control" id="edit_membershippackages_plan" name="plan" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="amount" class="col-sm-3 control-label">Amount</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="edit_membershippackages_amount" name="amount" required>
                    </div>
                </div>
               <div class="form-group">
                    <label for="startdate" class="col-sm-3 control-label">Start Date</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="edit_membershippackages_startdate" name="startdate" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="enddate" class="col-sm-3 control-label">End Date</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="edit_membershippackages_enddate" name="enddate" required>
                    </div>
                </div>
                 <!-- <div class="form-group">
                    <label for="timein" class="col-sm-3 control-label">Time-in</label>
                    <div class="col-sm-9">
                      <input type="time" class="form-control" id="edit_membershippackages_timein" name="timein" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="timeout" class="col-sm-3 control-label">Time-out</label>
                    <div class="col-sm-9">
                      <input type="time" class="form-control" id="edit_membershippackages_timeout" name="timeout" required>
                    </div>
                </div> -->
                <div class="form-group">
                    <label for="available" class="col-sm-3 control-label">Available</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="edit_membershippackages_available" name="available" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="edit"><i class="fa fa-save"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>



<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Deleting...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="../controller/membershippackagesController.php">
                <input type="hidden" name="delete_membershippackages_id" id="delete_membershippackages_id">
                <div class="text-center">
                    <p>DELETE PLAN</p>
                    <h2 class="bold catname"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
              </form>
            </div>
        </div>
    </div>
</div>