<?php
  include '../config/config.php';
  class data extends Connection{ 
      public function managedata(){ 

        $sql = "SELECT * FROM customers_info INNER JOIN users ON customers_info.users_id=users.id WHERE customers_info.customers_code = '".$_GET['customers_code']."'";
        $stmt = $this->conn()->query($sql);
        $row = $stmt->fetch();
        $total = $row['total']
?>




    <!-- Content Header (Page header) -->
    <section>
      <h1 style="text-align: center">MSC OFFICIAL WEBSITE</h1>
      <h4 style="text-align: center">#10 Eisenhower Street, Greenhills, 1503 Metro Manila</h4>
      <h4 style="text-align: center">+639-1234-567-89</h4>
      <h4 style="text-align: center">msc@email.com</h4>

      <br>
      <div>
        <h4 style="float: left;">Transaction No.: <?php echo $row['customers_code'] ?></h4>
        <h4 style="float: right;">Date: <?php echo $row['customers_code'] ?></h4>
      </div>
      
      <div style="text-align: left;">
        <h4>Customer: <?php echo $row['user_first_name']." ".$row['user_last_name'] ?></h4>
        <h4>Contact: <?php echo $row['user_contact'] ?></h4>
        <h4>Address: <?php echo $row['user_address'] ?></h4>
      </div>

    </section>

 
              <table width="100%">
                <thead>
                  <th style="text-align: left;">Products Name</th>
                  <th style="text-align: right;">Quantity</th>
                  <th style="text-align: right;">Price</th>
                  <th style="text-align: right;">Amount</th>
                </thead>
                <tbody>


        <?php


          $sql = "SELECT * FROM products INNER JOIN orders ON products.products_id=orders.products_id WHERE orders.customers_code = '".$_GET['customers_code']."'";
          $stmt = $this->conn()->query($sql);
          while ($row = $stmt->fetch()) { 

        ?>
        
                          <tr>
                            <td style="padding: 10px 0px;"><?php echo $row['products_name'] ?></td>
                            <td style="padding: 10px 0px;text-align: right;"><?php echo $row['products_qty'] ?></td>
                            <td style="padding: 10px 0px;text-align: right;"><?php echo $row['products_price']; ?></td>
                            <td style="padding: 10px 0px;text-align: right;"><?php echo $row['products_qty'] * $row['products_price']; ?></td>
                          </tr>
    
                      <?php 

                          }
                          ?>



                </tbody>
              </table>
              <div style="text-align: right;margin-top: 50px;"><h4>Total: PHP <?php echo number_format($total,2); ?></h4></div>


<script>



     window.print();
    
  window.onafterprint = window.close; 

</script>




     <?php
                      }
                        
                  }

                    $data = new data();
                    $data->managedata();
                              
                  ?>