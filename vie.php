<!DOCTYPE html>
<html>
<style>
body {
    background-image:url(background-pattern-design-90.jpg);
}
</style>
<a style=" float:ceil; font-size:25px; background-color: #86A0A1; padding:5px; border-radius: 16px; width: 500px; font-family: Comic Sans MS; text-decoration:none;">
<?php 
$conn=mysql_connect("localhost","root","");
$selecydb=mysql_select_db("bookstore");
if (!$conn) 
{     
die("Connection failed: " . $conn->connect_error); 
}
session_start();
$id=$_SESSION['m'];
$un=$_SESSION['uname'];
$sqls ="SELECT *FROM oders WHERE username_p='$un'";
   $resuls = mysql_query($sqls) or die(mysql_error());
   echo "Your Ordered Product are : ";echo "<br>";echo "<br>";echo "<br>";
   $k=0;
  while( $row1s=mysql_fetch_array($resuls))
  {
	  $k=$k+1;
	  echo "<pre> ". $k."  Product Ordered: </pre>";
	  $x=$row1s['oder_p'];
	  echo "Book Id : ";
	  echo $x;
	  echo "<br>";
	  $sqls2 ="SELECT *FROM books WHERE book_id='$x'";
	  $resul1 = mysql_query($sqls2) or die(mysql_error());
	    $row1s1=mysql_fetch_array($resul1);
	 $xx=$row1s1['book_name'];
	  
	  $x2=$row1s['shipped_p'];
	  if($x2==='0')
	  {
		  $xx2="Not Shipped";
	  }
	  else $xx2="Shipped";
	  $x3=$row1s['total_price_p'];
	  $x4=$row1s['piece'];
	  echo "Ordered Book : ";
	 echo $xx;	echo "<br>";
	 echo "Ordered Status : ";echo $xx2;	echo "<br>";
	 echo "Total Price : ";echo $x3;	echo "<br>";
	 echo "Ordered Peice : ";echo $x4;	echo "<br>";
	 echo "<br>";
  }?></a>
  <a style=" float:ceil; font-size:35px; background-color: purple; padding:15px; border-radius: 12px; width: 200px; font-family: Comic Sans MS; text-decoration:none;" href="<?php echo "projectN.php"; ?>">
<input class="btn" type="button" value="OK"></a>
</html>
  
   