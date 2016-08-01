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

<script language="javascript">
      function check(){
        // var name = document.getElementById("name").value;
        // var manager = document.getElementById("manager").value;
        // var province = document.getElementById("province").value;
        // var city = document.getElementById("city").value;
        // var address = document.getElementById("address").value;
        // var investment_volume = document.getElementById("investment_volume").value;
        // var state = document.getElementById("state").value;
        // if (name == "" || manager == "" || province == "" || city == "" 
        //   || address == "" || investment_volume == "" || state == "")
        // {
        //   window.alert("Some value is empty!");
        //   return false;  
        // }

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

    
    <?php 
        connect_db();
        if (isset($_GET['id'])) {
          $_SESSION['theater_id']=$_GET['id'];
        }
        if (!isset($_SESSION['theater_id'])){
            echo "No theater_id set.";
            exit();
        }
        $theater_id = $_SESSION['theater_id'];
        $obj = select_theater_by_id($theater_id);
        $name = $obj["name"];
        //echo $theater_id;
        if (isset($_POST['movie_id'])){
          $movie_id = $_POST['movie_id'];
          $year = $_POST['year'];
          $month = $_POST['month'];
          $day = $_POST['day'];
          $hour = $_POST['hour'];
          $minute = $_POST['minute'];
          $price = $_POST['price'];
          $start = mktime($hour,$minute,0,$month,$day,$year);
          $start_time = date("Y-m-d h:i:ss", $start);
          //$time = date("", $d);
          //insert_movie_by_id($id, $date, $cost);
          //insert_theater($name, $manager, $province, $city, $address, $investment_volume, $state);
          $end = strtotime("+2 hours", $start);
          $end_time = date("Y-m-d h:i:ss", $end);
          insert_showing($movie_id, $theater_id, $start_time, $end_time, $price);
          //echo $time;
        }
        
        if (isset($_POST["delete"])){
          $de = $_POST["delete"];
          $N = count($de);
          for ($i = 0; $i < $N; $i++){
            delete_theater_by_id($de[$i]);
          }
        }
        
    ?>

    <h2>This is the showings of <?php echo $name?></h2>
    <form action="show_theater.php" method="post">
      <table class="table">
        <thead>
          <tr>
            <th>Delete?</th>
            <th>#</th>
            <th align="center">movie</th>
            <th>date</th>
            <th>start_time</th>
            <th>Attendance(%)</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          select_showing_by_id($theater_id);
        ?></tbody>
      </table>
      <input type = "submit"  value = "Delete it!" class = "btn btn-block btn-lg btn-warning"/>
    </form>
    <br/>
    <br/>
    <br/>
    <h2>Add new showing?</h2>
    <form action="theater_manage.php" method="post" onsubmit="return check();">
      <input type="hidden" name="theater_id" value = <?php print "'$theater_id'";?>/>
      <!-- <div class="row"> -->
        <p class="alert bg-primary">
          movie:
          <select id = "movie_id" name="movie_id" class="form-control">
              <?php select_movie2(); ?>
          </select>
        </p>
      <!-- </div> -->

      <div class="row">
        <div class="col-md-4">
          <p class="alert bg-success">
            year:
            <br/>
            <select id = "year" name="year" class="form-control">
              <option value="2016">2016</option>
              <option value="2016">2017</option>
            </select>
          </p>
        </div>
        <div class="col-md-4">
          <p class="alert bg-success">
            month:
            <select id = "month" name="month" class="form-control" >
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select>
          </p>
        </div>
        <div class="col-md-4">
          <p class="alert bg-success">
            day:
            <select id = "day" name="day" class="form-control" >
             <option value="1">1</option>
             <option value="2">2</option>
             <option value="3">3</option>
             <option value="4">4</option>
             <option value="5">5</option>
             <option value="6">6</option>
             <option value="7">7</option>
             <option value="8">8</option>
             <option value="9">9</option>
             <option value="10">10</option>
             <option value="11">11</option>
             <option value="12">12</option>
             <option value="13">13</option>
             <option value="14">14</option>
             <option value="15">15</option>
             <option value="16">16</option>
             <option value="17">17</option>
             <option value="18">18</option>
             <option value="19">19</option>
             <option value="20">20</option>
             <option value="21">21</option>
             <option value="22">22</option>
             <option value="23">23</option>
             <option value="24">24</option>
             <option value="25">25</option>
             <option value="26">26</option>
             <option value="27">27</option>
             <option value="28">28</option>
             <option value="29">29</option>
             <option value="30">30</option>
             <option value="31">31</option>

           </select>
          </p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <p class="alert bg-danger">
            hour:
            <select id = "hour" name="hour" class="form-control" >
             <option value="8">8</option>
             <option value="9">9</option>
             <option value="10">10</option>
             <option value="11">11</option>
             <option value="12">12</option>
             <option value="13">13</option>
             <option value="14">14</option>
             <option value="15">15</option>
             <option value="16">16</option>
             <option value="17">17</option>
             <option value="18">18</option>
             <option value="19">19</option>
             <option value="20">20</option>
             <option value="21">21</option>
             <option value="22">22</option>
             <option value="23">23</option>
             <option value="0">0</option>
             <option value="1">1</option>
           </select>
          </p>
        </div>
        <div class="col-md-4">
          <p class="alert bg-danger">
            minute:
            <select id = "minute" name="minute" class="form-control" >
             <option value="0">0</option>
             <option value="5">5</option>
             <option value="10">10</option>
             <option value="20">20</option>
             <option value="30">30</option>
             <option value="40">40</option>
             <option value="50">50</option>
           </select>
          </p>
        </div>
        <div class="col-md-4">
          <p class="alert bg-danger">
            price:
            <input id = "price" type="text" name="price" value = "60" class=" form-control" />
          </p>
        </div>
      </div>
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