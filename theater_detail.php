<!doctype html>
<?php include 'db.php'; ?>
<head>

<title>Flower & Grass</title>
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

<body class="about">

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
    <div class="post gallery-post">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="photo/theater/1.jpg" alt="...">
            <div class="carousel-caption"></div>
          </div>
          <div class="item">
            <img src="photo/theater/2.jpg" alt="...">
            <div class="carousel-caption"></div>
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <?php 
        //echo $id;
        $obj = select_theater_by_id($id);
        print "<h3>" . $obj["name"] . "</h3>"
    ?>
    <form action="theater_detail.php" method="post" onsubmit="return check();">
        <input type="hidden" name="id" value = <?php print "'".$id."'" ?>/> 
          <p>address: 
            <input id = "address" type="text" name="address"  class="form-control" 
            value = <?php print "'".$obj["address"]."'" ?> /> 
          </p> 
          <p>manager: 
            <input id = "manager"  type="text" name="manager"  class="form-control" 
            value = <?php print "'".$obj["manager"]."'" ?> />
          </p>
          <p>investment_volume(wan cny): 
            <input id = "investment_volume"  type="text" name="investment_volume"  class="form-control" 
            value = <?php print "'".$obj["investment_volume"]."'" ?> />
          </p>
          <p>state: 
            <input id = "state"  type="text" name="state"  class="form-control" 
            value = <?php print "'".$obj["state"]."'" ?> />
          </p>
          <p>
          <input type = "submit"  value = "Upate" class="btn btn-block btn-lg btn-danger"/>
          </p>
          <p>
          <a href = "show_theater.php" class = "btn btn-block btn-lg btn-success" > Back </a>
          </p>
          <p>
           <?php 
            if ($is_update) {
              echo "update successful.";
            }
          ?>
          </p>
    </form>
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