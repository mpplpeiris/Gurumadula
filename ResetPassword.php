<?php require_once("./include/DB.php"); ?>
<?php require_once("./include/session.php"); ?>
<?php require_once("./include/function.php"); ?>

<?php
    if(isset($_POST["btn-ResetPassword"]))
    {
        
        //grab the form data
        $userID=$_SESSION["username"];
        $currentPassword =  $_POST["currentPassword"];
        $newPassword =  $_POST["newPassword"];
        $confirmNewPasword =  $_POST["confirmNewPasword"];

        $sql = "SELECT * FROM login WHERE username='$userID'";
        $rec = query_execute($sql);
        $found_acc=mysqli_fetch_assoc($rec);
        $currentPasswordDB=$found_acc["password"];
        
       
        //check empty field
        if($currentPasswordDB!=$currentPassword)
        {
            $_SESSION["errMsg"] = "Your Current Password is Invalid.Please Check Again!";
            redirect_to("ResetPassword.php");
            $currentPasswordcheck=false;
            return;
        }

        if($newPassword!=$confirmNewPasword)
        {
            $_SESSION["errMsg"] = "Passwords Are Not Match For Reset.Please Check Again!";
            redirect_to("ResetPassword.php");
            $newPasswordcheck=false;
            return;
        }
        if(!($currentPasswordcheck)&& !($currentPasswordcheck))
        {
            $sql="UPDATE login SET password = '$newPassword' WHERE username = '$userID' ";
            $res=query_execute($sql);
            if($res)
            {

                echo "<script>alert('same message');</script>";
                if($_SESSION["position"]=='Student')
                {
                    
                    //redirect to create event page
                    redirect_to("student.php");
                
                }
                elseif($_SESSION["position"]=='Teacher')
                {
                    redirect_to("teacher.php");
                
                }
            }
            else
            {
                echo "Someting went to wrong!. Redirecting now...";
                header('refresh:2; URL=RsetPassword.php');
            }
        }
       
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>E-GURUMADULA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <style type="text/css">
        
        body {
            background-image: url("images/bg_5.jpg"); 

        }
        
        .login-form {

            left: 25cm;
            width: 340px;
            margin: 50px auto;
            background: red;
        }
        .login-form form {
            margin-bottom: 15px;
            background: #f7f7f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }
        .login-form h2 {
            margin: 0 0 15px;
        }
        .form-control, .btn {
            min-height: 38px;
            border-radius: 2px;
        }
        .btn {        
            font-size: 15px;
            font-weight: bold;
        }
        .containerz{
            position: relative; /* Sit on top of the page content */
        
        width: 100%; /* Full width (cover the whole page) */
        height: 100%; /* Full height (cover the whole page) */
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0,25,0,0.6); /* Black background with opacity */
        z-index: 2; /* Specify a stack order in case you're using a different order for other elements */
        padding:0px;
    
        }
        .tabcontent {
        display: none;
        }
        .container1{
            margin-top:30px;

        }
    
    </style>

    <script type="text/javascript">
    </script>


</head>
<body>

<div class="containerz" >
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" style="background: linear-gradient(to bottom, #ffffff 25%, #ffb606 86%) !important">
        <div class="container-fluid">      
            <div class="col-lg-4 col-md-11  col-sx-12" >
                <a class="navbar-brand" href="index.html"><img src="images/logo.jpg" width="190" height="108" style="top: -4px;position: relative;margin-right: 15px;margin-top:0px ;float:none" class="responsive">
                <p class="navbar-brand" style="font-size:4vw;" >E-GURUMADULA</p></a>
            </div>
        </div>
    </nav>
    <!-- END nav -->

<ul class="breadcrumb" >
    <li><a href="#"></a></li>
</ul>

    <div class="login-form">    
        <div class="warning" style="background-color:#f7f7f7;text-align:center;">
            <?php echo success_msg();
                    echo warn_msg();
                    echo err_msg();
                    echo exception_msg(); ?>
            <form action="ResetPassword.php"  method="post" enctype="multipart/form-data">
                <h1 class="text-center">Rset Password</h1>
                <h3 class="text-center"><?php echo $_SESSION["firstName"] ?></h3>       
                <div class="form-group">
                    <h5 class="text-left">Current Password</h5>   
                    <input type="password" id="currentPasword" name="currentPassword" class="form-control" placeholder="Enter Your Password" onblur="validate(this)" required="required">
                </div>
                <div class="container1">
                    <h5 class="text-left">New Password</h5>
                    <div class="form-group" >
                        <input type="password" id="newPassword" name="newPassword" class="form-control" placeholder="New Password" onblur="validate(this)" required="required">
                    </div>
                    <div class="form-group">
                        <h5 class="text-left">Confirm New Password</h5>
                        <input type="password" id="confirmNewPasword" name="confirmNewPasword" class="form-control" placeholder="Confirm  New Password" onblur="validate(this)" required="required">
                    </div>
                
                    <div class="form-group">
                        <button type="submit" id="btn-login" name="btn-ResetPassword" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal">Rest</button>
                    </div>
                    <div class="clearfix">
                        <p class="text-center"><a href="index.php">Create an New Account</a></p>
                    </div>  
                </div>   
            </form>
        </div>
    </div>

  <!--footer-->
    <footer class="ftco-footer ftco-bg-dark ftco-section img" style="background-image: url(images/bg_2.jpg); background-attachment:fixed; padding-top: 1cm; padding-bottom: 0.3cm;">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
              <a class="navbar-brand" href="index.html"><img src="images/logo.jpg" width="190" height="108" style="top: -4px;position: relative;margin-right: 15px;"></a>
              <h2><a class="navbar-brand" href="index.html" style="font-size:25px;text-align:center;">GURUMADULA <br><small>Academy of <br>Higher Education</small></a></h2>
              <p>The principal educational institution producing the cream of the island top performance for the G.C.E Advanced Level Examination.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="https://twitter.com/gurumadala_org"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/GurumandalaKalutara/"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/explore/tags/gurumadala/?hl=en"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Visit Us</h2>
              <span class="text">Gurumadula Higher Education Academy,<br>Old Road,<br>Kaluthara<br>Sri Lanka.<br><br></span>
              <a href="https://www.google.com/maps/place/Gurumandala+Academy+Of+Higher+Education/@6.5802495,79.9613623,17z/data=!3m1!4b1!4m5!3m4!1s0x3ae23720912ccd23:0x96942cb5ddfd91ec!8m2!3d6.5802495!4d79.963551?hl=en-US"><img src="images/carousel/footer/Map.PNG"></a>
            </div>
          </div>
          <div class="col-md-2">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Site Links</h2>
              <ul class="list-unstyled">Home</a></li>
                <li><a href="teacher.php" class="py-2 d-block">Teacher</a></li>
                <li><a href="timetable.php" class="py-2 d-block">TimeTable</a></li>
                <li><a href="career.php" class="py-2 d-block">Careers</a></li>
                <li><a href="about.php" class="py-2 d-block">About Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Gurumadula,Higher Education Academy,Old Road,Kaluthara.</span></li>
	                <li><span class="icon icon-phone"></span><span class="text">+94 77 775 8004</span></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@gurumadula.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
          </div>
        </div>
      </div>
    </footer>
    </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>


    
</body>
</html>                                		                            