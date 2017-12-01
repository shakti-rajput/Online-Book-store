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
<h1>War and Peace by Leo Tolstoy</h1>
<img src="war and peace (1).jpg"  alt="inferno" style="display:inline-block; border:10px solid white; float:left;width:300px;height:300px;">
<p>
War and Peace is a novel by the Russian author Leo Tolstoy. It is regarded as one of the central works of world literature.
 War and Peace and Tolstoy's other major prose work, Anna Karenina (1875–77), are considered Tolstoy's finest literary
 achievements.The novel charts the history of the French invasion of Russia, and the impact of the Napoleonic era on Tsarist
 society, through the stories of five Russian aristocratic families. Portions of an earlier version, titled The Year 1805,
 were serialized in The Russian Messenger between 1865 and 1867. The novel was first published in its entirety in 1869.
 Newsweek in 2009 ranked it first in its Top 100 Books. In 2007, Time magazine ranked War and Peace third in its poll
 of the 10 greatest books of all time while Anna Karenina was ranked first.Tolstoy himself said that War and Peace was
 "not a novel, even less is it a poem, and still less a historical chronicle". Large sections, especially in the later chapters,
 are philosophical discussion rather than narrative. He also said that the best Russian literature does not conform to standards
 and hence hesitated to call War and Peace a novel. Instead, he regarded Anna Karenina as his first true novel. According to the
 Encyclopædia Britannica, "no single English novel attains the universality of Leo Tolstoy's War and Peace."</p>
 </body>
 </html>