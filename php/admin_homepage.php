<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Admin Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
    color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
    background-color: #1abc9c; /* Green */
    color: #ffffff;
  }
  .bg-2 { 
    background-color: #474e5d; /* Dark Blue */
    color: #ffffff;
  }
  .bg-3 { 
    background-color: #ffffff; /* White */
    color: #555555;
  }
  .bg-4 { 
    background-color: #2f2f2f; /* Black Gray */
    color: #fff;
  }
  .container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
  }
.navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background: #ddd;
  color: black;
}
  </style>
</head>
<body>

<!-- Navbar -->

<div class="navbar">
  <ul>
  <?php 
  session_start();
  if(isset($_SESSION['email']))
  {
   echo '<li style="float:right"><a class="active" href="http://localhost/verstka/php/logout.php">Logout</a></li>';
  echo '<li style="float:right"><a class="active" href="#">'.$_SESSION['email'].'</a></li>';
  }
 ?>
</ul>
  <a href="#" >Домой</a>
  <a href="http://localhost/verstka/php/admin_inputpage.php">Ввести данные</a>
  
</div>

<!-- First Container -->

<div class="container-fluid bg-1 text-center">
  <h3 class="margin">Здравствуйте!</h3>
  <img src="../img/admin_page_first1.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
  <h3>Вас приветсвует страница админа</h3>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin">Что вы можете тут сделать?</h3>
  <p>В данной странице вы можете редактировать данные для вашего ресторана. Менять цены на вашу еду, вводить новые виды еды. Вы можете это делать быстро и водин клик для этого вам нужно перейти по верхней навигации. В самой верхней часи стоит две кнопки "Ввести данные" и "Посмотреть данные". Переходя по ним вы можете редактировать дынные и видеть свои изменения и полность все ваши продукты.</p>
 
</div>


</body>
</html>
