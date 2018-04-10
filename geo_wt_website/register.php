<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "wt_website";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Register</title>
		<link rel="stylesheet" type="text/css" href="loginstyle.css">
		<script src="loginjs.js"></script>

	</head>

	<body>
		<div class="login-page">
			<div class="form">
				<form class="register-form" onsubmit="return reg()" method="post">
					<input type="text" name="name1" placeholder="Name" id="regun" />
					<input type="password" name="password" placeholder="Password" id="regpw" />
					<input type="password" name="password_conf" placeholder="Confirm Password" id="conf_regpw" />
					<input type="text" name="Email" placeholder="Email" id="regemail" />
					<input type="submit" name="submit" style="color: white; background-color: #FFA726" value="SUBMIT" onclick="IsRegisterEmpty();" />
				</form>
				<p class="message">Already registered? <a href="index.php">Sign In</a></p>
			</div>
		</div>
	</body>
</html>

<?php
if(isset($_POST["submit"]))
{
	$n=$_POST['name1'];
	$pa=$_POST['password'];
	$em=$_POST['Email'];
	// echo "insert into wt_website.login values('$n','$pa','$em')";
	$q=mysqli_query($conn,"insert into wt_website.login values('$n','$pa','$em')");
	if($q>0)
	{
		?>
					<script>
					// alert("Registration Successfull");
					// window.location="index.php";
					</script>
					<?php
	}
	else
	{
		?>
					<script>
					alert("not inserted");
					</script>
					<?php
	}
}
?>