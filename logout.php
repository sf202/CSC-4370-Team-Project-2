<?php 
include("common.php");
session_start(); /* Starts the session */

// Check if the scores are set in the session
$score1 = isset($_SESSION['score1']) ? $_SESSION['score1'] : 0;
$score2 = isset($_SESSION['score2']) ? $_SESSION['score2'] : 0;
$score3 = max($_SESSION['score1'], $_SESSION['score2']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["username"];
}
// Prepare the data to be written to the file
$data = $_SESSION["username"] . "," . $score3 . ";\n";

// Write data to the leaderboard.txt file
$filename = 'leaderboard.txt';
$file = fopen($filename, 'a'); // Open the file in append mode
if ($file) {
    fwrite($file, $data);
    fclose($file);
} else {
    echo "Unable to open file.";
}

session_destroy(); /* Destroy started session */
header("location:login.php");
exit;
?>
