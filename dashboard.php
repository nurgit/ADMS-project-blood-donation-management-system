<?php
	//session_start();
	if(!isset($_COOKIE['loggedinuser']))
	{
		header("Location:index.php");
	}
?>

<html>
	<body>
		Welcome <?php echo $_COOKIE['loggedinuser'];?>
	</body>
</html>