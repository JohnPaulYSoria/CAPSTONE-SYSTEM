<?php
session_start();


if(!isset($_SESSION["username"]))
{
	header("location:login.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="../css/style-admin.css">
</head>

<body>
  <nav class="navbar">
      <div class="user-profile">
        <span class="username"> <?php echo $_SESSION["username"] ?> </span>
        <div class="dropdown">
          <button class="dropdown-btn">▼</button>
          <div class="dropdown-content">
            <a href="#">Profile</a>
            <a href="#">Settings</a>
            <a href="./landing-page.php">Logout</a>
          </div>
        </div>
      </div>
    </nav>

  <div id="menu" class="menu">
    <a href="#" class="closebtn" onclick="closeMenu()">&times;</a>
    <a href="#">Home</a>
    <a href="#">Reserve</a>
  </div>
  
  <span class="openbtn" onclick="openMenu()">&#9776;</span>

  <div class="dashboard-container">
  </div>

  <script src="../js/admin-js.js"></script>
</body>
</html>


<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>