
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Jeopardy!</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
  
<?php
include 'common.php';
$uName = $_GET["username"];
$pWord = $_GET["password"];
$_SESSION["UserInfo"][0] = $uName;
$_SESSION["UserInfo"][1] = $pWord;

saveUser($uName,$pWord);
?>
  
  
<h1> Thank You For Registration! </h1><br>
<a href="login.php"><button class="button"><p>Return to Main Menu</p></button></a>
</body>
</html>