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
          <h5> Staff Application Form </h5>
       </div>


    </div>
  </div>






    <div class="row">
      <form class="col s12" action="staffput.php" method="post">
        <div class="row">
          <div class="input-field col s6">
            <input  id="name" name="Name" type="text" class="validate">
            <label for="name">Enter staff Name</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s3">
            <input id="age" type="text" name="age"class="validate">
            <label for="age">Enter Staff age</label>
          </div>
        </div>
        <div class="row">
          <div class="col s6">
            <p>
               select gender
            </p>

            <p>
          <input name="gender" type="radio" id="male" value="male" />
          <label for="male">male</label>
        </p>
        <p>
          <input name="gender" type="radio" id="female"  value="female"/>
          <label for="female">female</label>
        </p>

          </div>
        </div>

        <div class="row">
          <div class="input-field col s3">
            <p>
               select Date of Birth
            </p>
            <input type="date" class="datepicker" id="dob" name="dob" placeholder="select date here">
          </div>
        </div>



        <div class="row">
          <div class="input-field col s3">
            <input id="sal" type="text" name="sal" class="validate">
            <label for="sal"> Salary of Staff </label>
          </div>
        </div>

        <div class="row">

          <div class="input-field col s3">
      <select id = "dep" name="dep">
        <option value="" disabled selected>Choose your option</option>
        <option value="1">Kitchen Depeartment</option>
        <option value="2">Girls Hostle</option>
        <option value="3">Boys Hostel</option>
      </select>
      <label>Department of Emplyee</label>
    </div>

        </div>

        <div class="row">
           <div class="col s4">
           <input class="waves-effect waves-light btn" type="submit" value="Add Staff" />
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
