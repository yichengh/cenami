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

    <h2>Show all theaters!</h2>
    <?php 
        connect_db();              
    ?>  
    <form action=".php" method="post">
      <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th align="center">name</th>
          <th>province</th>
          <th>city</th>
          <th>manager</th>
          <th>state</th>
          <th>details</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          select_theater();
        ?>
      </tbody>
      </table>
      <input type = "submit"  value = "Delete it!" class = "btn btn-block btn-lg btn-warning"/>  
      <input type = "submit"  value = "Delete it!" class = "btn btn-block btn-lg btn-warning"/>  
      <a href = "addteam.html" class = "btn btn-block btn-lg btn-success" >Back</a>
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

<!-- \ JS Files  --> </body>
</html>