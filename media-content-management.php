<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Media & Content Management</title>
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
          <img src="img/loooooogooooooo.png" alt="" title="" style="width: 167px;">
        </a>
      </div>

    
    
    

      <nav id="nav-menu-container">
        <ul class="nav-menu">
           <li ><a href="digital-consulting.php">Digital Consulting</a></li>
          <li><a href="digital-research.php">Digital Research</a></li>
          <li><a href="digital-marketing-training.php">Digital Marketing Training</a></li>
       <li class="menu-active"><a href="be-more-with-us.php">Be More With Us</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

<br><br>
<br>
<br>


   
    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Industry Research & Insight</h3>
          <p>We are not just a team of researchers but also a business
          strategic analysts who can understand and communicate that 
          data in a best possible manner that clients can understand and execute. </p>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
            <h4 class="title">Mobile Notifications</h4>
            <p class="description">Sending mobile users text notifications about promotions, sales, discounts, etc. is a great way to connect with your brand’s targeted audience and increase conversion rates. Offer your followers/customers an opt-in to a text subscription on your website—something along the lines of, “Enter your phone number to receive text announcements of special promotions, discounts, or events.”</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
            <h4 class="title">QR Code</h4>
            <p class="description">Many brands have found success by creating mobile barcodes (QR codes) or electronic coupons that can be physically scanned at the point of purchase when customers visit the brand in-store. These QR codes can be emailed to the customer to give them access to a discount or special offer. Similarly, QR codes could be made available in-store that allow customers to register for a contest or special giveaway when scanned.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title">Mobile Friendly Email Marketing</h4>
            <p class="description">Email marketing is an incredibly effective way to keep in touch with your customers or followers. To make your email marketing more mobile friendly, make sure that all links contained within the email are clickable and interactive. Links in email marketing are a great way to move consumers from the email to your brand’s website to help convert a customer interaction into a sale.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
            <h4 class="title">SMS Marketing</h4>
            <p class="description">SMS Marketing is a great way for your brand to instantly communicate with your customer. However, you must always get the customer’s consent before sending texts, and you must always offer them the ability to opt-out from receiving texts at any time.
Many big brands like Amazon are already using SMS marketing.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
            <h4 class="title">In Game Mobile Marketing</h4>
            <p class="description">Chances are you or someone you know has a mobile game on their phone. Gaming apps are so popular that it is estimated that will be 213 smartphone gamers by 2020. Even now, 78 percent of smartphone users say they use game apps daily, and spend an average of six and a half hours a week playing games.
This makes mobile ads an incredibly effective marketing tool. Ads can appear as banner pop-ups, full-page image ads, or even video ads that appear between loading screens. In game mobile ads are a great way to capture a consistent audience.
</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-people-outline"></i></div>
            <h4 class="title">Location Based Marketing</h4>
            <p class="description">Location based marketing can help ensure that you’re not wasting your mobile marketing budget on users who are outside of the geographic parameters of your service. For instance, if your business only serves customers in New York City, there’s no use in advertising to users in Los Angeles.
Using the mobile GPS feature, businesses and brands can send tailored messages to customers in a specific geographic area. You also can set a virtual perimeter around a store or business, and whenever a customer (who installed your brands app) enters the area, a message is triggered to their mobile device
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
        <h3>TURNING BRANDS INTO BUDDIES</h3>
        <p> Want to be our co-travellers in success. Let's meet over coffee.

 </p>
        <a class="cta-btn" href="form.php">Get Quotation</a>
      </div>
    </section><!-- #call-to-action -->

  
   
    <!--==========================
      Services Section
    ============================-->
   <!-- <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Services</h3>
          <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus, ad pro quaestio laboramus. Ei ubique vivendum pro. At ius nisl accusam lorenta zanos paradigno tridexa panatarel.</p>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
            <h4 class="title">Lorem Ipsum</h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
            <h4 class="title">Dolor Sitema</h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title">Sed ut perspiciatis</h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
            <h4 class="title">Magni Dolores</h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
            <h4 class="title">Nemo Enim</h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-people-outline"></i></div>
            <h4 class="title">Eiusmod Tempor</h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>

        </div>

      </div>
    </section><!-- #services -->-->

   
  
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
    </section>-->
    <!-- #clients -->

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
            <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
            <h3>lorem ipsum</h3>
            <h4>sit &amp; emet</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
            <h3>lorem ipsum </h3>
            <h4>dolor</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
            <h3>lorem ipsum</h3>
            <h4>dolor</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-4.jpg" class="testimonial-img" alt="">
            <h3>lorem ipsum</h3>
            <h4>dolor</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-5.jpg" class="testimonial-img" alt="">
            <h3>lorem ipsum</h3>
            <h4>sit emet</h4>
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
   <!-- <section id="team">
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
                  <h4>Lorem ipsum</h4>
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

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team_3.png" class="img-fluid" alt="">
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

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team_1.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>lorem ipsum</h4>
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
    </section><!-- #team -->-->

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
              <address> ORCHID Building,<br> Bariatu 3rd-floor, oppo-RIIMS.<br> Ranchi- 834009,Jharkhand</address>
            </div>
          </div>
      
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
