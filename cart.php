<?php 
session_start();
    include 'config/config.php';
    class data extends Connection{ public function managdata(){
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="images/logo1.png" rel="icon">
    <link href="images/logo1.png" rel="apple-touch-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="dist/css/style.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	  	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	  	<script>
	  		$( function() {
	   			$( "#pickupdate" ).datepicker({
	   				minDate: 0
	   			});
	  		});
	  	</script>
    <title>THE FITNESS AVE. GYM</title>
    <style>
    html{
      scroll-behavior: smooth;
    }
    
.banner-section {
	height: 60vh;
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8)), url(images/loginbg.jpg);
    background-image: cover;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-align: center;
	-ms-flex-align: center;
	align-items: center;
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	justify-content: center;
    margin-left: -15px;
    margin-right: -15px;
    margin-top: -100px;
}

.bs-text.service-banner .bt-tips {
	margin-bottom: 35px;
}

.bs-text h2 {
	font-size: 48px;
	color: #ffffff;
	font-weight: 700;
	text-transform: uppercase;
	margin-bottom: 25px;
}

.bs-text .bt-tips {
	font-size: 20px;
	color: #c4c4c4;
	font-weight: 700;
	text-transform: uppercase;
	margin-bottom: 45px;
}

.bs-text .primary-btn {
	background: transparent;
	border: 2px solid #f36100;
}

.bs-text .play-btn {
	display: inline-block;
	height: 70px;
	width: 70px;
	background: #f36100;
	border-radius: 50%;
	line-height: 70px;
	text-align: center;
	font-size: 36px;
	color: #ffffff;
}
.line div{
    margin: 0 0.2rem;
    
}
.line div:nth-child(1),
.line div:nth-child(3){
    height: 3px;
    width: 70px;
    background: gold;
    border-radius: 5px;
}
.line{
    display: flex;
    align-items: center;
    margin-left: 460px;
}
.line div:nth-child(2){
    width: 20px;
    height: 20px;
    background: black;
    border-radius: 50%;
    
}
  </style>
</head>
  <body>
  <div class="container-fluid" style="background-color: #000; border-bottom: 1px solid gray;">
    	<div class="container">
    		<?php include 'navbar.php'; ?>
    	</div>
    </div>
    <div class="container-fluid" style="padding-top: 100px;">
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="bs-text">
                        <h2>Cart</h2>
                        <div class = "line">
                          <div></div>
                          <div></div>
                          <div></div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
      </div>
      <br><br>
        <div class="container mt-4">
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Images</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="cartdata">
                        </tbody>
                    </table>
                    <form method="POST" action="controller/placeorderController.php">
                        <label style="float: unset;">Payment Method</label>
                        <br>
                        <select name="payment_method" required>
                            <option value="">Select Payment Method</option>
                            <option value="Cash">Cash on site</option>
                            <option value="Gcash">Gcash</option>
                        </select>
                        <br><br>
                        <div>
                            <label style="float: unset;">Pick up Date</label>
                            <br>
                            
                            <input required type="date" name="pickupdate" min="<?php echo date('Y-m-d'); ?>"/>
                        </div>
                        

                        <?php
                        $users_id = $_SESSION['id'];

                        $sql = "SELECT SUM(cart.total) AS carttotal FROM cart INNER JOIN products ON cart.products_id=products.products_id WHERE cart.users_id = '".$users_id."'";
                        $stmt = $this->conn()->query($sql); 
                        $rowtotal = $stmt->fetch();

                        $sql = "SELECT * FROM cart INNER JOIN products ON cart.products_id=products.products_id WHERE cart.users_id = '".$users_id."'";
            $stmt = $this->conn()->query($sql); 
            while ($row = $stmt->fetch()) { ?>
                            <input type="hidden" name="products_id[]" value="<?php echo $row['products_id'] ?>">
                            <input type="hidden" name="quantity[]" value="<?php echo $row['quantity'] ?>">
                            <input type="hidden" name="price[]" value="<?php echo $row['price'] ?>">
                            <input type="hidden" name="total[]" value="<?php echo $row['total'] ?>">
                        <?php } ?>

                        <input type="hidden" name="carttotal" value="<?php echo $rowtotal['carttotal'] ?>">

                        <input type="submit" name="placeorder" class="btn text-white rounded-0 float-right" style="background-color: #000;" value="Place Order">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
    <script>
        $.ajax({
        url: 'data/cart_data.php',
        type: 'POST',
        cache: false,
        success: function(data){
          $('#cartdata').html(data)
        }
      })
    </script>
 <?php include 'footer1.php'?>
  </body>
</html>


<?php } } $datarun = new data(); $datarun->managdata(); ?>

