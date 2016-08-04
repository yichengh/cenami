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
        var name = document.getElementById("name").value;
        var manager = document.getElementById("manager").value;
        var province = document.getElementById("province").value;
        var city = document.getElementById("city").value;
        var address = document.getElementById("address").value;
        var investment_volume = document.getElementById("investment_volume").value;
        var state = document.getElementById("state").value;
        if (name == "" || manager == "" || province == "" || city == "" 
          || address == "" || investment_volume == "" || state == "")
        {
          window.alert("Some value is empty!");
          return false;  
        }

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

    <h2>Show all theaters!</h2>
    <?php 
        connect_db();
        if (isset($_POST['name'])){
          $name = $_POST['name'];
          $address = $_POST['address'];
          $manager = $_POST['manager'];
          $investment_volume = $_POST['investment_volume'];
          $state = $_POST['state'];
          $province = $_POST['province'];
          $city = $_POST['city'];
          //print "$name hehe";
          //update_theater_by_id($id, $address, $manager, $investment_volume, $state);
          //$is_update = 1;
          insert_theater($name, $manager, $province, $city, $address, $investment_volume, $state);
        }
        
        if (isset($_POST["delete"])){
          $de = $_POST["delete"];
          $N = count($de);
          for ($i = 0; $i < $N; $i++){
            delete_theater_by_id($de[$i]);
          }
        }
        
    ?>
    <form action="show_theater.php" method="post">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th align="center">name</th>
            <th>address</th>
            <th>tel</th>
            <th>region</th>
            <th>staffs</th>
            <th>manage</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          select_theater();
        ?></tbody>
      </table>
      <!-- <input type = "submit"  value = "Delete it!" class = "btn btn-block btn-lg btn-warning"/> -->
    </form>
    <br/>
    <br/>
    <br/>
 <!--    <h2>Add new theater?</h2>
    <form action="show_theater.php" method="post" onsubmit="return check();">
      <div class="row">
        <div class="col-md-6">
          <p class="alert bg-primary">
            name:
            <input id = "name" type="text" name="name"  class="form-control" />
          </p>
        </div>
        <div class="col-md-6">
          <p class="alert bg-primary">
            manager:
            <input id = "manager" type="text" name="manager"  class="form-control" />
          </p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <p class="alert bg-success">
            province:
            <br/>
            <select id = "province" name="province" class="form-control">
              <option value="Anhui">Anhui</option>
              <option value="Beijing">Beijing</option>
              <option value="Chongqing">Chongqing</option>
              <option value="Fujian">Fujian</option>
              <option value="Gansu">Gansu</option>
              <option value="Guangdong">Guangdong</option>
              <option value="Guangxi">Guangxi</option>
              <option value="Guizhou">Guizhou</option>
              <option value="Hainan">Hainan</option>
              <option value="Hebei">Hebei</option>
              <option value="Heilongjiang">Heilongjiang</option>
              <option value="Henan">Henan</option>
              <option value="Hong Kong">Hong Kong</option>
              <option value="Hubei">Hubei</option>
              <option value="Hunan">Hunan</option>
              <option value="Jiangsu">Jiangsu</option>
              <option value="Jiangxi">Jiangxi</option>
              <option value="Jilin">Jilin</option>
              <option value="Liaoning">Liaoning</option>
              <option value="Macau">Macau</option>
              <option value="Neimenggu">Neimenggu</option>
              <option value="Ningxia">Ningxia</option>
              <option value="Qinghai">Qinghai</option>
              <option value="Shandong">Shandong</option>
              <option value="Shanxi">Shanxi</option>
              <option value="Shaanxi">Shaanxi</option>
              <option value="Shanghai">Shanghai</option>
              <option value="Sichuan">Sichuan</option>
              <option value="Taiwan">Taiwan</option>
              <option value="Tianjin">Tianjin</option>
              <option value="Tibet(Xizang)">Tibet(Xizang)</option>
              <option value="Sinkiang(Xinjiang)">Sinkiang(Xinjiang)</option>
              <option value="Yunnan">Yunnan</option>
              <option value="Zhejiang">Zhejiang</option>
            </select>
          </p>
        </div>
        <div class="col-md-6">
          <p class="alert bg-success">
            city:
            <input id = "city" type="text" name="city"  class="form-control" />
          </p>
        </div>

      </div>

      <p class="alert bg-warning">
        address:
        <input id = "address" type="text" name="address"  class="form-control" />
      </p>
      <div class="row">
        <div class="col-md-6">
          <p class="alert bg-danger">
            investment_volume:
            <input id = "investment_volume" type="text" name="investment_volume"  class="form-control" />
          </p>
        </div>
        <div class="col-md-6">
          <p class="alert bg-danger">
            state:
            <input id = "state" type="text" name="state"  class="form-control" />
          </p>
        </div>
      </div>
      <input type = "submit"  value = "Submit" class="btn btn-block btn-lg btn-danger"/>
    </form> -->
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