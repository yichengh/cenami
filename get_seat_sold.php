<?php include 'db.php'; ?>

<?php
	connect_db();
	$showing_id = $_POST["showing_id"];
    print json_encode(select_seat_sold_by_id($showing_id));
?>