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
h1 {
color:purple;
text-align:center;
font-family: courier;
}
</style>
</head>
<body>
<h1>In Search Of lost time</h1>
<img src="In Search Of lost time.jpg"  alt="inferno" style="display:inline-block; border:10px solid white; float:left;width:300px;height:300px;">
<p>In Search of Lost Time (French: À la recherche du temps perdu)— previously also translated as Remembrance of Things Past,
 is a novel in seven volumes, written by Marcel Proust (1871–1922). It is considered to be his most prominent work, known both
 for its length and its theme of involuntary memory, the most famous example being the "episode of the madeleine" which occurs
 early in the first volume. It gained fame in English in translations by C. K. Scott Moncrieff and Terence Kilmartin as Remembrance
 of Things Past, but the title In Search of Lost Time, a literal rendering of the French, has gained usage since D. J. Enright
 adopted it for his revised translation published in 1992.The novel began to take shape in 1909. Proust continued to work on it
 until his final illness in the autumn of 1922 forced him to break off. Proust established the structure early on, but even after
 volumes were initially finished he kept adding new material and edited one volume after another for publication. The last three
 of the seven volumes contain oversights and fragmentary or unpolished passages, as they existed only in draft form at the death of
 the author; the publication of these parts was overseen by his brother Robert.The work was published in France between 1913 and 1927.
 Proust paid for the publication of the first volume (by the Grasset publishing house) after it had been turned down by leading editors
 who had been offered the manuscript in longhand. Many of its ideas, motifs and scenes are foreshadowed in Proust's unfinished novel,
 Jean Santeuil (1896–99), though the perspective and treatment there are different, and in his unfinished hybrid of philosophical essay
 and story, Contre Sainte-Beuve (1908–09). The novel had great influence on twentieth-century literature; some writers have sought to
 emulate it, others to parody it. In the centenary year of Du côté de chez Swann, Edmund White pronounced À la recherche du temps perdu
 "the most respected novel of the twentieth century."</p>
 <a href="logout.php">Logout</a>

 </body>
 </html>