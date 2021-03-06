<?php
// include the databse connection
require_once('./inc/dbcon.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Project Management Dashboard</title>
    <link rel="icon" type="image/png" href="img/skymapLogo.png">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/animated.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet"> 

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- page navbar section -->
    <div class="row navbar_section">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">SKYMAP GLOBAL</a>
              </div>
          
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  
                </ul>
                
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="#"><button class="btn btn-primary" data-toggle="modal" data-target="#myLoginModel">Login</button></a></li>
                  <li><a href="#"><button class="btn btn-success" data-toggle="modal" data-target="#mySignupModel">Sign UP</button></a></li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
    <!-- end of page navbar section -->

    <!-- body text section -->
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-2 col-lg-2"></div>
            <div class="col-md-8 col-sm-8 col-lg-8 body_text ">
               <p>
                Lets you work more collaboratively and get more done.
               </p>
               <div class="body_descp animated bounceInDown">
                   <p>
                    This Dashboards, lists, and cards enable you to organize and prioritize your projects in a fun, flexible and rewarding way.
                   </p>
               </div>
               <div class="btn_con">
                 <a href="#" class="btn btn-success btn-lg" data-toggle="modal" data-target="#mySignupModel">Sign Up with Your Account</a>
               </div>
               <div class="btn_log">
                 <p>Already have an Account...?&nbsp;<a href="#" data-toggle="modal" data-target="#myLoginModel" >Login</a></p>
               
               </div>
            </div>
            <div class="col-md-2 col-sm-2 col-lg-2"></div>
        </div>
    </div>
    <!-- end of body text section -->


<!--Login Modal -->
  <div class="modal fade" id="myLoginModel" role="dialog">
    <div class="modal-dialog modal-sm loginmodel">
      <div class="modal-content">
        <div class="modal-header">
          <img src="img/brand_image.png" alt="Logo">
        </div>
        <div class="modal-body">
          <form name ="loginForm" action="login.php" method="post">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input id="text" type="email" class="form-control" name="empId" id="empId" placeholder="Email ID.." required maxlength="50">
            </div><br>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input type="password" class="form-control" name="empPassword" id="empPassword" placeholder="Password.." required maxlength="20">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="re" id="re"> Remember me</label>
            </div>
            <div class="btn_panel">
              <button class="btn btn-primary btn-block" name="btn_login" id="btn_login">Submit</button>
            </div>
          </form> 
          <div class="form-group">
              <a href="forgetpass.php">
              <label for="forgetPassword"><h5 class="forgetPassword"><u>Forget Password</u></h5></label>
              </a>
            </div>
        </div>
      </div>  
    </div>
  </div>
<!-- end of login model -->

<!-- sigup model -->
  <div class="modal fade" id="mySignupModel" role="dialog">
    <div class="modal-dialog modal-md signupmodel ">
      <div class="modal-content">
        <div class="modal-header">
          <img src="img/brand_image.png" alt="Logo">
        </div>
        <div class="modal-body">
            <form action="signup.php" method="post">
              <div class="form-group">
                <label for="fullName"><h5>Full Name: *</h5></label>
                <input type="text" name="fullName" id="fullName" class="form-control" required maxlength="50" >
              </div>
              <div class="form-group">
                <label for="empId"><h5>Employee ID: </h5></label>
                <input type="text" name="empId" id="empId" class="form-control" maxlength="7">
              </div>
              <div class="form-group">
                <label for="designation"><h5>Designation: *</h5></label>
                <input type="text" name="designation" id="designation" class="form-control" required maxlength="50">
              </div>
              <div class="form-group">
                <label for="contactNo"><h5>Contact No: *</h5></label>
                <input type="text" name="contactNo" id="contactNo" class="form-control" required maxlength="10" pattern="[7|8|9][0-9]{9}">
              </div>
              <div class="form-group">
                <label for="emailId"><h5>Email Address: *</h5></label>
                <input type="email" name="emailId" id="emailId" class="form-control" required maxlength="50">
              </div>
            <div class="form-group">
              <label for="chooserPassword"><h5>Password: *</h5></label>
              <input type="password" name="password" id="password" class="form-control" required maxlength="20">
            </div>
            <div class="form-group">
              <label for="confirmPassword"><h5>Confirm Password: *</h5></label>
              <input type="password" name="confirmPassword" id="confirmPassword" class="form-control" required maxlength="20">
            </div>
            <div class="btn_panel">
              <input type="submit" name="btn_signup" id="btn_signup" value="Save" class="btn btn-success">
            </div>
            </form>
            
        </div>
        
      </div>
    </div>
  </div>
<!-- end of signup model -->



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>