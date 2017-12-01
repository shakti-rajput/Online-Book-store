
<!DOCTYPE html>
<head>
<title>IWP Lab 20-9-2016</title>
</head>

<body>

<?php

$serv_name ="localhost";
$username="root";
$password="";

$con = new mysqli($serv_name,$username,$password);
if($con->connect_error)
{
	die("Connection terminated".$con->connect_error);
}
else
{
	echo'Connection Successful';
}

echo'<br><br>';

$sql = "CREATE DATABASE test_db_2";

if($con->query($sql) === TRUE)
{
	echo'DATABASE Created Successfully';
}
else
{
	echo'Error Creating Database<br>'.$con->error;
}

echo'<br><br>';
$con->close();
?>

</body>
</html>
