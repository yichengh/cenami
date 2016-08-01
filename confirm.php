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
<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css"/> 

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

    <h4>Please Confirm your choice. </h4>
    <?php 
        connect_db();
		if (isset($_POST["seats"])){
    		$seats = $_POST["seats"];
    		//echo $de;
    		$showing_id = $_POST["showing_id"];
    		//echo $showing_id;
 		}
 		$A = explode(',',$seats);
 		//echo count($A);
 		$tsql = "SELECT * from showing where id = $showing_id;";
    	$stmt = query2($tsql);
		$obj = mysqli_fetch_array($stmt, MYSQLI_ASSOC);
		$price = $obj["price"] * count($A);
		print "<p class=\"alert bg-primary\"><b>movie: </b>".get_movie_name_by_id($obj["movie_id"]) ."</p>";
		print "<p class=\"alert bg-success\"><b>date: </b>".date('Y-m-d',strtotime($obj['start_time'])) ."</p>";
		print "<p class=\"alert bg-info\"><b>start time: </b>".date('h:i',strtotime($obj['start_time'])) ."</p>";
		print "<p class=\"alert bg-warning\"><b>seats: </b>".$seats ."</p>";
		print "<p class=\"alert bg-danger\" id=\"p1\" value=\"$price\"><b>price: </b>".$price ."</p>";
    ?>
	<br/><br/><br/><br/>
    

    
<form action="thankyou.php" method="post">
<h4>Select your favourite Special Offers.</h4>

<?php
print "<input type=\"hidden\" name=\"seats_confirm\" value='".$seats."'>";
?>

<?php
print "<input type=\"hidden\" name=\"showing_id\" value='".$showing_id."'>";
?>
<div class="radio radio-primary">
	<h5>
		<input type="radio" name="radio1" value="0" checked>
		<label for="radio1">None</label>
	</h5>
</div>
<div class="row">
<div class="col-md-8">
	<div class="radio radio-danger">
	<h5>
		<input type="radio" name="radio1" value="5" >
		<label for="radio1">Chinese Valentine's Day Special Limited Tickets (+5)</label>
	</h5>
	</div>
</div>
<div class="col-md-4">
<img src="images/s1.jpg" width="150"/>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-8">
	<div class="radio radio-danger">
	<h5>
		<input type="radio" name="radio1" value="5" >
		<label for="radio1">5 Year's anniversary Tickets (+5)</label>
	</h5>
	</div>
</div>
<div class="col-md-4">
<img src="images/s2.jpg" width="150"/>
</div>
</div>

<h4>Select your favourite Snacks Package.</h4>
<div class="radio radio-primary">
<p>
	<input type="radio" name="radio2" value="0" checked>
	<label for="radio2">None</label>
</p>
</div>
<div class="radio radio-danger">
<p>
	<input type="radio" name="radio2" value="15">
	<label for="radio2">popcorn + spring water (+15)</label>
</p>
</div>
<div class="radio radio-danger">
<p>
	<input type="radio" name="radio2" value="20">
	<label for="radio2">popcorn + orange juice (+20)</label>
</p>	
</div>
	<h4 id = "p2" class="alert bg-danger"> <b>total price: </b>
  <?php print $price ?> </h4>
  <input type = "submit" value = "Confirm!" class = "btn btn-block btn-lg btn-warning"/>
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
<script src="js/buy_ticket.js"></script>

<!-- Bootstrap -->
<script src="js/bootstrap/bootstrap.min.js"></script>
<script language="javascript">
$(document).ready(function(){
  $("input").click(function(){
  var c1 = $('input:radio[name=radio1]:checked').val();
  var c2 = $('input:radio[name=radio2]:checked').val();
  var p1 = $("#p1").attr("value");
  console.log(c1);
  console.log(c2);
  var total = parseInt(p1) + parseInt(c1) + parseInt(c2);
  $("#p2").html("<b>total price: </b>"+total);
  });
});
</script>
<!-- \ JS Files  -->
</body>
</html>