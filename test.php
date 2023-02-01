<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Superwave Media [Pvt. Ltd]</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="Superwave, ">
  <meta content="" name="That combining art of marketing with science of digital.">

  <!-- Favicons -->
  <!--<link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">-->

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
          <li><a href="digital-research.php">Digital Research</a></li>
          <li><a href="digital-marketing-training.php">Digital Marketing Training</a></li>
          <li><a href="be-more-with-us.php">Be More With Us</a></li>
       
          <!--<li><a href="#facts">Digital Campaign</a></li>
          <li><a href="#">Get Hired</a></li>-->
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
                <h2> We're the experts & love to show it!</h2>
                <p>Coming up with fresh,unique & innovative digital solutions,that’s what we are great at.</p>
                    <a href="#featured-services" class="btn-get-started scrollto">Be Our Co-Travelers in Success</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url('img/intro-carousel/2.jpg');">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>An amalgamation of ideation and execution</h2>
                <p>We have inculcated our skills as well as quality while working with number of industry leaders which enhance our expertise.</p>
                     <a href="#featured-services" class="btn-get-started scrollto">Be Our Co-Travelers in Success</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url('img/intro-carousel/3.jpg');">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Ideas that adapt, evolve & revolutionize</h2>
                <p>We create elevating experiences for the people we touch and significantly impact the world we work in.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Be Our Co-Travelers in Success</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url('img/intro-carousel/4.jpg');">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Create a great digital transformation</h2>
                <p>We turn your ideas into reality for success</p>
                <a href="#featured-services" class="btn-get-started scrollto">Be Our Co-Travelers in Success</a>
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
          <h3>Combining the art of marketing with the Science of Digital</h3>
          <p>Superwave Media [Pvt.Ltd] was formed in  early <b>2016</b>. Superwave media  started primarily as a consulting company providing consultancy services in the field of Political & IT industry.
          It been the period may  2016  till date, that we analyze the Market trends, response, dynamism and got a bird-eye view of the functionalities of the industry & developed a keen eye for the various gaps-read opportunities for <b>Digital Consulting  & Implementation of Government Policies</b> . 
          It was in early 2018 that Superwave media moved on from consultancy & started operating as an independent business entity with its own operations for upcoming <b>Digital Era</b>. 
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
               <b> To provide our clients with wide-ranging secured and finest branding solution to achieve Sustainable Growth.</b>
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
             <b> We want to earn and be worthy of our customer’s trust and to create pragmatic moment around the globe.</b>
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
          <h3>Here's how we do the things that we love to do  <br></h3>
         
        </header>
