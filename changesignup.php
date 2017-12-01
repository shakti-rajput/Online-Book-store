<?php
session_start();
$un=$_SESSION['uname'];

$connection=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('bookstore',$connection)  or die(mysql_error());

$uname1 = $_POST['uname'];
$p0= $_POST['password10'];
$p1 = $_POST['password1'];
$p2 = $_POST['password2'];

$sqls ="SELECT *FROM `user` WHERE username='$un'";
   $resuls = mysql_query($sqls) or die(mysql_error());
   $row1s=mysql_fetch_array($resuls) or die(mysql_error());
   $paw0=$row1s['password'];
   
if($p0==$paw0)
{
$ins = "UPDATE `user` SET username='$uname1',`password`='$p1' WHERE username='$un'";

if(mysql_query($ins))
{
	$_SESSION['uname']=$uname1;
	 header("Location:projectN.php");	
}
else
{
	echo'Failed to Update Table'.$con->error;
}
}
else{
	echo '<script language="javascript">';
echo 'alert("Given OLD Password does not match......")';
echo '</script>';
?>
	<a href="<?php echo "projectN.php"; ?>">


<input class="btn" type="button" value="OK"></a>
<?php
//header("Location:projectN.php");	
}
?>
