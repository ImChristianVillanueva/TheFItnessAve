<?php  
  include '../config/config.php';
  class data extends Connection{ public function managedata(){ 

    $sql = "SELECT * FROM membershippackages WHERE id = '".$_POST['membershippackages_id']."'";
    $stmt = $this->conn()->query($sql);
    $row = $stmt->fetch();
?>
    <div class="form-group">
      <div class="col-sm-6">
        <label for="plan" class="control-label">Star Date</label>
        <input class="form-control" value="<?php echo $row['startdate'] ?>" required>
      </div>
      <div class="col-sm-6">
        <label for="plan" class="control-label">End Date</label>
        <input class="form-control" value="<?php echo $row['enddate'] ?>" required>
      </div>
    </div>
    <!-- <div class="form-group">
      <div class="col-sm-6">
        <label for="plan" class="control-label">Time in</label>
        <input class="form-control" value="<?php echo $row['timein'] ?>" required>
      </div>
      <div class="col-sm-6">
        <label for="plan" class="control-label">Time out</label>
        <input class="form-control" value="<?php echo $row['timeout'] ?>" required>
      </div>
    </div> -->
<?php } } $data = new data(); $data->managedata(); ?>