<?php

$uid = $_POST[usrid] ;

$pass = $_POST[password] ;

                                                 //cghange databse name
$db = mysqli_connect("localhost","root","admin","tempbase");
$query = "select * from USER_LOGIN where usr_name = '$uid' and usr_passwrd = '$pass' " ;
$result = mysqli_query($db,$query);
$num = mysqli_num_rows($result) ;
<<<<<<< HEAD
mysqli_close($db) ;

if($num == 1){
                    //change the url
   header('Location: afterlogin.html');
}
else {                //change to login.htnl
  header('Location: login.html');
}


 ?>
=======

if($num == 1){
                    //change the url
   header('Location: index.html');
}



 ?>

>>>>>>> e12c4468643ed50aea461ec28ad6e43af5b49a99
