<?php
// Create connection
$connection=mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("bookstore",$connection);
// Check connection
	session_start();
$_SESSION["searchuse"] =$_POST['search1'];	
header('Location:projectN.php');
?> 

