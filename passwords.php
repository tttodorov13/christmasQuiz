<?php
header("Content-Type: text/html; charset=utf-8");
$link=mysqli_connect("localhost","christmas_quiz", "christmas_quiz","christmas_quiz");
	if (mysqli_connect_errno($link))
 	 {
 		 echo "Failed to connect to My DataBase: " . mysqli_connect_error();
 	 }

$user = $_REQUEST['Username'];
$pass = $_REQUEST['Password'];

$query = "SELECT * FROM accounts WHERE username = '".$user."' AND password = '".$pass."'";
$result = mysqli_query($link,$query);
$count=mysqli_num_rows($result);
if($count == 1)
	{
			session_start();
			$_SESSION['logged_in'] = true;
			$_SESSION['username'] = $user;
			$_SESSION['password'] = $pass;
			header("location:home-page.php");
	}
else
	header("Location:index.php?message=Wrong username or password.");

mysqli_close($link);



?>