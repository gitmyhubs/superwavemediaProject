<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Superwave Media</title>
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

  <!--message chat box-->
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
  <!--end message chat box-->

</head>
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
         <li class="menu-active"><a href="digital-consulting.php">Digital Consulting</a></li>
          <li><a href="knowledge-hub.php">Knowledge Hub</a></li>
          <li><a href="training.php">Training & Tutorial</a></li>
          <li><a href="be-more-with-us.php">Be More With Us</a></li>
		   
		     
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url('img/intro-carousel/1.jpg');">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2> We're the expert & love to show it!</h2>
                <p>Coming up with fresh,unique & innovative digital solutions,that’s what we are great at.</p>
                
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url('img/intro-carousel/2.jpg');">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>An amalgamation of ideation and execution</h2>
                <p>We have inculcated our skills as well as quality while working with number of industry leaders which enhance our expertise.</p>
               
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url('img/intro-carousel/3.jpg');">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Ideas that adapt, evolve & revolutionize</h2>
                <p>We create elevating experiences for the people we touch and significantly impact the world we work in.</p>
				        <a href="#featured-services" class="btn-get-started scrollto">Want to client of us?</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url('img/intro-carousel/4.jpg');">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Lorem ipsum dolor sit emet.</h2>
                <p>Lorem ipsum dolor sit emet di lorem ipsum lala hastle</p>
                <a href="#featured-services" class="btn-get-started scrollto">Want to client of us?</a>
              </div>
            </div>
          </div>
		  
        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

   
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
             <b> We are ever ready to adapt to new changes with a Aim to respond to our clients needs and improve them them Relentlessly.</b>

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
                <b>To provide our clients with wide-ranging secured and finest branding solution to achieve Sustainable Growth.</b>
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
             <b>We want to earn and be worthy of our customer’s trust and to create pragmatic moment and word of mouth around the globe.</b>
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
          <h3>HERE'S HOW WE DO THE THINGS THAT WE LOVE TO DO <br></h3>
         
        </header>
