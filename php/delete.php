<?php 
   
  session_start();

   $mysqli = new mysqli('localhost','root','','mydatabase') or die(mysqli_error($mysqli));

  

   if(isset($_GET['delete'])){
     $type_food_id = $_GET['delete'];
     $mysqli->query("DELETE FROM type_food WHERE type_food_id=$type_food_id ") or die($mysqli->error());


     $_SESSION['message'] = "Record has been deleted";
     $_SESSION['msg_type'] = "danger";

     header("Location:http://localhost/verstka/php/admin_inputpage.php");
   }
?>