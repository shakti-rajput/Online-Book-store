<?php

$servername ="localhost";
$username="root";
$password="";
$dbname = "bookstore";
// Create connection
$conn = mysql_connect($servername, $username, $password);
$dbcon= mysql_select_db($dbname);
// Check connection

$use = $_POST['search'];

$sql ="Select book_id from table books where book_name = 'Amish Tripathi'";

$result = mysql_query($sql);
echo $result;/*$data=mysql_fetch_row($result);
$count=mysql_num_rows($result);
echo $count;
if($count!=null)
{
    // output data of each row
		
	session_start();
$_SESSION["searchuse"] = $use;	
	 header("Location:projectN.php");

	 
}
 else {
	 header("Location:proectN.php");
}
 mysql_close($conn);*/
?> 

