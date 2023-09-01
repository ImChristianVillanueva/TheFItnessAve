<nav class="navbar navbar-expand-lg navbar-light" >
			  <a class="navbar-brand" href="index.php"><img src="images/logo.png" width="80"></a>
			  <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon bg-white"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav m-auto">

			    <?php if (isset($_SESSION['id'])) { ?>
			    	<li class="nav-item active">
				        <a class="nav-link text-white pl-4" href="home.php">Home</a>
				    </li>
	            <?php }else{ ?>
	            	<li class="nav-item active">
				        <a class="nav-link text-white pl-4" href="index.php">Home</a>
				    </li>
	            <?php } ?>
			      

			      <!-- <li class="nav-item">
			        <a class="nav-link text-white pl-4" href="classes.php">Classes</a>
			      </li> -->
			      <li class="nav-item">
			        <a class="nav-link text-white pl-4" href="products.php">Products</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link text-white pl-4" href="memberships.php">Memberships</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link text-white pl-4" href="aboutus.php">About Us</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link text-white pl-4" href="reservations.php">Reservations</a>
			      </li>

			    </ul>
			    <form class="form-inline my-2 my-lg-0">
			     

			  
			      	<?php if (isset($_SESSION['id'])) { ?>

			      		<?php
			      		  $users_id = $_SESSION['id'];
			      		  $sql = "SELECT * FROM notification WHERE users_id = '$users_id' AND created_date = '".date('Y-m-d')."' ORDER BY id DESC";
				          $stmt2 = $this->conn()->query($sql);

			      		?>
			      		<button class="btn p-0 my-sm-0 position-relative bellshow" style="box-shadow: none;" type="button">
					        <a class="nav-link text-white position-relative" ><i class="fas fa-bell"><div class="bell"></div></i></a>
					           
					           	<div class="bellcard">
					           		<h4 class=" p-3 bg-light m-0">Notification</h4>
					           		<div class="pl-3 pr-3" style="overflow-y: scroll;height: 340px;">
						           	<?php while ($row = $stmt2->fetch()) { ?>
						        		<div class="content">
						        			<strong>Good Day!</strong>
							        	    <br> <?php echo $row['title'] ?>
						        		</div>
						        		<small style="font-size: 10px;"><?php echo date('F j, Y', strtotime($row['created_date'])) ?></small> 
						        		<small style="font-size: 10px;"><?php echo $row['time'] ?></small> 
						        		
						        		<hr>
						        	<?php } ?>	
							        </div>
						    </div>
					           
					     </button>
					     
			      		<a class="nav-link text-white position-relative" href="cart.php"><i class="fas fa-cart-plus"></i><div class="count">0</div></a>
						<div class="dropdown">
						  <a href="#" class="nav-link text-white e" data-toggle="dropdown">
									<?php
									$sql = "SELECT * FROM users WHERE id = '".$_SESSION['id']."'";
									$stmt = $this->conn()->query($sql);
									$row = $stmt->fetch();
									?>
									<?php
										if ($row['img'] != '') { ?>
											<img src="images/<?php echo $row['img'] ?>" class="user-image" width="50" style="border-radius: 50%; margin-top: -25px; margin-left: 65px; position: absolute;  ">
										<?php }else{ ?>
											
											<img src="images/profile.jpg" class="user-image"  width="50" style="border-radius: 50%; border: 1px solid gray; margin-top: -20px; margin-left: 65px; position: absolute;  ">
										<?php }
									?>
									
							</a>
						    
						  </a>
						  <div class="dropdown-menu" style="margin-top: 30px; margin-left: -75px;">
						  <a class="dropdown-item" href="myaccount.php">My Profile</a>
								<a class="dropdown-item" href="myaccountsettings.php">Account Settings</a>
								<a class="dropdown-item" href="myqrcode.php">My QR Code</a>
								<a class="dropdown-item" href="mymembership.php">My Membership</a>
								<a class="dropdown-item" href="reserved.php">Reserved</a>
								<a class="dropdown-item" href="membershiphistory.php">Membership History</a>
								<a class="dropdown-item" href="orders.php">Orders</a>
								<a class="dropdown-item" href="ordershistory.php">Orders History</a>
								<a class="dropdown-item" href="messages.php">Messages</a>
								<a class="dropdown-item" href="logout.php">Logout</a>
						  </div>
						</div>
					<?php }else { ?>
						<a title="Login" class="nav-link text-dark border-0" href="customerlogin.php" style="background: #f5B301; border-radius: 20px;"><i class="fas fa-user" > </i> Login</a>
					<?php } ?>
			        
			 
			    </form>
			  </div>
			</nav>
			
<style>
.dropdown-menu::before{
content: "";
  width: 16px;
  height: 16px;
  background-color: white;
  border-top-left-radius: 3px;
  position: absolute;
  top: -8px;
  right: 19px;
  transform: rotate(45deg);
}

body::-webkit-scrollbar {
  width: 10px;
  height: 0px;
}
 
body::-webkit-scrollbar-track {
  box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
  
}
 
body::-webkit-scrollbar-thumb {
  background-color: black;
  outline: 1px solid slategrey;
}
	.vl{
		position: absolute; 
		margin-left: -40px;
		margin-top:-43px; 
		height: 140px; 
		width:110px; 
		background-color: black;
		border-bottom-style: outset;
		border-radius: 25px;
	}
	.vl1{
		position: absolute; 
		margin-left: -11px;
		margin-top:-43px; 
		height: 140px; 
		width:110px; 
		background-color: black;
		border-bottom-style: outset;
		border-radius: 25px;
	}
				.count,.bell{
  position: absolute;
left: 28px;
  top: 5px;
  color: #fff;
  display: grid;
  place-items: center;
  width: 15px;
  height: 15px;
  padding-bottom: 16px;
  font-weight: bold;
  background-color: red;
  border-radius: 50%;
}
.bell{
	top: 10px;
	left: 23px;
    width: 8px;
    height: 8px;
    padding-bottom: unset;
}

.bellcard{
	text-align: left;
	width: 250px;
	height: 0px;
	overflow: hidden;
	font-size: 15px;
	position: absolute;
	z-index: 100;
	left: -250px;
	background-color: white;
	opacity: 0;
	margin-left: 50px;
}	
.bellcard_show{
	opacity: 1;
	height: 300px;
	box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
	
}


.bell{

    background-color: #22ad22;
}
</style>