<br>
<br>
        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
            <h4 class="title">INDUSTRY RESEARCH & INSIGHT</h4>
            <p class="description">We are not just a team of researchers but also a business strategic analysts who can understand and communicate that data in a best possible
                                    manner that clients can understand and execute.  <br> <a href="industry-research-insight.php">Read More</a></p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
            <h4 class="title">DESIGN & DEVELOPMENT</h4>
            <p class="description">We evolve a brand naturally over a time and focus on providing value to the customers to get cleared over messages.<br> <a href="">Read More</a></p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title">SMART PHONE CAMPAIGN</h4>
            <p class="description">We'll help you to develop mobile strategy that will take your business idea from conceptualization to a well-develop application.
              <br><a href="">Read More</a>
            </p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
            <h4 class="title">TRAINING & TUTORIAL</h4>
            <p class="description">In this service we give 3-4 recmmendation daily with the accuracy and which drive them to profit.<br> <a href="">Read More</a>
    
      </p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
            <h4 class="title">DIGITAL PR</h4>
            <p class="description">We will work with you to publicize your Industry with Advanced marketing strategy and right Business practices.<br> <a href="">Read More</a>
      
      </p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-people-outline"></i></div>
            <h4 class="title">MEDIA & CONTENT MANAGEMENT</h4>
            <p class="description">In this service we provide you with stock tips with good number of accuracy which drives them to profit.<br> <a href="">Read More</a>
      
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
          <p>Over the years, the impact of superwave media Pvt Ltd  
          operations and interactions with clients has drastically changed with the
          advent of digital transformation profound not only in terms of marking our 
          lives easier but also in terms of approach to the way we carry out our tasks, solve problems and resolve issues.
     </p>
        </header>

        <div class="skills-content">

          <div class="progress">
       <!--==========================
       //  bg-success
     // bg-warning
     // bg-danger
    ============================-->
     
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Political Consulting<i class="val">93%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Technology Implementation<i class="val">84%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Digital Consulting<i class="val">87%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Research & Survey<i class="val">69%</i></span>
            </div>
          </div>
      
      <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Design & Development<i class="val">78%</i></span>
            </div>
          </div>
          
           <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="96" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Movie Branding & Promotion<i class="val">96%</i></span>
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
          <h3>Why Superwave Media</h3>
          <p>We eat, drink and breathe <b>Digital Media</b>!
            It’s not our job; it’s our lifestyle. Creating unique experiences for
           brands using our expertise in survey, research, digital advertising, election management, <b>Smartphone Mobilization</b>, skill oriented training & digital activation events is our forte;
           and this is what makes us one of the best agencies in the <b>Eastern India</b>. </p>
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
            <span data-toggle="counter-up">219</span>
            <p>Digital Campaigns Managed</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">21</span>
            <p>Nations</p>
          </div>

        </div>

      

      </div>
    </section><!-- #facts -->

    <!--==========================
 Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
        <div class="container text-center">
        <h3>TURNING BRANDS INTO BUDDIES</h3>
        <p> Want to be our co-travellers in success. Let's meet over coffee.


 </p>
        <a class="cta-btn" href="form.php">Get Quotation </a>
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
          <h3>OUR EXPERTISE LIES IN EXCELLENCE</h3>
        
          <p>We do this through a pioneering spirit and a caring, value-driven culture that fosters innovation, drives performance and 
    ensures the highest global standards in everything we do.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/website_research.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Our goal is to transform data into information <br>& informations into insights</h4>
                  <!--<span>lorem ipsum dolor</span>-->
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

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/website_strategy_2.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>We have strategy which remains<br>an ILLUSION</h4>
                  <!--<span>lorem ipsum dolor</span>-->
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

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/website_technology1.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>We don't wait for opportunity we have pool of<br> people to go after it</h4>
                 <!-- <span>lorem ipsum dolor</span>-->
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
              <img src="img/website_creativity1234.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Turning brand into <br>Buddies</h4>
                  <!--<span>dolor</span>-->
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

        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Meet Our Co-Travellers in Success</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="img/clients/bjp12.png" alt="">
          <img src="img/clients/cng12.png" alt="">
          <img src="img/clients/audi12.png" alt="">
          <img src="img/clients/bmw12.png" alt="">
          <img src="img/clients/ola12.png" alt="">
          <img src="img/clients/rmc12.png" alt="">
          <img src="img/clients/tmc12.png" alt="">
          <img src="img/clients/vw12.png" alt="">
           <img src="img/clients/hyundai12.png" alt="">
            <img src="img/clients/ss12.png" alt="">
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
              <p><a href="mailto:info@superwavemedia.com">info@superwavemedia.com</a></p>
        
            </div>
  
          </div>

       <div class="col-md-4">
            
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Regional Office</h3>
              <address> Orchid Building,<br> Bariatu 3rd-floor, opp. RIIMS.<br> Ranchi- 834009,Jharkhand</address>
            </div>
          </div>
      
        </div>
      
      

        <div class="form">
          
         
          <form action="" method="post" role="form" class="contactForm" onsubmit="return regValidation()" >
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
              <input type="number" onblur="checkValue(this)" class="form-control" name="mobile" id="mobile" placeholder="mobile"  />
              <span id="mobile_error" style="color:red;"></span>
              
            </div>
            
            <div class="form-group col-md-6">
                <select class="browser-default custom-select">
                  <option disabled selected>&nbsp;&nbsp;&nbsp;&nbsp;--Select State--</option>
                  <option>Andra Pradesh</option>
                  <option>Arunachal Pradesh</option>
                  <option>Assam</option>
                  <option>Bihar</option>
                  <option>Chhattisgarh</option>
                  <option>Goa</option>
                  <option>Gujarat</option>
                  <option>Haryana</option>
                  <option>Himachal Pradesh</option>
                  <option>Jammu and Kashmir</option>
                  <option>Jharkhand</option>
                  <option>Karnataka</option>
                  <option>Kerala</option>
                  <option>Madya Pradesh</option>
                  <option>Maharashtra</option>
                  <option>Manipur</option>
                  <option>Meghalaya</option>
                  <option>Mizoram</option>
                  <option>Nagaland</option>
                  <option>Orissa</option>
                  <option>Punjab</option>
                  <option>Rajasthan</option>
                  <option>Sikkim</option>
                  <option>Tamil Nadu</option>
                  <option>Telangana</option>
                  <option>Tripura</option>
                  <option>Uttaranchal</option>
                  <option>Uttar Pradesh</option>
                  <option>West Bengal</option>

                </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
            </div>
            <div class="form-group col-md-6">
                <select class="browser-default custom-select">
                  <option disabled selected>&nbsp;&nbsp;&nbsp;&nbsp;--Services--</option>
                  <option>Digital Campaign</option>
                  <option>Research & Insights</option>
                  <option>Software & Development</option>
                  
                </select>
            </div>
            </div>
            <div class="text-center"><button type="submit" name="register" onsubmit="regValidation();">Send Message</button></div>
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
