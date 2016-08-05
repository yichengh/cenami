<?php include 'db.php'; ?>

<?php
    connect_db();
    $theater_id = $_POST["theater_id"];
    $date1 = $_POST["date1"];
    $date2 = $_POST["date2"];
    $date3 = $_POST["date3"];
    //print $date;

    //$stmt = select_showing_by_date($theater_id, $date);


    /* Retrieve each row as a PHP object and display the results.*/
    $result = "<div class='tab-content'>
    <div role='tabpanel' class='tab-pane active' id='home'>";
    $result = $result . select_showing_by_date($theater_id, $date1);
    $result = $result . "</div>";

    $result = $result . "<div role='tabpanel' class='tab-pane' id='profile'>";
    $result = $result . select_showing_by_date($theater_id, $date2);
    $result = $result . "</div>";

    $result = $result . "<div role='tabpanel' class='tab-pane' id='messages'>";
    $result = $result . select_showing_by_date($theater_id, $date3);
    $result = $result . "</div>";
    $result = $result . "</div>";
    echo $result;
?>