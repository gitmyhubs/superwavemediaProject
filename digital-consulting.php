
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Digital Consulting</title>
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

<br><br>
<br>
<br>

        <?php include('server.php');?>
   
        <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>About Us</h3>
          <p>SuperWave Media [P.LTD] was formed in  early 2016. Superwave media  started primarily as a consultancy company providing consultancy services in the field of Political & IT industry. It been the period may  2016  till date, that we analyze the Market trends, response, and dynamism & got a bird-eye view of the functionalities of the industry & developed a keen eye for the various gaps-read opportunities for political consulting  & implementation of government policies . It was in early 2018 that Superwave media moved on from consultancy & started operating as an independent business entity with its own operations for upcoming Digital India. 
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="img/about-mission.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title">We Believe</h2>
              <p>
                We are ever ready to adapt to new changes with a Aim to respond to our clients needs and improve them them Relentlessly.


              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-plan.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title">Our Mission</h2>
              <p>
                To provide our clients with wide-ranging secured and finest branding solution to achieve Sustainable Growth.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-vision.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title">Our Goals</h2>
              <p>
              We want to earn and be worthy of our customer’s trust and to create pragmatic moment and word of mouth around the globe.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>We Offer <br></h3>
         
        </header>
<br>
<br>
        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
            <h4 class="title">STRATEGIC INSIGHTS</h4>
            <p class="description">In this service we provide you with stock tips with good number of accuracy which drives them to profit. <br></p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
            <h4 class="title">BRAND VISIBILITY</h4>
            <p class="description">This services is for the traders who trade in stock futures. we will provide you intraday calls on stock futures. <br> </p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title">SMART PHONE CAMPAIGN</h4>
            <p class="description">In this service we provide you with stock tips with good number of accuracy which drives them to profit.<br> 
</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
            <h4 class="title">EXPERTISE TRAINING</h4>
            <p class="description">In this service we give 3-4 recmmendation daily with the accuracy and which drive them to profit.
      <br></p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
            <h4 class="title">SKILLS DEVELOPMENT</h4>
            <p class="description">In this service we give 3-4 recommendation weekly with the good percents of accuracy nifty future .
      <br>
</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-people-outline"></i></div>
            <h4 class="title">ELECTION MANAGEMENT</h4>
            <p class="description">In this service we provide you with stock tips with good number of accuracy which drives them to profit.
      <br>
</p>
          </div>
      
     
        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
 Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>OUR EXPERTISE LIES IN EXCELLENCE</h3>
        <p> We do this through a pioneering spirit and a caring, value-driven culture that fosters innovation, drives performance and 
    ensures the highest global standards in everything we do.


 </p>
        <a class="cta-btn" href="https://play.google.com/store/apps/details?id=com.superwave.i7.frontpage">Register Here</a>
      </div>
    </section><!-- #call-to-action -->

  
    <!--==========================
      Clients Section
    ============================-->
    <!--
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Our Clients</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="img/clients/client-1.png" alt="">
          <img src="img/clients/client-2.png" alt="">
          <img src="img/clients/client-3.png" alt="">
          <img src="img/clients/client-4.png" alt="">
          <img src="img/clients/client-5.png" alt="">
          <img src="img/clients/client-6.png" alt="">
          <img src="img/clients/client-7.png" alt="">
          <img src="img/clients/client-8.png" alt="">
        </div>

      </div>
    </section>
  --><!-- #clients -->

    <!--==========================
      Clients Section
    ============================-->
    <!--<section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="#" class="testimonial-img" alt="">
            <h3>Lorem ipsum</h3>
            <h4>Sit &amp; Emet</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="#" class="testimonial-img" alt="">
            <h3>Lorem ipsum</h3>
            <h4>Dolor</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="#" class="testimonial-img" alt="">
            <h3>Lorem ipsum</h3>
            <h4>dolor sit </h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="#" class="testimonial-img" alt="">
            <h3>Lorem ipsum</h3>
            <h4>dolor</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="#" class="testimonial-img" alt="">
            <h3>Lorem ipsum</h3>
            <h4>Sit emet</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

        </div>

      </div>
    </section>--><!-- #testimonials -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Team</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/team_1.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Lorem ipsum </h4>
                  <span>sit emet dolor</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/team_2.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Lorem ipsum</h4>
                  <span>sit emet</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team_3.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Lorem ipsum</h4>
                  <span>dolor</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team_1.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Lorem ipsum</h4>
                  <span>sit emet</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #team -->

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
              <p><a href="mailto:Info@superwavemedia.com">Info@superwavemedia.com</a></p>
        
            </div>
  
          </div>

       <div class="col-md-4">
            
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Regional Office</h3>
             <address> ORCHID Building,<br> Bariatu 3rd-floor, oppo-RIIMS.<br> Ranchi- 834009,Jharkhand</address>
            </div>
          </div>
      
        </div>
        
        <!--Database Connection-->
        
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
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Contact Us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Blog</a></li>
            </ul>
          </div>
		  
		  <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Why Indiginus</h4>
			<p>
              Experts<br>
              Testimonials<br>
            </p>
          </div>

            

            <div class="col-lg-3 col-md-6 footer-contact">
            <h4>For Individuals</h4>
            <p>
              Digital for Retail Professional<br>
              Digital for Finance Professional<br>
            </p>
            
			<h4>For Companies</h4>
            <p>
              The Indiginus Advantage<br>
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
       <!-- A  <a href="http://www.gsfaccelerator.com/">GSF ACCELERATOR </a> PRODUCT.-->
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
