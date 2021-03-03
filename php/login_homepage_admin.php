<?php
 session_start();
//connecting database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//echo $userid.' - '.$pwd;
//Take the values from the Form
 if (isset($_POST['login'])){
$email=$_POST['email'];
$password=$_POST['password'];

$email=strtolower($email);//converts into upper case

// $path = '/'

// setcookie("path", $path);
$sql = "SELECT * from restaurant
       where lower(email)='$email' and password='$password'";

$rw = mysqli_query($conn,$sql);
$total_rows=mysqli_num_rows($rw);
}
setcookie("email", $email);
if ( $total_rows> 0) {
    echo $email."-successfully Logged in";
	$_SESSION['email']=$email;
	header('Location:http://localhost/verstka/php/admin_homepage.php');
	
} else {
    echo "Error: " . "Email/password incorrect";
}

$conn->close();
?>