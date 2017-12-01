<!DOCTYPE html>
<head>
<title>IWP Lab 20-9-2016</title>
</head>

<body>

<?php

$serv_name ="localhost";
$username="root";
$password="";
$dbname = "test_db_2";


$con = new mysqli($serv_name,$username,$password,$dbname);
if($con->connect_error)
{
	die("Connection terminated".$con->connect_error);
}
else
{
	echo'Connection Successful';
}

echo'<br><br>';

$sql_cr_1="INSERT INTO student values(1001,'Jason',8.96,'jason2015@vit.ac.in')";
$sql_cr_2="INSERT INTO student values(1002,'Michael',9.26,'michael2015@vit.ac.in')";
$sql_cr_3="INSERT INTO student values(1003,'Ruth',7.74,'ruth2015@vit.ac.in')";

$sel_all = "SELECT * FROM student";
$result_sel_all = $con->query($sel_all);

if ($con->query($sql_cr_1) === TRUE) 
{
    echo "Record Inserted successfully --- 1 ";
} 
else 
{     
	echo "Error: " . $sql_cr_1 . "<br>" . $con->error; 
}

//

if ($con->query($sql_cr_2) === TRUE) 
{
    echo "Record Inserted successfully --- 2";
} 
else 
{     
	echo "Error: " . $sql_cr_2 . "<br>" . $con->error; 
}

//

if ($con->query($sql_cr_3) === TRUE) 
{
    echo "Record Inserted successfully --- 3";
} 
else 
{     
	echo "Error: " . $sql_cr_3 . "<br>" . $con->error; 
}

echo'<br><br>';
//

if ($result_sel_all->num_rows > 0) {
     // output data of each row
     echo "REg_NO &nbsp; Name &nbsp; CGPA &nbsp; Email_ID &nbsp;";

     while($row = $result->fetch_assoc()) {
         echo "<br>" . $row["reg_no"]. " " . $row["name"]. " " . $row["gpa"]. " ". $row["email"];
     }
} 
else 
{
     echo "0 results";
}

$con->close();
?>

</body>
</html>
