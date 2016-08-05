<!doctype html>
<?php include 'db.php'; ?>
<head>

<title>Trends Track</title>
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
<link rel="stylesheet" href="style.css">
<script type="text/javascript" src="https://ssl.gstatic.com/trends_nrtr/680_RC09/embed_loader.js"></script> 
<script language="javascript">
      function check(){

        return true;
      }
    </script>

</head>

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

    <h4>Trends demo!</h4>
    <p>Select some movies or see this <a href = "trends_case.php"> Case </a>. </p>
    <?php 
        connect_db();
    ?>
    <form action="trends_online.php" method="post">
      <table class="table">
        <thead>
          <tr>
            <th>Select?</th>
            <th>#</th>
            <th align="center">title</th>
            <th>directors</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            select_movie3();
        ?></tbody>
      </table>
      <div class="row">
        <div class="col-md-6">
          <p class="alert bg-success">
            region:
            <br/>
            <select id = "region" name="region" class="form-control">
              <option value="">WorldWide</option>
              <option value="US">United States</option>
              <option value="CN">China</option>
            </select>
          </p>
        </div>
        <div class="col-md-6">
          <p class="alert bg-success">
            time:
            <select id = "time" name="time" class="form-control" >
              <option value="today 1-m">past 30 days</option>
              <option value="today 12-m">past 12 months</option>
              <option value="now 1-d">past day</option>
            </select>
          </p>
        </div>
      <input type = "submit"  value = "Show!" class = "btn btn-block btn-lg btn-warning"/>

    </form>

    <div>
    <p><br/><br/></p>
    <?php
      if (isset($_POST["select"])) {
        $select = $_POST["select"];
        $N = count($select);
        $region = $_POST["region"];
        $time = $_POST["time"];
        print "<script type=\"text/javascript\"> trends.embed.renderExploreWidget(\"TIMESERIES\", {\"comparisonItem\":";
        print "[";
        for ($i = 0; $i < $N; $i++){
          print "{\"keyword\":\"$select[$i]\",\"geo\":\"$region\",\"time\":\"$time\"}";
          if ($i < $N - 1)
          print ",";
        }
        print "],\"category\":3,\"property\":\"\"}, {}); </script>";
      }
    ?>
    </div>
  </div>

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
