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
<link href="css/jquery.popup.css" rel="stylesheet" type="text/css">
<script language="javascript">
      function set($title, $id){
        $("#hyc").html($title);
        $("#hyc2").html("<input type=\"hidden\" name=\"id\" value =\"" +$id + "\"/>");
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
          $title = $A["original_title"];
          print "<p><b>Original Title: </b>".$A["original_title"]."</p>";
          print "<p><b>Chinese Title: </b>".$A["title"]."</p>";
          print "<p><b>Directors: </b>".$A["directors"][0]["name"]."</p>";
          print "<p><b>Rating: </b>".$A["rating"]["average"]."</p>";
          // print "<a href = 'show_movie.php?id=".$id."'>add</a>";
          $image_medium = $A["images"]["medium"];
          $image_large = $A["images"]["large"];
          print "<button class=\"btn\" data-dialog=\"#popup-dialog\" data-effect=\"effect-fade-scale\"
          onclick=\"return set('$title', $id);\">Add</button>";
          print "</div>";
          print "<div class=\"col-md-4\">";
          print "<img src='". $image_medium. "'/>";
          print "</div>";
          print "</div>";
        }
      }
    ?>




<div class="popup effect-fade-scale" id="popup-dialog">
        <div class="popup-content">
        
          <form action="show_movie.php" method="post">
          <p>
            <p id="hyc">
            </p>
            <div id="hyc2"></div>
            release date:<br/>
            <select id = "year" name="year">
              <option value="2016">2016</option>
              <option value="2016">2017</option>
            </select>
            <select id = "month" name="month">
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
           <select id = "day" name="day">
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
           <br/><br/>
           <p>
             cost per tick:<br/>
             <input id = "cost" type="text" name="cost" value="10"/>
           </p>
          </p>
      <p>
      <p> <input type = "submit"  class="btn btn-danger" value = "Submit" />
      &nbsp;&nbsp;
        <button class="popup-close btn btn-danger">Close</button> </p>
      </p>
    </form>
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
<script src="js/jquery.popup.js"></script>
  <script src="js/jquery.popup.dialog.min.js"></script>
  <script>
  (function($){
          $(function(){
            $('[data-dialog]').on('click', function(e){
              var $this = $(e.target);
              $($this.data('dialog')).attr('class', 'popup '+$this.data('effect'));
            });
          });
        })(jQuery);
    $(document).ready(function(){
      $('.popup').popup({
        close: function(){
          $(this).find('.embed-container').empty();
        }
      });
    
      $(document).on('click', '[data-action="watch-video"]', function(e){

        e.preventDefault();

        var plugin = $('#popup-video.popup').data('popup');

        $('#popup-video.popup .embed-container').html(
          '<iframe src="'
          + e.currentTarget.href
          + '?autoplay=1" frameborder="0" allowfullscreen />'
        );

        plugin.open();
      });

    });
</script>
<!-- \ JS Files  -->

</body>
</html>