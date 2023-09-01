<?php 
    session_start();
    include '../config/config.php';
    class data extends Connection{
        public function managdata(){

            $users_id = $_SESSION['id'];

            $sql = "SELECT * FROM cart INNER JOIN products ON cart.products_id=products.products_id WHERE cart.users_id = '".$users_id."'";
            $stmtmycart = $this->conn()->query($sql); 
            while ($row = $stmtmycart->fetch()) { ?>
                <tr class="border">
                    <td class="p-2"><a href="cart.php" class="nav-link"><img src="./images/<?php echo $row['products_img'] ?>" width="50px"></a></td>
                    <td class="p-2"><?php echo $row['products_name'] ?></td>
                    <td class="p-2">
                        <div class="d-flex">
                            <button class="button btn border rounded-0 btn-dark btnminus" style="width: 40px" value="<?php echo $row['cart_id'] ?>">-</button>
                        <input type="text" class="input btn border rounded-0 shadow-none" value="<?php echo $row['quantity'] ?>" style="width: 50px;">
                            <button class="button btn border rounded-0 btn-dark" style="width: 40px" value="<?php echo $row['cart_id'] ?>">+</button>
                        </div>
                    </td>
                    <td class="p-2"><?php echo $row['products_price'] ?></td>
                    <td class="p-2"><?php echo $row['quantity'] * $row['price'] ?></td>
                    <td><a class="text-danger" href="controller/deletecartController.php?cart_id=<?php echo $row['cart_id'] ?>"><i class="fas fa-times"></i></a></td>
                </tr>
<?php      } 

        }
    }
    $datarun = new data();
    $datarun->managdata();
 ?>





<script type="text/javascript">
    $(function() {
 $(".button").on("click", function() {
   var $button = $(this);
   var add = 'add';
   var minus = 'minus';
   var $parent = $button.parent(); 
   var btnminus = $('.btnminus').parent(); 
   var oldValue = $parent.find('.input').val();

   if ($button.text() == "+") {
      var newVal = parseFloat(oldValue) + 1;
      
      $.ajax({
        url:'./controller/quantityController.php',
        type: 'POST',
        data: {add:add,cart_id:$(this).val(),},
        success:function(data){
             location.reload()
        }
      });
    } else {
       // Don't allow decrementing below zero
      if (oldValue > 1) {
        var newVal = parseFloat(oldValue) - 1;
        } else {
        newVal = 1;
      }
      $.ajax({
        url:'./controller/quantityController.php',
        type: 'POST',
        data: {minus:minus,cart_id:$(this).val(),},
        success:function(data){
             location.reload()
        }
      });
      }

      btnminus.attr('disabled', true)
    $parent.find('a.add-to-cart').attr('data-quantity', newVal);
    $parent.find('.input').val(newVal);


 });
});

  
</script>
                                    










