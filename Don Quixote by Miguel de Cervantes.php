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
<h1>Don Quixote by Miguel de Cervantes</h1>
<img src="don quixote.jpg"  alt="inferno" style="display:inline-block; border:10px solid white; float:left;width:300px;height:300px;">
<p>Don Quixote (/ˌdɒn kiːˈhoʊti/ or /ˌdɒn ˈkwɪksoʊt/; Spanish: [doŋ kiˈxote] ( listen), formerly [doŋ kiˈʃote]), fully titled
 The Ingenious Gentleman Don Quixote of La Mancha (Spanish: El ingenioso hidalgo don Quijote de la Mancha [el iŋxeˈnjoso iˈðalɣo ðoŋ
 kiˈxote ðe la ˈmantʃa]), is a Spanish novel by Miguel de Cervantes Saavedra. Published in two volumes, in 1605 and 1615, Don Quixote
 is considered the most influential work of literature from the Spanish Golden Age and the entire Spanish literary canon. As a founding
 work of modern Western literature and one of the earliest canonical novels, it regularly appears high on lists of the greatest works of
 fiction ever published, such as the Bokklubben World Library collection that cites Don Quixote as authors' choice for the "best literary
 work ever written".Don Quijote (Don Quixote) Illustration by Gustave Doré, depicting the famous windmill scene.The story follows the 
 adventures of a hidalgo named Mr. Alonso Quixano who reads so many chivalric romances that he loses his sanity and decides to set out
 to revive chivalry, undo wrongs, and bring justice to the world, under the name Don Quixote de la Mancha. He recruits a simple farmer,
 Sancho Panza, as his squire, who often employs a unique, earthy wit in dealing with Don Quixote's rhetorical orations on antiquated knighthood.
 Don Quixote, in the first part of the book, does not see the world for what it is and prefers to imagine that he is living out a knightly story.
 Throughout the novel, Cervantes uses such literary techniques as realism, metatheatre, and intertextuality. It had a major influence on the 
 literary community, as evidenced by direct references in Alexandre Dumas' The Three Musketeers (1844), Mark Twain's Adventures of Huckleberry
 Finn (1884) and Edmond Rostand's Cyrano de Bergerac (1897), as well as the word "quixotic". Arthur Schopenhauer cited Don Quixote as one of the
 four greatest novels ever written, along with Tristram Shandy, La Nouvelle Héloïse and Wilhelm Meister.
 </p>
 </body>
 </html>