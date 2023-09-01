<?php include '../config/config.php'; ?>
<?php class controller extends Connection{ public function managecontroller(){

$p_id = $_POST['p_id'];

$sql = "SELECT * FROM customers_info INNER JOIN users ON customers_info.users_id=users.id WHERE customers_info.customers_info_status != 2";
$stmt = $this->conn()->prepare($sql);
$stmt->execute([]);
$row = $stmt->fetch();
?>
<img src="../images/<?php echo $row['proofs'] ?>" width="60%">    
<?php } } $controller = new controller(); $controller->managecontroller(); ?>