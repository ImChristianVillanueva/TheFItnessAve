<?php
$sql = " SELECT * FROM users  WHERE id = '".$_SESSION['id']."'";
$stmt = $this->conn()->query($sql);
$stmt->execute([]);
$rowusers = $stmt->fetch();
?>