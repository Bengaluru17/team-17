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

         <table >
           <tr>
             <td > <img class="responsive-img" src="images/logo"></td>
             <td><h1 class="header orange-text">REACHING HANDS</h1></td>
           </tr>
         </table>

       </div>
       <br> <br>

       <div class="row center">
          <h5> Donor Application Form </h5>
       </div>


    </div>
  </div>






    <div class="row">
      <form class="col s12" action="donorput.php" method="post">
        <div class="row">
          <div class="input-field col s6">
            <input  id="name" name="Name" type="text" class="validate">
            <label for="name">Donor Name</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s3">
            <input id="email" type="email" name="email" class="validate">
            <label for="email">Email</label>
          </div>
        </div>

		<div class="row">
          <div class="input-field col s3">
            <input id="Phoneno" type="text" name="phoneno" class="validate">
            <label for="phoneno">phone no</label>
          </div>
        </div>


        <div class="row">
              <div class="input-field col s3">
                <input id="Amt" type="text" name="Amt" class="validate">
                <label for="Amt">Amount in Rupees</label>
              </div>
            </div>

            <div class="row">
                  <div class="input-field col s3">
                    <input id="bACC" type="text" name="bACC" class="validate">
                    <label for="bACC">BanK Account NUmber</label>
                  </div>
                </div>


            <div class="row">
              <div class="input-field col s3">
                <input id="Addr" type="text" name="Addr" class="validate">
                <label for="Addr"> Addres </label>
              </div>
            </div>


        <div class="row">
          <div class="input-field col s3">
            <input id="comm" type="text" name="comm" class="validate">
            <label for="comm"> your comment</label>
          </div>
        </div>

        <div class="row">

          <div class="input-field col s3">

        <div class="row">
           <div class="col s4">
           <input class="waves-effect waves-light btn" type="submit" value="Deposite Money" />
           </div>
         </div>

      </form>
    </div>









  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
