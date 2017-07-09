<?php
$name = $_POST[Name] ;
$email = $_POST[email] ;
$pnum = $_POST[phoneno] ;
$Amt = $_POST[Amt] ;
$Addr = $_POST[Addr] ;
$ACCno = $_POST[bACC] ;
$comment = $_POST[comm] ;




$db = mysqli_connect("localhost","root","admin","tempbase");
$result = mysqli_query($db,"select count(*) as count from donor ");
$row  = mysqli_fetch_array($result) ;
$n = intval($row["count"]) + 1 ;
$v =  (string)$n ;
$id = "RH".$v ;
$mon = (string) date('m') ;
$date = (string) date('Y') ;
$monyr = $mon.$date;


$query ="insert into donor ( donorid, dname , demail , dpnum, dAddr,deAMT, deACC,  dmonyr ,decomment ) values ( '$id' ,'$name', '$email' ,'$pnum','$Addr',$Amt ,'$ACCno','$monyr','$comment') " ;
$result = mysqli_query($db,$query);
mysqli_close($db) ;
header('Location: ok.php');


 ?>
