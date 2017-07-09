<?php

$name = $_POST[Name] ;
$amt = $_POST[money] ;
$dep = $_POST[dep] ;
$mon = (string) date('m') ;
$date = (string) date('Y') ;
$monyr = $mon.$date;
$d =  (string)date("d-m-Y") ;

  //TO DO check for null ;

$db = mysqli_connect("localhost","root","admin","tempbase");
$query = "insert into request (rname,rdate,rdep,pmonyr,rAMT) values ('$name','$d',$dep, '$monyr',$amt) " ;
$result = mysqli_query($db,$query);
mysqli_close($db) ;
header('Location: ok.php');


 ?>
