<?php
    session_start();

    include "common.php";

    $qu = readDataQ();
    $ans = readDataA();

    $row = substr((float)$_GET['id'],0,1)-1;
    $col = substr((int)$_GET['id'],1,1)-1;

    $bqu = $qu[(int)$row][(int)$col];
    $bans = $ans[(int)$row][(int)$col];

    //get points value of button
    $pointVal = ($row+1)*100;

    display($bqu, $bans, $pointVal);

    if(isset($_POST['team1'])){
        $_SESSION['score1'] = $_SESSION['score1'] + $pointVal;
        header("location:index2.php");
    }
    if(isset($_POST['team2'])){
        $_SESSION['score2'] = $_SESSION['score2'] + $pointVal;
        header("location:index2.php");
    }
    if(isset($_POST['incorrect'])){
        header("location:index2.php");
    }

?>

<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="questionCSS.css">
</head>
<body>
<div id = buttons>
    <form method="post" action="">
        <input type="submit" name="team1" value="Team 1 + <?php echo $pointVal; ?>">
        <input type="submit" name="team2" value="Team 2 + <?php echo $pointVal; ?>">
        <input type="submit" name="incorrect" value="Incorrect Answer">
    </form>
    <form method="post" action="" onclick="this.style.display='none'">
        <input type="submit" name="showAnswer" value="Show Answer">
    </form>
</body>
</html>