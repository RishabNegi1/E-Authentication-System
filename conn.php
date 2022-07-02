<?php
    include('conndb.php');
	$Username =mysqli_real_escape_string($conn,$_POST['Username']);
	$Email =mysqli_real_escape_string($conn,$_POST['Email']);
	$Password =mysqli_real_escape_string($conn,$_POST['Password']);

	$query1="SELECT * FROM registration WHERE Email='$Email'";
	$result=mysqli_query($conn,$query1);
	if(mysqli_num_rows($result)>0)
		{
			echo "Email-ID already in use";
		}

	$query="insert into registration (Username,Email,Password) values('$Username', '$Email', '$Password')";
	$res=mysqli_query($conn,$query);
	if($res)
	{
		header('location:login.html');
	}
	else{
		echo "not inserted";
	}

?>