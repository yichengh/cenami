<?php
/*
Connect to the local server using Windows Authentication and specify
the AdventureWorks database as the database in use. To connect using
SQL Server Authentication, set values for the "UID" and "PWD"
 attributes in the $connectionInfo parameter. For example:
$connectionInfo = array("UID" => $uid, "PWD" => $pwd, "Database"=>"AdventureWorks");
*/
$conn;
function connect_db(){
    global $conn;
    $conn = mysqli_connect("localhost","root","root","yicheng");
    if( $conn )
    {
         //echo "Connection established.\n";
    }
    else
    {
         echo "Connection could not be established.\n";
         die( print_r( sqlsrv_errors(), true));
    }
    date_default_timezone_set('PRC');
    session_start();
}

//-----------------------------------------------
// Perform operations with connection.
//-----------------------------------------------
function query2($tsql){
    global $conn;
    $stmt = mysqli_query($conn, $tsql);
    if( $stmt == false )
    {
         echo "<h3>Something Wrong(Maybe your arguments are illegal)! Go Back and Try again.</h3>";
         echo mysqli_error($conn);
//        die( print_r( sqlsrv_errors(), true));
    }
    return $stmt;
}

function select_theater(){
    $tsql = "SELECT * from theater;";
    $stmt = query2($tsql);

    /* Retrieve each row as a PHP object and display the results.*/
    $sum = 0;
    while( $obj = mysqli_fetch_array($stmt, MYSQLI_ASSOC) )
    {
        $sum ++;
        //$gg = selectgroupbyid($obj->GroupID);
        print "<tr>
        <td> <input type='checkbox' name='delete[]' value='". $obj["id"] ."' /> </td>
        <th scope=\"row\">". $sum  . "</th> 
        <td>". $obj["name"]    ."</td> 
        <td>". $obj['province']." </td>
        <td>". $obj['city']    ."</td> 
        <td>". $obj['manager'] ."</td>
        <td>". $obj['state']   ."</td>
        <td> <a href=\"theater_detail.php?id=" .$obj["id"] ."\" >check</a></td>
        </tr>";
    }

/* Free statement and connection resources. */
    mysqli_free_result($stmt);
}

function select_theater2(){
    $tsql = "SELECT * from theater;";
    $stmt = query2($tsql);

    /* Retrieve each row as a PHP object and display the results.*/
    $sum = 0;
    while( $obj = mysqli_fetch_array($stmt, MYSQLI_ASSOC) )
    {
        $sum ++;
        //$gg = selectgroupbyid($obj->GroupID);
        print "<tr>
        <th scope=\"row\">". $sum  . "</th> 
        <td>". $obj["name"]    ."</td> 
        <td>". $obj['province']." </td>
        <td>". $obj['city']    ."</td> 
        <td>". $obj['manager'] ."</td>
        <td>". $obj['state']   ."</td>
        <td> <a href=\"theater_manage.php?id=" .$obj["id"] ."\" >manage!</a></td>
        </tr>";
    }

/* Free statement and connection resources. */
    mysqli_free_result($stmt);
}


function select_movie(){
    $tsql = "SELECT * from movie;";
    $stmt = query2($tsql);

    /* Retrieve each row as a PHP object and display the results.*/
    $sum = 0;
    while( $obj = mysqli_fetch_array($stmt, MYSQLI_ASSOC) )
    {
        $sum ++;
        //$gg = selectgroupbyid($obj->GroupID);
        print "<tr>
        <td> <input type='checkbox' name='delete[]' value='". $obj["id"] ."' /> </td>
        <th scope=\"row\">". $sum  . "</th> 
        <td>". $obj["original_title"]    ."</td> 
        <td>". $obj['directors']    ."</td> 
        <td>". $obj['released_date']." </td>
        <td>". $obj['per_cost'] ."</td>
        <td> <a href=\"theater_detail.php?id=" .$obj["id"] ."\" >check</a></td>
        </tr>";
    }

/* Free statement and connection resources. */
    mysqli_free_result($stmt);
}


function select_movie2(){
    $tsql = "SELECT * from movie;";
    $stmt = query2($tsql);

    /* Retrieve each row as a PHP object and display the results.*/
    $sum = 0;
    while( $obj = mysqli_fetch_array($stmt, MYSQLI_ASSOC) )
    {
        $sum ++;
        //$gg = selectgroupbyid($obj->GroupID);
        print "<option value='".$obj["id"]."''>".$obj["original_title"]."</option>";
    }

/* Free statement and connection resources. */
    mysqli_free_result($stmt);
}

