<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>User Profile</title>
</head>
<body>


<h3 >WELCOME TO DASHBOARD</h3>
        
    
<h4>User Profile</h4>

<form action="/update_profile" method="post">
  <label for="age">Name:</label>
  <input type="text" id="name" name="name" value="">
  <br><br>

  <label for="age">Age:</label>
  <input type="number" id="age" name="age" value="">
  <br><br>

  <label for="dob">Date of Birth:</label>
  <input type="date" id="dob" name="dob">
  <br><br>

  <label for="contact">Contact:</label>
  <input type="text" id="contact" name="contact">
  <br><br>

  <input type="submit" value="Update Profile">
</form>
<br>
<div>
<a href="logout.php" class="btn btn-warning">Logout</a>
</div>
</body>
</html>