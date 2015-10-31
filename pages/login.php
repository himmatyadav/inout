<?php
session_start();
/* If form is submitted then authenticate it*/
if(isset($_POST['submit'])) {

	$username=$_POST['username'];
	$password=$_POST['password'];
	//$sha1=sha1($password);
	
	$conn =mysqli_connect("localhost","root","","inout");
	/* Check connection */
	if(mysqli_connect_error()) {
		echo "Connection failed";
		printf("Error : %s",mysqli_connect_error());
	} 
	/* Check login  correctness*/
	//$password=sha1($password);
	$query="SELECT * FROM admin WHERE username='$username' AND password='$password'";
	$result=mysqli_query($conn , $query);

	while($row = mysqli_fetch_array($result, MYSQL_ASSOC))
	{
		$_SESSION['username']=$row['username'];
		$_SESSION['userID']=$row['userID'];
		$_SESSION['city']=$row['city'];
		//echo $_SESSION['userID'] . " " . $_SESSION['username'];
		if($_SESSION['username']=="admin")
			header("location:adminbase.php");
		else
			header("location:login.html");
	}

	echo "<script> alert('Username or password is incorrect');</script>";
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
	
	//header("location:index.php");
	//echo '<script type="text/javascript"> alert("Username or Password is incorrect!") </script>';

	/*
	$rows=mysqli_num_rows($result);
	if($rows==1) {
		$_SESSION['username']=$username;
		//$_SESSION['password']=$password;
		//$_SESSION['userID']=$rows['userID'];

		echo $_SESSION['userID'] . " " . $_SESSION['username'];
		
		//printf("Welcome %s\n",$username);
		//printf("Successfully logged in");
		//header("location:../pandit/home.php");
	} else {
		alert("Username or password is incorrect");
		//printf("Login Again ");
		//echo "<a href='index.php'>Login</a>";
		header("location:index.php");
	}
	*/
}

?>