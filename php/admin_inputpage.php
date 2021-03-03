<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>

<style>
  body {margin:0;}
* {
  box-sizing: border-box;
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
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=number], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=date], select, textarea {
  width: 100%;
  padding: 12px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
p{
  margin-top: 100px;
}
.margin_for_table{
  margin-left: 300px;
}



/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
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
  <a href="http://localhost/verstka/php/admin_homepage.php">Домой</a>
  <a href="#">Ввести данные</a>

</div>

<p> </p>


<div class="container">
  <form action="http://localhost/verstka/php/input.php" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="fname">Название еды</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="type_food_name" placeholder="Введите полное название еды">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Цена</label>
      </div>
      <div class="col-75">
        <input type="number" id="lname" name="type_food_price" placeholder="Введите цену">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Ключеовое слово/вид еды</label>
      </div>
      <div class="col-75">
        <select id="eda" name="food_name">
          <option value="Донер">Донер</option>
          <option value="Суши">Суши</option>
          <option value="Пица">Пица</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Дата внесенных изменений</label>
      </div>
      <div class="col-75">
        <input type="date" id="date" name="date_of_insert" placeholder="Введите дату последних изменений">
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
 

<?php 
          $mysqli = new mysqli('localhost','root','','mydatabase') or die(mysqli_error($mysqli));
          $result = $mysqli->query("SELECT * FROM type_food") or die($mysqli->error);
        ?>


  
         <div class="row justify-content-center margin_for_table" >
            <tabel class = "table">

               
            <tr>
                <th class="thtd">Название еды---</th>
                <th class="thtd">Цена---</th>
                <th class="thtd">Ключеовое слово/вид еды---</th>
                <th class="thtd">Дата внесенных изменений</th>
            </tr>
                <br>
          <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td class="thtd"><?php echo $row['type_food_name']."<br>"; ?></td>
                <td class="thtd"><?php echo $row['type_food_price']."<br>"; ?></td>
                <td class="thtd"><?php echo $row['food_name']."<br>"; ?></td>
                <td class="thtd"><?php echo $row['date_of_insert']."<br>"; ?></td>
                 <td>
                    
                    
                      <a href= "http://localhost/verstka/php/delete.php?delete=<?php echo $row['type_food_id']?>"
                        class= "btn btn-danger" >Delete</a>
                </td>
           
                <td class="thtd"><br><br></td>
            </tr>
          <?php endwhile; ?>
            </tabel>
           <div>
</body>
</html>
