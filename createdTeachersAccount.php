<!--from studentRegister.php-->

<?php require_once("./include/DB.php"); ?>
<?php require_once("./include/function.php"); ?>

<?php
  
  //student tab
  $title=$_POST["title"];
  $fname=$_POST["firstName"];
  $mname=$_POST["middleName"];
  $lname=$_POST["lastName"];
  $DOB=$_POST["birthday"];
  $gender=$_POST["Gender"];
  $nic=$_POST["nic"];
  $nationality=$_POST["nationality"];
  $religion=$_POST["religion"];
  $address=$_POST["address"];
  $phoneNumber=$_POST["phoneNumber"];
  $email=$_POST["email"];
  $qualifications=$_POST["qualifications"];
  $noOfSubjects=$_POST["noOfSubjects"];
  $profileImageName=$_FILES["profileImage"]["name"];
  $target_dir = "images/teacher/teacherRegister/upload/";
  $target_file = $target_dir . basename($profileImageName);


  $GetTidNo="SELECT * FROM teachersdetails";
  $result=query_execute($GetTidNo); 
  $rowcount=mysqli_num_rows($result);
   $invID=str_pad($rowcount,5,0,STR_PAD_LEFT);
   $year = date("Y");
  $ID="TC/".$year."/".$invID;

  $sql1="INSERT INTO teachersdetails(ID,title,firstName,middleName,lastName,DOB,nationality,religion,address,
  phoneNumber,email,qualifications,noOfSubjects,profileImage) VALUES 
  ('$ID','$title','$fname','$mname','$lname','$DOB','$nationality','$religion','$address','$phoneNumber',
  '$email','$qualifications','$noOfSubjects','$profileImageName')";

  
  for($i=1;$i<=$noOfSubjects;$i++){
    /*$subject=$_POST["subject".$i];
    $medium=$_POST["medium".$i];
    $year=$_POST["year".$i];
    $classType=$_POST["classType".$i];*/

  $subject=$_POST["subject$i"];
  $medium=$_POST["medium$i"];
  $year=$_POST["year$i"];
  $classType=$_POST["classType$i"];

  $GetCdNo="SELECT * FROM classdetails";
  $result3=query_execute($GetCdNo); 
  $rowcount=mysqli_num_rows($result3);
   $invCID=str_pad($rowcount,5,0,STR_PAD_LEFT);
   if($medium=="Sinhala" && $classType=="Mass")
   $ClassID="C/S/M/".$year."/".$invCID;
   else if($medium=="English"&& $classType=="Mass")
   $ClassID="C/E/M/".$year."/".$invCID;
   else if($medium=="Tamil"&& $classType=="Mass")
   $ClassID="C/T/M/".$year."/".$invCID;
   else if($medium=="Sinhala" && $classType=="Group")
   $ClassID="C/S/G/".$year."/".$invCID;
   else if($medium=="English"&& $classType=="Group")
   $ClassID="C/E/G/".$year."/".$invCID;
   else if($medium=="Tamil"&& $classType=="Group")
   $ClassID="C/T/G/".$year."/".$invCID;
   else if($medium=="Sinhala" && $classType=="Revision")
   $ClassID="C/S/R/".$year."/".$invCID;
   else if($medium=="English"&& $classType=="Revision")
   $ClassID="C/E/R/".$year."/".$invCID;
   else if($medium=="Tamil"&& $classType=="Revision")
   $ClassID="C/T/R/".$year."/".$invCID;
   else if($medium=="Sinhala" && $classType=="Paper")
   $ClassID="C/S/P/".$year."/".$invCID;
   else if($medium=="English"&& $classType=="Paper")
   $ClassID="C/E/P/".$year."/".$invCID;
   else if($medium=="Tamil"&& $classType=="Paper")
   $ClassID="C/T/P/".$year."/".$invCID;
   else if($medium=="Sinhala" && $classType=="Practical")
   $ClassID="C/S/R/".$year."/".$invCID;
   else if($medium=="English"&& $classType=="Practical")
   $ClassID="C/E/R/".$year."/".$invCID;
   else if($medium=="Tamil"&& $classType=="Practical")
   $ClassID="C/T/R/".$year."/".$invCID;


   $sql3="INSERT INTO classdetails(classID,teacherID,subject,year,medium,type) VALUES 
   ('$ClassID','$ID','$subject','$year','$medium','$classType')";
  /*$sql3="INSERT INTO classdetails(classID,teacherID,subject,year,medium,type) VALUES 
  ('GYTTG','GTFYFYF','UYGTY','2121','GHFYT','GTGFT')";*/
    $res3=query_execute($sql3);
  
    if(!($res3))
   {
      echo "Someting went to wrong!. Redirecting now...";
     header('refresh:2; URL=index.php');
     
   }
  
  }

 //generate auto passowrd 
  function password_generate($chars) 
  {
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
  }

 $autopassword=password_generate(7);

 $sql2="INSERT INTO login(username,position,password,active,firstName) VALUES ('$ID','Teacher','$autopassword','1','$fname')";
 $res1=query_execute($sql1);
   move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file);
    $res2=query_execute($sql2);
  


    //send mail to account
    $mailto = $email;
    $mailSub = "GURUMADULA ACADEMY OF HIGHER EDUCATION";
    $mailMsg = "You are successfully created an account. Your ID Is ".$ID." and use this password for first login.Your password is ".$autopassword." When you login change your password as you like.";
    require 'PHPMailer-master/PHPMailerAutoload.php';
    $mail = new PHPMailer();
    $mail ->IsSmtp();
    $mail ->SMTPDebug = 0;
    $mail ->SMTPAuth = true;
    $mail ->SMTPSecure = 'ssl';
    $mail ->Host = "smtp.gmail.com";
    $mail ->Port = 465; // or 587
    $mail ->IsHTML(true);
    $mail ->Username = "ledmppl@gmail.com";
    $mail ->Password = "steelseriessupper";
    $mail ->SetFrom("ledmppl@gmail.com");
    $mail ->Subject = $mailSub;
    $mail ->Body = $mailMsg;
    $mail ->AddAddress($mailto);

    if(!$mail->Send())
    {
        $sendcheckemail=false;
    }
    else
    {
        $sendcheckemail=true;
    }

 if(!($res1 && $res2 && $sendcheckemail ))
   {
      echo "Someting went to wrong!. Redirecting now...";
     header('refresh:2; URL=index.php');
     
   }
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>E-GURUMADULA teacher</title>
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

	<style>
         .modal-confirm {		
            color: #636363;
            width: 600px;
        }
        .modal-confirm .modal-content {
            padding: 40px;
            border-radius: 5px;
            border: none;
            height:350px;
        }
        .modal-confirm .modal-header {
            border-bottom: none;   
            position: relative;
        }
        .modal-confirm h4 {
            text-align: center;
            font-size: 30px;
            margin: 30px 0 -15px;
        }
        .modal-confirm .form-control, .modal-confirm .btn {
            min-height: 40px;
            border-radius: 3px; 
        }
        .modal-confirm .close {
            position: absolute;
            top: -5px;
            right: -5px;
        }	
        .modal-confirm .modal-footer {
            border: none;
            text-align: center;
            border-radius: 5px;
            font-size: 13px;
        }	
        .modal-confirm .icon-box {
            color: #fff;		
            position: absolute;
            margin: 0 auto;
            left: 0;
            right: 0;
            top: -70px;
            width: 95px;
            height: 95px;
            border-radius: 50%;
            z-index: 9;
            background: #82ce34;
            padding: 15px;
            text-align: center;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
        }
        .modal-confirm .icon-box i {
            font-size: 58px;
            position: relative;
            top: 3px;
        }
        .modal-confirm.modal-dialog {
            margin-top: 80px;
        }
        .modal-confirm .btn {
            color: #fff;
            border-radius: 4px;
            background: #82ce34;
            text-decoration: none;
            transition: all 0.4s;
            line-height: normal;
            border: none;
        }
        .modal-confirm .btn:hover, .modal-confirm .btn:focus {
            background: #6fb32b;
            outline: none;
        }
        
      input {
      padding: 10px;
      width: 100%;
      font-size: 1rem;
      font-family: Raleway;
      border: 1px solid #aaaaaa;
      line-height: 1.5;
      height:38px;
    } 

    /* Mark input boxes that gets an error on validation: */
    input.invalid {
      background-color: #ffdddd !important;
    }
    body {
      background-color: #eee;
      }

    
    button {
      padding: 0.25rem 0.5rem;
      font-size: 0.875rem;
      line-height: 1.5;
      color: #343a40;
      background-color: transparent;
      background-image: none;
      border-color: #343a40;
      border-radius: 30px
      display: inline-block;
      font-weight: 400;
      text-align: center;
      white-space: nowrap;
      vertical-align: middle;
    } 

    button:hover {
      opacity: 0.8; 
    } 

	 
	 select{
   		 display: block;
   		 width: 100%;
   		 padding: 0.375rem 0.75rem;
   		 font-size: 1rem;
   		 line-height: 1.5;
   		 color: black;
   		 background-color: #fff;
   		 background-clip: padding-box;
   		 border: 1px solid #ced4da;
   	     border-radius: 0.25rem;
     }
     .container{
      margin-top: 2em;
      margin-bottom: 2em;
      }
      .border{
      border-width: 15px;
      border-color: blue;
      background-color:white;
      }

      fieldset{
      display: block;
      margin-inline-start: 2px;
      margin-inline-end: 2px;
      padding-block-start: 0.35em;
      padding-inline-start: 0.75em;
      padding-inline-end: 0.75em;
      padding-block-end: 0.625em;
      min-inline-size: min-content;
      border-width: 2px;
      border-style: groove;
      border-color: rgba(207, 207, 207,0.3);
      border-image: initial;
      }

      legend{
      display: block;
      padding-inline-start: 2px;
      padding-inline-end: 2px;
      border-width: initial;
      border-style: none;
      border-color: rgba(207, 207, 207,0.3);
      border-image: initial
      }
     
     
	</style>
 
  </head>
  <body>
    
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container-fluid">      
		  <div class="col-lg-4 col-md-11  col-sx-12" >
		  <a class="navbar-brand" href="index.php"><img src="images/logo.jpg" width="190" height="108" style="top:-4px;position: relative;margin-right: 15px;margin-top:0px ;float:none" class="responsive">
			<p class="navbar-brand" style="font-size:4vw;">E-GURUMADULA</p></a>
			
		  </div></div>
		
	  </nav>
	  <nav class="navbar navbar-expand-lg navbar-light bg-light" >
		<a class="navbar-brand" href="#"></a>
	   
		<button class="navbar-toggler btn-sm" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation" style="font-size:16px">
		  <span class="oi oi-menu"></span> Menu
		</button>
	   
	  
		<div class="collapse navbar-collapse" id="ftco-nav"  id="navbarSupportedContent">
		  <ul class="navbar-nav mr-auto">
			<li>  <a class="nav-link" href="index.php">Home</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link active" href="#">Teacher <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="timetable.php">Time Tables</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="career.php">Careers </a>
			</li>
			<li class="nav-item ">
			<a class="nav-link" href="about.php">About Us </a></li>
		  </ul>
		  <form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-dark btn-sm my-2 my-sm-0" type="submit" style="margin-right: 1rem;"><span class="icon-search"> </span>Search</button>
		  </form>
		  <div><button class="btn btn-outline-dark btn-sm my-2 my-sm-0" type="button"><span class="icon-unlock"> </span>Log out</button></div>
		</div>
	  </nav>
		<!-- END nav -->
		<ul class="breadcrumb">
		  <li><a href="index.php">Home </a></li>
		  <li style="color:white">/</li>
		  <li><a href="teacher.php">Teacher</a></li>
          <li style="color:white">/</li>
		  <li>Teacher Registration</li>
	    </ul>

		<!-- END nav -->

    <div class="modal-dialog modal-confirm" >
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">
					<i class="material-icons">&#xE876;</i>
				</div>				
				<h4 class="modal-title">You are Successfully Created Account!</h4>	
			</div>
			<div class="modal-body">
				<p class="text-center">Please check your email for detials.</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-success btn-block" data-dismiss="modal" onclick="window.location.href = 'index.php';">OK</button>
			</div>
		</div>
	</div>
     
              
    </div>         
    
</div>
    
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
              <ul class="list-unstyled">
				<li><a href="index.php" class="py-2 d-block">Home</a></li>
                <li>Teacher</li>
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
    
  

  <!-- loader -->








  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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
