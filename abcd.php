<?php
	session_start();

	if(isset($_SESSION['Email']))
	{
			$Email=$_SESSION['Email']; 
	}
	else{
		$link='login.html';
		echo "you are accessing user page without logging in Please <a href='".$link."'>login here </a>";
		exit();
	}
?>
<html>
<head>
	<title>ABC</title>
</head>
<body>
	<h1>Welcome<?php echo $Email; ?></h1>
	<a href="logout.php"><button>Log_out</button></a>
</body>
</html>