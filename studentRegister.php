<!--student registration form--To createdAccount.php-->

<?php require_once("./include/DB.php"); ?>
<?php require_once("./include/function.php"); ?>
<!DOCTYPE html>
<html>
  <head>

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
    
      
    <style>
      * {
        box-sizing: border-box;
      }

      body {
        background-color: #f1f1f1;
        font-weight:800;
        font-color:black;
      }

      #regForm {
        background-color: #ffffff;
        margin: 100px auto;
        font-family: Raleway;
        padding: 40px;
        width: 70%;
        min-width: 80%;
      }

      h1 {
        text-align: center;  
      }

      input {
        padding: 10px;
        width: 100%;
        font-size: 17px;
        font-family: Raleway;
        border: 1px solid #aaaaaa;
      } 

      /* Mark input boxes that gets an error on validation: */
      input.invalid {
        background-color: #ffdddd !important;
      }

      /* Hide all steps by default: */
      .tab {
        display: none;
      }

      button {
        background-color: #4CAF50;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        font-size: 17px;
        cursor: pointer;
      } 

      button:hover {
        opacity: 0.8; 
      } 

      #prevBtn {
        background-color: #bbbbbb;
      }

      /* Make circles that indicate the steps of the form: */
      .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;  
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
      } 

      .step.active {
        opacity: 1;
      }

      /* Mark the steps that are finished and valid: */
      .step.finish {
        background-color: #4CAF50;
      }
      /*-------------*/
      body {
        background-color: #eee;
        }

        *[role="form"] {
        max-width: 530px;
        padding: 10px;
        margin: 0 auto;
        background-color: #fff;
        border-radius: 0.3em;

        }

        *[role="form"] h2 {
        text-align:center;
        margin-bottom: 1em;
        }
        .container{
        margin-top: 2em;
        margin-bottom: 2em;
        }
        .border{
        border-width: 15px;
        border-color: blue;
        }
      /*css for image upload part*/
      .form-div { margin-top: 1px; border: 2px solid #e0e0e0; }
        #profileDisplay { display: block; height: 210px; width: 60%; margin: 0px auto; border-radius: 50%; }
        .img-placeholder {
          width: 43%;
          color: white;
          height: 20%;
          background: black;
          opacity: .7;
          height: 210px;
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

        /****REQIRED CLASS************************************************* */
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
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
        
        .border{
        border-width: 50px;
        border-color: blue;
        margin:5 10 5 10;
        }

        /* CSS for Credit Card Payment form */
        .credit-card-box .panel-title {
            display: inline;
            font-weight: bold;
        }
        .credit-card-box .form-control.error {
            border-color: red;
            outline: 0;
            box-shadow: inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(255,0,0,0.6);
        }
        .credit-card-box label.error {
        font-weight: bold;
        color: red;
        padding: 2px 8px;
        margin-top: 2px;
        }
        .credit-card-box .payment-errors {
        font-weight: bold;
        color: red;
        padding: 2px 8px;
        margin-top: 2px;
        }
        .credit-card-box label {
            display: block;
        }
        /* The old "center div vertically" hack */
        .credit-card-box .display-table {
            display: table;
        }
        .credit-card-box .display-tr {
            display: table-row;
        }
        .credit-card-box .display-td {
            display: table-cell;
            vertical-align: middle;
            width: 50%;
        }
        /* Just looks nicer */
        .credit-card-box .panel-heading img {
            min-width: 180px;
        }
        .center {
        display: flex;
        align-items: center;
        justify-content: center }
        

    </style>

    <!---Script for upload image-->
    <script>
      /*script for image upload*/
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
    </script>

  </head> 
<body>

 <!-- Start Title Bar -->
 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container-fluid">      
      <div class="col-lg-4 col-md-11  col-sx-12" >
         <a class="navbar-brand" href="index.html"><img src="images/logo.jpg" width="190" height="108" style="top: -4px;position: relative;margin-right: 15px;margin-top:0px ;float:none" class="responsive">
         <p class="navbar-brand" style="font-size:4vw;" >E-GURUMADULA</p></a>
      </div>
    </div>
 </nav>
 <!-- End Title Bar  -->


 <!-- Start Nav Bar -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light" >
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler btn-sm" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation" style="font-size:16px">
      <span class="oi oi-menu"></span> Menu
    </button>
    <div class="collapse navbar-collapse" id="ftco-nav"  id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
  
          <a class="nav-link" href="index.php">Home </a>
       </li>
       <li class="nav-item">
          <a class="nav-link" href="teacher.php">Teacher </a>
       </li>
       <li class="nav-item">
          <a class="nav-link" href="timetable.php">Time Tables</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="career.php">Careers </a>
       </li>
       <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
       </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-dark btn-sm my-2 my-sm-0" type="submit" style="margin-right: 1rem;">Search</button>
    </form>
    <div>
      <button class="btn btn-outline-dark btn-sm my-2 my-sm-0" type="button">Log in</button>
    </div>
  </div>
 </nav>
  <!-- END Nav Bar -->
<!-- END nav -->

<ul class="breadcrumb">
      <li><a href="index.php">Home </a></li>
      <li style="color:white">/</li>
      <li>Student Registration</li>
</ul>

<div class="container" style=" background-color: #ffb606 ;padding-top:1px;padding-bottom:5px">
<p id="demo"></p>
  <form  id="regForm" action="createdStudentAccount.php" method="post" enctype="multipart/form-data">
    <h1>Registration</h1>
    <h5 style="font-size:20px;">We need some of your personal details to create an account for you.Plaese enter your names as you would like them to appear when we communicate with you.</h5>
    
    <!-- One "tab" for each step in the form: -->

    <!-- First Tab My Details Starts -->
    <div class="tab" id="myDetails">
      <div class="border">
        <legend style="margin-left:0.5em;color: black;">My Details</legend>
          <!---Upload Image Starts-->
          <div class="container" style="margin-bottom:0px;">
                <div class="row">
                        <div class="col-8 offset-md-2" style="margin-left:100px;">
                            <div class="form-group text-center" style="position: relative;" >
                              <span class="img-div">
                                <div class="text-center img-placeholder"  onClick="triggerClick()">
                                  <h4>Upload Your Image</h4>
                                </div>
                                <img src="images/studentRegister/upload.png" onClick="triggerClick()"  id="profileDisplay"  style="width:220px">
                              </span>
                              <input type="file"  onChange="displayImage(this)"  id="profileImage" name= "profileImage" class="form-control-R" style="display: none;">
                            </div>
                         </div>
                </div>
          </div>

          <div class="form-group">
            <label for="title" class="col-sm-3 control-label">Title *</label>
            <div class="col-sm-5">
                <select name="title" class="form-control-R">
                 <option value="">Select</option>
                 <option value="Miss">Miss</option>
                 <option value="Mr">Mr</option>
                 <option value="Ms">Ms</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="firstName" class="col-sm-3 control-label" >First Name *</label>
            <div class="col-sm-9">
              <input type="text" name="firstName" placeholder="First Name" class="form-control-R" autofocus required oninput="this.className = ''">
               <span class="help-block">eg: Smith, Harry</span>
            </div>
          </div>
          <div class="form-group">
            <label for="middleName" class="col-sm-4 control-label">Middle Name</label>
            <div class="col-sm-9">
              <input type="text" name="middleName" placeholder="Middle Name" class="form-control" autofocus oninput="this.className = ''">
            </div>
          </div>
          <div class="form-group">
            <label for="lastName" class="col-sm-4 control-label">Last Name *</label>
            <div class="col-sm-9">
               <input type="text" name="lastName" placeholder="Last Name"  class="form-control-R" autofocus required oninput="this.className = ''">
            </div>
          </div>
           <div class="form-group">
            <label for="birthDate" class="col-sm-4 control-label">Date of Birth *</label>
            <div class="col-sm-9">
              <input type="date" name="birthday"  class="form-control-R" required oninput="this.className = ''">
            </div>
          </div>
          <div class="form-group">
              <div class="row">
                  <div class="col-sm-2">
                    <label for="gender" class="control-label col-sm-4">Gender*</label>
                   </div>
                  <div class="col-sm-2">
                    <label class="radio-inline"><input type="radio"   name="stGender" id="stGender" value="Female"required="required">Female </label>
                  </div>
                  <div class="col-sm-2">
                    <label class="radio-inline"><input type="radio"  name="stGender" id="stGender" value="Male" required="required">Male</label> 
                  </div>
              </div>
          </div> 
          <div class="form-group">
              <label for="nic" class="col-sm-4 control-label">NIC *</label>
              <div class="col-sm-9">
                  <input type="text" name="nic" placeholder="NIC Number" class="form-control-R" autofocus required oninput="this.className = ''">
              </div>
          </div>
          <div class="form-group">
              <label for="nationality" class="col-sm-4 control-label">Nationality</label>
              <div class="col-sm-9">
                  <input type="text" name="nationality" placeholder="Nationality" class="form-control-R" autofocus oninput="this.className = ''">
              </div>
          </div>
          <div class="form-group">
              <label for="Religion" class="col-sm-4 control-label">Religion *</label>
              <div class="col-sm-9">
                  <input type="text" name="religion" placeholder="Religion" class="form-control-R" autofocus required oninput="this.className = ''"> 
              </div>
          </div>
          <div class="form-group">
              <label for="school" class="col-sm-4 control-label">School *</label>
              <div class="col-sm-9">
                  <input type="text" name="school" placeholder="School" class="form-control-R" autofocus required oninput="this.className = ''">
              </div>
          </div>
          <div class="form-group">
              <label for="district" class="col-sm-4 control-label">District *</label>
              <div class="col-sm-9">
                  <input type="text" name="district" placeholder="District" class="form-control-R" autofocus required oninput="this.className = ''">
              </div>
          </div>
          <div class="form-group" >
            <div class="border"  style="margin:5px">
              <legend style="margin-left:0.5em;color: black;">Contact Details</legend>
              <div class="form-group">
                <label for="address" class="col-sm-4 control-label">Address *</label>
                <div class="col-sm-9">
                    <input type="text" name="address" placeholder="Address" class="form-control-R" autofocus required oninput="this.className = ''">
                </div>
              </div>
              <div class="form-group">
                <label for="phoneNumber" class="col-sm-9 control-label">Phone Number *</label>
                <div class="col-sm-9">
                  <input type="text" name="phoneNumber" placeholder="Phone Number" class="form-control-R" autofocus required oninput="this.className = ''">
                </div>
              </div>
              <div class="form-group">
                <label for="email" class="col-sm-4 control-label">Email *</label>
                <div class="col-sm-9">
                  <input type="email" name="email" id="email" placeholder="Email" class="form-control-R" autofocus required oninput="this.className = ''"> 
                </div>
              </div>
              </div>
          </div>
          <div class="form-group">
              <label for="FacingYear" class="col-sm-4 control-label">AL Facing Year *</label>
              <div class="col-sm-9">
                  <input type="text" name="facingYear" placeholder="Year" class="form-control-R" autofocus required oninput="this.className = ''">
              </div>
          </div>
          <div class="form-group">
              <label for="FacingMedium" class="col-sm-4 control-label">AL Facing Medium *</label>
              <div class="col-sm-9">
                  <input type="text" name="facingMedium" placeholder="Medium" class="form-control-R" autofocus required oninput="this.className = ''">
              </div>
          </div>
      </div>
    </div>
     <!-- First Tab My Details Ends -->

     <!-- Second Tab My Results Starts-->
    <div class="tab">
      <!--ol results-->
        <div class="border">
                <legend style="margin-left:0.5em;color: black;">My Results</legend>
                <div class="form-group">
                  
                    <legend style="margin-left:0.5em;color: blue;">Grade 5 Scholarship</legend>
                    <div class="form-group">
                      <label for="school" class="col-sm-3 control-label">School *</label>
                      <div class="col-sm-10">
                          <input type="text" name="schoolGrade5" placeholder="School" class="form-control-R" autofocus required  oninput="this.className = ''">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="year" class="col-sm-3 control-label">Year *</label>
                      <div class="col-sm-10">
                          <input type="text" name="yearGrade5" placeholder="Year" class="form-control-R" autofocus required  oninput="this.className = ''" >
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="mark" class="col-sm-3 control-label">Mark *</label>
                      <div class="col-sm-10">
                          <input type="text" name="markGrade5" placeholder="Mark" class="form-control-R" autofocus required  oninput="this.className = ''">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="rank" class="col-sm-3 control-label">Rank</label>
                      <div class="col-sm-10">
                          <input type="text" name="rankGrade5" placeholder="Rank" class="form-control" autofocus required  oninput="this.className = ''"> 
                      </div>
                    </div>
                  </div>
                
               
               <div class="border">
                  <legend style="margin-left:0.5em;color: blue;">O/L Examination</legend>
                  <div class="form-group">
                    <label for="school" class="col-sm-4 control-label">School *</label>
                    <div class="col-sm-10">
                       <input type="text" name="schoolGrade10" placeholder="School" class="form-control-R" autofocus required  oninput="this.className = ''">
                     </div>
                  </div>
                  <div class="form-group">
                      <label for="year" class="col-sm-4 control-label">Year *</label>
                      <div class="col-sm-10">
                          <input type="text" name="yearGrade10" placeholder="Year" class="form-control-R" autofocus required  oninput="this.className = ''">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="Index Number" class="col-sm-4 control-label">Index Number</label>
                      <div class="col-sm-10">
                          <input type="text" name="indexgrade10" placeholder="Index Number" class="form-control-R" autofocus required  oninput="this.className = ''">
                      </div>
                  </div>
                  <div class="form-group">
                          <label for="rank" class="col-sm-6 control-label"> Number of Subjects *</label>
                          <div class="col-sm-3">
                              <input type="text" name="numOfSubject10" placeholder="Number" class="form-control-R" autofocus required  oninput="this.className = ''">
                          </div>
                  </div>
                  <div class="form-group">
                      <div class="row">
                        <label for="A" class="col-sm-0 control-label" style="margin-left:2.5em;margin-top:.5em;">As</label>
                        <div class="col-sm-2" style="margin-left:0.5em;">
                            <input type="text" name="AResultCount" placeholder="" class="form-control" autofocus  oninput="this.className = ''">
                        </div>
                        <label for="B" class="col-sm-0 control-label" style="margin-left:2.5em;margin-top:.5em;">Bs</label>
                          <div class="col-sm-2" style="margin-left:0.5em;">
                              <input type="text" name="BResultCount" placeholder="" class="form-control" autofocus  oninput="this.className = ''">
                        </div>
                        <label for="C" class="col-sm-0 control-label" style="margin-left:2.5em;margin-top:.5em;">Cs</label>
                          <div class="col-sm-2" style="margin-left:0.5em;">
                              <input type="text" name="CResultCount" placeholder="" class="form-control" autofocus  oninput="this.className = ''">
                          </div>
                      </div>
                      <div class="row">
                       <label for="S" class="col-sm-0 control-label" style="margin-left:2.5em;margin-top:1em;">Ss</label>
                        <div class="col-sm-2" style="margin-left:0.5em;margin-top:.5em;">
                            <input type="text" name="SResultCount" placeholder="" class="form-control" autofocus  oninput="this.className = ''">
                        </div>
                      </div>
                      <div class="row" style="margin-top:1em;">
                        <label for="Science" class="col-sm-0 control-label" style="margin-left:2.5em;margin-top:.5em;">Science</label>
                          <div class="col-sm-2" style="margin-left:0.5em;">
                              <input type="text" name="scienceResult10" placeholder="" class="form-control" autofocus  oninput="this.className = ''">
                          </div>
                        <label for="maths" class="col-sm-0 control-label" style="margin-left:2.5em;margin-top:.5em;">Mathematics</label>
                          <div class="col-sm-2" style="margin-left:0.5em;">
                              <input type="text" name="mathsResult10" placeholder="" class="form-control" autofocus oninput="this.className = ''" >
                          </div>
                      </div>
                      <div class="row">
                        <label for="English" class="col-sm-0 control-label" style="margin-left:2.5em;margin-top:.5em;">English</label>
                        <div class="col-sm-2" style="margin-left:.75em;">
                            <input type="text" name="englishResult10" placeholder="" class="form-control" autofocus oninput="this.className = ''">
                        </div>
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="row">
                        <label for="district" class="col-sm-2 control-label" style="margin-left:1em;margin-top:.5em;">District *</label>
                            <div class="col-sm-4" style="margin-left:0.5em;">
                                <input type="text" name="districtGrade10" placeholder="" class="form-control" autofocus required oninput="this.className = ''">
                            </div>
                        <label for="maths" class="col-sm-3 control-label" style="margin-left:.5em;margin-top:.5em;">District Rank</label>
                            <div class="col-sm-2"style="margin-left:0.5em;">
                                <input type="text" name="districtRankGrade10" placeholder="" class="form-control" autofocus oninput="this.className = ''">
                            </div>
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="row">
                        <label for="island" class="col-sm-3 control-label" style="margin-left:1em;margin-top:.5em;">Island Rank</label>
                            <div class="col-sm-3" style="margin-left:0.5em;">
                                <input type="text" name="islandRank10" placeholder="" class="form-control" autofocus oninput="this.className = ''">
                            </div>
                      </div>
                  </div>
               </div>
       </div>
     <!--al results-->           
       <div class="border">
          <legend style="margin-left:0.5em;color: blue;">A/L Examination</legend>
          <h3 style="text-align:center">First Shy</h3>
          <div class="form-group">
            <label for="school" class="col-sm-3 control-label">School</label>
            <div class="col-sm-10">
                <input type="text" name="schoolAlF" placeholder="School" class="form-control" autofocus oninput="this.className = ''">
            </div>
          </div>
          <div class="form-group">
            <label for="district" class="col-sm-3 control-label">District</label>
            <div class="col-sm-10">
                <input type="text" name="districtALF" placeholder="District" class="form-control" autofocus oninput="this.className = ''">
            </div>
          </div>
          <div class="form-group">
            <label for="year" class="col-sm-3 control-label">Year</label>
            <div class="col-sm-10">
                <input type="text" name="yearAlF" placeholder="Year" class="form-control" autofocus oninput="this.className = ''">
            </div>
          </div>
          <div class="form-group">
            <label for="index" class="col-sm-4 control-label">Index Number</label>
            <div class="col-sm-10">
                <input type="text" name="indexNumberALF" placeholder="Index Number" class="form-control" autofocus required oninput="this.className = ''">
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <label for="index" class="col-sm-2 control-label" style="margin-left:1em;margin-top:.5em;">Stream</label>
              <div class="col-sm-7">
                  <select id="title" style="margin-left:.5em;" class="form-control" name="StreamALF">
                      <option value="">Select</option>
                      <option value="Mathematics">Mathematics</option>
                      <option value="Biology">Biology</option>
                      <option value="Commerce">Commerce</option>
                      <option value="Technology">Technology</option>
                      <option value="Arts">Arts</option>   
                  </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <label for="index" class="col-sm-2 control-label" style="margin-left:1em;margin-top:.5em;">Medium</label>
              <div class="col-sm-4">
                  <select id="title" style="margin-left:.5em;" class="form-control" name="MediumALF">
                      <option value="">Select</option>
                      <option value="Sinhala">Sinhala</option>
                      <option value="English">English</option>
                      <option value="Tamil">Tamil</option>
                  </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <h5 style="margin-left:1em;">Result</h5>
            <div class="row">
              <div class="col-sm-5" style="margin-left:1em;">
                  <input type="text" name="subject1ALF" placeholder="Subject 1" class="form-control" autofocus oninput="this.className = ''">
              </div>
              <div class="col-sm-3"style="margin-left:1em;">
                <input type="text" name="result1rALF" placeholder="Result 1" class="form-control" autofocus oninput="this.className = ''">
              </div>
            </div>
            <div class="row">
              <div class="col-sm-5" style="margin-top:.5em;margin-left:1em;">
                  <input type="text" name="subject2ALF" placeholder="Subject 2" class="form-control" autofocus oninput="this.className = ''">
              </div>
              <div class="col-sm-3" style="margin-top:.5em;margin-left:1em;">
                <input type="text" name="result2rALF" placeholder="Result 2" class="form-control" autofocus oninput="this.className = ''">
              </div>
            </div>
            <div class="row">
              <div class="col-sm-5" style="margin-top:.5em;margin-left:1em;">
                  <input type="text" name="subject3ALF" placeholder="Subject 3" class="form-control" autofocus oninput="this.className = ''">
              </div>
              <div class="col-sm-3" style="margin-top:.5em;margin-left:1em;">
                <input type="text" name="result3rALF" placeholder="Result 3" class="form-control" autofocus oninput="this.className = ''">
              </div>
            </div>
            <div class="row">
              <div class="col-sm-5" style="margin-top:.5em;margin-left:1em;">
                <input type="text" name="subject4ALF" placeholder="Subject 4" class="form-control" autofocus oninput="this.className = ''">
              </div>
              <div class="col-sm-3" style="margin-top:.5em;margin-left:1em;">
                <input type="text" name="result4rALF" placeholder="Result 4" class="form-control" autofocus oninput="this.className = ''">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <label for="district" class="col-sm-3 control-label" style="margin-left:1em;margin-top:.5em;">District Rank</label>
                  <div class="col-sm-4" style="margin-left:0.5em;">
                      <input type="text" name="districrRankALF" placeholder="" class="form-control" autofocus oninput="this.className = ''"> 
                  </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <label for="island" class="col-sm-3 control-label" style="margin-left:1em;margin-top:.5em;">Island Rank</label>
                  <div class="col-sm-4" style="margin-left:0.5em;">
                      <input type="text" name="islandRankALF" placeholder="" class="form-control" autofocus oninput="this.className = ''">
                  </div>
            </div>
          </div>
          <h3 style="text-align:center">Second Shy</h3>
          <div class="form-group">
            <label for="district" class="col-sm-3 control-label">District</label>
            <div class="col-sm-10">
                <input type="text" name="districtALS" placeholder="District" class="form-control" autofocus oninput="this.className = ''">
            </div>
          </div>
          <div class="form-group">
            <label for="year" class="col-sm-3 control-label">Year</label>
            <div class="col-sm-10">
                <input type="text" name="yearAlS" placeholder="Year" class="form-control" autofocus oninput="this.className = ''">
            </div>
          </div>
          <div class="form-group">
            <label for="index" class="col-sm-4 control-label">Index Number</label>
            <div class="col-sm-10">
                <input type="text" name="indexNumberALS" placeholder="Index Number" class="form-control" autofocus required oninput="this.className = ''">
            </div>
          </div>
          <div class="form-group">
            <div class="row">
            <label for="index" class="col-sm-2 control-label" style="margin-left:1em;margin-top:.5em;">Stream</label>
              <div class="col-sm-7">
                  <select id="title" style="margin-left:.5em;" class="form-control" name="StreamALS">
                  <option value="">Select</option>
                      <option value="Mathematics">Mathematics</option>
                      <option value="Biology">Biology</option>
                      <option value="Commerce">Commerce</option>
                      <option value="Technology">Technology</option>
                      <option value="Arts">Arts</option>
                  </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
            <label for="index" class="col-sm-2 control-label" style="margin-left:1em;margin-top:.5em;">Medium</label>
              <div class="col-sm-4">
                  <select id="title" style="margin-left:.5em;" class="form-control" name="MediumALS">
                      <option value="">Select</option>
                      <option value="Sinhala">Sinhala</option>
                      <option value="English">English</option>
                      <option value="Tamil">Tamil</option>
                      
                  </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <h5 style="margin-left:1em;">Result</h5>
            <div class="row">
              <div class="col-sm-5" style="margin-left:1em;">
                  <input type="text" name="subject1ALS" placeholder="Subject 1" class="form-control" autofocus oninput="this.className = ''">
              </div>
              <div class="col-sm-3"style="margin-left:1em;">
                <input type="text" name="result1rALS" placeholder="Result 1" class="form-control" autofocus oninput="this.className = ''">
              </div>
            </div>
            <div class="row">
              <div class="col-sm-5" style="margin-top:.5em;margin-left:1em;">
                  <input type="text" name="subject2ALS" placeholder="Subject 2" class="form-control" autofocus  oninput="this.className = ''">
              </div>
              <div class="col-sm-3" style="margin-top:.5em;margin-left:1em;">
                <input type="text" name="result2rALS" placeholder="Result 2" class="form-control" autofocus oninput="this.className = ''">
              </div>
            </div>
            <div class="row">
              <div class="col-sm-5" style="margin-top:.5em;margin-left:1em;">
                  <input type="text" name="subject3ALS" placeholder="Subject 3" class="form-control" autofocus oninput="this.className = ''">
              </div>
              <div class="col-sm-3" style="margin-top:.5em;margin-left:1em;">
                <input type="text" name="result3rALS" placeholder="Result 3" class="form-control" autofocus oninput="this.className = ''">
              </div>
            </div>
            <div class="row">
              <div class="col-sm-5" style="margin-top:.5em;margin-left:1em;">
                  <input type="text" name="subject4ALS" placeholder="Subject 4" class="form-control" autofocus oninput="this.className = ''">
              </div>
              <div class="col-sm-3" style="margin-top:.5em;margin-left:1em;">
                <input type="text" name="result4rALS" placeholder="Result 4" class="form-control" autofocus oninput="this.className = ''">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <label for="district" class="col-sm-3 control-label" style="margin-left:1em;margin-top:.5em;">District Rank</label>
                  <div class="col-sm-4" style="margin-left:0.5em;">
                      <input type="text" name="districrRankALS" placeholder="" class="form-control" autofocus oninput="this.className = ''">
                  </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <label for="island" class="col-sm-3 control-label" style="margin-left:1em;margin-top:.5em;">Island Rank</label>
                  <div class="col-sm-4" style="margin-left:0.5em;">
                      <input type="text" name="islandRankALS" placeholder="" class="form-control" autofocus oninput="this.className = ''">
                  </div>
            </div>
          </div>
       </div>
    </div>
    <!-- Second Tab My Results Ends-->

    <!---Third Tab Guardian Details Starts-------->
    <div class="tab">
      <h2>My Guardian Detalis</h2>
      <div class="form-group">
        <div class="row" style="margin-left:.1em;margin-top:.5em;">
          <label for="title" class="col-sm-3 control-label">Title *</label>
          <div class="col-sm-8">
              <select name="titleGuardian" class="form-control">
              <option value="">Select</option>
                 <option value="Miss">Miss</option>
                 <option value="Mr">Mr</option>
                 <option value="Ms">Ms</option>
               
              </select>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row" style="margin-left:.1em;margin-top:.5em;">
          <label for="firstName" class="col-sm-3 control-label"style="margin-top:.5em;">First Name *</label>
          <div class="col-sm-8">
              <input type="text" name="guardianFirstName" placeholder="First Name" class="form-control-R" autofocus required oninput="this.className = ''">
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row" style="margin-left:.1em;margin-top:.5em;">
          <label for="lastName" class="col-sm-3 control-label"style="margin-top:.5em;">Last Name *</label>
          <div class="col-sm-8">
              <input type="text" name="guardianLastName" placeholder="Last Name" class="form-control-R" autofocus required oninput="this.className = ''">
          </div>
        </div>
      </div>
      <div class="form-group">
          <div class="row">
              <div class="col-sm-3">
                <label for="gender" class="control-label col-sm-3">Gender*</label>
              </div>
              <div class="col-sm-3">
                  <label class="radio-inline"><input type="radio" name="guardianGender" value="Female">Female </label>
              </div>
              <div class="col-sm-3">
                  <label class="radio-inline"><input type="radio" name="guardianGender" value="Male">Male</label> 
              </div>
          </div>
      </div> 
      <div class="form-group">
        <div class="row" style="margin-left:.1em;margin-top:.5em;">
          <label for="address" class="col-sm-3 control-label"style="margin-top:.5em;">Address *</label>
          <div class="col-sm-8">
              <input type="text" name="guardianAddress" placeholder="Address" class="form-control-R" autofocus required oninput="this.className = ''">
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row" style="margin-left:.1em;margin-top:.5em;">
          <label for="Contact" class="col-sm-3 control-label"style="margin-top:.5em;">Contact Number *</label>
          <div class="col-sm-8">
              <input type="text" name="guardianContact" placeholder="Contact Number" class="form-control-R" autofocus required oninput="this.className = ''">
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row" style="margin-left:.1em;margin-top:.5em;">
          <label for="email" class="col-sm-3 control-label" style="margin-top:.5em;" >Email</label>
          <div class="col-sm-8">
              <input type="text" name="guadianEmail" placeholder="Email" class="form-control-R" autofocus oninput="this.className = ''">
          </div>
        </div>
      </div>
    </div>
    <!---Third Tab Guardian Details Ends-------->

    <!---Forth Tab Payment Due Starts-------->
    <div class="tab">
        <h3 style="text-align:center"> Payments</h3>
        
          <div class="row">
            <div class="col-12">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Fee Type</th>
               <!-- <th scope="col">Lecture</th>
                    <th scope="col">Class Year</th>
                    <th scope="col">Class Type</th>-->
                    <th scope="col">Amount (Rs.)</th>
                    <th scope="col">Status</th>
                    <th scope="col">Pay  Now</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td scope="row"><?php echo  date("Y/m/d");?></td>
                    <td>Registration Fee</td>
               <!--<td>-</td>
                    <td>-</td>
                    <td>-</td>-->
                    <td>1,500.00</td>
                    <td>Due</td>
                    <td>
                      <div class="custom-control custom-checkbox" style="margin-left:30px;">
                        <input type="checkbox" class="custom-control-input" id="customCheck1" name="customCheck1" value="paynow">
                        <label class="custom-control-label" for="customCheck1"></label>
                      </div>
                    </td>
                  </tr>
                 <!-- <tr>
                    <td scope="row"><?php echo  date("Y/m/d");?></td>
                    <td>Monthly Fee</td>
                    <td>Mr. Shenan</td>
                    <td>2020</td>
                    <td>Mass</td>
                    <td>1800.00</td>
                    <td>Due</td>
                    <td>
                      <div class="custom-control custom-checkbox" style="margin-left:30px;">
                        <input type="checkbox" class="custom-control-input" id="customCheck2" name="Masscheck">
                        <label class="custom-control-label" for="customCheck2"></label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td scope="row"><?php echo  date("Y/m/d");?></td>
                    <td>Monthly Fee</td>
                    <td>Ms. Piyumika</td>
                    <td>2020</td>
                    <td>Group</td>
                    <td>2400.00</td>
                    <td>Due</td>
                    <td>
                      <div class="custom-control custom-checkbox" style="margin-left:30px;">
                        <input type="checkbox" class="custom-control-input" id="customCheck3" name="Groupcheck">
                        <label class="custom-control-label" for="customCheck3"></label>
                      </div>
                    </td>
                  </tr>-->
                </tbody>
              </table>
            <!--  <h5 style="text-align:right;">Due Payment : 1,500.00</h5>-->
              <h5 style="text-align:right;">Payment : 1,500.00</h5>
              
            </div>
          </div>  
    </div>
    <!---Forth Tab Payment Due Ends-------->

    <!---Fifth Tab Payment Details Starts-------->
    <div class="tab">
       <div class="row ">
            <div class="col-xs-12 col-md-12" >
                <div class="border" style="margin-top:30px;margin-bottom:30px;padding: 15px 25px 15px 10px;">
                    <div class="panel panel-default credit-card-box" style="margin-left:20px">
                        <div class="panel-heading display-table" style="margin-bottom:20px" >
                            <div class="row display-tr">
                                <h3 class="panel-title display-td" >Payment Details</h3>
                                <div class="display-td" >                            
                                    <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                                </div>
                            </div>                    
                        </div>
                        <div class="panel-body">
                          <form role="form" id="payment-form" action="createdAccount.php">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label for="cardName">Name On Card</label>
                                        <div class="input-group">
                                            <input type="tel" class="form-control-R" name="cardName" placeholder="Name On Card" autocomplete="cc-number"required autofocus />
                                            <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                        </div>
                                    </div>                            
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label for="cardNumber">CARD NUMBER</label>
                                        <div class="input-group">
                                            <input type="tel" class="form-control-R" name="cardNumber" placeholder="Valid Card Number" autocomplete="cc-number"required autofocus />
                                            <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                        </div>
                                    </div>                            
                                </div>
                            </div>
                            <div class="row" style="margin-left:-30px">
                                <div class="col-xs-7 col-md-7">
                                    <div class="form-group">
                                        <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                        <input   type="tel" class="form-control-R"   name="cardExpiry"  placeholder="MM / YY"    autocomplete="cc-exp"   required  />
                                    </div>
                                </div>
                                <div class="col-xs-5 col-md-5 pull-right">
                                    <div class="form-group">
                                        <label for="cardCVC">CV CODE</label>
                                        <input   type="tel"   class="form-control-R"  name="cardCVC"  placeholder="CVC"   autocomplete="cc-csc"  required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <h5>Total Amount (Rs.) 1500</h5>
                                    </div>
                                </div>                        
                            </div>
                            <div class="row justify-content-center">
                              <div class="col-xs-12">
                                   
                              </div>   
                            </div>
                            <div class="row" style="display:none;">
                                <div class="col-xs-12">
                                    <p class="payment-errors"></p>
                                </div>
                            </div>
                          </form>
                        </div>
                    </div>
                </div>   
           </div> 
       </div> 
    </div>
    <!---Fifth Tab Payment Details Ends-------->

    <!--Add buttons-->
    <div style="overflow:auto;">
      <div style="float:right;">
        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
        <button type="button" id="nextBtn"  onclick="nextPrev(1)">Next</button>
      </div>
    </div>

    <!-- Circles which indicates the steps of the form: -->
    <div style="text-align:center;margin-top:40px;">
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
    </div>
  
  </form>
</div>

  <!--footer Starts-->
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
  <!--footer Ends-->

  
<script>

  var currentTab = 0; // Current tab is set to be the first tab (0)
  showTab(currentTab); // Display the current tab

  function showTab(n) {
    // This function will display the specified tab of the form...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    //... and fix the Previous/Next buttons:
    if (n == 0) {
      document.getElementById("prevBtn").style.display = "none";
    } else {
      document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
      document.getElementById("nextBtn").innerHTML = "Pay Your Amount";
    } else {
      document.getElementById("nextBtn").innerHTML = "Next";
    }
    //... and run a function that will display the correct step indicator:
    fixStepIndicator(n)
  }

    function nextPrev(n) {
    
      if(currentTab ==0)
      {
        //email validate
        inputemail="";
        inputemail=document.forms["regForm"]["email"].value;
        //var inputemail = document.getElementsByName("email");
       // document.getElementById("demo").innerHTML = inputemail;
        if(inputemail!=="")
        {
          var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
          if(inputemail.match(mailformat))
          {
              checkmail=true;
          }
          else
          {
            alert("You have entered an invalid email address!");
            checkmail=false;
          }
        }
        else 
        {checkmail=true;
        }
        
        //gender validate
        var genders = document.getElementsByName("stGender");
        if (genders[0].checked == true || genders[1].checked == true)
        {
            checkgender=true;
        } 
        else 
        {
            checkgender=false;
            alert("You must select your gender!");
        }
        if(checkgender && checkmail)
        {
          checkTab=true;
        }
        else
        {
          checkTab=fasle;
        }
      }

      if(currentTab ==1)
      {
        checkTab=true;
      }
      
      if(currentTab ==2)
      {
        //email validate
        inputemail="";
        inputemail=document.forms["regForm"]["guadianEmail"].value;
        //var inputemail = document.getElementsByName("email");
        document.getElementById("demo").innerHTML = inputemail;
        if(inputemail!=="")
        {
          var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
          if(inputemail.match(mailformat))
          {
              checkmail=true;
          }
          else
          {
            if(n==-1)
            {
              checkTab=true;
            }
            else
            {
            alert("You have entered an invalid email address!");
            checkmail=false;
            }
          }
        }
        else
        {
          if(n==-1)
            {
              checkTab=true;
            }
        }
        
        //gender validate
        var genders = document.getElementsByName("guardianGender");
        if (genders[0].checked == true || genders[1].checked == true)
        {
          checkgender=true;
        } 
        else 
        {
            if(n==-1)
            {
              checkTab=true;
            }
            else
            {
              checkgender=false;
              alert("You must select your gender!");
            }
        }
      

        if(checkgender && checkmail)
        {
          checkTab=true;
        }
        else
        {
          checkTab=fasle;
        }
      }

      if(currentTab ==3)
      {
      //  var regcheck = document.getElementsByname("customCheck1");
        if(document.getElementById("customCheck1").checked == true)
        {
          checkTab=true;
        }
        else
            {
              if(n==-1)
              {
              checkTab=true;
              }
              else
              {
              checkTab=false;
              alert("You must pay your registraion amount for the registration");
              }
              
            }
      }

            
    if(checkTab)
    {
      // This function will figure out which tab to display
      var x = document.getElementsByClassName("tab");
      // Exit the function if any field in the current tab is invalid:
      if (n == 1 && !validateForm()) return false;
      // Hide the current tab:
      x[currentTab].style.display = "none";
      // Increase or decrease the current tab by 1:
      currentTab = currentTab + n;
      // if you have reached the end of the form...
      if (currentTab >= x.length) {
        // ... the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
      }
      // Otherwise, display the correct tab:
      showTab(currentTab);
      }
  }
    

  function validateForm() 
  {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByClassName("form-control-R");
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
      // If a field is empty...
      if (y[i].value == "") {
        // add an "invalid" class to the field:
        y[i].className += " invalid";
        // and set the current valid status to false
        valid = false;
      }
    }
    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
      document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid; // return the valid status
  }

  function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
      x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class on the current step:
    x[n].className += " active";
  }
</script>

</body>
</html>
