<?php require_once("./include/DB.php"); ?>
<?php require_once("./include/session.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>E-GURUMADULA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
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
    <!--<style>
      .carousel-control-next{
        position: absolute;
        left: 27cm;
        top: 1.7cm;
      }
      
      
    </style>-->
    <style>
    
  body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.active{
    font-weight:400;
    color: lightblue;
}
.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
/*------*/
  ul.breadcrumb {
    padding:0px;

}
   .noticeboard {
  height: 100%;
  width: 17%;
  position: fixed;
  z-index:1;
  top: 0;
  right: 0;
  background-color: #fff;
  overflow-x: hidden;
  padding-top: 20px;
   }
  .profileimage :hover{
     
  }
/*notification*/  
.notification {
  background-color: #FFF;
  color: black;
  font-size:17px;
  text-decoration: none;
  padding: 15px 26px;
  position: relative;
  display: inline-block;
  border-radius: 2px;
  margin-top:20px;
}

.notification:hover {
  background: grey;
}

.notification:active {
  background-color: cornsilk;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

.notification .badge {
  position: absolute;
  top: -10px;
  right: -10px;
  padding: 5px 10px;
  border-radius: 50%;
  background-color: red;
  color: white;
}

.container{margin-left:10%;
    
}
</style>

  </head>
  

  <body >
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container-fluid">      
      <div class="col-lg-4 col-md-11  col-sx-12" >
      <a class="navbar-brand" href="index.php"><img src="images/logo.jpg" width="190" height="108" style="top: -4px;position: relative;margin-right: 15px;margin-top:0px ;float:none" class="responsive">
        <p class="navbar-brand" style="font-size:4vw;" >E-GURUMADULA</p></a> 
       
      </div>
      <div class="col-lg-5 col-md-11  col-sm-0" ></div>
      <div class="col-lg-1 col-md-11  col-sm-6" >
      <a href="#" class="notification">
  <span class="icon-envelope"> Inbox</span>
  <span class="badge">3</span>
</a></div>
      <div class="col-lg-1 col-md-11  col-sm-6" >
      <img src="<?php echo 'images/'.$_SESSION['imagePath'].'/' . $_SESSION['image'] ?>" width="80vw" height="80vw" alt="Your Image" style="border-radius:50%;margin-top:2em;">
      </div>
      <div class="col-lg-1 col-md-11  col-sm-6" >
       <p style="font-size:19px;color:black;padding-top:25%">Hi <?php echo $_SESSION["firstName"]  ?>! </p>
       <p style="font-size:19px;color:black"><?php echo $_SESSION["username"] ?></p>
      </div>
    </div>
    
  </nav>
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding-left:0px;height:50px;z-index: 2" >
    <a class="navbar-brand" href="#"></a>
    
    <button class="navbar-toggler btn-sm" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation" style="font-size:16px">
      <span class="oi oi-menu"></span> Menu
    </button>
   
  
    <div class="collapse navbar-collapse" id="ftco-nav"  id="navbarSupportedContent">
    

      <ul class="navbar-nav mr-auto">
        <li id="main" >
         <button style="font-size:15px;cursor:pointer;" onclick="openNav()">&#9776;</button>
      </li>
        <li class="nav-item active" style="padding-top:12px">
          <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item" style="padding-top:12px">
          <a class="nav-link" href="teacher.php">Teacher </a>
        </li>
        <li class="nav-item" style="padding-top:12px">
          <a class="nav-link" href="timetable.php">Time Tables</a>
        </li>
        <li class="nav-item" style="padding-top:12px">
          <a class="nav-link" href="career.php">Careers </a>
        </li><li class="nav-item" style="padding-top:12px">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-dark btn-sm my-2 my-sm-0" type="submit" style="margin-right: 1rem;"><span class="icon-search"> </span>Search</button>
      </form>
      <div><a href="loginID.php"><button class="btn btn-outline-dark btn-sm my-2 my-sm-0" type="button"><span class="icon-unlock"> </span>Log out</button></a></div>
    </div>
  </nav>
    <!-- END nav -->
    <div style="position:relative;z-index:10">
    <ul class="breadcrumb" >
      
      <li><a href="login.php">My Account</a></li>
      <li><a href="#">/</a></li>
  
      <li><a href="#">My Classes</a></li>
  
    </ul>
    </div>
    
    

    <!--side nav>-->
   <div id="mySidenav" style="margin-bottom:20em;margin-top:19em;font-family:caribian" class="sidenav">
       <a href="javascript:void(0)" style="margin-top:10px"class="closebtn" onclick="closeNav()">&times;</a>
       <a href="myAccountStudent.php"><span class="active">Dashboard</span></a>
       <a href="#">My Details</a>
       <a href="studentMyClasses.php">My Classes</a>
       <a href="#">My Time Table</a>
       <a href="#">My Financials</a>
       <a href="#">Feedback</a>
       <a href="#">Notices</a>
     </div>
     <div class="noticeboard" >
     <h1>notices</h1>
     </div>
     <div class="hero-wrap hero-wrap-2" style="background-image: url('images/student/Dashboard.jpg'); background-attachment:fixed;height:300px;z-index: 0">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <h2 class="mb-3 bread" style="color:white;font-size:3vw">Education is the most powerful weapon which you can use to change the world</h2>
          </div>
        </div>
      </div>
    </div>
     <section class="ftco-section testimony-section" style="background: linear-gradient(to bottom, #ffb606 3%, #ffffff 70%);padding-left:5em;padding-right:5em;padding-top:4px">
        
        <div class="container" style="background-color:white;">
        <h3 style="align:center">Classes</h3>
        
        <div class="row"  style="padding:60px;margin-botom:20px">
		   <div class="col-lg-4">
		   <label style="font-size:20px">Stream</label>
        	<select  id="Stream" id="Stream">
			    <option value="">--Select--</option>
           		<option value="Mathematics">Mathematics</option>
            	<option value="Biology">Biology</option>
            	<option value="Commerce">Commerce</option>
            	<option value="Art">Art</option>
            </select>
		   </div>
		   <div class="col-lg-4" >
           <label style="font-size:20px">Teacher</label>
           
           <?php
            $sql="SELECT * FROM teachersdetails";
            $result=query_execute($sql); 
            $RawNo=mysqli_num_rows($result);
       
          if($RawNo>0){
                  $select='<select name="Teacher"><option value="">--Select--</option>';
                  while($rs=mysqli_fetch_array($result)){
                  $select.='<option value="'.$rs['ID'].'">'.$rs['firstName'].' '.$rs['lastName'].'</option>';
              }
            }
            $select.='</select>';
            echo $select;
            ?>


		   </div>
		   <div class="col-lg-4">
		   <label style="font-size:20px">Medium</label>
			<select   id="Medium" id="Medium">
			    <option value="">--Select--</option>
           		<option value="volvo">Sinhala</option>
            	<option value="saab">English</option>
                <option value="saab">Tamil</option>
            </select>
		   </div>
        </div>

        </div>
     </section>
     

    
    <!--footer-->
    <footer class="ftco-footer ftco-bg-dark ftco-section img" style="z-index: 1;background-image: url(images/bg_2.jpg); background-attachment:fixed; padding-top: 1cm; padding-bottom: 0.3cm;">
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
              <a href="https://www.google.com/maps/place/Gurumandala+Academy+Of+Higher+Education/@6.5802495,79.9613623,17z/data=!3m1!4b1!4m5!3m4!1s0x3ae23720912ccd23:0x96942cb5ddfd91ec!8m2!3d6.5802495!4d79.963551?hl=en-US"><img src="images/carousel/footer/Map.PNG" width="360em"></a>
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
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.body.style.backgroundColor = "#ffb606";
}
</script>
    

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