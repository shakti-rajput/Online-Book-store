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
<h1>Moby Dick by Herman Melville</h1>
<img src="moby dick.jpg"  alt="inferno" style="display:inline-block; border:10px solid white; float:left;width:300px;height:300px;">
<p>
Moby-Dick; or, The Whale is a novel by American writer Herman Melville, published in 1851 during the period of the American Renaissance.
 Sailor Ishmael tells the story of the obsessive quest of Ahab, captain of the whaler the Pequod, for revenge on Moby Dick, the white whale
 which on the previous whaling voyage destroyed his ship and severed his leg at the knee. The novel was a commercial failure and out of print
 at the time of the author's death in 1891, but during the 20th century, its reputation as a Great American Novel was established. William 
 Faulkner confessed he wished he had written it himself,and D. H. Lawrence called it "one of the strangest and most wonderful books in the
 world", and "the greatest book of the sea ever written". "Call me Ishmael" is among world literature's most famous opening sentences.
The product of a year and a half of writing, the book draws on Melville's experience at sea, on his reading in whaling literature, and on
 literary inspirations such as Shakespeare and the Bible. The white whale is modeled on the notoriously hard to catch actual albino whale
 Mocha Dick, and the ending is based on the sinking of the whaler Essex by a whale. The detailed and realistic descriptions of whale hunting
 and of extracting whale oil, as well as life aboard ship among a culturally diverse crew, are mixed with exploration of class and social status
 , good and evil, and the existence of God. In addition to narrative prose, Melville uses styles and literary devices ranging from songs, poetry,
 and catalogs to Shakespearean stage directions, soliloquies, and asides.Dedicated to Nathaniel Hawthorne, "in token of my admiration for his genius",
 the work was first published as The Whale in London in October 1851, and under its definitive title in New York in November. Hundreds of differences,
 mostly slight and some important, are seen between the two editions. The London publisher censored or changed sensitive passages and Melville made
 revisions, as well, including the last-minute change in the title for the New York edition. The whale, however, appears in both editions as "Moby Dick",
 with no hyphen.[4] About 3,200 copies were sold during the author's life.
 </p>
 </body>
 </html>