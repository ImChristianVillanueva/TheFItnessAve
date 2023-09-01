<?php

$servername="localhost";
$uname="root";
$pass="";
$db="gymgym";

$conn=mysqli_connect($servername,$uname,$pass,$db);

if(!$conn){
    die("Connection Failed");
}

$sql = "SELECT * FROM customers_info INNER JOIN users ON customers_info.users_id=users.id WHERE customers_info.customers_info_status != 2";
                $query = $conn->query($sql);

                echo "$query->num_rows";
                
?>