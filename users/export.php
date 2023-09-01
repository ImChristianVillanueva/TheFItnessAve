<?php  
  include '../config/config.php';
  class data extends Connection{ 
      public function managedata(){ 



$output = '';
if(isset($_POST["export"]))
{

    $sql = "SELECT * FROM report";
          $stmt = $this->conn()->query($sql);

 if($stmt->rowcount() > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <th>Revenue</th>
                  <th>Month</th>
                  <th>Year</th>
                    </tr>
  ';
  while ($row = $stmt->fetch()) 
  {

if ($row['month'] == 1) {$month = "January";}
else if ($row['month'] == 2) {$month = "February";}
else if ($row['month'] == 3) {$month = "March";}
else if ($row['month'] == 4) {$month = "April";}
else if ($row['month'] == 5) {$month = "May";}
else if ($row['month'] == 6) {$month = "June";}
else if ($row['month'] == 7) {$month = "July";}
else if ($row['month'] == 8) {$month = "August";}
else if ($row['month'] == 9) {$month = "September";}
else if ($row['month'] == 10) {$month = "October";}
else if ($row['month'] == 11) {$month = "November";}
else if ($row['month'] == 12) {$month = "December";}
   $output .= '
    <tr>
      <td>'.$row["total"].'</td>
      <td>'.$month.'</td>
      <td>'.$row["year"].'</td>
      </tr>';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=report.xls');
  echo $output;
 }
}




             }
                        
                  }

                    $data = new data();
                    $data->managedata();

?>