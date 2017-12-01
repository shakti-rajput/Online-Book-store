<?php
$conn=mysql_connect("localhost","root","");
$selecydb=mysql_select_db("bookstore");
if (!$conn) 
{     
die("Connection failed: " . $conn->connect_error); 
} 
$id=$_POST['m_id2']; 
$name=$_POST['m_id3']; 

$price=$_POST['m_id4'];
$gne=$_POST['m_id5'];
$aut=$_POST['m_id6'];

$sql2="insert into books values('$id','$name','$price','$gne','$aut')";
$result2=mysql_query($sql2);

header('Location:projectN.php');
?>
