<?php
	$connection=mysql_connect("localhost","root","")or die(mysql_error());
	mysql_select_db("bookstore",$connection);
	$id=$_GET['books'];
	session_Start();
	$_SESSION['m']=$id;
	$file=fopen("sbttext/".$id.".txt",'r');
?>
<html>
<link rel="stylesheet" type="text/css" href="main.css">
<br><br><br>
<!-- Image-->
<div><img src="<?php echo "sbttext/".$id.".jpg"; ?>" style="width:250px; height:350px;"></div><br>

<!-- Books Details-->
<div style="margin-left:200px">
<div style="background-color: #86A0A1; padding:15px; font-size:15px; border-radius: 16px; width: 300px; font-family: Comic Sans MS;"><h3>BOOK DETAILS.........</h3></div><br>
<font size="4px"><?php echo fgets($file). "<br />";?></font>
<font size="4px"><?php echo fgets($file). "<br />"; ?></font> <br>
</div>
<div style="margin-left:200px;margin-right:200px;">
<font size="4px"><?php echo fgets($file). ""; ?></font>
<br><br><br>
<!-- Buttoun-->
 <?php
if(isset($_SESSION['uname'])||isset($_SESSION['admin']))
{
?>
	<a href="<?php 
	if(isset($_SESSION['admin']))
	{
	
	echo "";
	}
	else
	echo "buy.php?";
	?>">
	
<?php } 
else{
	?>
	<a href="<?php echo "2new.php"; ?>">
<?php }	?>

<input class="btn" type="button" value="BUY BOOK" style="background-color:#4ED3D8; border-radius: 16px; padding:15px; font-size:15px; text-decoration: none;"></a>
<br><br><br><br>
</div>


<form>
	<a href=""><font size="1px">LOGOUT</font></a>
</form>
</body>
</html>
