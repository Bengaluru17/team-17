<?php

$name = $_POST[Name] ;
$age = $_POST[age] ;
$dob = $_POST[dob] ;
$gender = $_POST[gender] ;
$sal = $_POST[sal] ;
$dep = $_POST[dep] ;



  //TO DO check for null ;

$db = mysqli_connect("localhost","root","admin","tempbase");
if(!$db){
  echo "error";
}
echo "string";
$query = "insert into staff ( sname, sgender, sdob , sage , ssal , sdepert ) values ('$name','$gender','$dob',$age, $sal,$dep ) " ;
$result = mysqli_query($db,$query);
if(!$result){ echo "errpr";}
mysqli_close($db) ;
header('Location: ok.php');


 ?>
