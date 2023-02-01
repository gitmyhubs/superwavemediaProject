<?php
include('config.php');
$otp=$_POST['otp'];
$query=mysqli_query($con ,"SELECT *FROM userdata WHERE otp='$otp'");
$result=mysqli_num_rows($query);

if($result){
    $query2=mysqli_query($con,"update userdata set status=1 where otp='$otp'");
    echo "Registrtion successfull...Please log in";
    ?>


    <script type="text/javascript">
    alert('registration successful..please log in');
    window.location.href='index.php';
    </script>
    <?php
}
else{
    echo "invalid otp";
}
?>