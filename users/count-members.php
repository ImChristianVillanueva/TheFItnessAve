<?php

$servername="localhost";
$uname="root";
$pass="";
$db="gymgym";

$conn=mysqli_connect($servername,$uname,$pass,$db);

if(!$conn){
    die("Connection Failed");
}

$sql = "SELECT * FROM users WHERE qrcode != '' AND delete_status = 0";
                $query = $conn->query($sql);

                echo "$query->num_rows";
                
?>