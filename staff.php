<!DOCTYPE html>
<<<<<<< HEAD
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
=======
<html>
<head>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

		<title>REACHING HAND</title>
			<!-- Latest compiled and minified CSS -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

         <!-- jQuery library -->
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Start Bootstrap</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="home.html">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="donate.html">Donor</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="aboutus.html">Programmes</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Login</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Volunteer</a>
                    </li>
					
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</br>

</br></br>
</br>
	 <div class="container">
  <h2>Enter your details:</h2>
  <form action="/action_page.php">
    
	<div class="form-group">
      <label for="name">Name:</label>
      <input type="name" class="form-control" id="email" placeholder="Enter name" name="email">
    </div>

	<div class="form-group">
      <label for="name">Age:</label>
      <input type="number" class="form-control" id="email" placeholder="Enter age" name="email">
    </div>
	<div class="form-group">
      <label for="salary">Salary</label>
      <input type="int" class="form-control" id="email" placeholder="SALARY" name="email">
    </div>
    <div class="form-group">
      <label for="designation">Designation</label>
      <input type="text" class="form-control" id="email" placeholder="ABOUT STAFF" name="email">
    </div>
	<div class="radio">
	<p><b>Gender:</b></p>
    <label><input type="radio" name="optradio">Male</label>
    </div>
    <div class="radio">
    <label><input type="radio" name="optradio">Female</label>
    </div>
	<br>
	
    <button type="submit" class="btn btn-default">Submit</button>
	<button type="reset" class="btn btn-default">Clear</button>
  </form>
</div>
	

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
	

</body>
>>>>>>> e12c4468643ed50aea461ec28ad6e43af5b49a99
</html>
