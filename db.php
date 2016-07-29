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
//    	die( print_r( sqlsrv_errors(), true));
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
    	<th scope=\"row\">". $obj["id"]      . "</th> 
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

function close_db(){
	global $conn;
/* Close the connection. */
	mysql_close($conn);
}
?>
