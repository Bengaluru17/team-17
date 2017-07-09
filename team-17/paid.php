<?php

function myfunc($row1,$result)
{

  while($row = mysqli_fetch_array($result) ){
      echo "<tr>";
      echo "<td>";
      echo "". $row["pid"] ;
      echo "</td>";

      echo "<td>";
      echo "". $row["pname"] ;
      echo "</td>";

      echo "<td>";
      echo "". $row["pdate"] ;
      echo "</td>";


       $dep ;
      if( intval($row["pdep"]) == 1){
        $dep = "kitchen" ;
      }elseif(intval($row["pdep"]) == 2){
        $dep = "girls hostel" ;
      }else{
        $dep = "boys hostel" ;
      }

      echo "<td>";
      echo "".$dep;
      echo "</td>";

      echo "<td>";
      echo "". $row["pAMT"] ;
      echo "</td>";

      echo "</tr>";
  }

}

$db = mysqli_connect("localhost","root","admin","tempbase");
if (!$db)
echo "Cannot connect to MySQL";

$query = "select * from paid" ;
$result = mysqli_query($db,$query);
$num = mysqli_num_rows($result) ;

$htmlpg = '
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Admin Login</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>


</head>
<body>

  <div class="section no-pad-bot" id="index-banner" >
    <div class="container">
       <div class="row">

         <table>
           <tr>
             <td> <img class="responsive-img" src="images/logo"></td>
             <td><h1 class="header orange-text">REACHING HAND</h1></td>
           </tr>
         </table>

       </div>



      <div class="row center">
        <h5 class="header col s12 light">Floor, Nehru Road, Above Syndicate
          Bank, Yadava Layout, Arvind Nagar,, 44, Nehru Rd, St Thomas Town,
          Kacharakanahalli, Bengaluru, Karnataka 560084</h5>
      </div>

    </div>
  </div>

  <div class="row center">
   <div class="container">
';

$last = '
</div>
</div>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
' ;


echo $htmlpg;



echo "<table class='striped' >";
echo "<tr> <td><b>tarns id</b></td>  <td><b> purpose </b></td> <td><b>date</b></td>  <td><b>department/b></td> <td><b>amount</b></td> </tr>";
myfunc($row,$result);
echo "</table>";

echo $last;
?>
