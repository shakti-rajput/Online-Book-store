<?php
session_start();
$un=$_SESSION['uname'];

$connection=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('bookstore',$connection)  or die(mysql_error());
 $y1=$_POST['m_id1'];


 $sqlm ="Select * from `oders` where  oder_p= '$y1' and username_p='$un'";
 $resultm=mysql_query($sqlm);
 if($row1=mysql_fetch_array($resultm))
 {
 $check=$row1['shipped_p'];
 
 if($check==='0')
 {
 $sqlm ="DELETE FROM oders WHERE oder_p= '$y1' and username_p='$un'";
$resultm=mysql_query($sqlm);
?>
<a href="<?php echo "vie.php"; ?>">


<input class="btn" type="button" value="View Ordered Products"></a>
<?php
 }
 else{
	 echo '<script language="javascript">';
echo 'alert("Your product have been delivered.....")';
echo '</script>';
?>
	<a href="<?php echo "vie.php"; ?>">


<input class="btn" type="button" value="View Ordered Products"></a>
<?php
 }
	 
 
 }
  else{
	 	echo '<script language="javascript">';
echo 'alert("You have not ordered that product.....")';
echo '</script>';
?>
	<a href="<?php echo "vie.php"; ?>">


<input class="btn" type="button" value="View Ordered Products"></a>
<?php

 }
?>
 
