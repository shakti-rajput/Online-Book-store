<!DOCTYPE html>
<html>
<head>
<?php
session_start();
$connect=mysql_connect("localhost","root","");
$selectdb=mysql_select_db("bookstore",$connect);
$books_res=mysql_query("Select * from books");
?>
<link rel="stylesheet" type="text/css" href="layout.css">
<link rel="stylesheet" type="text/css" href="style_navigation_bar.css">
<link rel="stylesheet" type="text/css" href="form.css">
<link rel="stylesheet" type="text/css" href="floatingbox.css">
<link rel="stylesheet" type="text/css" href="headersearch.css">
<link rel="stylesheet" type="text/css" href="flipbox.css">
<link rel="stylesheet" type="text/css" href="slide.css">
<link rel="stylesheet" type="text/css" href="imagemagnifier.css">
<link rel="stylesheet" type="text/css" href="main.css">
<script src="form.js"></script> 
</head>
<body>
<div class="container">
<header>
  <p id="unam"><?php if(isset($_SESSION['uname'])||isset($_SESSION['admin']))
{
	?>

<a href="logout.php" style=" float:right; font-size:35px; background-color: #86A0A1;text-decoration:none; padding:15px; border-radius: 16px; width: 200px; font-family: Comic Sans MS;"><b>Logout</b></a>
<br><br><br><br><br>
<?php	
}	
?></p>

    <p id="unam"><?php if(isset($_SESSION['uname']))
{
	?>
<a  style=" float:ceil; font-size:35px; background-color: #86A0A1; padding:15px; border-radius: 16px; width: 200px; font-family: Comic Sans MS; text-decoration:none;"><b><?php echo "Welcome ";
	echo $_SESSION['uname']; ?></b></a>
	
<?php	
}
else
{
	echo '';

}
?></p>
	
	
	    <p id="unam"><?php if(isset($_SESSION['admin']))
{
	?>
<a  style=" float:ceil; font-size:35px; background-color: #86A0A1; padding:15px; border-radius: 16px; width: 200px; font-family: Comic Sans MS; text-decoration:none;"><b><?php echo "Welcome as Admin ";
	echo $_SESSION['admin']; ?></b></a>
	
<?php	
}
else
{
	echo '';

}
?></p>
	
	
	
	
<form action="1action_search.php" method="POST" name="search">
 <p style="color:cyan; font-size:25px;"> Books <input class="shakti" type="text" name="search1" placeholder="Search...."></p>
 	 <input type="submit" value="Search">

</form>
</header>
   <nav>
<ul >
<li>
<?php /* if(isset($_SESSION['uname']))
{
	echo '<a href="" style="text-decoration:none">Login or Sign up</a>';
}
else
{	
	echo '<a href="2new.php" style="text-decoration:none">Login or Sign up</a>';
}*/
?>
</li>
  <li><a href="" style="text-decoration:none">Home</a></li>
  <li>
  <a href="amish.php" style="text-decoration:none">Top 10 Books</a>
  <?php /*if(isset($_SESSION['uname']))
{
	echo '<a href="amish.php" style="text-decoration:none">Top 10 Books</a>';
}
else
{	
	echo '<a href="" style="text-decoration:none">Top 10 Books</a>';
}*/
?>
</li>

  <li  >
    <a href="" class="dropbtn" style="text-decoration:none">Authors</a>

  </li>
  <li  >
    <a href="" class="dropbtn" style="text-decoration:none">Publishers</a>
    
  </li>
  <li  >
    <a href="" class="dropbtn" style="text-decoration:none">Fiction</a>
    
  </li>
  <li  >
    <a href="" class="dropbtn" style="text-decoration:none">Non-Fiction</a>
   
  </li>
  <li><a href="" style="text-decoration:none">Library</a></li>
   
<li>   <?php if(((!isset($_SESSION['uname']))&&(!isset($_SESSION['admin']))))
{
	echo '<a href="2admin.php" style="text-decoration:none">Admin Login</a>';
}

?>
</li>
  <li>
  <?php if(isset($_SESSION['admin']))
{
	echo '<a href="upst.html" style="text-decoration:none">Update Status</a>';
}

?>
</li>
  <li>
  <?php if(isset($_SESSION['admin']))
{
	echo '<a href="uppr.html" style="text-decoration:none">Update Books</a>';
}

?>
</li>
 <li>
  <?php if(isset($_SESSION['admin']))
{
	echo '<a href="ord.php" style="text-decoration:none">View Orders</a>';
}

?>
</li>


    <li>
  <?php if(isset($_SESSION['uname']))
{
	echo '<a href="edit.php" style="text-decoration:none">Edit Profile</a>';
}

?>
</li>
   <li>
  <?php if(isset($_SESSION['uname']))
{
	echo '<a href="deleteorders.html" style="text-decoration:none">Update Order</a>';
}

?>
</li>

<li>
  <?php if(isset($_SESSION['uname']))
{
	echo '<a href="vie.php" style="text-decoration:none">View Orders</a>';
}
?>
</li>

  
  
</ul>
</nav>
<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="Aged-Inventory-Blowout-2016.png" style="width:100%">
  <div class="text">Caption Text</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="WebNinja_Interalia_Banner-01.png" style="width:100%">
  <div class="text">Caption Two</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="Aged-Inventory-Blowout-2016.png" style="width:100%">
  <div class="text">Caption Three</div>
