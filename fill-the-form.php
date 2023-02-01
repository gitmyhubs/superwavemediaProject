<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>श्री ब्रह्मदेव प्रसाद जी से जुड़ने के लिए  </title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
 
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
  

  <script type="text/javascript">
        
      function regValidation()
    {
      if(document.getElementById('name').value=="")
      {
        document.getElementById('name').style.border="1px solid red";
        document.getElementById('name_error').style.color="#f00";
        document.getElementById('name').focus();
        document.getElementById('name_error').innerHTML="Name is required";
        return false; 
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

        if(document.getElementById('booth').value=="")
      {
        document.getElementById('booth').style.border="1px solid red";
        document.getElementById('booth_error').style.color="#f00";
        document.getElementById('booth').focus();
        document.getElementById('booth_error').innerHTML="State is required";
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
<body style="background-image: url('img/1920x1080_bdp_0.jpg');">
<br>


      <!--Database connection-->
      <?php 
        include('server.php');
      ?>
      <div class="container">
       
        
          <h3 style="color: #fff;">श्री ब्रह्मदेव प्रसाद जी से जुड़ने के लिए कृपया फॉर्म भरे</h3>
               <div>
                 <center><img src="img/398x528_bd_prasad_3.png" style="height: 300px;"  ></center> 
                </div>
                <br>
          
          <div class="form">

          <form action="" method="post" role="form" class="form-horizontal" onsubmit="return regValidation()" >
           

            
            <div class="form-row">
              <div class="form-group col-md-10">
               
                <input type="text" name="name"  onblur="checkValue(this)" class="form-control" id="name" data-rule="minlen:4" placeholder="Enter Your Name"  />
                <span id="name_error" style="color:red;"></span>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-10">
               
               <input type="number" name="phone"  onblur="checkValue(this)" class="form-control" id="phone"  placeholder="Enter Your Phone No. "  />
                <span id="phone_error" style="color:red;"></span>
              </div>
            </div>
             <div class="form-row">
              <div class="form-group col-md-10">
                
                <select name="booth" class="browser-default custom-select" required>
                  <span id="booth_error" style="color:red;"></span>
                  <option disabled selected value="Select Booth">&nbsp;&nbsp;&nbsp;&nbsp;Select Booth</option>

                <option value="bisharampur,Anganbari kendra jataro">bisharampur,Anganbari kendra jataro</option>
<option value="bisharampur,high school kandil">bisharampur,high school kandil</option>
<option value="bisharampur,kritim garbhandhan,kendra,dhabariya">bisharampur,kritim garbhandhan,kendra,dhabariya</option>
<option value="bisharampur,middle school kandil">bisharampur,middle school kandil</option>
<option value="bisharampur,primary school chaukhadi">bisharampur,primary school chaukhadi</option>
<option value="bisharampur,primary school patariya">bisharampur,primary school patariya</option>
<option value="bisharampur,primary school sadaki north part">bisharampur,primary school sadaki north part</option>
<option value="bisharampur,primary school sadaki south part">bisharampur,primary school sadaki south part</option>
<option value="bisharampur,upgraded middle school sarkoni">bisharampur,upgraded middle school sarkoni</option>
<option value="bisharampur,upgraded middle school shivari">bisharampur,upgraded middle school shivari</option>
<option value="bisharampur-A Primary School Mallahtoli">bisharampur-A Primary School Mallahtoli</option>
<option value="bisharampur-Aanganbari Kendra Tulbula">bisharampur-Aanganbari Kendra Tulbula</option>
<option value="bisharampur-Anganbari Kendra Basna">bisharampur-Anganbari Kendra Basna</option>
<option value="Bisharampur-Basic School Rehla Kala">Bisharampur-Basic School Rehla Kala</option>
<option value="Bisharampur-Govt. High School Lalgarh Middle School">Bisharampur-Govt. High School Lalgarh Middle School</option>
<option value="Bisharampur-Govt. Kalyan High School Pandu East Part">Bisharampur-Govt. Kalyan High School Pandu East Part</option>
<option value="Bisharampur-Govt. Kalyan High School Pandu West Part">Bisharampur-Govt. Kalyan High School Pandu West Part</option>
<option value="bisharampur-Govt. Middle School Barwahi Kutmu East Part">bisharampur-Govt. Middle School Barwahi Kutmu East Part</option>
<option value="Bisharampur-Govt. Middle School Gurhakala East Part">Bisharampur-Govt. Middle School Gurhakala East Part</option>
<option value="Bisharampur-Govt. Middle School Gurhakala West Part">Bisharampur-Govt. Middle School Gurhakala West Part</option>
<option value="bisharampur-Govt. Middle School Kuliya Part">bisharampur-Govt. Middle School Kuliya Part</option>
<option value="bisharampur-Govt. Middle School Kutmu West Part (2)">bisharampur-Govt. Middle School Kutmu West Part (2)</option>
<option value="bisharampur-Govt. Middle School Kutmu West Part">bisharampur-Govt. Middle School Kutmu West Part</option>
<option value="Bisharampur-Govt. Middle School Kutmu">Bisharampur-Govt. Middle School Kutmu</option>
<option value="bisharampur-Govt. Middle School mahugawan East Part">bisharampur-Govt. Middle School mahugawan East Part</option>
<option value="bisharampur-Govt. Middle School mahugawan Middle Part">bisharampur-Govt. Middle School mahugawan Middle Part</option>
<option value="bisharampur-Govt. Middle School mahugawan West Part">bisharampur-Govt. Middle School mahugawan West Part</option>
<option value="Bisharampur-Govt. Middle School Naugarha">Bisharampur-Govt. Middle School Naugarha</option>
<option value="bisharampur-Govt. Middle School Obra">bisharampur-Govt. Middle School Obra</option>
<option value="bisharampur-Govt. Middle School Sildili Tola Bisahiya East Part">bisharampur-Govt. Middle School Sildili Tola Bisahiya East Part</option>
<option value="bisharampur-Govt. Middle School Sildili Tola Bisahiya West Part">bisharampur-Govt. Middle School Sildili Tola Bisahiya West Part</option>
<option value="bisharampur-Govt. Middle School Thekahi Srinagar">bisharampur-Govt. Middle School Thekahi Srinagar</option>
<option value="Bisharampur-Govt. Middle School Tolra East Part">Bisharampur-Govt. Middle School Tolra East Part</option>
<option value="Bisharampur-Govt. Middle School Tolra North Part">Bisharampur-Govt. Middle School Tolra North Part</option>
<option value="Bisharampur-Govt. Middle School Tolra South Part">Bisharampur-Govt. Middle School Tolra South Part</option>
<option value="Bisharampur-Govt. Middle School Tolra West Part">Bisharampur-Govt. Middle School Tolra West Part</option>
<option value="Bisharampur-Govt. Primary School Kutmu East Part">Bisharampur-Govt. Primary School Kutmu East Part</option>
<option value="Bisharampur-Govt. Primary School Kutmu North Part">Bisharampur-Govt. Primary School Kutmu North Part</option>
<option value="Bisharampur-Govt. Primary School Kutmu West Part">Bisharampur-Govt. Primary School Kutmu West Part</option>
<option value="bisharampur-Govt. Upgrade Middle School Rabrabisharampur-Govt. Upgrade Middle School Rabra">bisharampur-Govt. Upgrade Middle School Rabra</option>
<option value="bisharampur-Govt. Upgrade Middle School Ratnag East Partbisharampur-Govt. Upgrade Middle School Ratnag East Part">bisharampur-Govt. Upgrade Middle School Ratnag East Part</option>
<option value="bisharampur-Govt. Upgrade Middle School Ratnag West Part">bisharampur-Govt. Upgrade Middle School Ratnag West Part</option>
<option value="Bisharampur-Govt. Upgraded High School Tona East Part">Bisharampur-Govt. Upgraded High School Tona East Part</option>
<option value="Bisharampur-Govt. Upgraded High School Tona West Part">Bisharampur-Govt. Upgraded High School Tona West Part</option>
<option value="Bisharampur-Govt. Upgraded Middle School Asnauliya">Bisharampur-Govt. Upgraded Middle School Asnauliya</option>
<option value="Bisharampur-Govt. Upgraded Middle School Baghmanwa East Part">Bisharampur-Govt. Upgraded Middle School Baghmanwa East Part</option>
<option value="Bisharampur-Govt. Upgraded Middle School Baghmanwa West Part">Bisharampur-Govt. Upgraded Middle School Baghmanwa West Part</option>
<option value="bisharampur-Govt. Upgraded Middle School Belhara">bisharampur-Govt. Upgraded Middle School Belhara</option>
<option value="bisharampur-Govt. Upgraded Middle School Bhatwaliya">bisharampur-Govt. Upgraded Middle School Bhatwaliya</option>
<option value="Bisharampur-Govt. Upgraded Middle School Chhipadohar Khurd">Bisharampur-Govt. Upgraded Middle School Chhipadohar Khurd</option>
<option value="Bisharampur-Govt. Upgraded Middle School Gaura">Bisharampur-Govt. Upgraded Middle School Gaura</option>
<option value="Bisharampur-Govt. Upgraded Middle School Gharatiya">Bisharampur-Govt. Upgraded Middle School Gharatiya</option>
<option value="Bisharampur-Govt. Upgraded Middle School Ghasidag">Bisharampur-Govt. Upgraded Middle School Ghasidag</option>
<option value="Bisharampur-Govt. Upgraded Middle School Ghordiha North PartBisharampur-Govt. Upgraded Middle School Ghordiha North Part">Bisharampur-Govt. Upgraded Middle School Ghordiha North Part</option>
<option value="Bisharampur-Govt. Upgraded Middle School Ghordiha South Part">Bisharampur-Govt. Upgraded Middle School Ghordiha South Part</option>
<option value="bisharampur-Govt. Upgraded Middle School Guasarai">bisharampur-Govt. Upgraded Middle School Guasarai</option>
<option value="Bisharampur-Govt. Upgraded Middle School Guri East Part">Bisharampur-Govt. Upgraded Middle School Guri East Part</option>
<option value="Bisharampur-Govt. Upgraded Middle School Guri West Part">Bisharampur-Govt. Upgraded Middle School Guri West Part</option>
<option value="Bisharampur-Govt. Upgraded Middle School Jamari">Bisharampur-Govt. Upgraded Middle School Jamari</option>
<option value="Bisharampur-Govt. Upgraded Middle School Kandhwan">Bisharampur-Govt. Upgraded Middle School Kandhwan</option>
<option value="Bisharampur-Govt. Upgraded Middle School Karamdih">Bisharampur-Govt. Upgraded Middle School Karamdih</option>
<option value="Bisharampur-Govt. Upgraded Middle School Kaudia">Bisharampur-Govt. Upgraded Middle School Kaudia</option>
<option value="bisharampur-Govt. upgraded Middle School Kurwakala">bisharampur-Govt. upgraded Middle School Kurwakala</option>
<option value="Bisharampur-Govt. Upgraded Middle School Lawarpandu">Bisharampur-Govt. Upgraded Middle School Lawarpandu</option>
<option value="bisharampur-Govt. upgraded Middle School Lotra">bisharampur-Govt. upgraded Middle School Lotra</option>
<option value="Bisharampur-Govt. Upgraded Middle School Mayapur">Bisharampur-Govt. Upgraded Middle School Mayapur</option>
<option value="Bisharampur-Govt. Upgraded Middle School Nawadih Kala">Bisharampur-Govt. Upgraded Middle School Nawadih Kala</option>
<option value="Bisharampur-Govt. Upgraded Middle School Pahadgerua">Bisharampur-Govt. Upgraded Middle School Pahadgerua</option>
<option value="Bisharampur-Govt. Upgraded Middle School Sabauna">Bisharampur-Govt. Upgraded Middle School Sabauna</option>
<option value="Bisharampur-Govt. Upgraded Middle School Sewra">Bisharampur-Govt. Upgraded Middle School Sewra</option>
<option value="Bisharampur-Govt. Upgraded Middle School Shankha">Bisharampur-Govt. Upgraded Middle School Shankha</option>
<option value="Bisharampur-Govt. Upgraded Middle School Sigsigi East Part">Bisharampur-Govt. Upgraded Middle School Sigsigi East Part</option>
<option value="Bisharampur-Govt. Upgraded Middle School Sigsigi Middle Part">Bisharampur-Govt. Upgraded Middle School Sigsigi Middle Part</option>
<option value="Bisharampur-Govt. Upgraded Urdu Middle School Kamta">Bisharampur-Govt. Upgraded Urdu Middle School Kamta</option>
<option value="Bisharampur-jb. High School Rehla Kala East Part">Bisharampur-jb. High School Rehla Kala East Part</option>
<option value="Bisharampur-jb. High School Rehla Kala West Part">Bisharampur-jb. High School Rehla Kala West Part</option>
<option value="Bisharampur-Middle School Amwa">Bisharampur-Middle School Amwa</option>
<option value="bisharampur-Middle School Basna West Part">bisharampur-Middle School Basna West Part</option>
<option value="bisharampur-Middle School Kandakhas North Paet">bisharampur-Middle School Kandakhas North Paet</option>
<option value="bisharampur-Middle School Kandakhas North Part (2)">bisharampur-Middle School Kandakhas North Part (2)</option>
<option value="bisharampur-Middle School Kandakhas North Part">bisharampur-Middle School Kandakhas North Part</option>
<option value="bisharampur-Middle School Kandakhas South Part">bisharampur-Middle School Kandakhas South Part</option>
<option value="bisharampur-Middle School Nawabazar East Part">bisharampur-Middle School Nawabazar East Part</option>
<option value="bisharampur-Middle School Nawabazar West Part">bisharampur-Middle School Nawabazar West Part</option>
<option value="bisharampur-Middle School Rajhara East part">bisharampur-Middle School Rajhara East part</option>
<option value="bisharampur-Middle School Rajhara West part">bisharampur-Middle School Rajhara West part</option>
<option value="bisharampur-Middle School Tukbera East part">bisharampur-Middle School Tukbera East part</option>
<option value="bisharampur-Middle School Tukbera Middle Part">bisharampur-Middle School Tukbera Middle Part</option>
<option value="bisharampur-Middle School Tukbera West Part">bisharampur-Middle School Tukbera West Part</option>
<option value="Bisharampur-New Panchayat Sachivalay Pandu">Bisharampur-New Panchayat Sachivalay Pandu</option>
<option value="Bisharampur-New Primary School Amarwadamar(Ghasidag)">Bisharampur-New Primary School Amarwadamar(Ghasidag)</option>
<option value="bisharampur-New Primary School Basdiha">bisharampur-New Primary School Basdiha</option>
<option value="Bisharampur-New Primary School Bhaluani Kala West Part">Bisharampur-New Primary School Bhaluani Kala West Part</option>
<option value="Bisharampur-New Primary School Bhaluani Khurd">Bisharampur-New Primary School Bhaluani Khurd</option>
<option value="bisharampur-New Primary School Golpa">bisharampur-New Primary School Golpa</option>
<option value="Bisharampur-New Primary School Holanga (2)">Bisharampur-New Primary School Holanga (2)</option>
<option value="Bisharampur-New Primary School Holanga">Bisharampur-New Primary School Holanga</option>
<option value="Bisharampur-New Primary School Jarka">Bisharampur-New Primary School Jarka</option>
<option value="bisharampur-New Primary School Kumbhikalan">bisharampur-New Primary School Kumbhikalan</option>
<option value="bisharampur-New Primary School Ordiha">bisharampur-New Primary School Ordiha</option>
<option value="bisharampur-New Primary School Thakur Tola Rajhara East Partbisharampur-New Primary School Thakur Tola Rajhara East Part">bisharampur-New Primary School Thakur Tola Rajhara East Part</option>
<option value="bisharampur-New Primary School Thakur Tola Rajhara West Part">bisharampur-New Primary School Thakur Tola Rajhara West Part</option>
<option value="Bisharampur-New Primary School Ullipahari">Bisharampur-New Primary School Ullipahari</option>
<option value="Bisharampur-New Urdu Primary School Kundi">Bisharampur-New Urdu Primary School Kundi</option>
<option value="Bisharampur-Panchayat Bhawan Sigsigi">Bisharampur-Panchayat Bhawan Sigsigi</option>
<option value="bisharampur-Primary School Bana">bisharampur-Primary School Bana</option>
<option value="bisharampur-Primary School Kumbhi Kala Tola Bankheta">bisharampur-Primary School Kumbhi Kala Tola Bankheta</option>
<option value="bisharampur-Primary School Patariya North Part">bisharampur-Primary School Patariya North Part</option>
<option value="Bisharampur-Uograded Middle School Barigawan">Bisharampur-Uograded Middle School Barigawan</option>
<option value="Bisharampur-Uograded Middle School Semri Khurd">Bisharampur-Uograded Middle School Semri Khurd</option>
<option value="bisharampur-Upgrade Middle School Sohdagkala">bisharampur-Upgrade Middle School Sohdagkala</option>
<option value="bisharampur-Upgrade Middle School Tamdaga">bisharampur-Upgrade Middle School Tamdaga</option>
<option value="Bisharampur-Upgraded High School Bhandar East Part">Bisharampur-Upgraded High School Bhandar East Part</option>
<option value="Bisharampur-Upgraded High School Bhandar West PartBisharampur-Upgraded High School Bhandar West Part">Bisharampur-Upgraded High School Bhandar West Part</option>
<option value="Bisharampur-Upgraded High School jharha khurd">Bisharampur-Upgraded High School jharha khurd</option>
<option value="Bisharampur-Upgraded High School Ketat Kala East Part">Bisharampur-Upgraded High School Ketat Kala East Part</option>
<option value="Bisharampur-Upgraded High School Ketat Kala Middle Part">Bisharampur-Upgraded High School Ketat Kala Middle Part</option>
<option value="Bisharampur-Upgraded High School Ketat Kala West Part">Bisharampur-Upgraded High School Ketat Kala West Part</option>
<option value="Bisharampur-Upgraded High School Tona East Part">Bisharampur-Upgraded High School Tona East Part</option>
<option value="bisharampur-Upgraded Middle School Barhmoriyakala">bisharampur-Upgraded Middle School Barhmoriyakala</option>
<option value="bisharampur-Upgraded Middle School Chaneya">bisharampur-Upgraded Middle School Chaneya</option>
<option value="bisharampur-Upgraded Middle School Chechanha North Part">bisharampur-Upgraded Middle School Chechanha North Part</option>
<option value="bisharampur-Upgraded Middle School Chechanha South Part">bisharampur-Upgraded Middle School Chechanha South Part</option>
<option value="bisharampur-Upgraded Middle School Chechariya">bisharampur-Upgraded Middle School Chechariya</option>
<option value="Bisharampur-Upgraded Middle School Choratiya">Bisharampur-Upgraded Middle School Choratiya</option>
<option value="bisharampur-upgraded Middle School Dalakalan North Part">bisharampur-upgraded Middle School Dalakalan North Part</option>
<option value="bisharampur-upgraded Middle School Dalakalan South Part">bisharampur-upgraded Middle School Dalakalan South Part</option>
<option value="bisharampur-Upgraded Middle School Damaro North Part">bisharampur-Upgraded Middle School Damaro North Part</option>
<option value="bisharampur-upgraded Middle School Darua North Part">bisharampur-upgraded Middle School Darua North Part</option>
<option value="bisharampur-upgraded Middle School Dhanchabar South Part">bisharampur-upgraded Middle School Dhanchabar South Part</option>
<option value="bisharampur-upgraded Middle School Dhanchabar">bisharampur-upgraded Middle School Dhanchabar</option>
<option value="bisharampur-Upgraded Middle School Jharha Khurd">bisharampur-Upgraded Middle School Jharha Khurd</option>
<option value="Bisharampur-Upgraded Middle School Kajrukala East Part">Bisharampur-Upgraded Middle School Kajrukala East Part</option>
<option value="Bisharampur-Upgraded Middle School Kajrukala New Building East part"Bisharampur-Upgraded Middle School Kajrukala New Building East part>Bisharampur-Upgraded Middle School Kajrukala New Building East part</option>
<option value="Bisharampur-Upgraded Middle School Kajrukala New Building West part">Bisharampur-Upgraded Middle School Kajrukala New Building West part</option>
<option value="Bisharampur-Upgraded Middle School Kajrukala West Part">Bisharampur-Upgraded Middle School Kajrukala West Part</option>
<option value="Bisharampur-Upgraded Middle School Kajrukala">Bisharampur-Upgraded Middle School Kajrukala</option>
<option value="bisharampur-Upgraded Middle School kumbhikhurd North Part (2)">bisharampur-Upgraded Middle School kumbhikhurd North Part (2)</option>
<option value="bisharampur-Upgraded Middle School kumbhikhurd North Part">bisharampur-Upgraded Middle School kumbhikhurd North Part</option>
<option value="bisharampur-Upgraded Middle School kumbhikhurd South Part">bisharampur-Upgraded Middle School kumbhikhurd South Part</option>
<option value="bisharampur-Upgraded Middle School ltko Middle Part">bisharampur-Upgraded Middle School ltko Middle Part</option>
<option value="bisharampur-Upgraded Middle School ltko North Part">bisharampur-Upgraded Middle School ltko North Part</option>
<option value="bisharampur-Upgraded Middle School ltko South Part">bisharampur-Upgraded Middle School ltko South Part</option>
<option value="Bisharampur-Upgraded Middle School Mallahtoli North Part">Bisharampur-Upgraded Middle School Mallahtoli North Part</option>
<option value="Bisharampur-Upgraded Middle School Mallahtoli South Part">Bisharampur-Upgraded Middle School Mallahtoli South Part</option>
<option value="Bisharampur-Upgraded Middle School Murma Kala">Bisharampur-Upgraded Middle School Murma Kala</option>
<option value="Bisharampur-Upgraded Middle School Murmakhurd">Bisharampur-Upgraded Middle School Murmakhurd</option>
<option value="Bisharampur-Upgraded Middle School Murumatu,East Part">Bisharampur-Upgraded Middle School Murumatu,East Part</option>
<option value="Bisharampur-Upgraded Middle School Murumatu,South Part(New Building)">Bisharampur-Upgraded Middle School Murumatu,South Part(New Building)</option>
<option value="Bisharampur-Upgraded Middle School Musikhap East Part">Bisharampur-Upgraded Middle School Musikhap East Part</option>
<option value="Bisharampur-Upgraded Middle School Musikhap West Part">Bisharampur-Upgraded Middle School Musikhap West Part</option>
<option value="Bisharampur-Upgraded Middle School Nimiya">Bisharampur-Upgraded Middle School Nimiya</option>
<option value="Bisharampur-Upgraded Middle School Panjari Kala">Bisharampur-Upgraded Middle School Panjari Kala</option>
<option value="Bisharampur-Upgraded Middle School Panjari KhurdBisharampur-Upgraded Middle School Panjari Khurd">Bisharampur-Upgraded Middle School Panjari Khurd</option>
<option value="bisharampur-Upgraded Middle School Rabda East Partbisharampur-Upgraded Middle School Rabda East Partbisharampur-Upgraded Middle School Rabda West Part">bisharampur-Upgraded Middle School Rabda East Partbisharampur-Upgraded Middle School Rabda West Part</option>
<option value="bisharampur-Upgraded Middle School Rabda West Part">bisharampur-Upgraded Middle School Rabda West Part</option>
<option value="bisharampur-Upgraded Middle School Rajdiriya North Part">bisharampur-Upgraded Middle School Rajdiriya North Part</option>
<option value="bisharampur-Upgraded Middle School Rajdiriya South Part">bisharampur-Upgraded Middle School Rajdiriya South Part</option>
<option value="bisharampur-upgraded Middle School salhana">bisharampur-upgraded Middle School salhana</option>
<option value="bisharampur-Upgraded Middle School Sarauna">bisharampur-Upgraded Middle School Sarauna</option>
<option value="bisharampur-Upgraded Middle School Sinjo">bisharampur-Upgraded Middle School Sinjo</option>
<option value="bisharampur-Upgraded Middle School Sohdagdkhurd North Partbisharampur-Upgraded Middle School Sohdagdkhurd North Part">bisharampur-Upgraded Middle School Sohdagdkhurd North Part</option>
<option value="bisharampur-Upgraded Middle School Sohdagdkhurd South Partbisharampur-Upgraded Middle School Sohdagdkhurd South Part">bisharampur-Upgraded Middle School Sohdagdkhurd South Part</option>
<option value="Bisharampur-Upgraded Middle School Sulumdag (2)">Bisharampur-Upgraded Middle School Sulumdag (2)</option>
<option value="Bisharampur-Upgraded Middle School Sulumdag">Bisharampur-Upgraded Middle School Sulumdag</option>
<option value="bisharampur-Upgraded Middle School Tali">bisharampur-Upgraded Middle School Tali</option>
<option value="bisharampur-upgraded Middle School Tisibarkhurd North Part">bisharampur-upgraded Middle School Tisibarkhurd North Part</option>
<option value="bisharampur-upgraded Middle School Tisibarkhurd South Part">bisharampur-upgraded Middle School Tisibarkhurd South Part</option>
<option value="bisharampur-upgraded Middle School Tisibarkhurd">bisharampur-upgraded Middle School Tisibarkhurd</option>
<option value="Bisharampur-Upgraded Primary School Koshiyar">Bisharampur-Upgraded Primary School Koshiyar</option>
<option value="Bisharampur-Upgraded Primary School Panchghara Khurd">Bisharampur-Upgraded Primary School Panchghara Khurd</option>
<option value="bishrampur Buniya school semaura">bishrampur Buniya school semaura</option>
<option value="bishrampur primary school mahulibishrampur primary school mahuli">bishrampur primary school mahuli</option>
<option value="bishrampur primary school satbahini(old building)bishrampur primary school satbahini(old building)">bishrampur primary school satbahini(old building)</option>
<option value="bishrampur primary school">bishrampur primary school</option>
<option value="bishrampur upgraded middle school sarkoni">bishrampur upgraded middle school sarkoni</option>
<option value="bishrampur,21-upgraded primary school narayanpur north part">bishrampur,21-upgraded primary school narayanpur north part</option>
<option value="Bishrampur,Anaganbari Kendra Pathariya">Bishrampur,Anaganbari Kendra Pathariya</option>
<option value="Bishrampur,Anganbadi kendra Shivpur">Bishrampur,Anganbadi kendra Shivpur</option>
<option value="bishrampur,Anganbari kendra jamua">bishrampur,Anganbari kendra jamua</option>
<option value="Bishrampur,Bal Vikash Bhawan Majhigawan">Bishrampur,Bal Vikash Bhawan Majhigawan</option>
<option value="bishrampur,Buniyadi school semaura">bishrampur,Buniyadi school semaura</option>
<option value="bishrampur,Girl primary school garakhurd">bishrampur,Girl primary school garakhurd</option>
<option value="bishrampur,Govt.Shahdev High School Kharaundha">bishrampur,Govt.Shahdev High School Kharaundha</option>
<option value="Bishrampur,High School Lamarikala">Bishrampur,High School Lamarikala</option>
<option value="Bishrampur,Mahant Ramchanadrapuri High School Gardaha">Bishrampur,Mahant Ramchanadrapuri High School Gardaha</option>
<option value="bishrampur,Middle School Baliyari">bishrampur,Middle School Baliyari</option>
<option value="bishrampur,Middle School Barwadih">bishrampur,Middle School Barwadih</option>
<option value="bishrampur,Middle School Jayanagar (2)">bishrampur,Middle School Jayanagar (2)</option>
<option value="bishrampur,Middle School Jayanagar">bishrampur,Middle School Jayanagar</option>
<option value="bishrampur,Middle School Kharaundha">bishrampur,Middle School Kharaundha</option>
<option value="Bishrampur,Middle School Kundraha">Bishrampur,Middle School Kundraha</option>
<option value="Bishrampur,Middle School Lamarikala">Bishrampur,Middle School Lamarikala</option>
<option value="bishrampur,Middle School Ranadih">bishrampur,Middle School Ranadih</option>
<option value="bishrampur,Middle School Sohgara">bishrampur,Middle School Sohgara</option>
<option value="bishrampur,middle school sundipur">bishrampur,middle school sundipur</option>
<option value="Bishrampur,New Primary School Bharat Pahari (2)Bishrampur,New Primary School Bharat Pahari (2)">Bishrampur,New Primary School Bharat Pahari (2)</option>
<option value="Bishrampur,New Primary School Bharat Pahari">Bishrampur,New Primary School Bharat Pahari</option>
<option value="Bishrampur,Panchayat Bhawan Ghathua Kala">Bishrampur,Panchayat Bhawan Ghathua Kala</option>
<option value="Bishrampur,Primary School Adhaura East part">Bishrampur,Primary School Adhaura East part</option>
<option value="Bishrampur,Primary School Adhaura west part">Bishrampur,Primary School Adhaura west part</option>
<option value="Bishrampur,Primary School Belopati(Old Building)">Bishrampur,Primary School Belopati(Old Building)</option>
<option value="bishrampur,Primary School Bhandariya">bishrampur,Primary School Bhandariya</option>
<option value="bishrampur,Primary School bhilma (2)">bishrampur,Primary School bhilma (2)</option>
<option value="bishrampur,Primary School bhilma">bishrampur,Primary School bhilma</option>
<option value="Bishrampur,Primary School Chataniya North Part">Bishrampur,Primary School Chataniya North Part</option>
<option value="Bishrampur,Primary School Chataniya South Part">Bishrampur,Primary School Chataniya South Part</option>
<option value="bishrampur,Primary School Choka">bishrampur,Primary School Choka</option>
<option value="Bishrampur,Primary School Devdih">Bishrampur,Primary School Devdih</option>
<option value="Bishrampur,Primary School Ghathua Kala">Bishrampur,Primary School Ghathua Kala</option>
<option value="Bishrampur,Primary School Ghordag East Part">Bishrampur,Primary School Ghordag East Part</option>
<option value="Bishrampur,Primary School Ghordag west Part">Bishrampur,Primary School Ghordag west Part</option>
<option value="bishrampur,Primary School Ghurua">bishrampur,Primary School Ghurua</option>
<option value="Bishrampur,Primary School Gosang East part">Bishrampur,Primary School Gosang East part</option>
<option value="Bishrampur,Primary School Gosang West part">Bishrampur,Primary School Gosang West part</option>
<option value="Bishrampur,Primary School Harigawan">Bishrampur,Primary School Harigawan</option>
<option value="bishrampur,Primary School Kasnap">bishrampur,Primary School Kasnap</option>
<option value="Bishrampur,Primary School Kauwakhoh">Bishrampur,Primary School Kauwakhoh</option>
<option value="Bishrampur,Primary School Khutheriya">Bishrampur,Primary School Khutheriya</option>
<option value="Bishrampur,Primary School Kolhua">Bishrampur,Primary School Kolhua</option>
<option value="bishrampur,Primary School Koragai">bishrampur,Primary School Koragai</option>
<option value="bishrampur,Primary School Kurkuta">bishrampur,Primary School Kurkuta</option>
<option value="Bishrampur,Primary School Lalgada">Bishrampur,Primary School Lalgada</option>
<option value="bishrampur,Primary School Mandra East Part">bishrampur,Primary School Mandra East Part</option>
<option value="bishrampur,Primary School Mandra West Part">bishrampur,Primary School Mandra West Part</option>
<option value="bishrampur,Primary School Mokhapi">bishrampur,Primary School Mokhapi</option>
<option value="Bishrampur,Primary School Obra East Part">Bishrampur,Primary School Obra East Part</option>
<option value="Bishrampur,Primary School Obra West Part">Bishrampur,Primary School Obra West Part</option>
<option value="bishrampur,Primary School patila East Part">bishrampur,Primary School patila East Part</option>
<option value="bishrampur,Primary School patila west Part">bishrampur,Primary School patila west Part</option>
<option value="Bishrampur,Primary School Raja Ghatahua">Bishrampur,Primary School Raja Ghatahua</option>
<option value="bishrampur,Primary School Rambandh">bishrampur,Primary School Rambandh</option>
<option value="Bishrampur,Primary school salga north part">Bishrampur,Primary school salga north part</option>
<option value="Bishrampur,Primary school salga South part">Bishrampur,Primary school salga South part</option>
<option value="Bishrampur,Primary school salya">Bishrampur,Primary school salya</option>
<option value="Bishrampur,Primary School Sanani">Bishrampur,Primary School Sanani</option>
<option value="Bishrampur,Primary School Sarsatiya East Part">Bishrampur,Primary School Sarsatiya East Part</option>
<option value="Bishrampur,Primary School Sarsatiya West Part">Bishrampur,Primary School Sarsatiya West Part</option>
<option value="Bishrampur,Primary School Shivpur">Bishrampur,Primary School Shivpur</option>
<option value="bishrampur,Samudayik Bhawan Sundipurbishrampur,Samudayik Bhawan Sundipur">bishrampur,Samudayik Bhawan Sundipur</option>
<option value="Bishrampur,Sub Health Centre Pipardih">Bishrampur,Sub Health Centre Pipardih</option>
<option value="Bishrampur,Upgraded Middle School Bardiha East part">Bishrampur,Upgraded Middle School Bardiha East part</option>
<option value="Bishrampur,Upgraded Middle School Bardiha West part">Bishrampur,Upgraded Middle School Bardiha West part</option>
<option value="Bishrampur,Upgraded Middle School JikaBishrampur,Upgraded Middle School Jika">Bishrampur,Upgraded Middle School Jika</option>
<option value="Bishrampur,Upgraded Middle School Khardiha East PartBishrampur,Upgraded Middle School Khardiha East Part">Bishrampur,Upgraded Middle School Khardiha East Part</option>
<option value="Bishrampur,Upgraded Middle School Khardiha West PartBishrampur,Upgraded Middle School Khardiha West Part">Bishrampur,Upgraded Middle School Khardiha West Part</option>
<option value="Bishrampur,Upgraded Middle School LebhriBishrampur,Upgraded Middle School Lebhri">Bishrampur,Upgraded Middle School Lebhri</option>
<option value="Bishrampur,Upgraded Middle School Loka">Bishrampur,Upgraded Middle School LokaBishrampur,Upgraded Middle School Semri North Part</option>
<option value="Bishrampur,Upgraded Middle School Semri North Part">Bishrampur,Upgraded Middle School Semri North Part</option>
<option value="Bishrampur,Upgraded Middle School Semri South PartBishrampur,Upgraded Middle School Semri South Part">Bishrampur,Upgraded Middle School Semri South Part</option>
<option value="Bishrampur,Upgraded Middle School Sukhnadi East Part">Bishrampur,Upgraded Middle School Sukhnadi East Part</option>
<option value="Bishrampur,Upgraded Middle School Sukhnadi West PartBishrampur,Upgraded Middle School Sukhnadi West Part">Bishrampur,Upgraded Middle School Sukhnadi West Part</option>
<option value="bishrampur,upgraded primary school narayanpur south part">bishrampur,upgraded primary school narayanpur south part</option>
<option value="Bishrampur,Upgraded Primary School Ratangada">Bishrampur,Upgraded Primary School Ratangada</option>
<option value="Bishrampur-Abhiyan School Chirkutahi">Bishrampur-Abhiyan School Chirkutahi</option>
<option value="Bishrampur-Abhiyan School Jhaphi Tola (Sonpurwa)">Bishrampur-Abhiyan School Jhaphi Tola (Sonpurwa)</option>
<option value="Bishrampur-Abhiyan School Jhina(Kharsota)">Bishrampur-Abhiyan School Jhina(Kharsota)Bishrampur-Abhiyan School Kusumiyadamar (2)</option>
<option value="Bishrampur-Abhiyan School Kusumiyadamar (2)">Bishrampur-Abhiyan School Kusumiyadamar (2)</option>
<option value="Bishrampur-Abhiyan School Kusumiyadamar">Bishrampur-Abhiyan School Kusumiyadamar</option>
<option value="Bishrampur-Abhiyan School SemarhatBishrampur-Abhiyan School Semarhat">Bishrampur-Abhiyan School Semarhat</option>
<option value="Bishrampur-Anganbadi Kendra Devdar">Bishrampur-Anganbadi Kendra Devdar</option>
<option value="Bishrampur-Anganbadi Kendra Kamat">Bishrampur-Anganbadi Kendra Kamat</option>
<option value="Bishrampur-Dak Bangla MajhiaonBishrampur-Dak Bangla Majhiaon">Bishrampur-Dak Bangla Majhiaon</option>
<option value="Bishrampur-Gandhi High school Sirha">Bishrampur-Gandhi High school Sirha</option>
<option value="Bishrampur-Girl Primary School Morbe (Old Building)">Bishrampur-Girl Primary School Morbe (Old Building)</option>
<option value="Bishrampur-Govt upgraded Middle School Nawgharh">Bishrampur-Govt upgraded Middle School Nawgharh</option>
<option value="Bishrampur-Govt. Middle School Bisharampur East Part">Bishrampur-Govt. Middle School Bisharampur East Part</option>
<option value="Bishrampur-Govt. Middle School Bisharampur West Part">Bishrampur-Govt. Middle School Bisharampur West Part</option>
<option value="Bishrampur-Govt. Middle School pandeypur East Part">Bishrampur-Govt. Middle School pandeypur East Part</option>
<option value="Bishrampur-Govt. Middle School pandeypur West Part">Bishrampur-Govt. Middle School pandeypur West Part</option>
<option value="Bishrampur-Govt. Primary School Ursula, East Part">Bishrampur-Govt. Primary School Ursula, East Part</option>
<option value="Bishrampur-Govt. Primary School Ursula, West Part">Bishrampur-Govt. Primary School Ursula, West Part</option>
<option value="Bishrampur-Govt. Upgraded middle School Chechariya">Bishrampur-Govt. Upgraded middle School Chechariya</option>
<option value="Bishrampur-Govt. Upgraded Middle School Godarma kala East part">Bishrampur-Govt. Upgraded Middle School Godarma kala East part</option>
<option value="Bishrampur-Govt. Upgraded Middle School Jamdiha East Part">Bishrampur-Govt. Upgraded Middle School Jamdiha East Part</option>
<option value="Bishrampur-Govt. Upgraded Middle School Jhagarua West part">Bishrampur-Govt. Upgraded Middle School Jhagarua West part</option>
<option value="Bishrampur-Govt. Upgraded Middle School Joga">Bishrampur-Govt. Upgraded Middle School Joga</option>
<option value="Bishrampur-Govt. Upgraded Middle School Karkatta North Part">Bishrampur-Govt. Upgraded Middle School Karkatta North Part</option>
<option value="Bishrampur-Govt. Upgraded Middle School Karkatta South Part">Bishrampur-Govt. Upgraded Middle School Karkatta South Part</option>
<option value="Bishrampur-Govt. Upgraded Middle School Laharbanjari East Part">Bishrampur-Govt. Upgraded Middle School Laharbanjari East Part</option>
<option value="Bishrampur-Govt. Upgraded Middle School Laharbanjari West Part">Bishrampur-Govt. Upgraded Middle School Laharbanjari West Part</option>
<option value="Bishrampur-Govt. Upgraded middle School Malwariya">Bishrampur-Govt. Upgraded middle School Malwariya</option>
<option value="Bishrampur-Govt. Upgraded middle School Murmakala East Part (2)">Bishrampur-Govt. Upgraded middle School Murmakala East Part (2)</option>
<option value="Bishrampur-Govt. Upgraded middle School Murmakala East Part">Bishrampur-Govt. Upgraded middle School Murmakala East Part</option>
<option value="Bishrampur-Govt. Upgraded middle School Murmakala West Part (2)">Bishrampur-Govt. Upgraded middle School Murmakala West Part (2)</option>
<option value="Bishrampur-Govt. Upgraded middle School Murmakala West Part">Bishrampur-Govt. Upgraded middle School Murmakala West Part</option>
<option value="Bishrampur-Govt. Upgraded middle School Pandeypura East Part">Bishrampur-Govt. Upgraded middle School Pandeypura East Part</option>
<option value="Bishrampur-Govt. Upgraded middle School Pandeypura West Part">Bishrampur-Govt. Upgraded middle School Pandeypura West Part</option>
<option value="Bishrampur-Govt. Upgraded middle School Semri">Bishrampur-Govt. Upgraded middle School Semri</option>
<option value="Bishrampur-Govt. Upgraded Middle School Sirha">Bishrampur-Govt. Upgraded Middle School Sirha</option>
<option value="Bishrampur-Govt.Krishana pro. girls High School Majhiaon">Bishrampur-Govt.Krishana pro. girls High School Majhiaon</option>
<option value="Bishrampur-Janta High School Bisharampur aanorth Part">Bishrampur-Janta High School Bisharampur aanorth Part</option>
<option value="Bishrampur-Janta High School Bisharampur South part">Bishrampur-Janta High School Bisharampur South part</option>
<option value="Bishrampur-Janta High School Bisharampur West part">Bishrampur-Janta High School Bisharampur West part</option>
<option value="Bishrampur-Middle School Bisharampur (New Building)">Bishrampur-Middle School Bisharampur (New Building)</option>
<option value="Bishrampur-Middle School Ghuruwa">Bishrampur-Middle School Ghuruwa</option>
<option value="Bishrampur-Middle School Karamdih East Part">Bishrampur-Middle School Karamdih East Part</option>
<option value="Bishrampur-Middle School Karamdih West Part">Bishrampur-Middle School Karamdih West Part</option>
<option value="Bishrampur-Middle School Karui North Part">Bishrampur-Middle School Karui North Part</option>
<option value="Bishrampur-Middle School Karui South Part">Bishrampur-Middle School Karui South Part</option>
<option value="Bishrampur-Middle School Kutma">Bishrampur-Middle School Kutma</option>
<option value="Bishrampur-Middle School Majhiaon Kala East PartBishrampur-Middle School Majhiaon Kala East Part">Bishrampur-Middle School Majhiaon Kala East Part</option>
<option value="Bishrampur-Middle School Majhiaon Kala West Part">Bishrampur-Middle School Majhiaon Kala West Part</option>
<option value="Bishrampur-Middle School Majhigawa">Bishrampur-Middle School Majhigawa</option>
<option value="Bishrampur-Middle School MorbeBishrampur-Middle School Morbe">Bishrampur-Middle School Morbe</option>
<option value="Bishrampur-Nagar Panchayat Office Majhiaon">Bishrampur-Nagar Panchayat Office Majhiaon</option>
<option value="Bishrampur-New Middle School Bhitihara">Bishrampur-New Middle School Bhitihara</option>
<option value="Bishrampur-New Middle School KulhiBishrampur-New Middle School Kulhi">Bishrampur-New Middle School Kulhi</option>
<option value="Bishrampur-New Primary School Darua">Bishrampur-New Primary School Darua</option>
<option value="Bishrampur-New Primary School Jarhi Tola (Joga)">Bishrampur-New Primary School Jarhi Tola (Joga)</option>
<option value="Bishrampur-New Primary School Talasbariya (2)">Bishrampur-New Primary School Talasbariya (2)</option>
<option value="Bishrampur-New Primary School Talasbariya">Bishrampur-New Primary School Talasbariya</option>
<option value="Bishrampur-Panchayat Bhawan Morbe">Bishrampur-Panchayat Bhawan Morbe</option>
<option value="Bishrampur-Panchayat Bhawan Rampur">Bishrampur-Panchayat Bhawan Rampur</option>
<option value="Bishrampur-Primary School Amar">Bishrampur-Primary School Amar</option>
<option value="Bishrampur-Primary School BichchhiBishrampur-Primary School Bichchhi">Bishrampur-Primary School Bichchhi</option>
<option value="Bishrampur-Primary School Birbandha">Bishrampur-Primary School Birbandha</option>
<option value="Bishrampur-Primary School Chandana North Part">Bishrampur-Primary School Chandana North Part</option>
<option value="Bishrampur-Primary School Chandana South Part">Bishrampur-Primary School Chandana South Part</option>
<option value="Bishrampur-Primary School Chandrapura Shekh Tola(Old Building)">Bishrampur-Primary School Chandrapura Shekh Tola(Old Building)</option>
<option value="Bishrampur-Primary School Dalko">Bishrampur-Primary School Dalko</option>
<option value="Bishrampur-Primary School Dandilakhurd (old Building)">Bishrampur-Primary School Dandilakhurd (old Building)</option>
<option value="Bishrampur-Primary School Jatro Banjari East Part">Bishrampur-Primary School Jatro Banjari East Part</option>
<option value="Bishrampur-Primary School Jatro Banjari West Part">Bishrampur-Primary School Jatro Banjari West Part</option>
<option value="Bishrampur-Primary School Nawadih">Bishrampur-Primary School Nawadih</option>
<option value="Bishrampur-Primary School SarkoniBishrampur-Primary School Sarkoni">Bishrampur-Primary School Sarkoni</option>
<option value="Bishrampur-Primary School Uchari">Bishrampur-Primary School Uchari</option>
<option value="bishrampur-primry school salya">bishrampur-primry school salya</option>
<option value="Bishrampur-Public School LawachampaBishrampur-Samudayik Bhawan Majhiaon">Bishrampur-Public School LawachampaBishrampur-Samudayik Bhawan Majhiaon</option>
<option value="Bishrampur-Samudayik Bhawan Majhiaon">Bishrampur-Samudayik Bhawan Majhiaon</option>
<option value="Bishrampur-Samudayik Vikas Bhawan Bindua">Bishrampur-Samudayik Vikas Bhawan Bindua</option>
<option value="Bishrampur-Sarwa Shiksha Abhiyan School Lewatand">Bishrampur-Sarwa Shiksha Abhiyan School Lewatand</option>
<option value="Bishrampur-Stronat Middle School Satbahini North Part">Bishrampur-Stronat Middle School Satbahini North Part</option>
<option value="Bishrampur-Stronat Upgraded School Satbahini">Bishrampur-Stronat Upgraded School Satbahini</option>
<option value="Bishrampur-Upgraded Middle School Achhodih">Bishrampur-Upgraded Middle School Achhodih</option>
<option value="Bishrampur-Upgraded Middle School Adar East Part">Bishrampur-Upgraded Middle School Adar East Part</option>
<option value="Bishrampur-Upgraded Middle School Adar West Part">Bishrampur-Upgraded Middle School Adar West Part</option>
<option value="Bishrampur-Upgraded Middle School Akhauri Tahle">Bishrampur-Upgraded Middle School Akhauri Tahle</option>
<option value="Bishrampur-Upgraded Middle School Barchabandh East Part">Bishrampur-Upgraded Middle School Barchabandh East Part</option>
<option value="Bishrampur-Upgraded Middle School Barchabandh West Part">Bishrampur-Upgraded Middle School Barchabandh West Part</option>
<option value="Bishrampur-Upgraded Middle School Bhusua">Bishrampur-Upgraded Middle School Bhusua</option>
<option value="Bishrampur-Upgraded Middle School Bodra">Bishrampur-Upgraded Middle School Bodra</option>
<option value="Bishrampur-Upgraded Middle School Budhikhand">Bishrampur-Upgraded Middle School Budhikhand</option>
<option value="Bishrampur-Upgraded Middle School Dubey Tahale">Bishrampur-Upgraded Middle School Dubey Tahale</option>
<option value="Bishrampur-Upgraded Middle School Karkatta">Bishrampur-Upgraded Middle School Karkatta</option>
<option value="Bishrampur-Upgraded Middle School Khajuri North Part">Bishrampur-Upgraded Middle School Khajuri North Part</option>
<option value="Bishrampur-Upgraded Middle School Khajuri South Part">Bishrampur-Upgraded Middle School Khajuri South Part</option>
<option value="Bishrampur-Upgraded Middle School Kharsota East Part">Bishrampur-Upgraded Middle School Kharsota East Part</option>
<option value="Bishrampur-Upgraded Middle School Kharsota West Part">Bishrampur-Upgraded Middle School Kharsota West Part</option>
<option value="Bishrampur-Upgraded Middle School Rampur Vidanda North Part">Bishrampur-Upgraded Middle School Rampur Vidanda North Part</option>
<option value="Bishrampur-Upgraded Middle School Rampur Vidanda South Part">Bishrampur-Upgraded Middle School Rampur Vidanda South Part</option>
<option value="Bishrampur-Upgraded Middle School Ranitali">Bishrampur-Upgraded Middle School Ranitali</option>
<option value="Bishrampur-Upgraded Middle School Sonpurwa">Bishrampur-Upgraded Middle School Sonpurwa</option>
<option value="Bishrampur-Upgraded Middle School Baluganj">Bishrampur-Upgraded Middle School Baluganj</option>
<option value="Bishrampur-Upgraded Middle School Dawankara North Part">Bishrampur-Upgraded Middle School Dawankara North Part</option>
<option value="Bishrampur-Upgraded Middle School Dawankara South Part">Bishrampur-Upgraded Middle School Dawankara South Part</option>
<option value="Bishrampur-Upgraded Middle School Purhe">Bishrampur-Upgraded Middle School Purhe</option>
<option value="Bishrampur-Urdu Middle School Dihariya West part (2)">Bishrampur-Urdu Middle School Dihariya West part (2)</option>
<option value="Bishrampur-Urdu Middle School Dihariya West part">Bishrampur-Urdu Middle School Dihariya West part</option>
<option value="Bishrampur-Urdu Upgraded Middle School Dandilakala North Part">Bishrampur-Urdu Upgraded Middle School Dandilakala North Part</option>
<option value="Bishrampur-Urdu Upgraded Middle School Dihariya East part">Bishrampur-Urdu Upgraded Middle School Dihariya East part</option>
<option value="kritim garbhadhan,kendra,dhabariya">kritim garbhadhan,kendra,dhabariya</option>

                </select>         
                 <br><br>
                
                  <button type="submit" name="submit" class="btn btn-info" onsubmit="regValidation();">Submit</button><br>
                
                  अधिक जानकारी के लिए हमारे वेबसाइट पे क्लिक करे&nbsp; <a href="http://bdprasad.com/" style="color: #000000"><b>www.bdprasad.com</b></a>
                </div>
               <div>
                
          </form>
       
          
        </div>

    </div>
    

</body>
</html>