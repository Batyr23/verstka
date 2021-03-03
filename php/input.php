<?php
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

if(isset($_COOKIE['email'])){
  $email = $_COOKIE['email'];
}
  

$sql = "SELECT restaurant_id, city_name FROM restaurant WHERE email='$email'";
$result = $conn->query($sql); 
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $restaurant_id = $row["restaurant_id"];
    $city_name = $row["city_name"];
}}
  

$food_name = $_POST['food_name'];
$type_food_name = $_POST['type_food_name'];
$type_food_price = $_POST['type_food_price'];
$date_of_insert = $_POST['date_of_insert'];


$sql = "INSERT INTO type_food (restaurant_id,city_name,food_name, type_food_name,type_food_price,date_of_insert)
VALUES ('$restaurant_id','$city_name','$food_name', '$type_food_name', '$type_food_price',  '$date_of_insert')";

if ($conn->query($sql) === TRUE) {
 	header('Location:http://localhost/verstka/php/admin_inputpage.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>