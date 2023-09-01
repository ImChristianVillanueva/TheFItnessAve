<?php include '../config/config.php'; ?>
<?php class controller extends Connection{ public function managecontroller(){

$p_id = $_POST['p_id'];

$sqlselect_users = "SELECT * FROM purchase WHERE id = '$p_id'";
$stmt = $this->conn()->prepare($sqlselect_users);
$stmt->execute([]);
$row = $stmt->fetch();
?>
<img src="../images/<?php echo $row['proof'] ?>" width="60%">    
<?php } } $controller = new controller(); $controller->managecontroller(); ?>
