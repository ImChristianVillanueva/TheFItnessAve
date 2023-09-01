<?php

$servername="localhost";
$uname="root";
$pass="";
$db="gymgym";

$conn=mysqli_connect($servername,$uname,$pass,$db);

if(!$conn){
    die("Connection Failed");
}

$sql = "SELECT *,m.startdate AS m_startdate, m.enddate AS m_enddate, p.id AS p_id, p.status AS p_status, i.timein AS i_timein, i.timeout AS i_timeout FROM purchase p INNER JOIN membershippackages m ON m.id=p.membershippackages_id INNER JOIN users u ON u.id=p.users_id 
INNER JOIN instructors i ON p.instructors_id=i.id";
                $query = $conn->query($sql);

                echo "$query->num_rows";
                
?>