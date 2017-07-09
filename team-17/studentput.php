<?php

$name = $_POST[Name] ;
$age = $_POST[age] ;
$dob = $_POST[dob] ;
$gender = $_POST[gender] ;
$desc = $_POST[desc] ;


  //TO DO check for null ;

$db = mysqli_connect("localhost","root","admin","tempbase");
$query = "insert into student (name, gender,dob,age,description ) values ('$name','$gender','$dob',$age,'$desc') " ;
$result = mysqli_query($db,$query);
mysqli_close($db) ;
header('Location: ok.php');


 ?>
