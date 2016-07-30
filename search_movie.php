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
<link rel="stylesheet" href="style.css">

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

    <h2>search by name!</h2>
    <?php 
        connect_db();
    ?>
    <form action="search_movie.php" method="post">
      <p>
      <input id = "query" type="text" name="query"  class="form-control" />
      </p>
      <p>
      <input type = "submit" value = "submit!" class = "btn btn-block btn-lg btn-warning"/>
      </p>  
    </form>
    <br/>
    <br/>
    <br/>
    <?php
      // if (isset($_GET['id'])) {
      //   $id = $_GET['id'];
      //   insert_movie_by_id($id);
      // }
      if (isset($_POST['query'])){
        $query = $_POST['query'];
        $query = urlencode($query);
        $url = "http://api.douban.com/v2/movie/search?q=$query";
        $html = file_get_contents($url);
        $obj = json_decode($html, true);
        $N = $obj["total"];
        for ($i = 0; $i < $N; $i++){
          $A = $obj["subjects"][$i];
          $id = $A["id"];
          print " <h5><b></b></h5>";
          print " <div class=\"row\">";
          print "<div class=\"col-md-8\">";
          print "<p><b>Original Title: </b>".$A["original_title"]."</p>";
          print "<p><b>Chinese Title: </b>".$A["title"]."</p>";
          print "<p><b>Directors: </b>".$A["directors"][0]["name"]."</p>";
          print "<p><b>Rating: </b>".$A["rating"]["average"]."</p>";
          print "<a href = 'show_movie.php?id=".$id."'>add</a>";
          print "</div>";
          print "<div class=\"col-md-4\">";
          $image_medium = $A["images"]["medium"];
          $image_large = $A["images"]["large"];
          print "<img src='". $image_medium. "'/>";
          print "</div>";
          print "</div>";
        }
      }
    ?>
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