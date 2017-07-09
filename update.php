<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db1";
$name=$_POST['name'];
$gender=$_POST['optradio'];
$age=$_POST['age'];
$join=$_POST['join'];
$class=$_POST['clas'];
$grade=$_POST['grade'];
$medrep=$_POST['med_rep'];
$school=$_POST['school'];
// Create connection
$conn = mysqli_connect($localhost, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql  = 'INSERT INTO `students` (`StudentID`, `Name`, `Gender`, `Age`, `Description`,`Inventory_ID`) VALUES (\'\', \'$name\', \'$s\', \'\', \'2017-07-13\', \'3\', \'3\', 0x6869207975766172616a616e0d0a, \'home\', \'1\')';

			echo $sql;
			mysqli_execute($sql);

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} 
	else {
		echo "Error updating record: " . mysqli_error($conn);
		}
		

mysqli_close($conn);

//header('Location:student.php');
?>