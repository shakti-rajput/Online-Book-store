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
<h1>Hamlet by William Shakespeare</h1>
<img src="willshakespearehamlet.jpg"  alt="inferno" style="display:inline-block; border:10px solid white; float:left;width:300px;height:300px;">
<p>
The Tragedy of Hamlet, Prince of Denmark, often shortened to Hamlet, is a tragedy written by William Shakespeare at an uncertain date
 between 1599 and 1602. Set in the Kingdom of Denmark, the play dramatises the revenge Prince Hamlet is called to wreak upon his uncle,
 Claudius, by the ghost of Hamlet's father, King Hamlet. Claudius had murdered his own brother and seized the throne, also marrying his
 deceased brother's widow. Hamlet is Shakespeare's longest play, and is ranked among the most powerful and influential tragedies in English
 literature, with a story capable of "seemingly endless retelling and adaptation by others".The play likely was one of Shakespeare's
 most popular works during his lifetime,and still ranks among his most performed, topping the performance list of the Royal Shakespeare
 Company and its predecessors in Stratford-upon-Avon since 1879.It has inspired many other writers – from Johann Wolfgang von Goethe and
 Charles Dickens to James Joyce and Iris Murdoch – and has been described as "the world's most filmed story after Cinderella". The story
 of Shakespeare's Hamlet was derived from the legend of Amleth, preserved by 13th-century chronicler Saxo Grammaticus in his Gesta Danorum,
 as subsequently retold by 16th-century scholar François de Belleforest. Shakespeare may also have drawn on an earlier (hypothetical) Elizabethan
 play known today as the Ur-Hamlet, though some scholars believe he himself wrote the Ur-Hamlet, later revising it to create the version of 
 Hamlet we now have. He almost certainly wrote his version of the title role for his fellow actor, Richard Burbage, the leading tragedian of 
 Shakespeare's time. In the 400 years since its inception, the role has been performed by numerous highly acclaimed actors in each successive 
 century.Three different early versions of the play are extant: the First Quarto; the Second Quarto); and the First Folio
 . Each version includes lines and entire scenes missing from the others. The play's structure and depth of characterisation have
 inspired much critical scrutiny. One such example is the centuries-old debate about Hamlet's hesitation to kill his uncle, which some see as
 merely a plot device to prolong the action, but which others argue is a dramatisation of the complex philosophical and ethical issues that surround
 cold-blooded murder, calculated revenge, and thwarted desire. More recently, psychoanalytic critics have examined Hamlet's unconscious desires,
 while feminist critics have re-evaluated and attempted to rehabilitate the often maligned characters of Ophelia and Gertrude.
</p>
 </body>
 </html>