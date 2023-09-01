<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Purchase Plan</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="../controller/purchaseController.php">
                <label for="instructors" class=" control-label">Instructors</label>
                <select class="form-control" id="instructors_id" name="instructors_id" required>
                  <option value="">Select Instructors</option>
                    <?php
                      $sql = "SELECT * FROM instructors";
                      $stmt = $this->conn()->query($sql);
                      while ($row = $stmt->fetch()) { ?>
                    ?>
                      <option value="<?php echo $row['id'] ?>"> Name:<?php echo $row['instructors'] ?> / Fee:<?php echo $row['fee'] ?></option>
                    <?php } ?>
                </select>
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


<div class="modal fade" id="makepayment">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Make Payment</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="../controller/purchaseController.php" enctype="multipart/form-data">
                <label for="plan" class=" control-label">Upload Proof</label>
                <input type="hidden" id="p_id" name="p_id">
                <input type="file" name="proof" class="form-control">
                </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="makepayment"><i class="fa fa-save"></i> Save</button>
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
              <form class="form-horizontal" method="POST" action="../controller/purchaseController.php">
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