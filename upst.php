<?php
$conn=mysql_connect("localhost","root","");
$selecydb=mysql_select_db("bookstore");
if (!$conn) 
{     
die("Connection failed: " . $conn->connect_error); 
} 
$y1=$_POST['m_id1'];
$y2=$_POST['m_id2'];
echo $y1;
echo $y2;
 $sqlm ="UPDATE `oders` SET `shipped_p`='1' WHERE oder_p='$y1' and username_p='$y2'";
   $resultm = mysql_query($sqlm);
header('Location:projectN.php');
?>  