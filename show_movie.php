<!doctype html>
<?php include 'db.php'; ?>
<head>

<title>Show Movies</title>
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

    <h2>Show all movies!</h2>
    <?php 
        connect_db();

        if (isset($_POST["id"])){
          $id = $_POST["id"];
          $year = $_POST["year"];
          $month = $_POST["month"];
          $day = $_POST["day"];
          $cost = $_POST["cost"];
          $d = mktime(0,0,0,$month,$day,$year);
          $date = date("Ymd", $d);
          insert_movie_by_id($id, $date, $cost);
        }

        if (isset($_POST["delete"])){
          $de = $_POST["delete"];
          $N = count($de);
          for ($i = 0; $i < $N; $i++){
            delete_movie_by_id($de[$i]);
          }
        }
        
    ?>
    <form action="show_movie.php" method="post">
      <table class="table">
        <thead>
          <tr>
            <th>Delete?</th>
            <th>#</th>
            <th align="center">title</th>
            <th>directors</th>
            <th>released_date</th>
            <th>cost/ticket</th>
            <th>detail</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            select_movie();
        ?></tbody>
      </table>
      <input type = "submit"  value = "Delete it!" class = "btn btn-block btn-lg btn-warning"/>
    </form>
    <br/>
    <br/>
    <br/>
    <h2>Search and add movie?</h2>
    <form action="search_movie.php" method="post" onsubmit="return check();">
          <p class="alert bg-primary">
            movie name:
            <input id = "query" type="text" name="query"  class="form-control" />
          </p>
        
      <input type = "submit"  value = "Submit" class="btn btn-block btn-lg btn-danger"/>
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
