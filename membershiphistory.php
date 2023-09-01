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
  < <style>
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
  <div class="container-fluid" style="background-color: #000; margin-top: -28px; border-bottom: 1px solid gray;">
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
                        <h2>Membership History</h2>
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
      <div class="container">
        <div style="max-width: 1440px;" class="container mt-4">
            <div class="row">
            <div class="col-md-3">
                  <?php
                  $sql = "SELECT * FROM gcash";
                  $stmt = $this->conn()->query($sql);
                  $row = $stmt->fetch()
                  ?>
                    <img src="images/<?php echo $row['image'] ?>" width="100%">
                </div>
                <div class="col-md-9">
                    <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                              <th>Plan</th>
                              <th>Amount</th>
                              <th>Start</th>
                              <th>End</th>
                              <!--<th>Time-in</th>
                              <th>Time-out</th>-->
                              <th>Status</th>
                            </tr>
                        </thead>
                         <tbody>


<?php
          

          $sql = "SELECT *,m.startdate AS m_startdate, m.enddate AS m_enddate, p.id AS p_id, p.status AS p_status, i.timein AS i_timein, i.timeout AS i_timeout, p.enddate AS p_enddate FROM purchase p INNER JOIN membershippackages m ON m.id=p.membershippackages_id  


          INNER JOIN instructors i ON p.instructors_id=i.id WHERE p.users_id = '".$_SESSION['id']."' AND p.enddate < '".date('Y-m-d')."' ORDER BY p.status DESC";
          $stmt = $this->conn()->query($sql);
          while ($row = $stmt->fetch()) { ?>
        
                          <tr>
                            <td><?php echo $row['plan'] ?></td>
                            <td><?php echo $row['amount'] ?></td>
                            <td><?php echo $row['m_startdate'] ?></td>
                            <td><?php echo $row['m_enddate'] ?></td>
                            <!--<td><?php echo $row['i_timein'] ?></td>
                            <td><?php echo $row['i_timeout'] ?></td>-->
                            <td>
                              <?php
                              if ($row['p_status'] == 0) {
                                echo "Pending";
                                if ($row['proof'] != '') {
                                  echo "Waiting for Confirmation";
                                }
                              }else if ($row['p_status'] == 1) {
                                echo "Approved";
                              }else{
                                echo "Expired";
                              }
                              ?>
                            </td>
                          </tr>
                        <?php } ?>
    
              
                </tbody>
                    </table>
                            </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>

    <?php include 'footer.php'; ?>
    <?php include 'footer1.php'?>
  </body>
</html>


<?php } } $datarun = new data(); $datarun->managdata(); ?>

