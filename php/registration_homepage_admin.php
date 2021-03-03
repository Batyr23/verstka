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

//Take the values from the Form
$restaurant_name=$_POST['restaurant_name'];
$city_name=$_POST['city_name'];
$email=$_POST['email'];
$phone_number=$_POST['phone_number'];
$password=$_POST['password'];


$sql = "INSERT INTO restaurant (restaurant_name, email,phone_number,city_name,password)

VALUES ('$restaurant_name', '$email','$phone_number','$city_name','$password')";

if ($conn->query($sql) === TRUE) {
    echo "Successfully registered";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>