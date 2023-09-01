<?php session_start(); ?>

<?php
  include '../config/config.php';
  class category extends Connection{ 
      public function managecategory(){ 


        $sqlinsert = "UPDATE purchase INNER JOIN users ON purchase.qrcode=users.qrcode SET users.qrcode = '', purchase.qrcode = '', purchase.status = 2 WHERE enddate < '".date('Y-m-d')."' AND status = 1";
        $statementinsert = $this->conn()->prepare($sqlinsert);
        $statementinsert->execute([]);


       

        if (isset($_SESSION['type']) && $_SESSION['type'] != 'user') {
          $sql = "SELECT COUNT(id) AS totalusers FROM users WHERE type = 2";
          $stmt = $this->conn()->query($sql);
          $row = $stmt->fetch();
          $totalusers = $row['totalusers'];

          $sql = "SELECT COUNT(products_id) AS totalproducts FROM products";
          $stmt = $this->conn()->query($sql);
          $row = $stmt->fetch();
          $totalproducts = $row['totalproducts'];

          $sql = "SELECT SUM(amount) AS totalwindowpayment FROM windowpayment";
          $stmt = $this->conn()->query($sql);
          $row = $stmt->fetch();
          $totalwindowpayment = $row['totalwindowpayment'];

          $sql = "SELECT SUM(revenue) AS totalrevenue FROM revenue";
          $stmt = $this->conn()->query($sql);
          $row = $stmt->fetch();
          $totalrevenue = $row['totalrevenue'];

          $sql = "SELECT SUM(amount) AS totalexpenses FROM expenses";
          $stmt = $this->conn()->query($sql);
          $row = $stmt->fetch();
          $totalexpenses = $row['totalexpenses'];


          $sql = "SELECT SUM(total) AS totalcustomers_info FROM customers_info WHERE customers_info_status = 2 AND date_created = '".date('Y-m-d')."'";
          $stmt = $this->conn()->query($sql);
          $row = $stmt->fetch();
          $totalcustomers_info = $row['totalcustomers_info'];


          $sql = "SELECT SUM(amount) AS totalwp FROM windowpayment WHERE date_created = '".date('Y-m-d')."'";
          $stmt = $this->conn()->query($sql);
          $row = $stmt->fetch();
          $totalwp = $row['totalwp'];

          $sql = "SELECT SUM(membershippackages.amount) AS totalmp FROM purchase INNER JOIN membershippackages ON purchase.membershippackages_id=membershippackages.id WHERE purchase.date_created = '".date('Y-m-d')."'";
          $stmt = $this->conn()->query($sql);
          $row = $stmt->fetch();
          $totalmp = $row['totalmp'];
          $salestoday = $totalwp + $totalmp + $totalcustomers_info;

          $sql = "SELECT COUNT(id) AS totalmembers FROM users WHERE qrcode != ''";
          $stmt = $this->conn()->query($sql);
          $row = $stmt->fetch();
          $totalmembers = $row['totalmembers'];
          
          $sql = "SELECT COUNT(review_id) AS total FROM review";
          $stmt = $this->conn()->query($sql);
          $row = $stmt->fetch();
          $total = $row['total'];

          $sql = "SELECT COUNT(contact_id) AS total FROM tblcontact";
          $stmt = $this->conn()->query($sql);
          $row = $stmt->fetch();
          $totalcontact = $row['total'];

        }


?>
<!DOCTYPE html>
<html>
<head><?php include 'head.php'; ?></head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">


<?php include 'navbar.php'; ?>
<?php include 'profile.php'; ?>
<?php include 'sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <!--li>Products</li-->
        <li class="active">Dashboard</li>
      </ol>
    </section>
          
    <!-- Main content -->
    <section class="content">
      
      <?php if (isset($_SESSION['type']) && $_SESSION['type'] == 'user') {
        $sql = "SELECT * FROM membershippackages WHERE startdate >= '".date('Y-m-d')."' AND promo = 'Yes'";
        $stmt = $this->conn()->query($sql);
        if ($stmt->rowcount() > 0) { ?>
          <div class="text-center"><a href="purchase.php"><img src="../images/promo.jpg" width="400"></a></div>
      <?php }  } ?>

      <?php if (isset($_SESSION['type']) && $_SESSION['type'] != 'user') { ?>
      <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box" style="background: linear-gradient(to top, #000 0%, #00f2fe 100%);color:#fff;">
              <div class="inner">
                <h3><?php echo $totalusers; ?></h3>

                <p>Total Users</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <a href="users.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
           <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box" style="background-color: #a44200;
background-image: linear-gradient(to top, #000 0%, #a44200 74%);
color:#fff;">
              <div class="inner">
                <h3><?php echo $totalmembers; ?></h3>

                <p>Total Members</p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-bag"></i>
              </div>
              <a href="members.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box" style="background: linear-gradient(to top, rgb(0, 0, 0) 0.1%, rgb(85, 149, 27) 90%);color:#fff;">
              <div class="inner">
                <h3>₱ <?php echo number_format($salestoday,2); ?></h3>

                <p>Total Today</p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-bag"></i>
              </div>
              <a href="new_orders.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <div class="small-box" style="background: linear-gradient(to top, rgb(0, 0, 0) 11.2%,rgb(255, 219, 47) 100.2%);color:#fff;">
              <div class="inner">
                <h3>₱ <?php echo number_format($totalrevenue,2); ?></h3>

                <p>Total Revenue</p>
              </div>
              <div class="icon">
                <i class="fas fa-sack-dollar"></i>
              </div>
              <a href="#" class="small-box-footer" style="color: #000;">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box" style="background: linear-gradient(to top, rgb(0, 0, 0) 10.6%, rgb(255, 0, 0) 97.7%);color:#fff;">
              <div class="inner">
                <h3>₱ <?php echo number_format($totalexpenses,2); ?></h3>

                <p>Total Expenses</p>
              </div>
              <div class="icon">
                <i class="fas fa-barcode"></i>
              </div>
              <a href="expenses.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box" style="background: linear-gradient(to top, #09203f 0%, #537895 100%);color:#fff;">
              <div class="inner">
                <h3><?php echo number_format($total); ?></h3>

                <p>Total Review</p>
              </div>
              <div class="icon">
              <i class="fas fa-comments"></i>
              </div>
              <a href="reviews.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box" style="background: linear-gradient(to top, #09203f 0%, #EA4335 100%);color:#fff;">
              <div class="inner">
                <h3><?php echo number_format($totalcontact); ?></h3>

                <p>Total Contact</p>
              </div>
              <div class="icon">
              <i class="fa fa-address-book"></i>
              </div>
              <a href="#" class="small-box-footer" style="color: #09203f;">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>

        <div class="card-body">
          <div class="row">
            <div class="col-lg-12">
              <div class="card" style="background-color: white;padding: 10px;">
                <div class="card-body">
                  <h2 class="m-3">Monthly Report</h2>
                  <canvas id="myChart" width="600" height="210"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>


     
      <?php } ?>





    </section>

     
  </div>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>All rights reserved</b>
    </div>
     <strong>Copyright &copy; 2023 <!--a href="https://www.facebook.com/BermzISware">Bermz ISware Solutions</a--></strong>
  </footer>   


</div>
<!-- ./wrapper -->

<?php include 'footer.php'; ?>

<!-- Active Script -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


   <?php
  
          $sql = "SELECT SUM(total) AS jan FROM report WHERE month = 1 AND year = '".date('Y')."' ";
          $stmt = $this->conn()->query($sql);
          $row = $stmt->fetch();
          $jan = $row['jan'];

          $sql = "SELECT SUM(total) AS feb FROM report WHERE month = 2 AND year = '".date('Y')."' ";
          $stmt = $this->conn()->query($sql);
          $row = $stmt->fetch();
          $feb = $row['feb'];

          $sql = "SELECT SUM(total) AS mar FROM report WHERE month = 3 AND year = '".date('Y')."' ";
          $stmt = $this->conn()->query($sql);
          $row = $stmt->fetch();
          $mar = $row['mar'];

          $sql = "SELECT SUM(total) AS apr FROM report WHERE month = 4 AND year = '".date('Y')."' ";
          $stmt = $this->conn()->query($sql);
          $row = $stmt->fetch();
          $apr = $row['apr'];

          $sql = "SELECT SUM(total) AS may FROM report WHERE month = 5 AND year = '".date('Y')."' ";
          $stmt = $this->conn()->query($sql);
          $row = $stmt->fetch();
          $may = $row['may'];

          $sql = "SELECT SUM(total) AS jun FROM report WHERE month = 6 AND year = '".date('Y')."' ";
          $stmt = $this->conn()->query($sql);
          $row = $stmt->fetch();
          $jun = $row['jun'];

          $sql = "SELECT SUM(total) AS jul FROM report WHERE month = 7 AND year = '".date('Y')."' ";
          $stmt = $this->conn()->query($sql);
          $row = $stmt->fetch();
          $jul = $row['jul'];

          $sql = "SELECT SUM(total) AS aug FROM report WHERE month = 8 AND year = '".date('Y')."' ";
          $stmt = $this->conn()->query($sql);
          $row = $stmt->fetch();
          $aug = $row['aug'];

          $sql = "SELECT SUM(total) AS sep FROM report WHERE month = 9 AND year = '".date('Y')."' ";
          $stmt = $this->conn()->query($sql);
          $row = $stmt->fetch();
          $sep = $row['sep'];

          $sql = "SELECT SUM(total) AS oct FROM report WHERE month = 10 AND year = '".date('Y')."' ";
          $stmt = $this->conn()->query($sql);
          $row = $stmt->fetch();
          $oct = $row['oct'];

          $sql = "SELECT SUM(total) AS nov FROM report WHERE month = 11 AND year = '".date('Y')."' ";
          $stmt = $this->conn()->query($sql);
          $row = $stmt->fetch();
          $nov = $row['nov'];

          $sql = "SELECT SUM(total) AS december FROM report WHERE month = 12 AND year = '".date('Y')."' ";
          $stmt = $this->conn()->query($sql);
          $row = $stmt->fetch();
          $dec = $row['december'];




           ?>

<script>
  

let ctx2 = document.getElementById('myChart').getContext('2d');

var gradientStroke = ctx2.createLinearGradient(500, 0, 100, 0);
gradientStroke.addColorStop(0, "#dd002e");
gradientStroke.addColorStop(1, "#dd006e");

var gradientBkgrd = ctx2.createLinearGradient(0, 0, 0, 0);
gradientBkgrd.addColorStop(0, "rgba(221,0,110,0.2)");
gradientBkgrd.addColorStop(1, "rgba(221,0,110,0.08)");

var myChart = new Chart(ctx2, {

type: 'line',

data: {

    labels: ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sep", "Oct", "Nov", "Dec"],

    datasets: [
        {

            fill: true,
            backgroundColor: gradientBkgrd,
            borderColor: '#ffb700',
            data: [<?php echo $jan.",".$feb.",".$mar.",".$apr.",".$may.",".$jun.",".$jul.",".$aug.",".$sep.",".$oct.",".$nov.",".$dec; ?>],
            pointBorderColor: "rgba(255,255,255,0)",
            pointBackgroundColor: "rgba(255,255,255,0)",
            pointBorderWidth: 0,
            pointHoverRadius: 8,
            pointHoverBackgroundColor: gradientStroke,
            pointHoverBorderColor: "rgba(220,220,220,1)",
            pointHoverBorderWidth: 4,
            pointRadius: 1,
            borderWidth: 4,
            pointHitRadius: 16,
            tension: 0.5

        },


    ]

},

options: {



    plugins: {

        legend: false
        
    },

    scales: {

  x: {
    grid: {
      display: false,

    }
  },
  y: {
    grid: {
      display: true,
        borderDash: [8, 4],
                color: "#eaebf1"
    }
  }
}

                }
                
            });


</script>
<script>


    $(document).on('click', '#admin_profile', function(e){
    e.preventDefault();
    $('#profile').modal('show');
    var user_id = $(this).data('user_id');
    var name = $(this).data('name');
    var email = $(this).data('email');
    var password = $(this).data('password');


    $('#user_id').val(user_id)
    $('#name').val(name)
    $('#email').val(email)
    $('#password').val(password)


    getRow(id);
  });
$(function(){
	/** add active class and stay opened when selected */
	var url = window.location;
  
	// for sidebar menu entirely but not cover treeview
	$('ul.sidebar-menu a').filter(function() {
	    return this.href == url;
	}).parent().addClass('active');

	// for treeview
	$('ul.treeview-menu a').filter(function() {
	    return this.href == url;
	}).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active');

});
</script>


</body>
</html>

<?php } }

  $category = new category();
  $category->managecategory();
            
?>