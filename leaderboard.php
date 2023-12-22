<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Jeopardy!</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
 <div class = "leaderboard">
    <?php
    include "common.php";
    readLeaderBoard(); 
    ?>
    <br>

 </div>

 <div class="button-container">
        <button><a href="index.php">Main Menu</a></button>
    </div>
  </body>
</html>