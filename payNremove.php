<?php

$rid = intval($_POST[rid]) ;
                                         //cghange databse name
$db = mysqli_connect("localhost","root","admin","tempbase");
$query = "delete from request where rid = $rid " ;
$result = mysqli_query($db,$query);
mysqli_close($db) ;
header('Location: afterlogin.html');

 ?>
