<?php
session_start();
$id=$_SESSION['m'];
$un=$_SESSION['uname'];
$connection=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('bookstore',$connection)  or die(mysql_error());

echo $id;
echo "<br>";
echo $un;
/*$data="INSERT into oders values('$id','$un','0','$t','$qty')";
mysql_query($data);
header('Location:payment.html');
*/
?>