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
<h1>Ulysses by James Joyce</h1>
<img src="joyce_ulysses.jpg"  alt="inferno" style="display:inline-block; border:10px solid white; float:left;width:300px;height:300px;">
<p>Ulysses is a modernist novel by Irish writer James Joyce. It was first serialised in parts in the American journal
 The Little Review from March 1918 to December 1920, and then published in its entirety by Sylvia Beach in February 1922,
 in Paris. It is considered to be one of the most important works of modernist literature, and has been called "a 
 demonstration and summation of the entire movement". According to Declan Kiberd, "Before Joyce, no writer of fiction
 had so foregrounded the process of thinking."Ulysses chronicles the peripatetic appointments and encounters of Leopold
 Bloom in Dublin in the course of an ordinary day, 16 June 1904. Ulysses is the Latinised name of Odysseus, the hero
 of Homer's epic poem Odyssey, and the novel establishes a series of parallels between the poem and the novel, with 
 structural correspondences between the characters and experiences of Leopold Bloom and Odysseus, Molly Bloom and Penelope,
 and Stephen Dedalus and Telemachus, in addition to events and themes of the early twentieth century context of modernism,
 Dublin, and Ireland's relationship to Britain. The novel imitates registers of centuries of English literature and is highly 
 allusive.Ulysses is approximately 265,000 words in length[6] and is divided into eighteen episodes. Since publication, the book 
 has attracted controversy and scrutiny, ranging from early obscenity trials to protracted textual "Joyce Wars". Ulysses'
 stream-of-consciousness technique, careful structuring, and experimental prose — full of puns, parodies, and allusions —
 as well as its rich characterisation and broad humour, made the book a highly regarded novel in the modernist pantheon. Joyce fans
 worldwide now celebrate 16 June as Bloomsday.</p>
  </body>
 </html>