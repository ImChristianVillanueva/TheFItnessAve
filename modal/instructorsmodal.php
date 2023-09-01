<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add New Instructors</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="../controller/instructorsController.php">
                <div class="form-group">
                    <label for="instructors" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-9">
                      <input class="form-control" name="instructors" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="time" class="col-sm-3 control-label">Time in</label>
                    <div class="col-sm-9">
                      <input type="time" class="form-control" name="timein" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="time" class="col-sm-3 control-label">Time out</label>
                    <div class="col-sm-9">
                      <input type="time" class="form-control" name="timeout" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="fee" class="col-sm-3 control-label">Fee</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" name="fee" required>
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
              <form class="form-horizontal" method="POST" action="../controller/instructorsController.php">
                <input type="hidden" name="delete_instructors_id" id="delete_instructors_id">
                <div class="text-center">
                    <p>DELETE INSTRUCTOR</p>
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