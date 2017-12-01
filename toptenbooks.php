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
<style>
body {
    background-image:url(background-pattern-design-90.jpg);
}
</style>
<link rel="stylesheet" type="text/css" href="floatingbox.css">
<title>
Top Ten Books Of All Times</title>
<a href="logout.php">Logout</a>
</head>
<body >
<h1>Top Ten Books Of All Times</h1>
<article>
<div class="floating-box">
<h2>1.</h2>
<a href="insearchoflosttime.php">
<img src="insearchof.jpg" style="width:350pxpx; height:200px;"></img>
<h3>In Search of Lost Time by Marcel Proust</h3><br></a></div>
<div class="floating-box">
<h2>2.</h2>
<a href="Ulysses%20by%20James%20Joyce.php">
<img src="ulysses.jpg" style="width:350pxpx; height:200px;"></img>
<h3>Ulysses by James Joyce</h3><br></a></div>
<div class="floating-box">
<h2>3.</h2>
<a href="Don%20Quixote%20by%20Miguel%20de%20Cervantes.php">
<img src="donquixote.jpg" style="width:350pxpx; height:200px;"></img>
<h3>Don Quixote by Miguel de Cervantes</h3><br></a></div>
<div class="floating-box">
<h2>4.</h2>
<a href="Moby%20Dick%20by%20Herman%20Melville.php">
<img src="mobydick.jpg" style="width:350pxpx; height:200px;"></img>
<h3>Moby Dick by Herman Melville</h3><br></a></div>
<div class="floating-box">
<h2>5.</h2>
<a href="Hamlet%20by%20William%20Shakespeare.php">
<img src="hamlet.jpg" style="width:350pxpx; height:200px;"></img>
<h3>Hamlet by William Shakespeare</h3><br></a></div>
<div class="floating-box">
<h2>6.</h2>
<a href="War%20and%20Peace%20by%20Leo%20Tolstoy.php">
<img src="war and peace.jpg" style="width:350pxpx; height:200px;"></img>
<h3>War and Peace by Leo Tolstoy</h3><br></a></div>
<div class="floating-box">
<h2>7.</h2>
<a href="The%20Odyssey%20by%20Homer.php">
<img src="odyssey.jpg" style="width:350pxpx; height:200px;"></img>
<h3>The Odyssey by Homer</h3><br></a></div>
<div class="floating-box">
<h2>8.</h2>
<a href="The%20Adventures%20of%20Huckleberry%20Finn%20by%20Mark%20Twain.php">
<img src="theadventuresofhukelberry.jpg" style="width:350pxpx; height:200px;"></img>
<h3>The Adventures of Huckleberry Finn by Mark Twain</h3><br></a></div>
<div class="floating-box">
<h2>9.</h2>
<a href="Alice's%20Adventures%20in%20Wonderland%20by%20Lewis%20Carroll.php">
<img src="aliceinwonderland.jpg" style="width:350pxpx; height:200px;"></img>
<h3>Alice's Adventures in Wonderland by Lewis Carroll</h3><br></a></div>
<div class="floating-box">
<h2>10.</h2>
<a href="Pride%20and%20Prejudice%20by%20Jane%20Austen.php">
<img src="prideandprejudice.jpg" style="width:350pxpx; height:200px;"></img>
<h3>Pride and Prejudice by Jane Austen</h3><br></a></div>
</article>

 </body>
 </html>