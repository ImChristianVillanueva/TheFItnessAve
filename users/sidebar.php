<aside class="main-sidebar" >
  <section class="sidebar" > 
    <ul class="sidebar-menu" data-widget="tree" >
      <li class="header" style="color: #000;">MENU</li>

     
    
      <?php if ($_SESSION['type'] == 'admin' OR $_SESSION['type'] == 'staff') { ?>
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      
      <li class="clickusers">
        <a href="#"><i class="fas fa-users" style="color: black;"></i> <span style="color: black;">All Users</span> <i class="fas fa-chevron-down" style="float: right;margin-right: 5px;margin-top: 5px; color: black;"></i></a>
        <ul class="users">
          <?php if ($_SESSION['type'] == 'admin') { ?>
            <li style="line-height: 30px;list-style: none;"><a href="staff.php"><span>Staff</span></a><span class="label label-important" style="margin-left: 121px; font-size: 12px; background-color: #F66; "><?php include 'count-staff.php';?> </span></li>
          <?php } ?>
          <li style="line-height: 30px;list-style: none;"><a href="users.php"><span>Customers</span></a><span class="label label-important" style="margin-left: 85px; font-size: 12px; background-color: #F66; "><?php include 'count-customer.php';?> </span></li>
          <li style="line-height: 30px;list-style: none;"><a href="members.php"><span>Members</span></a><span class="label label-important" style="margin-left: 93px; font-size: 12px; background-color: #F66; "><?php include 'count-members.php';?> </span></li>
          <li style="line-height: 30px;list-style: none;"><a href="archived.php"><span>Archived</span></a></li>
        </ul>
      </li>
      <li>
        <a class="clicksalesproduct" href="#"><i class="fas fa-chart-bar" style="color: black;"></i> <span style="color: black;">Sales Product</span> <i class="fas fa-chevron-down" style="float: right;margin-right: 5px; color: black; margin-top: 5px;"></i></a>
        <ul class="salesproduct">
          <li style="line-height: 30px;list-style: none;"><a href="new_orders.php"><span>Orders</span></a><span class="label label-important" style="margin-left: 108px; font-size: 12px; background-color: #F66; "><?php include 'count-neworder.php';?> </span></li>
          <li style="line-height: 30px;list-style: none;"><a href="orders_history.php"><span>Orders History</span></a><span class="label label-important" style="margin-left: 62px; font-size: 12px; background-color: #F66; "><?php include 'count-orderhistory.php';?> </span></li>
          <li style="line-height: 30px;list-style: none;"><a href="products.php"><span>Products</span></a><span class="label label-important" style="margin-left: 93px; font-size: 12px; background-color: #F66; "><?php include 'count-product.php';?> </span></li>
          <li style="line-height: 30px;list-style: none;"><a href="inventory.php"><span>Inventory</span></a><span class="label label-important" style="margin-left: 88px; font-size: 12px; background-color: #F66; "><?php include 'count-inventory.php';?> </span></li>
        </ul>
      </li>
      <li class="clickreservations">
        <a href="#"><i class="fas fa-list" style="color: black;"></i> <span style="color: black;">Reservations</span> <i class="fas fa-chevron-down" style="float: right;margin-right: 5px;margin-top: 5px; color: black;"></i></a>
        <ul class="reservations">
          <li style="line-height: 30px;list-style: none;"><a href="instructors.php"><span>Instructors</span></a></span></a><span class="label label-important" style="margin-left: 80px; font-size: 12px; background-color: #F66; "><?php include 'count-instructor.php';?> </span></li>
          <li style="line-height: 30px;list-style: none;"><a href="membershippackages.php"><span>Membership</span></a></span></a><span class="label label-important" style="margin-left: 69px; font-size: 12px; background-color: #F66; "><?php include 'count-membership.php';?> </span></li>
          <li style="line-height: 30px;list-style: none;"><a href="windowpayment.php"><span>Walk In</span></a></span></a><span class="label label-important" style="margin-left: 100px; font-size: 12px; background-color: #F66; "><?php include 'count-walkin.php';?> </span></li>
          <li style="line-height: 30px;list-style: none;"><a href="purchasecustomers.php"><span>Purchase Customers</span></a></span></a><span class="label label-important" style="margin-left: 22px; font-size: 12px; background-color: #F66; "><?php include 'count-purchasecustomer.php';?> </span></li>
          <?php if ($_SESSION['type'] == 'admin' OR $_SESSION['type'] == 'staff') { ?>
            <li style="line-height: 30px;list-style: none;"><a href="timeattendance.php"><span>Time Attendance</span></a></li>
          <?php } ?>
        </ul>
      </li>
      <li><a href="expenses.php"><i class="fas fa-money"></i> <span>Expenses</span></a></li>
        
      <?php } ?>
     <?php if ($_SESSION['type'] == 'user') { ?>
        <li>
          <a href="purchase.php"><i class="fas fa-money"></i> <span>Purchase</span></a>
        </li>
        <li>
          <a href="reserved.php"><i class="fas fa-money"></i> <span>Reserved</span></a>
        </li>
        <li>
          <a href="purchasehistory.php"><i class="fas fa-history"></i> <span>History</span></a>
        </li>
      <?php } ?> 
      
      <?php if ($_SESSION['type'] == 'admin') { ?>
        <li>
          <a href="audittrail.php"><i class="fas fa-list"></i> <span>Audit Trail</span></a>
          <li><a href="reviews.php"><i class="fas fa-comments"></i> <span>Reviews</span></a><span class="label label-important" style="margin-left: 179px; margin-top: -31px; position: absolute; font-size: 12px; background-color: #F66; "><?php include 'count-reviews.php';?> </span></li>
        </li>
      <?php } ?>
      <?php if ($_SESSION['type'] == 'staff') { ?>
      <li>
        <a href="scan.php"><i class="fas fa-barcode-alt"></i> <span>Scan</span></a>
      </li>
      <?php } ?>

      <?php if ($_SESSION['type'] == 'admin') { ?>
        <li>
          <a href="gcash.php"><i class="fas fa-money"></i> <span>Gcash</span></a>
        </li>
      <?php } ?>
      <?php if ($_SESSION['type'] == 'admin') { ?>
        <li>
          <a href="messages.php"><i class="fas fa-comments"></i> <span>Messages</span></a>
        </li>
        <li><a href="report.php"><i class="fa fa-file"></i> <span>Sales Report</span></a></li>
      <?php } ?>
      
      <li><a href="#accountsettings" data-toggle="modal"><i class="fa fa-user"></i> <span>Account Settings</span></a></li>
     
    </ul>
  </section>
</aside>