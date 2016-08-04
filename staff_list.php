<!doctype html>
<?php include 'db.php'; ?>
<head>

<title>Details</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.ico">

<!-- this styles only adds some repairs on idevices  -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="style.css"></head>

<body class="shortcodes">

<!-- / Site Header -->
<div class="site-header">
  <!-- / Site Logo -->
  <div class="site-logo"></div>
  <!-- / Site Menu -->
  <div class="site-menu">
    <div class="icon"></div>
    <div class="menu"></div>
  </div>
  <!-- / Site Description -->
  <h1 id = "site_description"></h1>
  <!-- / Site Footer -->
  <div class="site-footer"></div>
</div>
<!-- \ Site Header -->

<!-- \ Site Main -->
<div class="site-main">
  <div class="inner clearfix">
  <?php 
    connect_db();
    if (isset($_GET['id']))
      $id = $_GET['id'];
    if (isset($_POST['id'])) {
      $id = $_POST['id'];
      //echo "POST ID". $id;
    }
    $is_update = 0;
    if (isset($_POST['address'])){
      $address = $_POST['address'];
      $manager = $_POST['manager'];
      $investment_volume = $_POST['investment_volume'];
      $state = $_POST['state'];
      update_theater_by_id($id, $address, $manager, $investment_volume, $state);
      $is_update = 1;
    }
  ?>

    <?php 
        //echo $id;
        $obj = select_theater_by_id($id);
        print "<h3><i>" . $obj["name"] . " </i>'s Staff List</h3>"
    ?>
    <form action="show_theater.php" method="post">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th align="center">name</th>
            <th>gender</th>
            <th>rank</th>
            <th>position</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          select_staff_by_id($id);
        ?></tbody>
      </table>
      
    </form>
     <a href="show_theater.php" class = "btn btn-block btn-lg btn-warning"/> Back </a>
    </div>

</div>
<!-- / Site Main -->

<!-- / JS Files  -->

<!-- jQuery -->
<script src="js/jQuery/jquery-2.1.1.js"></script>
<script src="js/load_header.js"></script>
<!-- Theme Functions -->
<script src="js/functions.js"></script>

<!-- Bootstrap -->
<script src="js/bootstrap/bootstrap.min.js"></script>

<!-- \ JS Files  -->
</body>
</html>