<?php 
$conn=mysql_connect("localhost","root","");
$selecydb=mysql_select_db("bookstore");
if (!$conn) 
{     
die("Connection failed: " . $conn->connect_error); 
}
session_start();
$id=$_SESSION['m'];
$sql="select price from books where book_id={$id}";
$pr_m=mysql_query($sql);
$rp_m=mysql_fetch_array($pr_m);
$price=$rp_m['price'];
?>
 <script type="text/javascript">
function myfunction() {
var k=0,i=0,aa=0,bb=0,cc=0,dd=0;
k=document.form1.sl.value;
qty=document.form1.quantity.value;
if(k=='0'){
	 
i=1.1*<?php echo $price; ?>*qty;
i=i.toFixed(2);
}
else if(k=='2')
{
i=<?php echo $price; ?>*qty;
}
document.form1.res.value=i;
document.form1.res1.value=i;
document.form1.res2.value=qty;
}
</script>
<link rel="stylesheet" href="buy.css">
<h1 style="font-family:verdana; font-size:300%; text-align:center;">BOOK TRANSACTION</h1>
<form class="div-container" name="form1" style=" max-width:300px; margin-left:40%; margin-top:12%;" action="ins_us.php" method="POST">
	<h2>Check Out</h2>
	<div >
	Quality: &nbsp
	<select name="sl">
		<option value="0">Hard cover</option>
		<option value="2">Paper cover</option>
	</select> </div><br>
	<div>
		Quantity:   <input type="number" name="quantity" min="1" max="5"></div>
	<div>
	<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="button" class="tprice" value="Total price" onclick="myfunction()";></div>
	<br>
	<input class="pvalue" type="button" name="res" style="border-radius: 25px; background-color: #C0C0C0;"><br>
	<input type="hidden"  name="res1"><br>
	<input type="hidden"  name="res2">
	<input type="submit" class="submit" value="Check Out">
</form>
