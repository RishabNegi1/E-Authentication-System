<?php 
session_start();
$sotp=$_POST['sotp'];
if(isset($_POST['submit']))
{
    if($_SESSION['otp']==$sotp)
    {
        header('location:alertmsg.php');
    }
    else{
        echo "wrong otp";
    }
}
?>