function select_showing_by_id($id){
    $tsql = "SELECT * from showing where theater_id = $id;";
    $stmt = query2($tsql);

    /* Retrieve each row as a PHP object and display the results.*/
    $sum = 0;
    while( $obj = mysqli_fetch_array($stmt, MYSQLI_ASSOC) )
    {
        $sum ++;
        //$gg = selectgroupbyid($obj->GroupID);
        print "<tr>
        <td> <input type='checkbox' name='delete[]' value='". $obj["id"] ."' /> </td>
        <th scope=\"row\">". $sum  . "</th> 
        <td>". get_movie_name_by_id($obj["movie_id"])    ."</td> 
        <td>". date('Y-m-d',strtotime($obj['start_time'])) ."</td> 
        <td>". date('h:i',strtotime($obj['start_time']))." </td>
        <td>". attendance() ."</td>
        </tr>";
    }

/* Free statement and connection resources. */
    mysqli_free_result($stmt);
}

function attendance() {
    return 0;
}
function get_movie_name_by_id($id){
    $tsql = "SELECT * from movie where id = $id;";
    $stmt = query2($tsql);

    /* Retrieve each row as a PHP object and display the results.*/
    $sum = 0;
    while( $obj = mysqli_fetch_array($stmt, MYSQLI_ASSOC) )
    {
        return $obj["original_title"];
    }

/* Free statement and connection resources. */
    mysqli_free_result($stmt);
}



function select_theater_by_id($id){
    $tsql = "SELECT * from theater where id = ". $id . ";";
    $stmt = query2($tsql);
    $obj = mysqli_fetch_array($stmt, MYSQLI_ASSOC);
    return $obj;
}

function update_theater_by_id($id, $address, $manager, $investment_volume, $state){
    $tsql = "update theater set 
        address = '".$address."',
        manager = '".$manager."',
        investment_volume = ".$investment_volume.",
        state = '".$state."'
        where id = ". $id . ";";
    $stmt = query2($tsql);
}

function delete_theater_by_id($id) {
    $tsql = "delete from theater where id = $id";
    $stmt = query2($tsql);
}

function delete_movie_by_id($id) {
    $tsql = "delete from movie where id = $id";
    $stmt = query2($tsql);
}


function insert_theater($name, $manager, $province, $city, $address, $investment_volume, $state){
    $tsql = "insert into theater(manager, name, province, city, address,investment_volume,state) values
    ('$name', '$manager', '$province', '$city', '$address', $investment_volume, '$state')";
    $stmt = query2($tsql);
}

function insert_showing($movie_id, $theater_id, $start, $end, $price) {
    $tsql = "insert into showing(movie_id, theater_id, start_time,
     end_time, price) values
    ($movie_id, $theater_id, '$start', '$end', $price)";
    $stmt = query2($tsql);
}

function close_db(){
    global $conn;
/* Close the connection. */
    mysql_close($conn);
}

function my_join($obj) {
    $N = count($obj);
    $re = "";
    if ($N == 0) return $re;
    $re = $obj[0]["name"];

    for ($i = 1; $i < $N; $i++)
         $re = $re." / ".$obj[$i]["name"];
       // print "$re<br/>";
    return $re;
}
function insert_movie_by_id($id, $date, $cost){
    $url = "http://api.douban.com/v2/movie/subject/$id";
    $html = file_get_contents($url);
    $obj = json_decode($html, true);
    $original_title = $obj["original_title"];
    $chinese_title = $obj["title"];
    $directors = my_join($obj["directors"]);
    $casts = my_join($obj["casts"]);
    $countries = join(" / ", $obj["countries"]);
    $genres = join(" / ", $obj["genres"]);
    $rating = $obj["rating"]["average"];
    $image_medium = $obj["images"]["medium"];
    $image_large = $obj["images"]["large"];
    $summary = $obj["summary"];
    $tsql = "insert into movie values
    ($id,'$original_title','$chinese_title','$directors','$casts',
    '$countries','$genres',$rating,'$image_medium','$image_large','$summary',
    $date, $cost);";
    $stmt = query2($tsql);
}
?>
