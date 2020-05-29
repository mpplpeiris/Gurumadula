<!--from studentRegister.php-->

<?php require_once("./include/DB.php"); ?>
<?php require_once("./include/function.php"); ?>

<?php
  
  //student tab
  $title=$_POST["title"];
  $fname=$_POST["firstName"];
  $mname=$_POST["middleName"];
  $lname=$_POST["lastName"];
  $birthday=$_POST["birthday"];
  $gender=$_POST["stGender"];
  $nic=$_POST["nic"];
  $nationality=$_POST["nationality"];
  $religion=$_POST["religion"];
  $school=$_POST["school"];
  $district=$_POST["district"];
  $address=$_POST["address"];
  $phoneNumber=$_POST["phoneNumber"];
  $email=$_POST["email"];
  $facingYear=$_POST["facingYear"];
  $facingMedium=$_POST["facingMedium"];

  $profileImageName =$_FILES["profileImage"]["name"];
  $target_dir = "images/StudentRegister/";
  $target_file = $target_dir . basename($profileImageName);

    
  //Results
  $schoolGrade5=$_POST["schoolGrade5"];
  $yearGrade5=$_POST["yearGrade5"];
  $markGrade5=$_POST["markGrade5"];
  $rankGrade5=$_POST["rankGrade5"];
  $schoolGrade10=$_POST["schoolGrade10"];
  $yearGrade10=$_POST["yearGrade10"];
  $indexgrade10=$_POST["indexgrade10"];
  $numOfSubject10=$_POST["numOfSubject10"];
  $AResultCount=$_POST["AResultCount"];
  $BResultCount=$_POST["BResultCount"];
  $CResultCount=$_POST["CResultCount"];
  $SResultCount=$_POST["SResultCount"];
  
  $scienceResult10=$_POST["scienceResult10"];
  $mathsResult10=$_POST["mathsResult10"];
  $englishResult10=$_POST["englishResult10"];
  $districtGrade10=$_POST["districtGrade10"];
  $districtRankGrade10=$_POST["districtRankGrade10"];
  $islandRank10=$_POST["islandRank10"];

  $schoolAlF=$_POST["schoolAlF"];
  $districtALF=$_POST["districtALF"];
  $yearAlF=$_POST["yearAlF"];
  $indexNumberALF=$_POST["indexNumberALF"];
  $StreamALF=$_POST["StreamALF"];
  $MediumALF=$_POST["MediumALF"];
  $subject1ALF=$_POST["subject1ALF"];
  $result1rALF=$_POST["result1rALF"];
  $subject2ALF=$_POST["subject2ALF"];
  $result2rALF=$_POST["result2rALF"];
  $subject3ALF=$_POST["subject3ALF"];
  $result3rALF=$_POST["result3rALF"];
  $subject4ALF=$_POST["subject4ALF"];
  $result4rALF=$_POST["result4rALF"];
  $districrRankALF=$_POST["districrRankALF"];
  $islandRankALF=$_POST["islandRankALF"];

  $districtALS=$_POST["districtALS"];
  $yearAlS=$_POST["yearAlS"];
  $indexNumberALS=$_POST["indexNumberALS"];
  $StreamALS=$_POST["StreamALS"];
  $MediumALS=$_POST["MediumALS"];
  $subject1ALS=$_POST["subject1ALS"];
  $result1rALS=$_POST["result1rALS"];
  $subject2ALS=$_POST["subject2ALS"];
  $result2rALS=$_POST["result2rALS"];
  $subject3ALS=$_POST["subject3ALS"];
  $result3rALS=$_POST["result3rALS"];
  $subject4ALS=$_POST["subject4ALS"];
  $result4rALS=$_POST["result4rALS"];
  $districrRankALS=$_POST["districrRankALS"];
  $islandRankALS=$_POST["islandRankALS"];

  //Guardian
  $titleGuardian=$_POST["titleGuardian"];
  $guardianFirstName=$_POST["guardianFirstName"];
  $guardianLastName=$_POST["guardianLastName"];
  $guardianGender=$_POST["guardianGender"];
  $guardianAddress=$_POST["guardianAddress"];
  $guardianContact=$_POST["guardianContact"];
  $guadianEmail=$_POST["guadianEmail"];

   //Payment
  
   $Amount=1500;
   $FeeType="Registration Fee";
   $Status="Paid";
   date_default_timezone_set("Asia/Colombo");
   $Time=date("h:i:sa");
   $Date=date("Y/m/d");


   //studentID
  $GetSidNo="SELECT * FROM student";
  $result=query_execute($GetSidNo); 
  $rowcount=mysqli_num_rows($result);
  $rowcount=$rowcount+1;
   $invID=str_pad($rowcount,5,0,STR_PAD_LEFT);
  $studentID="ST/".$facingYear."/".$invID;


  $sql1="INSERT INTO student
  (title,firstName,middleName,lastName,birthday,gender,NIC,nationality,religion,school,district,address,phonenumber,
  email,facingYear,facingMedium,image,studentID)  VALUES 
  ('$title','$fname','$mname','$lname','$birthday','$gender','$nic','$nationality','$religion','$school',
  '$district','$address','$phoneNumber','$email','$facingYear','$facingMedium','$profileImageName','$studentID')";

  $sql2="INSERT INTO regresults
  (schoolGrade5,yearGrade5,markGrade5,rankGrade5,schoolGrade10,yearGrade10,indexgrade10,numOfSubject10,AResultCount,
  BResultCount,CResultCount,SResultCount,scienceResult10,mathsResult10,englishResult10,districtGrade10,
  districtRankGrade10,islandRank10,schoolAlF,districtALF,yearAlF,indexNumberALF,StreamALF,MediumALF,subject1ALF,
  result1rALF,subject2ALF,result2rALF,subject3ALF,result3rALF,subject4ALF,result4rALF,districrRankALF,islandRankALF,
  districtALS,yearAlS,indexNumberALS,StreamALS,MediumALS,subject1ALS,result1rALS,subject2ALS,result2rALS,subject3ALS,
  result3rALS,subject4ALS,result4rALS,districrRankALS,islandRankALS,studentID)  VALUES 
  ('$schoolGrade5','$yearGrade5','$markGrade5', '$rankGrade5','$schoolGrade10','$yearGrade10', '$indexgrade10',
  '$numOfSubject10','$AResultCount','$BResultCount','$CResultCount','$SResultCount','$scienceResult10', 
  '$mathsResult10','$englishResult10','$districtGrade10','$districtRankGrade10','$islandRank10','$schoolAlF',
  '$districtALF','$yearAlF','$indexNumberALF','$StreamALF','$MediumALF','$subject1ALF','$result1rALF','$subject2ALF',
  '$result2rALF','$subject3ALF','$result3rALF', '$subject4ALF','$result4rALF','$districrRankALF','$islandRankALF',
  '$districtALS','$yearAlS','$indexNumberALS','$StreamALS','$MediumALS','$subject1ALS','$result1rALS','$subject2ALS',
  '$result2rALS','$subject3ALS','$result3rALS', '$subject4ALS','$result4rALS','$districrRankALS','$islandRankALS','$studentID')"; 

  $sql3="INSERT INTO guardiandetails
  (titleGuardian,guardianFirstName,guardianLastName,guardianGender,guardianAddress,guardianContact,guadianEmail,studentID)  VALUES 
  ('$titleGuardian','$guardianFirstName','$guardianLastName','$guardianGender','$guardianAddress','$guardianContact','$guadianEmail','$studentID')";

   
  $sql4="INSERT INTO payments(Amount,FeeType,Status,Time,Date,studentID) VALUES ('$Amount','$FeeType','$Status','$Time','$Date','$studentID')";

   //generate auto passowrd 
   function password_generate($chars) 
   {
   $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
   return substr(str_shuffle($data), 0, $chars);
   }
  $password=password_generate(7);

  $sql5="INSERT INTO login(username,position,firstName,password,active) VALUES ('$studentID','Student','$fname','$password','1')";


    $res1=query_execute($sql1);
    move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file);
    $res2=query_execute($sql2); 
    $res3=query_execute($sql3);
    $res4=query_execute($sql4);
    $res5=query_execute($sql5);



    //send mail to account
    $mailto = $email;
    $mailSub = "GURUMADULA ACADEMY OF HIGHER EDUCATION";
    $mailMsg = "You Are Successfully Created An Account.Your ID Is ".$studentID." And Use This Password For First Login.Your Password is ".$password."  When You Login Change Your Password As You Like.";
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
 
    if(!($res1 && $res2 && $res3 && $res4 && $res5 && $sendcheckemail))
    {
      echo "Someting went to wrong!. Redirecting now...";
      header('refresh:2; URL=index.php');
     
    }
?>


<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
<head>
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
    </style>
</head>
 
<body style="background-color:#f1f1f1;">

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container-fluid">      
        <div class="col-lg-4 col-md-11  col-sx-12" >
            <a class="navbar-brand" href="index.html"><img src="images/logo.jpg" width="190" height="108" style="top: -4px;position: relative;margin-right: 15px;margin-top:0px ;float:none" class="responsive">
            <p class="navbar-brand" style="font-size:4vw;" >E-GURUMADULA</p></a>
        </div>
        </div>
    </nav>
    
    <div class="container">
        <!-- Modal HTML -->

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
              <ul class="list-unstyled">
                <li><a href="index.html" class="py-2 d-block">Home</a></li>
                <li><a href="teacher.html" class="py-2 d-block">Teacher</a></li>
                <li><a href="course.html.html" class="py-2 d-block">TimeTable</a></li>
                <li><a href="contact.html" class="py-2 d-block">Careers</a></li>
                <li><a href="about.html" class="py-2 d-block">About Us</a></li>
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

    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
</html>
 