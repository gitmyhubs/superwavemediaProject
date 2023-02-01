<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="Superwave, ">
  <meta content="" name="That combining art of marketing with science of digital.">

  <!--fab icon-->
<link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="img/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<!--end fab icon-->


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <script type="text/javascript">
        
      function regValidation()
    {
      if(document.getElementById('name').value=="")
      {
        document.getElementById('name').style.border="1px solid red";
        document.getElementById('name_error').style.color="#f00";
        document.getElementById('name').focus();
        document.getElementById('name_error').innerHTML="User is required";
        return false; 
      }
      if (document.getElementById('email').value=="")
       {
        document.getElementById('email').style.border="1px solid red";
        document.getElementById('email_error').style.color="#f00";
        document.getElementById('email').focus();
        document.getElementById('email_error').innerHTML="Email is required";
        return false; 
       }
       else
      {
        var email=document.getElementById('email').value;
        var pat=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        
        if(!pat.test(email))
        {
        document.getElementById('email').style.border="1px solid red";
        document.getElementById('email_error').style.color="#f00";
        document.getElementById('email').focus();
        document.getElementById('email_error').innerHTML="Please enter a valid Email";
        return false;
        }
        
      }
      
      if(document.getElementById("phone").value=="")
        {
          document.getElementById("phone").style.border="1px solid red";
          document.getElementById("phone_error").style.color="#f00";
          document.getElementById("phone").focus();
          document.getElementById("phone_error").innerHTML="Mobile is Required";
          return false;
        }
        else
        {
          var phone=document.getElementById("phone").value;
          var mpat=/^\d{10}$/;
          if(!mpat.test(phone))
          {
            document.getElementById("phone").style.border="1px solid red";
          document.getElementById("phone_error").style.color="#f00";
          document.getElementById("phone").focus();
          document.getElementById("phone_error").innerHTML="Please Enter a Valid 10 Digit Mobile Number";
          return false;
          }
        }

        if(document.getElementById('state').value=="")
      {
        document.getElementById('state').style.border="1px solid red";
        document.getElementById('state_error').style.color="#f00";
        document.getElementById('state').focus();
        document.getElementById('state_error').innerHTML="State is required";
        return false; 
      }
    }
   function checkValue(ele)
    {
      if(ele.value!="")
      {
        ele.style.border="1px solid #999";
        document.getElementById(ele.id+"_error").innerHTML="";
      }
    }
   
    </script>
       
 
