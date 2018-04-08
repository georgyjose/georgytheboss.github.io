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
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="loginstyle.css">
		<script src="loginjs.js"></script>

	</head>
	<body>
		<div class="login-page">
			<div class="form">
				<form class="login-form" method="post">
					<input type="text" name="username" placeholder="Username" id="un" />
					<input type="password" name="password" placeholder="Password" id="pw" />
					<input type="submit" name="submit" style="color: white; background-color: #FFA726" value="LOGIN" onclick="IsLoginEmpty();" />
					<!-- <button onclick="IsLoginEmpty();">login</button> -->
				</form>
				<p class="message">Not registered? <a href="register.php">Create an account</a></p>
			</div>
		</div>
	</body>
</html>

<?php
if(isset($_POST['submit'])){
	$us=$_POST['username'];
	$pa=$_POST['password'];
	
	$rs=mysqli_query($conn,"select * from wt_website.login where name='$us' and password='$pa' ");
	if($q=mysqli_fetch_array($rs)){
		?>
		<script>
			alert("Login Successful");
			window.location="about.html";
		</script>
	<?php
	}
	else{
		?>
		<script>
			alert("Login failed");
			</script>
		<?php
	}
}
?>