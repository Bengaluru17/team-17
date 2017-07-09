<?php
//cghange databse name
$db = mysqli_connect("localhost","root","admin","tempbase");
$query = "select sum(deAMT) as y, sum(pAMT) as x from donor , paid  where donor.dmonyr = paid.pmonyr group by (pmonyr)" ;
$result = mysqli_query($db,$query);
$num = mysqli_num_rows($result) ;

$x  ;
$y  ;
$count = 0;


while($row = mysqli_fetch_array($result) ){

    $x[$count] = $row['x'] ;
    $y[$count] = $row['y'] ;

    $count = $count +1 ;

 }
 echo "to print graph";

 ?>
