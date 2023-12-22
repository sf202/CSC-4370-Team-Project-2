<?php session_start();


// Check if the keys are set in the session
$score1 = isset($_SESSION['score1']) ? $_SESSION['score1'] : 0;
$score2 = isset($_SESSION['score2']) ? $_SESSION['score2'] : 0;
?>

<html>
<head>
    <link rel="stylesheet" href="index.css">
</head>
<body>  
            <div class="left">
                <h3>Team One: <?php echo $score1; ?></h3>
            </div>
            <div class="right">
                <h3>Team Two: <?php echo $score2; ?></h3>
            </div>
        </body>
    </div>
</body>
</html>

<?php
include("jeopardy.html");
?>
