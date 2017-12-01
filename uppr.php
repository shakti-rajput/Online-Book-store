
<html>
<head>
<style>
body {
    background-image:url(background-pattern-design-90.jpg);
}
</style>
<style>
input:focus { 
    background-color:pink;
}
input[type=text], select {
    margin: 8px -1px;
	 padding: 3px 10px;
    display: inline-block;
    border: 1px solid deeppink;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    
    background-color:#7D0552;
    color: white;
    padding: 14px 20px;
    margin: 8px 110px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=message], select {
   
    padding: 6px 5px;
    margin: 18px 2px;
    display: inline-block;
    border: 1px solid deeppink;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit]:hover {
    background-color:steelblue;
}

div {
width:30%;
    border-radius: 5px;
    padding-left: 450px;
	padding-top: 50px;
}
fieldset{

border-radius: 5px;
 border-color: magenta;
 background-color: mistyrose;
}
legend{
border-radius: 5px;
border: 2px solid magenta;
background-color: mistyrose;
border-color: deeppink deeppink mistyrose deeppink;
}
body{
color:deeppink;}
</style>
</head>
<a style=" float:ceil; font-size:25px; background-color: #86A0A1; padding:5px; border-radius: 16px; width: 500px; font-family: Comic Sans MS; text-decoration:none;">
<?php
session_start();
$connection=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('bookstore',$connection)  or die(mysql_error());
 $y1=$_POST['m_id3'];
 $y2=$_POST['m_id4'];
 echo $y1;
$sqlm ="UPDATE `books` SET price= '$y2' WHERE book_name= '$y1'";
 $resultm=mysql_query($sqlm);
?>
</html>
  