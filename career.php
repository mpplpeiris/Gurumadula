<?php require_once("./include/DB.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>E-GURUMADULA Career</title>
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
      .img-div:hover .overlay-file {
        opacity: 1;
      }
      .overlay-file {
        position: absolute;
        top: 6px;
        left:15px;
        height: 110px;
        width: 110px;
        opacity: 0;
        transition: .5s ease;
        background-color: #FFF8DC;
        border-radius:70%;
      }
      .text1 {
        color: black;
        font-size: 20px;
        font-weight: bold;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        text-align: center;
      }
    </style>
  </head>

  <script>
    /*script for image upload*/
    function triggerClick(e) 
    {
      document.querySelector('#uploadFile').click();
   }
    
    function displayFile(e) 
    {
      if (e.files[0]) 
      {
          var reader = new FileReader();
          reader.onload = function(e)
          {
            document.querySelector('#uploadDisplay').setAttribute('src', e.target.result);
          }
          reader.readAsDataURL(e.files[0]);
      }
    }
  </script>
  
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container-fluid">      
        <div class="col-lg-4 col-md-11  col-sx-12" >
        <a class="navbar-brand" href="index.html"><img src="images/logo.jpg" width="190" height="108" style="top: -4px;position: relative;margin-right: 15px;margin-top:0px ;float:none" class="responsive">
          <p class="navbar-brand" style="font-size:4vw;" >E-GURUMADULA</p></a>
          
        </div></div>
      
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" >
      <a class="navbar-brand" href="#"></a>
     
      <button class="navbar-toggler btn-sm" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation" style="font-size:16px">
        <span class="oi oi-menu"></span> Menu
      </button>
     
    
      <div class="collapse navbar-collapse" id="ftco-nav"  id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="index.php">Home </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="teacher.php">Teacher </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="timetable.php">Time Tables</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="">Careers<span class="sr-only">(current)</span> </a>
          </li><li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-dark btn-sm my-2 my-sm-0" type="submit" style="margin-right: 1rem;"><span class="icon-search"> </span>Search</button>
        </form>
        <div><a href="login.php"><button class="btn btn-outline-dark btn-sm my-2 my-sm-0" type="button"><span class="icon-lock"> </span>Log in</button></a></div>
      </div>
    </nav>
      <!-- END nav -->
    <ul class="breadcrumb">
      <li><a href="index.php">Home </a></li>
      <li style="color:white">/</li>
      <li>Careers</li>
    </ul>
    <!-- END nav -->
    
    <div class="hero-wrap hero-wrap-2" style="background-image: url('images/career/banner-career.jpg'); background-attachment:fixed;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Careers</span></p>
            <h1 class="mb-3 bread">Careers</h1>
            <h3 style="font-weight:500;";>Are you Ready to Take the Challenge?</h3>
          </div>
        </div>
      </div>
    </div>


<section class='ftco-section bg-light'>
      <div class="container" style="background-color:#ffb606;padding-top:30px;padding-bottom:20px">
       
       <?php
      
       $GetCidNo="SELECT CareerID,position,keyRequirements,flyer FROM career WHERE active=1";
      
        $result=query_execute($GetCidNo);  
     
        while($dr = mysqli_fetch_array($result))
        {
          $careerID=$dr['CareerID'];
        $position = $dr["position"];
        $keyRequirements = $dr["keyRequirements"];
        $flyer = $dr["flyer"];
        ?>  
                
          <div class='col-md-12 ftco-animate' style="background-color:cornsilk" >
            <div class="row blog-entry align-self-stretch" style="background-color:cornsilk">
            <div class='col-lg-4 blog-entry align-self-stretch' style="background-color:cornsilk">
                <img  class="block-20"   style="object-fit:cover" src="images/career/<?php echo $flyer?>" >
            </div> 
            <div class='col-lg-5 text p-4 d-block'>
                <h1 class='heading mt-3' style='text-align: center;font-size:50px;text-transform:uppercase'><?php echo $position?></h1>
                <p style='font-size:20px;text-align:justify;'><?php echo $keyRequirements ?></p>
              </div>
              <form  id="regForm" action="uploadedCV.php" method="post" enctype="multipart/form-data">
              <input type="text" name="cvType" value='<?php echo $careerID ?>' style="display: none;">
              <div class='col-lg-3'>
                  <div class="img-div" onClick="triggerClick()"  id="uploadDisplay">
                  <img src="images/career/uploadCV.png"  style="width:110px;margin-top:70%;object-fit:cover">
                  <div class="overlay-file">
                    <div class="text1">Choose File</div>
                  </div>
                  <input type="file"  onChange="displayFile(this)"  id="uploadFile" name= "uploadFile" class="form-control-R" style="display: none;">
                  </div>
                <button type="submit" class="btn btn-outline-success" name="submit"><h6 class='heading mt-3' style='width:100px'>Upload CV</h6></button>
              </div>
              </form>
            </div>
          </div>
      <?php 
       } ?> 
      </div>
    </section>


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