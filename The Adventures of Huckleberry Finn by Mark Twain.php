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
color:purple;
text-align:center;
font-family: courier;
}
</style>
</head>
<body>
<h1>The Adventures of Huckleberry Finn by Mark Twain</h1>
<img src="theadventuresofhb.jpg"  alt="inferno" style="display:inline-block; border:10px solid white; float:left;width:300px;height:300px;">

<p>
Adventures of Huckleberry Finn (or, in more recent editions, The Adventures of Huckleberry Finn) is a novel by Mark Twain,
 first published in the United Kingdom in December 1884 and in the United States in February 1885. Commonly named among
 the Great American Novels, the work is among the first in major American literature to be written throughout in vernacular
 English, characterized by local color regionalism. It is told in the first person by Huckleberry "Huck" Finn, a friend of
 Tom Sawyer and narrator of two other Twain novels (Tom Sawyer Abroad and Tom Sawyer, Detective). It is a direct sequel to 
 The Adventures of Tom Sawyer.The book is noted for its colorful description of people and places along the Mississippi River.
 Set in a Southern antebellum society that had ceased to exist about 20 years before the work was published, Adventures of 
 Huckleberry Finn is an often scathing satire on entrenched attitudes, particularly racism. Perennially popular with readers,
 Adventures of Huckleberry Finn has also been the continued object of study by literary critics since its publication. It was 
 criticized upon release because of its coarse language and became even more controversial in the 20th century because of its 
 perceived use of racial stereotypes and because of its frequent use of the racial slur "nigger", despite strong arguments that
 the protagonist and the tenor of the book are anti-racist.</p>
</body>
 </html>