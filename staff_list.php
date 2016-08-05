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
<link href="css/jquery.popup.css" rel="stylesheet" type="text/css">
<script language="javascript">
      function set($id, $name){
        $("#hyc").html($name);
        $("#hyc2").html("<input type=\"hidden\" name=\"staff_id\" value =\"" +$id + "\"/>");
        return true;
      }
</script>
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

    if (isset($_POST['staff_id'])){
      $staff_id = $_POST['staff_id'];
      $rank = $_POST['rank'];
      $position = $_POST['position'];
      update_staff_by_id($staff_id, $rank, $position);
    }
    if (isset($_POST['name'])){
      $name = $_POST['name'];
      $rank = $_POST['rank'];
      $gender = $_POST['gender'];
      $position = $_POST['position'];
      insert_staff($name, $gender, $rank, $position, $id);
    }

    if (isset($_POST["delete"])){
          $de = $_POST["delete"];
          $N = count($de);
          for ($i = 0; $i < $N; $i++){
            delete_staff_by_id($de[$i]);
          }
        }
  ?>

    <?php 
        //echo $id;
        $obj = select_theater_by_id($id);
        print "<h3><i>" . $obj["name"] . " </i>'s Staff List</h3>"
    ?>
    <form action="staff_list.php" method="post">
      <input type="hidden" name="id" value = <?php print "'$id'";?>/>
      <table class="table">
        <thead>
          <tr>
            <th>Delete?</th>
            <th>ID</th>
            <th align="center">name</th>
            <th>gender</th>
            <th>rank</th>
            <th>position</th>
            <th>update?</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          select_staff_by_id($id);
        ?></tbody>
      </table>
      <input type = "submit"  value = "Delete it!" class = "btn btn-block btn-lg btn-warning"/>
      <p> <a href="show_theater.php" class = "btn btn-block btn-lg btn-primary" > Back </a> </p>
    </form>
     

    <h2>Add new staff?</h2>
    <form action="staff_list.php" method="post" onsubmit="return check();">
      <input type="hidden" name="id" value = <?php print "'$id'";?>/>
      <!-- <div class="row"> -->
        <p class="alert bg-primary">
          name:
          <input id = "name" name="name" class="form-control"/ >
        </p>
      <!-- </div> -->

      <div class="row">
        <div class="col-md-4">
          <p class="alert bg-success">
            gender:
            <br/>
            <select id = "gender" name="gender" class="form-control">
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </p>
        </div>
        <div class="col-md-4">
          <p class="alert bg-success">
            rank:
            <select id = "rank" name="rank" class="form-control" >
              <option value="officer">officer</option>
              <option value="senior">senior</option>
              <option value="expert">expert</option>
              <option value="assistant">assistant</option>
            </select>
          </p>
        </div>
        <div class="col-md-4">
          <p class="alert bg-success">
            position:
            <select id = "position" name="position" class="form-control" >
             <option value="region manager">region manager</option>
             <option value="manager">manager</option>
             <option value="staff">staff</option>
      
           </select>
          </p>
        </div>
      </div>
      <input type = "submit"  value = "Submit" class="btn btn-block btn-lg btn-danger"/>
    </form>
    </div>


<div class="popup effect-fade-scale" id="popup-dialog">
        <div class="popup-content">
        
          <form action="staff_list.php" method="post">
          <p>
            <input type="hidden" name="id" value = <?php print "'$id'";?>/>
            <p id="hyc">
            </p>
            <div id="hyc2"></div>
            rank:<br/>
            <select id = "rank" name="rank">
              <option value="officer">officer</option>
              <option value="senior">senior</option>
              <option value="expert">expert</option>
              <option value="assistant">assistant</option>
            </select><br/><br/>
            position:<br/>
            <select id = "position" name="position">
             <option value="region manager">region manager</option>
             <option value="manager">manager</option>
             <option value="staff">staff</option>
            </select>
           <br/><br/>
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