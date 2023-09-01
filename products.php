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
                        <h2>Products</h2>
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
            <div class="row" style="margin-left: 10px;">
            <?php 
                 $sql = "SELECT * FROM products";
                $stmt = $this->conn()->query($sql);
                while ($row = $stmt->fetch()) {  ?>
    <div class="product-card" style="margin-left: 10px;">
            <?php if($row['products_price'] >= 200) { ?>
        <div class="badge">Hot</div>
						<?php } ?>
		<div class="product-tumb">
                <img src="images/<?php echo $row['products_img'] ?>">
		</div>
		<div class="product-details">
			<span class="product-catagory"><?php echo $row['category'] ?></span>
			<h4><?php echo $row['products_name'] ?></h4>
			<p><?php echo substr($row['products_description'], 0, 50); ?></p>
			<div class="product-bottom-details">
				<div class="product-price">₱<?php echo number_format( $row['products_price'], 2); ?></div>
                <div class="product-links">
                <?php if (isset($_SESSION['id'])) { ?>
                                        <a href="productdescription.php?products_id=<?php echo $row['products_id'] ?>" class="btn rounded-0 btn-sm text-white" style="background-color: #000;  font-size: 14px; margin-right: 5px ">Details</a>
                                    <?php }else { ?>
                                        <a href="productdescription.php?products_id=<?php echo $row['products_id'] ?>" class="btn rounded-0 btn-sm text-white" style="background-color: #000; font-size: 14px; margin-right: 5px ">Details</a>
                                    <?php } ?>

				
				</div>
                <div class="product-links">
                <?php if (isset($_SESSION['id'])) { ?>
                                        <a href="controller/addtocartController.php?products_id=<?php echo $row['products_id'] ?>" class="btn rounded-0 btn-sm text-white" style="background-color: #000; margin-top: -57px; font-size: 14px; margin-right: -60px;">Add to Cart</a>
                                    <?php }else { ?>
                                        <a href="customerlogin.php" class="btn rounded-0 btn-sm text-white addtocart" style="background-color: #000; margin-top: -57px; font-size: 14px; margin-right: -60px;">Add to Cart</a>
                                    <?php } ?>
				
				</div>
			</div>
		</div>
	</div>
    <?php } ?>
        </div>
    </div>  
    
    <style>
a
{
    text-decoration: none;
}
.product-card {
    width: 350px;
    position: relative;
    box-shadow: 0 2px 7px #dfdfdf;
    margin: 50px auto;
    background: #fafafa;
}

.badge {
    position: absolute;
    left: 0;
    top: 20px;
    text-transform: uppercase;
    font-size: 13px;
    font-weight: 700;
    background: red;
    color: #fff;
    padding: 3px 10px;
}

.product-tumb {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 300px;
    padding: 50px;
    background: #f0f0f0;
}

.product-tumb img {
    max-width: 100%;
    max-height: 100%;
}

.product-details {
    padding: 30px;
    max-width: 100%;
}

.product-catagory {
    display: block;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    color: #ccc;
    margin-bottom: 18px;
}

.product-details h4 a {
    font-weight: 500;
    display: block;
    margin-bottom: 18px;
    text-transform: uppercase;
    color: #363636;
    text-decoration: none;
    transition: 0.3s;
}

.product-details h4 a:hover {
    color: #fbb72c;
}

.product-details p {
    font-size: 15px;
    line-height: 22px;
    margin-bottom: 18px;
    color: #999;
}

.product-bottom-details {
    overflow: hidden;
    border-top: 1px solid #eee;
    padding-top: 20px;
}

.product-bottom-details div {
    float: left;
    width: 50%;
}

.product-price {
    font-size: 18px;
    color: #fbb72c;
    font-weight: 600;
}

.product-price small {
    font-size: 80%;
    font-weight: 400;
    text-decoration: line-through;
    display: inline-block;
    margin-right: 5px;
}

.product-links {
    text-align: right;
}

.product-links a {
    display: inline-block;
    margin-left: 5px;
    color: #e1e1e1;
    transition: 0.3s;
    font-size: 17px;
}

.product-links a:hover {
    color: #fbb72c;
}
	</style>
    <?php include 'footer.php'; ?>
    <?php include 'footer1.php' ?>
    <script>
        $('.addtocart').click(function(){
            alert('Login Required');
        })
    </script>
  </body>
</html>
<?php } } $datarun = new data(); $datarun->managdata(); ?>