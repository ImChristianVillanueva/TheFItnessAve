<?php
    
    include '../config/config.php';

    class products extends Connection{

        public function manageproducts(){

            if (isset($_POST['add'])) {

                date_default_timezone_set('Asia/Manila');
                $name = $_POST['name'];
                $category = $_POST['category'];
                $description = $_POST['description'];
                $stock = $_POST['stock'];
                $price = $_POST['price'];
                $date_created = date('Y-m-d h:i:s');

                $img = $_FILES['img']['name'];
                $tmp = $_FILES['img']['tmp_name'];
                move_uploaded_file($tmp, '../images/'.$img);
                
                $sqlinsert = "INSERT INTO inventory (img,name,category,description,stock,price,date_created) VALUES (?,?,?,?,?,?,?)";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([$img,$name,$category,$description,$stock,$price,$date_created]);

                echo "<script type='text/javascript'>alert('Successfully Add Inventory Product');</script>";
                echo "<script>window.location.href='../users/inventory.php';</script>";
            }

            if (isset($_POST['pos'])) {

                $inventory_id = $_POST['inventory_id'];

                $sqlselect_users = "SELECT * FROM inventory WHERE inventory_id = ?";
                $stmt = $this->conn()->prepare($sqlselect_users);
                $stmt->execute([$inventory_id]);
                $row = $stmt->fetch();

                

                $products_img = $row['img'];
                $products_category = $row['category'];
                $products_name = $row['name'];
                $products_description = $row['description'];
                $products__quantity = $_POST['products__quantity'];
                $products_price = $row['price'];


                $sqlselect_users = "SELECT * FROM products WHERE inventory_id = ?";
                $stmt = $this->conn()->prepare($sqlselect_users);
                $stmt->execute([$inventory_id]);
                if ($stmt->rowcount() > 0 ) {

                    $row2 = $stmt->fetch();

                   $products__quantity = $row2['products__quantity'] + $products__quantity;

                    $sqlinsert = "UPDATE products SET products__quantity = ? WHERE inventory_id = '".$inventory_id."'";
                    $statementinsert = $this->conn()->prepare($sqlinsert);
                    $statementinsert->execute([$products__quantity]);
                    
                }else{

                    $sqlinsert = "INSERT INTO products (inventory_id,category,products_img,products_name,products_description,products__quantity,products_price) VALUES (?,?,?,?,?,?,?)";
                    $statementinsert = $this->conn()->prepare($sqlinsert);
                    $statementinsert->execute([$inventory_id,$products_category,$products_img,$products_name,$products_description,$products__quantity,$products_price]);

                }


                $stock = $row['stock'] - $_POST['products__quantity'];

                $sqlinsert = "UPDATE inventory SET stock = ? WHERE inventory_id = '".$inventory_id."'";
                $statementinsert = $this->conn()->prepare($sqlinsert);
                $statementinsert->execute([$stock]);

                echo "<script type='text/javascript'>alert('Successfully Add POS Product');</script>";
                echo "<script>window.location.href='../users/inventory.php';</script>";
            }

            if (isset($_POST['edit'])) {
                try {
            
      
                $id = $_POST['id'];
                $name = $_POST['name'];
                $description = $_POST['description'];
                $stock = $_POST['stock'];
                $price = $_POST['price'];
    

                $img = $_FILES['img']['name'];
                $tmp = $_FILES['img']['tmp_name'];
                move_uploaded_file($tmp, '../images/'.$img);

                if ($img != '') {
                    
                    $sqlinsert = "UPDATE inventory SET 
                    
                    img = ?, 
                    name = ?, 
                    description = ?, 
                    stock = ?, 
                    price = ?

                    WHERE inventory_id = '".$id."'";

                    $statementinsert = $this->conn()->prepare($sqlinsert);
                    $statementinsert->execute([
                        
                        $img,
                        $name,
                        $description,
                        $stock,
                        $price
                        ]);
                }else{
                    $sqlinsert = "UPDATE inventory SET 
                    name = ?, 
                    description = ?, 
                    stock = ?, 
                    price = ?

                    WHERE inventory_id = '".$id."'";

                    $statementinsert = $this->conn()->prepare($sqlinsert);
                    $statementinsert->execute([
                        $name,
                        $description,
                        $stock,
                        $price]);

                }
           
                echo "<script type='text/javascript'>alert('Successfully Edit Inventory Product');</script>";
                echo "<script>window.location.href='../users/inventory.php';</script>";


  } catch (Exception $e) {
            echo 'error'. $e->getmessage();
        }

                
            }

            if (isset($_POST['delete'])) {

                $delete_id = $_POST['delete_id'];

                    $sqlinsert = "DELETE FROM inventory WHERE inventory_id = '".$delete_id."'";
                    $statementinsert = $this->conn()->prepare($sqlinsert);
                    $statementinsert->execute([]);
               
                    echo "<script type='text/javascript'>alert('Successfully Delete Inventory Product');</script>";
                    echo "<script>window.location.href='../users/inventory.php';</script>";
                
            }

        }

    }

    $productsrun = new products();
    $productsrun->manageproducts();

?>
