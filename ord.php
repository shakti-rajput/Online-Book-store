<html>
<head>
<style>
body {
    background-image:url(background-pattern-design-90.jpg);
}
</style>
<style>
input:focus { 
    background-color:pink;
}
input[type=text], select {
    margin: 8px -1px;
	 padding: 3px 10px;
    display: inline-block;
    border: 1px solid deeppink;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    
    background-color:#7D0552;
    color: white;
    padding: 14px 20px;
    margin: 8px 110px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=message], select {
   
    padding: 6px 5px;
    margin: 18px 2px;
    display: inline-block;
    border: 1px solid deeppink;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit]:hover {
    background-color:steelblue;
}

div {
width:30%;
    border-radius: 5px;
    padding-left: 450px;
	padding-top: 50px;
}
fieldset{

border-radius: 5px;
 border-color: magenta;
 background-color: mistyrose;
}
legend{
border-radius: 5px;
border: 2px solid magenta;
background-color: mistyrose;
border-color: deeppink deeppink mistyrose deeppink;
}
body{
color:deeppink;}
</style>
</head>
<a style=" float:ceil; font-size:25px; background-color: #86A0A1; padding:5px; border-radius: 16px; width: 500px; font-family: Comic Sans MS; text-decoration:none;">

<?php 
$conn=mysql_connect("localhost","root","");
$selecydb=mysql_select_db("bookstore");
if (!$conn) 
{     
die("Connection failed: " . $conn->connect_error); 
}
	session_start();
	$sqls ="SELECT *FROM oders ";
   $resuls = mysql_query($sqls) or die(mysql_error());
   echo "Your Ordered Product are : ";echo "<br>";echo "<br>";echo "<br>";
   $k=0;
   $arr=array();
   $o=0;

  while( $row1s=mysql_fetch_array($resuls))
  {
	  
		$xun=$row1s['username_p'];
		if(!in_array($xun,$arr))
		{
			$arr[$o]=$xun;
			$o=$o+1;
			echo "User Name : ";
			echo $xun;
			echo "<br>";
			$sqls9 ="SELECT *FROM oders where username_p='$xun'";
			$resuls9 = mysql_query($sqls9) or die(mysql_error());
			while( $row1s9=mysql_fetch_array($resuls9))
			{
				$k=$k+1;
				echo "<pre> ". $k."  Product Ordered: </pre>";
				$x=$row1s9['oder_p'];
				
				$sqls2 ="SELECT *FROM books WHERE book_id='$x'";
				$resul1 = mysql_query($sqls2) or die(mysql_error());
				$row1s1=mysql_fetch_array($resul1);
				$xx=$row1s1['book_name'];
				
				$x2=$row1s9['shipped_p'];
				if($x2==='0')
				{
					$xx2="Not Shipped";
				}
				else $xx2="Shipped";
				$x3=$row1s9['total_price_p'];
				$x4=$row1s9['piece'];
				echo "Ordered Book : ";
				echo $xx;	echo "<br>";
				echo "Ordered Status : ";echo $xx2;	echo "<br>";
				echo "Total Price : ";echo $x3;	echo "<br>";
				echo "Ordered Peice : ";echo $x4;	echo "<br>";
				echo "<br>";
			}
		}
	}
?>
  <a href="<?php echo "projectN.php"; ?>">


<input class="btn" type="button" value="OK"></a>
</html>
  
   