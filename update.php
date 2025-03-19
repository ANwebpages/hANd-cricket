<!-- update.php -->
<?php
session_start();
$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "handcricket";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (!isset($_SESSION['username'])) {
    die("User not logged in.");
}

$username = $_SESSION['username'];
$score = isset($_POST["score"]) ? (int)$_POST["score"] : 0;

// Update the user's test score only if the new score is higher
$sql = "UPDATE users SET testscore = GREATEST(testscore, $score) WHERE username = '$username'";
$conn->query($sql);

$conn->close();
?>