<br>
<br>
        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
            <h4 class="title">INDUSTRY RESEARCH & INSIGHT</h4>
            <p class="description">We are not just a team of researchers but also a business strategic analysts who can understand and communicate that data in a best possible manner that clients can understand and execute. <br><a href="industry-research-insight.php"><b> Read More</b></a></p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title">SMART PHONE CAMPAIGN</h4>
            <p class="description">We'll help you to develop mobile strategy that will take your business idea from conceptualization to a well-develop application. <br><a href="smart-phone-campaign.php"><b> Read More</b></a>
            </p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
            <h4 class="title">DESIGN & DEVELOPMENT</h4>
            <p class="description">We evolve a brand naturally over a time and focus on providing value to the customers to get cleared over messages. <br> <a href="design-development.php"><b> Read More</b></a></p>
          </div>
          
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
            <h4 class="title">TRAINING & TUTORIAL</h4>
            <p class="description">In this service we give 3-4 recommendation daily with the accuracy and which drive them to profit.
			<br><a href="training-tutorial.php"><b> Read More</b></a>
			</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
            <h4 class="title">DIGITAL PR</h4>
            <p class="description">We will work with you to publicize your Industry with Advanced marketing strategy and right Business practices. 
			<br><a href="digital-pr.php"><b> Read More</b></a>
			</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-people-outline"></i></div>
            <h4 class="title">MEDIA & CONTENT MANAGEMENT</h4>
            <p class="description">In this service we provide you with stock tips with good number of accuracy which drives them to profit.
			<br><a href="media-content-management.php"><b> Read More</b></a>
		</p>
          </div>
		  
		 
        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Call To Action Section
    ============================-->
    <!--
	<section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>IT's TIME TO EXPLORE YOUR BRAND !</h3>
        <p> We are availave 24 x 7 to solve all your queries. Feel free to reach us anytime.</p>
        <a class="cta-btn" href="#">Reach Us</a>
      </div>
    </section>-->
	
	<!-- #call-to-action -->

    <!--==========================
      Skills Section
    ============================-->
    <section id="skills">
      <div class="container">

        <header class="section-header">
          <h3>Past Performance</h3>
          <p>Over the years, the impact of superwave media Pvt Ltd  operations and interactions with clients has drastically changed with the advent of digital transformation profound not only in terms of marking our lives easier but also in terms of approach to the wauy we carry out our tasks, solve problems and reslove issues.
		 </p>
        </header>

        <div class="skills-content">

          <div class="progress">
		   <!--==========================
       //  bg-success
	   // bg-warning
	   // bg-danger
    ============================-->
		 
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Lok Sabha<i class="val">24%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Jharkhand <i class="val">91%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Bihar<i class="val">63%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">West Bengal<i class="val">54%</i></span>
            </div>
          </div>
		  
		  <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Rajasthan<i class="val">15%</i></span>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!--==========================
      Facts Section
    ============================-->
    <section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
          <h3>Facts</h3>
          <p>We are the expertise & love to show it : we are serving hundreds of our clients which includes MLAs & MPS candidates belongs to various regional & National parties of India.</p>
        </header>

        <div class="row counters">

  				<div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">3000</span>
            <p>Clients</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">350</span>
            <p>Our team</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">150</span>
            <p>Campaigns Managed</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">5000</span>
            <p>Projects Delivered</p>
  				</div>

  			</div>

      

      </div>
    </section><!-- #facts -->

    <!--==========================
 Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>GET IN TOUCH WITH US.</h3>
        <p> We could meet up to discuss Business over Coffee.


 </p>
        <a class="cta-btn" href="form.php">Get Quotation</a>
      </div>
    </section><!-- #call-to-action -->
    <!--==========================
      Clients Section
    ============================-->
	
   <!-- #clients -->
		
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
              <img src="img/2.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Our goal is to transform data into information <br>& informations into insights</h4>
                  
                 <!-- <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>-->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/1.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>We have strategy which remains<br>an ILLUSION </h4>
                 <!-- <span></span>-->
                  <!--<div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>-->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/3.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>We don't wait for opportunity we have pool of<br> people to go after it</h4>
                  <!--<span></span>-->
                 <!-- <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>-->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/4.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Turning brand into <br>Buddies </h4>
                 
                 <!-- <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>-->
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Our Clients</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="img/clients/pmc1.png" alt="">
          <img src="img/clients/congress.png" alt="">
          <img src="img/clients/audi.png" alt="">
          <img src="img/clients/bmw.png" alt="">
          <img src="img/clients/ola.png" alt="">
          <img src="img/clients/rmc.png" alt="">
          <img src="img/clients/tmc.png" alt="">
          <img src="img/clients/volks.png" alt="">
          <img src="img/clients/hyundai.png" alt="">
          <img src="img/clients/gmc.png" alt="">
        </div>

      </div>
    </section><!-- #clients -->

   
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
              <address> Orchid Building,<br> Bariatu 3rd-floor, opp.RIIMS.<br> Ranchi- 834009,Jharkhand</address>
            </div>
          </div>
		  
        </div>
			
			
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
              <li><i class="ion-ios-arrow-right"></i> <a href="form-sent.php">Online Digital Marketing Training</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="form-sent.php">Offline Digital Marketing Training</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="form-sent.php">Classroom-Program</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="form-sent.php">Institution-Tie-up Criteria</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="form-sent.php">Corporate-Tie-up Criteria</a></li>
            </ul>
          </div>
		  
		  <div class="col-lg-3 col-md-6 footer-links">
            <h4>Be More With Us </h4>
             <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="form-sent.php">Digital Consulting</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="form-sent.php">Digital Audit </a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="form-sent.php">Digital PR</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="form-sent.php">Digital Marketing</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="form-sent.php">Opnings</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="form-sent.php">Trainings</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="form-sent.php">Freelancer</a></li>
            </ul>
          </div>

            

            <div class="col-lg-3 col-md-6 footer-links">
            <h4>For Indivisuals</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="form-sent.php">Digital-PR</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="form-sent.php">Online Reputaion Management </a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="form-sent.php">Election Campaign Management</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="form-sent.php">Political Leader Branding</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="form-sent.php">Celebrity Online Reputation Management</a></li>
             
            </ul>
            
			
			
          </div>
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>For Organisation</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="form-sent.php">Digital Marketing</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="form-sent.php">Digital Branding </a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="form-sent.php">Digital-PR</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="form-sent.php">Digital Research </a></li>
              
             
             
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

<!--Message Popup-->
     
    <!-- /MessengerPopup template -->

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
