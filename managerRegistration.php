<?php require_once("./include/DB.php"); ?>
<?php require_once("./include/function.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>E-GURUMADULA management</title>
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
  

  

	<style>
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
      font-family: Raleway;
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
      box-shadow: 0 9px #999;
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
      border: none;
      text-align: center;
      outline: none;
      font-size: 15px;
      border-radius: 50%;
    }

      /*css for image upload part*/
    .form-div { margin-top: 1px; border: 2px solid #e0e0e0; }
      #profileDisplay { display: block; height: 210px; width: 60%; margin: 0px auto; border-radius: 50%; }
      .img-placeholder {
        width: 48%;
        color: white;
        height: 100%;
        background: black;
        opacity: .7;
        border-radius: 50%;
        z-index: 2;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        display: none;
      }
      .img-placeholder h4 {
        margin-top: 40%;
        color: white;
      }
      .img-div:hover .img-placeholder {
        display: block;
        cursor: pointer;
      }
      .form-control-R {
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
      -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
      transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
      -o-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
      transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
      transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; 
      }
      .center {
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 50%;
      }
      .collapsible{
      height:60px;
      width:60px;
      border:2px black solid;
      cursor:pointer;
      margin-left:47%;
      padding-bottom:20px;
      background-color:white;
      border-radius: 50%;
      box-shadow: 0 9px #999;
    
      }

    .collapsible:hover {
      background-color: #555;
      animation: pulse 1s infinite;
      transition: .3s;
    }

    @keyframes pulse {
      0% {
        transform: scale(1);
          }
      70% {
        transform: scale(.9);
          }
      100% {
        transform: scale(1);
         }
    }

    .content {
      padding: 0 18px;
      display: none;
      overflow: hidden;
      background-color: #f1f1f1;
    }
    
	</style>
  <script>
     function triggerClick(e) 
    {
      document.querySelector('#profileImage').click();
   }
    
    function displayImage(e) 
    {
      if (e.files[0]) 
      {
          var reader = new FileReader();
          reader.onload = function(e)
          {
            document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
          }
          reader.readAsDataURL(e.files[0]);
      }
    }

     //validation
     function validateForm() {

            var title = document.forms["myForm"]["title"].value;
          if (title == "") {
            alert("Title must be filled out");
            return false;
          } 
          var firstName = document.forms["myForm"]["firstName"].value;
          if (firstName == "") {
            alert("First name must be filled out");
            return false;
          } 
          var lastName =  document.forms["myForm"]["lastName"].value; 
          if (lastName == "") {
            alert("Last name must be filled out");
            return false;
          }
          var birthday =  document.forms["myForm"]["birthday"].value;
          if (birthday == "") {
            alert("Birthday must be filled out");
            return false;
          }
          var Gender   =  document.forms["myForm"]["Gender"].value;
          if (Gender == "") {
            alert("Gender must be filled out");
            return false;
          }
          var nic      =  document.forms["myForm"]["nic"].value;
          if (nic == "") {
            alert("NIC must be filled out");
            return false;
          }
          var religion =  document.forms["myForm"]["religion"].value;
          if (religion == "") {
            alert("Religion must be filled out");
            return false;
          }
          var address  =  document.forms["myForm"]["address"].value;
          if (address == "") {
            alert("Address must be filled out");
            return false;
          }
          var phoneNumber= document.forms["myForm"]["phoneNumber"].value;
          if (phoneNumber == "") {
            alert("Contact Number must be filled out");
            return false;
          }
          var email      = document.forms["myForm"]["email"].value;
          if (email == "") {
            alert("Email must be filled out");
            return false;
          } 
          var qualifications = document.forms["myForm"]["qualifications"].value;
          if (qualifications== "Qualifications") {
            alert("Qualifications must be filled out");
            return false;
          }
          
          var profileImage   = document.forms["myForm"]["profileImage"].value;
          if (profileImage == "") {
            alert("Select a profile image");
            return false;
          }
         
        
        
          
      }

      function test_input( data) {

      }
      
    

     

  </script>
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
			  <a class="nav-link active" href="#">Teacher </a>
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
		  <li><a href="index.php">Home</a></li>
		  <li style="color:white">/</li>
		  <li><a href="manager.php">My Account</a></li>
          <li style="color:white">/</li>
		  <li>Management Registration</li>
	    </ul>

		<!-- END nav -->
    
  
  

        <!-- First Tab My Details Starts -->
<div class="container" style=" background-color:#ffb606;padding:80px;">
    <div class="border">
      <form name="myForm" style="background-color:white;margin:5%;border:1px solid black;padding:5px" action="createdManagementAccount.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">  
      <div class="row">
          <div class="col-sm-12">
            <h1 style="text-align:center;margin-top:50px;margin-bottom:50px">Management Registration</h1>
          </div>
       </div>
       <div class="form-group" >
            <div class="border"  style="margin:5px">
              <fieldset>
                 <div class="row">
                        <div class="col-sm-12">
                                <legend style="margin-left:0.4em;text-align:left;color:black;width:12rem;font-size:30px;font-family:Raleway">Personal  Details</legend>
                        </div>
                   </div>
                  <div class="form-group" style=margin-top:5px>
                        <label for="profileImage" class="col-sm-3 control-label">Profile Image<span style="color:red">*</span></label>
                        <!---Upload Image Starts-->
    
                        <div class="container" style="margin-bottom:0px;">
                           <div class="row">
                                  <div class="col-8 offset-md-2" style="margin-left:19%;">
                                       <div class="form-group text-center" style="position: relative;" >
                                         <span class="img-div">
                                          <div class="text-center img-placeholder"  onClick="triggerClick()">
                                             <h4>Upload Image</h4>
                                           </div>
                                           <img src="images/management/upload.png" onClick="triggerClick()"  id="profileDisplay"  style="width:48%;height:48%" class="center">
                                         </span>
                                         <input type="file"  onChange="displayImage(this)"  id="profileImage" name="profileImage" class="form-control-R" style="display: none;">
                                       </div>
                                   </div>
                           </div>
                        </div>
                        
         
          <div class="form-group">
          <label for="managementCategory" class="col-sm-3 control-label">Management Category <span style="color:red">*</span></label>
            <div class="col-sm-5">
              <select name="managementCategory" class="form-control-R">
                 <option value="">-Select-</option>
                 <option value="Financial Accountant">Financial Accountant</option>
                 <option value="General Manager">General Manager</option>
              </select>
            </div>
            <label for="title" class="col-sm-3 control-label">Title <span style="color:red">*</span></label>
            <div class="col-sm-5">
              <select name="title" class="form-control-R">
                 <option value="">-Select-</option>
                 <option value="Miss">Miss</option>
                 <option value="Mr">Mr</option>
                 <option value="Ms">Ms</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="firstName" class="col-sm-3 control-label" >First Name <span style="color:red">*</span></label>
            <div class="col-sm-9">
              <input type="text" name="firstName" placeholder="First Name" class="form-control-R" autofocus  oninput="this.className = ''">
               <span class="help-block">eg: Smith, Harry</span>
            </div>
          </div>
          <div class="form-group">
            <label for="middleName" class="col-sm-4 control-label">Middle Name</label>
            <div class="col-sm-9">
              <input type="text" name="middleName" placeholder="Middle Name" class="form-control" style="font-size:1rem" autofocus oninput="this.className = ''">
            </div>
          </div>
          <div class="form-group">
            <label for="lastName" class="col-sm-4 control-label">Last Name <span style="color:red">*</span></label>
            <div class="col-sm-9">
               <input type="text" name="lastName" placeholder="Last Name"  class="form-control-R" autofocus  oninput="this.className = ''">
            </div>
          </div>
           <div class="form-group">
            <label for="birthDate" class="col-sm-4 control-label">Date of Birth <span style="color:red">*</span></label>
            <div class="col-sm-9">
              <input type="date" name="birthday"  class="form-control-R"  oninput="this.className = ''">
            </div>
          </div>
          <div class="form-group">
              <div class="row">
                  <div class="col-sm-2">
                    <label for="gender" class="control-label col-sm-4">Gender<span style="color:red">*</span></label>
                   </div>
                  <div class="col-sm-2">
                    <label class="radio-inline"><input type="radio"  style="height:18px;"   name="Gender" id="Gender" value="Female">Female </label>
                  </div>
                  <div class="col-sm-2">
                    <label class="radio-inline"><input type="radio" style="height:18px;"  name="Gender" id="Gender" value="Male" >Male</label> 
                  </div>
              </div>
          </div> 
          <div class="form-group">
              <label for="nic" class="col-sm-4 control-label">NIC <span style="color:red">*</span></label>
              <div class="col-sm-9">
                  <input type="text" name="nic" placeholder="NIC Number" class="form-control-R" autofocus  oninput="this.className = ''">
              </div>
          </div>
          <div class="form-group">
              <label for="nationality" class="col-sm-4 control-label">Nationality</label>
              <div class="col-sm-9">
                  <input type="text" name="nationality" placeholder="Nationality" class="form-control-R" autofocus oninput="this.className = ''">
              </div>
          </div>
          <div class="form-group">
              <label for="Religion" class="col-sm-4 control-label">Religion <span style="color:red">*</span></label>
              <div class="col-sm-9">
                  <input type="text" name="religion" placeholder="Religion" class="form-control-R" autofocus oninput="this.className = ''"> 
              </div>
          </div>
          </div>
          </div>
          <div class="form-group" >
            <div class="border"  style="margin:5px">
              <legend style="color:black;width:12rem;font-size:30px;font-family:Raleway">Contact Details</legend>
              <div class="form-group">
                <label for="address" class="col-sm-4 control-label">Address<span style="color:red">*</span></label>
                <div class="col-sm-9">
                    <input type="text" name="address" placeholder="Address" class="form-control-R" autofocus  oninput="this.className = ''">
                </div>
              </div>
              <div class="form-group">
                <label for="phoneNumber" class="col-sm-9 control-label">Contact Number <span style="color:red">*</span></label>
                <div class="col-sm-9">
                  <input type="number" name="phoneNumber" placeholder="Contact Number" class="form-control-R" autofocus  oninput="this.className = ''">
                </div>
              </div>
              <div class="form-group">
                <label for="email" class="col-sm-4 control-label">Email <span style="color:red">*</span></label>
                <div class="col-sm-9">
                  <input type="email" name="email" id="email" placeholder="Email" class="form-control-R" autofocus  oninput="this.className = ''"> 
                </div>
              </div>
              <div class="form-group">
                <label for="email" class="col-sm-4 control-label">Qualifications <span style="color:red">*</span></label>
                <div class="col-sm-9">
                  <textarea name="qualifications" id="qualifications" style="color:#8c8b8b;width:100%;height:200px" class="form-control-R" autofocus  oninput="this.className = ''" >Qualifications</textarea>
                </div>
              </div>
              
              
                
                  <div class="row" >
                    <div class="col-lg-1 col-sm-0"></div>
                    <div class="col-lg-9 col-sm-0"></div> 
                    <div class="col-lg-2 col-sm-12">
                         <button class="btn btn-outline-dark" style="margin-top:50px;margin-left:60%:width:20px;margin-bottom:15px" type="submit">Submit </button>
                  
                    </div>
               
                  </div>
                

            </div>
          </div>
       
    
     
     </form> 
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