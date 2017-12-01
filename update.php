<?php
session_start();
$un=$_SESSION['uname'];

$connection=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('bookstore',$connection)  or die(mysql_error());
 $y1=$_POST['m_id2'];
 $y2=$_POST['m_id3'];echo"<br>";

$sqlm ="Select * from `oders` where  oder_p= '$y1' and username_p='$un'";
 $resultm=mysql_query($sqlm);
 if($row1=mysql_fetch_array($resultm))
 {
 $olp=$row1['total_price_p'];
 $lp=$row1['piece'];
 $check=$row1['shipped_p'];
 $nprice=($olp/$lp)*$y2;

 
 if($check=='0'){
$sqlm2 ="UPDATE `oders` SET total_price_p='$nprice' ,piece= '$y2' WHERE oder_p= '$y1' and username_p='$un'";
 $resultm2=mysql_query($sqlm2);
 ?>
	<a href="<?php echo "vie.php"; ?>">


<input class="btn" type="button" value="View Ordered Products"></a>
<?php
 }
 else
 {
	 	echo '<script language="javascript">';
echo 'alert("The order is now shipped.....")';
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
 