<!doctype html>
<html>
<head>
<?php
session_start();
if(!isset($_SESSION['uname']))
{
	header('Location:2.html');
}
?>
<a href="logout.php">Logout</a>
<style>
h1 {
color:red;
text-align:center;
font-family: verdana;
}
</style>
</head>
<body>
<h1><ins>ABOUT THE BOOK</ins></h1><br><br>
<p>
<img src="ati.jpg"  alt="lord rama" style="display:inline-block; border:10px solid white; float:left;width:300px;height:300px;">
Scion of Ikshvaku is a fantasy book by Indian author Amish Tripathi,
 released on 22 June 2015. It is based on Ram, the legendary Indian king
 regarded as an incarnation of Vishnu. The title was revealed by the author
 at the Jaipur Literature Festival. The story begins with King Dashrath of Ayodhya
 being defeated in a war by Lankan trader Raavan, and the birth of his son Ram.
 It follows through Ram's childhood and tutelage, along with the politics surrounding
 his ascension to the throne, and ultimately his 14-year exile, accompanied by wife Sita
 and brother Lakshman.
 </p>
 <br><br><br><br><br><br><br> <br><br><br><br><br>
 <h1><ins>ABOUT THE AUTHOR</ins></h1><br><br>
 <p>
 Amish Tripathi (born 18 October 1974), is an Indian author, known for his novels The Immortals of Meluha,
 The Secret of the Nagas and The Oath of the Vayuputras. The three books collectively comprise the Shiva Trilogy.
 His debut work The Immortals of Meluha was a bestseller, that broke into the top seller chart within a week
 of its launch owing to his creative marketing strategies. The Shiva Trilogy has become the fastest selling
 book series in the history of Indian publishing, with 2.5 million copies in print and over Rs 70 crore in sales.
 Forbes India has ranked him among the top 100 celebrities in India four times in a row, in 2012, 2013, 2014 and 2015.
 Amish was also selected as an Eisenhower Fellow, an exclusive programme for outstanding leaders from around the world.
 </p>
 </body>
 </html>