<?php
// Create connection
$connection=mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("bookstore",$connection);
// Check connection
$uses = $_POST['search'];
$sql = ("Select book_id from books where book_name like '%$uses%' or author_name LIKE '%$uses%' or genre LIKE '%$uses%' ");
$result=mysql_query($sql,$connection);
$data=mysql_fetch_row($result);
$count=mysql_num_rows($result);
if($count!=null)
{
	session_start();
	$_SESSION["searchuse"] = $uses;	
	 //header("Location:projectN.php");
while($row=mysql_fetch_array($result))
{	
	echo $row['book_id'].'<br>';
}
	 
}
 else {
	 header("Location:projecN.php");
}
?> 

