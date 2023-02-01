
<!--Get Quotation-->
<?php  
   if (isset($_POST['submit']))
          {
            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $state=$_POST['state'];
            $services=$_POST['services'];
            $time=$_POST['time'];

            include('connect.php');
            mysqli_query($con,"insert into quotation(name,email,phone,state,services,time) values('$name','$email','$phone','$state','$services','$time')");

            if (mysqli_affected_rows($con)==1) {
                
              echo "<center><p class='alert alert-success'>Your Message Sent Successfully!!</p></center>";          
            }
            else
            {
              echo "<center><p class='alert alert-danger'>Sorry!! Unable to Sent Your Messages, Please Try Again....</p></center>";
            }
          }
?>

<?php 
    if (isset($_POST['register']))
    {
      $name=$_POST['name'];
      $email=$_POST['email'];
      $subject=$_POST['subject'];
      $message=$_POST['message'];

      include('connect.php');
      mysqli_query($con,"INSERT into users(name,email,subject,message) values('$name','$email','$subject','$message')");

      if (mysqli_affected_rows($con)==1) {
          
          echo "<center><p class='alert alert-success'>Your Message Sent Successfully!!</p></center>";

      }
      else
      {
          echo "<center><p class='alert alert-danger'>Sorry!! Unable to Sent Your Messages, Please Try Again....</p></center>";

      }

    }

?>
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
    $mail->Username='pksharma8539@gmail.com';
    $mail->Password='';
    $mail->setFrom($_POST['email'],$_POST['fname']);
    $mail->addAddress('pksharma8539@gmail.com');
    $mail->addReplyTo($_POST['email'],$_POST['fname']);

    $mail->isHTML(true);
    $mail->Subject='Form Submission: '.$_POST['subject'];
    $mail->Body='<h1 align=center>Name :'.$_POST['fname'].'<br>Email :'.$_POST['email'].'<br>Phone :'.$_POST['phone'].'</h1>';

    if(!$mail->send()){
      $result="Something went wrong. Please try again.";
    }
    else
    {
      $result="Thanks ".$_POST['fname']."for contacting us. We'll get back to you soon!";
    } 
  }
?>