</div>
</div>
<br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<script>
var slideIndex = 0;
showSlides();
function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
	<form  class='sha' action="action_page.php">
	<p style="color:orange";>Feed Back Form<br></p>
    <label style="color:orange"; for="name">Name *&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </label>
    <input type="text" id="name" name="Name" placeholder="Username" autofocus> <br><br>
   <label style="color:orange"; for="email">Email *&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </label>
   <input  type="email" id="email" name="email" placeholder="email_id@gmail.com"><br>
 <br>
   <label style="color:orange"; for="Telephone">Phone.</label>
    <input type="text" id="Telephone1" name="Telephone1" size="3" placeholder="Phone_no." maxlength="3" onkeyup="movetoNext(this, 'Telephone2')" >-<input type="text" id="Telephone2" placeholder="Phone_no." name="Telephone2" size="3" maxlength="3" onkeyup="movetoNext(this, 'Telephone3')" >-<input type="text" id="Telephone3" placeholder="Phone_no." name="Telephone3" size="3" maxlength="4"> 
 <br><label style="color:orange"; for="Regarding">Regarding&nbsp&nbsp&nbsp </label>
 <select id="Regarding" name="Regarding"> 
     <option style="color:orange"; value="general">general</option>
      <option style="color:orange"; value="formal">formal</option>
 </select><br>
 <label style="color:orange"; for="message">Message *&nbsp&nbsp&nbsp </label>
   <input style="padding: 40px 15px;" type="message" id="message" name="message" placeholder="Message"><br>
<br>
    <input type="submit" value="Submit">
  </form>
  <table> 

	

  
<article>
<?php 
if(isset($_SESSION['searchuse']))
{
	$uses = $_SESSION["searchuse"];
	unset($_SESSION["searchuse"]);
	
	if($uses=="")
	{
		echo 'type something';
	}
	else
	{
		$sql = "Select * from books where book_name like '%$uses%' or author_name LIKE '%$uses%' or genre LIKE '%$uses%' ";
		$result=mysql_query($sql,$connect);

		if($books_data=mysql_fetch_array($result))
		{	
?>	
<?php $mat=$books_data['book_id'];
?>
			<div class="floating-box" >
			<div class="flip3D">
			<div class="back">
			<a href="<?php echo "bookdetails.php?books={$mat}"; ?>">
			<img src="<?php echo "Images/{$books_data['book_id']}_back.jpg"; ?>" alt="<?php echo $books_data['book_name']; ?>" class="pic" style="width:140px; height:200px;">
			<img src="<?php echo "Images/{$books_data['book_id']}.jpg"; ?>" alt="<?php echo $books_data['book_name']; ?>" class="picbig flashit">
			</a>
			</div>
			<div class="front"><img src="<?php echo "Images/{$books_data['book_id']}.jpg"; ?>" alt="<?php echo $books_data['book_name']; ?>" style="width:140px; height:200px;"></div>
			</div>
			<br><?php echo "{$books_data['book_name']}"; ?><br><?php echo "{$books_data['author_name']}"; ?><br><?php echo "{$books_data['genre']}"; ?><br><?php echo "Rs "; echo $books_data['price']; ?>

			</div>
<?php	
			while($books_data=mysql_fetch_array($result))
			{
?>
<?php $mat=$books_data['book_id'];
?>
			<div class="floating-box" >
			<div class="flip3D">
			<div class="back">
			<a href="<?php echo "bookdetails.php?books={$mat}"; ?>">
			<img src="<?php echo "Images/{$books_data['book_id']}_back.jpg"; ?>" alt="<?php echo $books_data['book_name']; ?>" class="pic" style="width:140px; height:200px;">
			<img src="<?php echo "Images/{$books_data['book_id']}.jpg"; ?>" alt="<?php echo $books_data['book_name']; ?>" class="picbig flashit">
			</a>
			</div>
			<div class="front"><img src="<?php echo "Images/{$books_data['book_id']}.jpg"; ?>" alt="<?php echo $books_data['book_name']; ?>" style="width:140px; height:200px;"></div>
			</div>
			<br><?php echo $books_data['book_name']; ?><br><?php echo $books_data['author_name']; ?><br><?php echo $books_data['genre']; ?><br><?php echo "Rs ";  echo $books_data['price']; ?>			</div>
			<?php 
			}
		}
		else
		{
			echo 'not present';
		}
	}		


 
}




else
{
	while($books_data=mysql_fetch_array($books_res))
		{
?>
<?php $mat=$books_data['book_id'];
?>
			<div class="floating-box" >
			<div class="flip3D">
			<div class="back">
			<a href="<?php echo "bookdetails.php?books={$mat}"; ?>">
			<img src="<?php echo "Images/{$books_data['book_id']}_back.jpg"; ?>" alt="<?php echo $books_data['book_name']; ?>" class="pic" style="width:140px; height:200px;">
			<img src="<?php echo "Images/{$books_data['book_id']}.jpg"; ?>" alt="<?php echo $books_data['book_name']; ?>" class="picbig flashit">
			</a>
			</div>
			<div class="front"><img src="<?php echo "Images/{$books_data['book_id']}.jpg"; ?>" alt="<?php echo $books_data['book_name']; ?>" style="width:140px; height:200px;"></div>
			</div>
			<p id="x"><?php echo $books_data['book_name']; ?></p><p id="y"><?php echo $books_data['author_name']; ?><br><br><?php echo $books_data['genre']; ?></p><p id="z"><?php echo "Rs "; echo $books_data['price']; ?></p>
			</div>
<?php 
		}
}
?>


</article>
<a href="logout.php">Logout</a>
<footer>Copyright © MY Books Store.com</footer>
</div>
</body>
</html>
