<?php

//banner function
function banner() {
    echo "<div class=\"banner\">";
    echo "Jeopardy";
    echo "</div>";
}

//check if file is opened and not empty
function checkFile($filename) {
    if ($filename) {
        //echo 'CSV file opened successfully' . "\n";
        return true;
    } else {
        echo 'Unable to open the CSV file.' . "\n";
    }
}

function makArr($f) {
    checkFile($f);
    // Define $nArr before the loop
    $nArr = array();
    while (($row = fgetcsv($f)) !== false) {
        // $row is an array containing the fields in the current CSV line
        $nArr[] = $row;
        //print_r($row);
    }
    return $nArr;
}

//display question
function display($q, $a, $v) {
    echo "<br><br>";
    echo "<h1>Question: ".$q."</h1><br>";
    if(isset($_POST['showAnswer'])){ //if show answer is clicked
        echo("<h2>What is ".$a."</h2><br>");
    }
    if(isset($_POST['team1'])){ //if team1 is clicked
        $_SESSION['score1'] = $_SESSION['score1'] + $pointVal;
        header("location:index.php");
    }
    if(isset($_POST['team2'])){ //if team2 is clicked
        $_SESSION['score2'] = $_SESSION['score2'] + $pointVal;
        header("location:index.php");
    }
    if(isset($_POST['incorrect'])){ //if incorrect is clicked
        header("location:index.php");
    }
}

//making points array
//may not need this
function makPointsArry() {
    $pointsArry = array();
    for ($i = 0; $i < 5; $i++) {
        $val = $i + 1 * 100;  
        $pointsArry[] = points($i);
    }
    return $pointsArry;
}

//update points
//may want to include add/sub paramenter = operation = op
//need a place to store team1 and team2 points = t1, t2
//current score is stored in session
function updateScore($row, $op, $team) {
    $curr = $team; //current score
    $pointVal = ($row+1)*100; // value of question
    if ($op == "add") {
        $curr = $curr + $pointVal;
    } else if ($op == "sub") {
        $curr = $curr - $pointVal;
    }
    return $curr;
}

//display points
function displayPoints($t1, $t2) {
    echo "<div id = \"points\">";
    echo "<h2>Team 1: ".$t1."</h2><br>";
    echo "<h2>Team 2: ".$t2."</h2><br>";
    echo "</div>";
}

//reads and returns questions in array
function readDataQ() {

    //paths to questions bc of error earlier
    //absolute paths to and question files
    $qPath = __DIR__ . '\questions.csv';
    //
    //checking if paths are correct
    //echo "Absolute Path: $aPath\n";
    //
    //opening the file
    $qFile = fopen($qPath, 'r');
    //
    //making qu arrays
    $qu = makArr($qFile);
    return $qu;
}

//reads and returns answers in array
function readDataA() {

    //paths to answers bc of error earlier
    //absolute paths to answer files
    $aPath = __DIR__ . '\answers.csv';
    //
    //checking if paths are correct
    //echo "Absolute Path: $aPath\n";
    //
    //opening the file
    $aFile = fopen($aPath, 'r');
    //
    //making ans arrays
    $ans = makArr($aFile);
    return $ans;
    }





?>