</head>
<body style="background-image: url('img/about-bg.jpg');">
<br><br><br><br><br>

    <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <!-- <h1><a href="#intro" class="scrollto">BizPage</a></h1> -->
        <a href="index.php">
          <img src="img/logo 9.png" alt="" title="" style="width: 167px;">
        </a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
         <li class="menu-active"><a href="digital-consulting.php">Digital Consulting</a></li>
          <li><a href="knowledge-hub.php">Knowledge Hub</a></li>
          <li><a href="training.php">Training & Tutorial</a></li>
          <li><a href="be-more-with-us.php">Be More With Us</a></li>
         
       
          <!--<li><a href="#facts">Digital Campaign</a></li>
          <li><a href="#">Get Hired</a></li>-->
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--page content-->
   
      <!--Database connection-->
        <?php include('server.php');?>

      <div class="container">

        <div class="container text-center">
          <h3 style="color:#021c39;"><b>GET IN TOUCH WITH US.</b></h3>
          <h6 style="color:#021c39;"><b> We could meet up to discuss Business over Coffee.</b></h6>
        </div>
      
        
        
     
          <div class="form">
          <form action="" method="post" role="form" class="form-horizontal" onsubmit="return regValidation()" >
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name"  onblur="checkValue(this)" class="form-control" id="name" data-rule="minlen:4" placeholder="Your Name"  />
                <span id="name_error" style="color:red;"></span>
              
              </div>
              <div class="form-group col-md-6">
                <input type="email" onblur="checkValue(this)" class="form-control" name="email" id="email" placeholder="Your Email" />
                <span id="email_error" style="color:red;"></span>
 
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="number" name="phone"  onblur="checkValue(this)" class="form-control" id="phone"  placeholder="Your Phone "  />
                <span id="phone_error" style="color:red;"></span>
              
              </div>
              <div class="form-group col-md-6">
                <select name="state" class="browser-default custom-select">
                  <option disabled selected value="Select State">&nbsp;&nbsp;&nbsp;&nbsp;Select State</option>
                  <option value="Andra Pradesh">Andra Pradesh</option>
                  <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                  <option value="Assam">Assam</option>
                  <option value="Bihar">Bihar</option>
                  <option value="Chhattisgarh">Chhattisgarh</option>
                  <option value="Goa">Goa</option>
                  <option value="Gujarat">Gujarat</option>
                  <option value="Haryana">Haryana</option>
                  <option value="Himachal Pradesh">Himachal Pradesh</option>
                  <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                  <option value="Jharkhand">Jharkhand</option>
                  <option value="Karnataka">Karnataka</option>
                  <option value="Kerala">Kerala</option>
                  <option value="Madya Pradesh">Madya Pradesh</option>
                  <option value="Maharashtra">Maharashtra</option>
                  <option value="Manipur">Manipur</option>
                  <option value="Meghalaya">Meghalaya</option>
                  <option value="Mizoram">Mizoram</option>
                  <option value="Nagaland">Nagaland</option>
                  <option value="Orissa">Orissa</option>
                  <option value="Punjab">Punjab</option>
                  <option value="Rajasthan">Rajasthan</option>
                  <option value="Sikkim">Sikkim</option>
                  <option value="Tamil Nadu">Tamil Nadu</option>
                  <option value="Telangana">Telangana</option>
                  <option value="Tripura">Tripura</option>
                  <option value="Uttaranchal">Uttaranchal</option>
                  <option value="Uttar Pradesh">Uttar Pradesh</option>
                  <option value="West Bengal">West Bengal</option>

                </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <span id="state_error" style="color:red;"></span>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                <select name="services" class="browser-default custom-select">
                  <option disabled selected value="Services">&nbsp;&nbsp;&nbsp;&nbsp;Services</option>
                  <option value="Digital Campaign">Digital Campaign</option>
                  <option value="Research & Insights">Research & Insights</option>
                  <option value="Software & Development">Software & Development</option>
                </select>
                 <span id="services_error" style="color:red;"></span>
              </div>
              <div class="form-group col-md-6">
                <select name="time" class="browser-default custom-select">
                  <option disabled selected value="Best time to call">&nbsp;&nbsp;&nbsp;&nbsp;Best time to call</option>
                  <option value="12-1 PM">12-1 PM</option>
                  <option value="1-2 PM">1-2 PM</option>
                  <option value="2-3 PM">2-3 PM</option>
                  <option value="3-4 PM">3-4 PM</option>
                  <option value="4-5 PM">4-5 PM</option>
                  <option value="5-6 PM">5-6 PM</option>
                  <option value="6-7 PM">6-7 PM</option>
                  <option value="7-8 PM">7-8 PM</option>
                  <option value="8-9 PM">8-9 PM</option>
                  <option value="9-10 PM">9-10 PM</option>
                  <option value="10-11 PM">10-11 PM</option>
                  <option value="11-12 AM">11-12 AM</option>
                  <option value="12-1 AM">12-1 AM</option>
                  <option value="1-2 AM">1-2 AM</option>
                  <option value="2-3 AM">2-3 AM</option>
                  <option value="3-4 AM">3-4 AM</option>
                  <option value="4-5 AM">4-5 AM</option>
                  <option value="5-6 AM">5-6 AM</option>
                  <option value="6-7 AM">6-7 AM</option>
                  <option value="7-8 AM">7-8 AM</option>
                  <option value="8-9 AM">8-9 AM</option>
                  <option value="9-10 AM">9-10 AM</option>
                  <option value="10-11 AM">10-11 AM</option>
                  
                </select>
                 <span id="time_error" style="color:red;"></span>
              </div>
            </div>
              
            <div class="text-center">
              <button type="submit" name="submit" class="btn btn-info" onsubmit="regValidation();">Submit</button>
            </div>
          </form>
        </div>
     
    </div>
  <!--End Page content-->

<br><br><br><br>

   <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Free Training & Tutorial </h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Skill Oriented Tutorial</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Online Contest</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Corporate Training</a></li>
            </ul>
          </div>
      
      <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Why Superwave Media </h4>
      <p>
              Our Reach<br>
              Media Room<br>
            </p>
          </div>

            

            <div class="col-lg-3 col-md-6 footer-contact">
            <h4>For Political Candidates</h4>
            <p>
             Election Campaign Management <br>
             Political Leader Branding <br>
            </p>
            
      <h4>For Companies</h4>
            <p>
              Tech Development<br>
        Digital Marketing<br>
        Branding<br>
            </p>
      
          </div> 
      
       <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Reach Us </h4>
           
            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>  
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Superwave Media Pvt Ltd</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
</body>
</html>