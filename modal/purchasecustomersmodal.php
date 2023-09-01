<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Purchase Plan</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="../controller/purchasecustomersController.php">
                <label for="plan" class=" control-label">Plan</label>
                <select class="form-control" id="membershippackages_id" name="membershippackages_id" required>
                  <option value="">Select Plan</option>
                    <?php
                      $sql = "SELECT * FROM membershippackages";
                      $stmt = $this->conn()->query($sql);
                      while ($row = $stmt->fetch()) { ?>
                    ?>
                      <option value="<?php echo $row['id'] ?>"> <?php echo $row['plan'] ?></option>
                    <?php } ?>
                </select>
                <div class="membershippackages_show">
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


<div class="modal fade" id="showproof">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Proof Payment</b></h4>
            </div>
            <div class="modal-body">
                <div class="showproof" style="text-align: center;"></div>
                </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-right" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="approved">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Approved</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="../controller/purchasecustomersController.php">
                <input type="hidden" name="approved_purchase_id" id="approved_purchase_id">
                <input type="hidden" name="approved_amount" id="approved_amount">
                <div class="text-center">
                    <p>Are You Sure You Want To Approved This Customer?</p>
                    <h2 class="bold catname"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="approved"><i class="fa fa-check"></i> Approved</button>
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
              <form class="form-horizontal" method="POST" action="../controller/purchasecustomersController.php">
                <input type="hidden" name="delete_purchase_id" id="delete_purchase_id">
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