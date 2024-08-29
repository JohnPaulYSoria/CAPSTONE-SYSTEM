
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
  <div id="menu" class="menu">
    <a href="#" class="closebtn" onclick="closeMenu()">&times;</a>
    <a href="#">Admin</a>
    <a href="#">Utility</a>
    <a href="#">Monitoring</a>
    <a href="./index.html">Logout</a>
  </div>
  
  <span class="openbtn" onclick="openMenu()">&#9776;</span>

  <div class="dashboard-container">
  </div>

  <script src="../js/admin-js.js"></script>
</body>
</html>
