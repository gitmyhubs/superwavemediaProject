<?php 
  $result="";

  if(isset($_POST['enroll']))
  {
    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;

    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->Username='ashiash382@gmail.com';
    $mail->Password='superashi@9191';
    $mail->setFrom($_POST['email'],$_POST['fname']);
    $mail->addAddress('ashiash382@gmail.com');
    $mail->addReplyTo($_POST['email'],$_POST['fname']);

    $mail->isHTML(true);
    $mail->Subject='Form Submission: '.$_POST['subject'];
    $mail->Body='<h1 align=center>Name :'.$_POST['fname'].'<br>Email :'.$_POST['email'].'<br>Phone :'.$_POST['phone'].'</h1>';

    if(!$mail->send()){
      $result="Something went wrong. Please try again.";
    }
    else
    {
      $result="Thanks".$_POST['fname']."for contacting us. We'll get back to you soon!";
    } 
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Join Now</title>
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

 <!--JS City State-->
<script src="cities.js"></script>

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
  <!--Form validation-->
    <script type="text/javascript">
        
      function regValidation()
    {
      if(document.getElementById('fname').value=="")
      {
        document.getElementById('fname').style.border="1px solid red";
        document.getElementById('fname_error').style.color="#f00";
        document.getElementById('fname').focus();
        document.getElementById('fname_error').innerHTML="First Name is required";
        return false; 
      }
      if(document.getElementById('lname').value=="")
      {
        document.getElementById('lname').style.border="1px solid red";
        document.getElementById('lname_error').style.color="#f00";
        document.getElementById('lname').focus();
        document.getElementById('lname_error').innerHTML="Last Name is required";
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
       if(document.getElementById('profession').value=="")
      {
        document.getElementById('profession').style.border="1px solid red";
        document.getElementById('profession_error').style.color="#f00";
        document.getElementById('profession').focus();
        document.getElementById('profession_error').innerHTML="State is required";
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
<body style="background-image: url('img/Digital Marketing123.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;
                        background-attachment: fixed;">
<br><br><br><br><br>
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
         <li class="menu-active"><a href="digital-consulting.php">Digital Consulting</a></li>
          <li><a href="digital-research.php">Digital Research</a></li>
          <li><a href="digital-marketing-training.php">Digital Marketing Training</a></li>
          <li><a href="be-more-with-us.php">Be More With Us</a></li>
         
          <!--<li><a href="#facts">Digital Campaign</a></li>
          <li><a href="#">Get Hired</a></li>-->
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--page content-->
  
    <!--Database connection-->
      
      <div class="container">
        <div class="row">
      <div class="container text-left">
        <h3 style="color:#fff;"><b>Enroll Today</b></h3>
        <h6 style="color:#fff;"><b>Don't Wait to Realize your Career potential Become an In - Digital Marketer</b></h6>
      </div>
        
        <div class="col-md-8">
          <div class="form">
            <h5 class="text-center text-success"><?= $result; ?></h5>
        <form action="" method="post" role="form" class="form-horizontal" onsubmit="return regValidation()" >
            <div class="form-row">
              <div class="form-group col-md-10">
                <input type="text" name="fname"  onblur="checkValue(this)" class="form-control" id="fname" data-rule="minlen:4" placeholder="First Name"  />
                <span id="fname_error" style="color:red;"></span>
              
              </div>
               <div class="form-group col-md-10">
                <input type="text" name="lname"  onblur="checkValue(this)" class="form-control" id="lname" data-rule="minlen:4" placeholder="Last Name"  />
                <span id="lname_error" style="color:red;"></span>
              
              </div>

              <div class="form-group col-md-10">
                <input type="email" onblur="checkValue(this)" class="form-control" name="email" id="email" placeholder="Your Email" />
                <span id="email_error" style="color:red;"></span>
 
              </div>

              <div class="form-group col-md-10">
                <input type="number" name="phone"  onblur="checkValue(this)" class="form-control" id="phone"  placeholder="Your Phone "  />
                <span id="phone_error" style="color:red;"></span>
              
              </div>
            </div>
                <div class="form-row"> 
                  <div class="form-group col-md-5">
                      <select onchange="print_city('state', this.selectedIndex);" id="sts" name="state" class="form-control" required></select>
                  </div>
                  <div class="form-group col-md-5">
                      <select id ="state" name="city" class="form-control" required></select>
                  </div>
                      <script language="javascript">print_state("sts");</script>
                </div>
               
            <div class="text-left"><button type="submit" name="enroll" id="enroll" class="btn btn-info" onsubmit="regValidation();">Submit</button></div>
                   
          </form>       
          </div>
      </div>
        <div class="col-md-4">
        <!--  <img src="img/420x339.png" style="margin-top: -30px; margin-left: -25px;">-->
              
        </div>

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
            <h4>Training & Tutorial </h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="digital-marketing-training.php">Online Digital Marketing Training</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="digital-marketing-training.php">Offline Digital Marketing Training</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="digital-marketing-training.php">Classroom-Program</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="digital-marketing-training.php">Institution-Tie-up Criteria</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="digital-marketing-training.php">Corporate-Tie-up Criteria</a></li>
            </ul>
          </div>
		  
		  <div class="col-lg-3 col-md-6 footer-links">
            <h4>Be More With Us </h4>
             <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="digital-consulting.php">Digital Consulting</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="digital-marketing-training.php">Digital Audit </a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="digital-pr.php">Digital PR</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="digital-marketing-training.php">Digital Marketing</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="be-more-with-us.php">Openings</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="digital-marketing-training.php">Trainings</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="be-more-with-us.php">Freelancer</a></li>
            </ul>
          </div>

            

            <div class="col-lg-3 col-md-6 footer-links">
            <h4>For Indivisuals</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="digital-pr.php">Digital-PR</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="index.php">Online Reputaion Management </a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="index.php">Election Campaign Management</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="index.php">Political Leader Branding</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="index.php">Celebrity Online Reputation Management</a></li>
             
            </ul>
            
			
			
          </div>
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>For Organisation</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="digital-marketing-training.php">Digital Marketing</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="digital-marketing-training.php">Digital Branding </a></li>
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