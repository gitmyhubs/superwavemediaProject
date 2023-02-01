<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Digital Marketing Training</title>
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
  function regValidation(){
    if(document.getElementById('name').value=="")
      {
        document.getElementById('name').style.border="1px solid red";
        document.getElementById('name_error').style.color="#f00";
        document.getElementById('name').focus();
        document.getElementById('name_error').innerHTML="Name is required";
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
      if(document.getElementById('subject').value=="")
      {
        document.getElementById('subject').style.border="1px solid red";
        document.getElementById('subject_error').style.color="#f00";
        document.getElementById('subject').focus();
        document.getElementById('subject_error').innerHTML="Subject is required";
        return false; 
      }
      if(document.getElementById('message').value=="")
      {
        document.getElementById('message').style.border="1px solid red";
        document.getElementById('message_error').style.color="#f00";
        document.getElementById('message').focus();
        document.getElementById('message_error').innerHTML="Subject is required";
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
 <!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+91 91133 29493", // WhatsApp number
            call: "+91 91133 29493", // Call phone number
            call_to_action: "Get in Touch", // Call to action
            button_color: "#28E1E1", // Color of button
            position: "left", // Position may be 'right' or 'left'
            order: "whatsapp,call", // Order of buttons
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->

</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <!-- <h1><a href="#intro" class="scrollto">BizPage</a></h1> -->
        <a href="index.php">
          <img src="img/loooooogooooooo.png" alt="" title="" style="width: 167px;">
        </a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
            <li><a href="digital-consulting.php">Digital Consulting</a></li>
          <li><a href="digital-research.php">Digital Research</a></li>
          <li class="menu-active"><a href="digital-marketing-training.php">Digital Marketing Training</a></li>
          <li><a href="be-more-with-us.php">Be More With Us</a></li>
      
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

<br><br>
    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Digital Marketing Training</h3>
          <p>There is paradigm shift to digital and Internet friendly Environment.
          People are absorbing more e-friendly platform Conveniently Everyday Industries and Bussines Environment. Basically are 
          begining to establish the Relevance of online presence and it is necessary that promotion and advertising section adjust Immediately modern
          circumstances as per Requirement and hire skilled personal in the field of digital marketing.
          Now with exposures of leading edge updated technologies and prepordence of digital marketing
          Companies are doing everything to match up to expectation and gainfully Excel. Digital Marketing gives equals opportunites to every business, a delivers 
          conversion which helps to generate better revenue. </p>
          
          <p>Digital Marketing helps in realizing a skilled professionalism. it caters to diverse Career opportunities giving chance to excel with flexible
          working procedure and provide a chance to exhibit its creativity. </p>
          
          <p><b>SUPERWAVE MEDIA is firm which also provide DIGITAL MARKETING TRAINING AND TUTORIALS. </b></p>
         
          <p>The Course Brochure you requested can be Downloaded here : <b><a href ="Digital Marketing.pdf">Download Pdf</a></b></p>
           </header>
      </div>
    </section><!-- #services -->
    <section>
     <center>
        <video width="500px" controls>
          <source src="video/digital-marketing-training.mp4" type="video/mp4">
        </video>
      </center> 
    </section>

    <!--==========================
 Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>OUR EXPERTISE LIES IN EXCELLENCE</h3>
        <p> We do this through a pioneering spirit and a caring, value-driven culture that fosters innovation, drives performance and 
    ensures the highest global standards in everything we do.


 </p>
        <a class="cta-btn" href="enrollment-form.php">Enroll Now</a>
      </div>
    </section><!-- #call-to-action -->

  
   
   
    <!--==========================
      Contact Section
    ============================-->
    


    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
          <p>Have any Query ? Want to get in touch with Us. We will get in with you. </p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Head Office</h3>
              <address>BI Centre<br> DH 109, Sector 62 BI ,Noida, Uttar Pradesh 201309</address>
            </div>
          
            
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+919113329493">+91 - 911 332 9493</a></p>
        <i class="ion-ios-email-outline"></i>
        <h3>Email</h3>
              <p><a href="mailto:info@superwavemedia.com">info@superwavemedia.com</a></p>
        
            </div>
  
          </div>

       <div class="col-md-4">
            
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Regional Office</h3>
              <address> ORCHID Building,<br> Bariatu 3rd-floor, opp. RIIMS.<br> Ranchi- 834009,Jharkhand</address>
            </div>
          </div>
      
        </div>
        
        <!--database connection-->  
        <?php include('server.php');?>
        
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
            <div class="form-group">
              <input type="text" onblur="checkValue(this)" class="form-control" name="subject" id="subject" placeholder="Subject"  />
              <span id="subject_error" style="color:red;"></span>
              
            </div>
            <div class="form-group">
              <textarea class="form-control" onblur="checkValue(this)" name="message" rows="5" placeholder="Message" /></textarea>
               <span id="message_error" style="color:red;"></span>
              
            </div>
            <div class="text-center"><button type="submit" name="register" onsubmit="regValidation();">Send Message</button></div>
          </form>
        </div>

      </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Training & Tutorial </h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="digital-marketing-training.php">Online Digital Marketing Training</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="digital-marketing-training.php">Offline Digital Marketing Training</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Classroom-Program</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Institution-Tie-up Criteria</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Corporate-Tie-up Criteria</a></li>
            </ul>
          </div>
      
      <div class="col-lg-3 col-md-6 footer-links">
            <h4>Be More With Us </h4>
             <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="digital-consulting.php">Digital Consulting</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Digital Audit </a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="digital-pr.php">Digital PR</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Digital Marketing</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Openings</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Trainings</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Freelancer</a></li>
            </ul>
          </div>

            <div class="col-lg-3 col-md-6 footer-links">
            <h4>For Indivisuals</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="digital-pr.php">Digital-PR</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Online Reputaion Management </a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Election Campaign Management</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Political Leader Branding</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Celebrity Online Reputation Management</a></li>
             
            </ul>
        
          </div>
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>For Organisation</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Digital Marketing</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Digital Branding </a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="digital-pr.php">Digital-PR</a></li>
               <li><i class="ion-ios-arrow-right"></i> <a href="digital-research.php">Digital Research </a></li>
             
            </ul>
            <br>
      <div>
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
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Superwave Media Pvt Ltd</strong>. All Rights Reserved
      </div>
      <div class="credits">
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
