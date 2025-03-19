<!-- register_process.php -->
<?php
session_start();

// Database connection
$host = "localhost";
$username = "root";
$password = "";
$database = "handcricket";

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = trim($_POST['username']);

    if (!empty($user)) {
        // Check if username already exists
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $user);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Username already taken
            header("Location: register.php?message=Username already exists&type=error");
            exit();
        } else {
            // Insert new user with current timestamp
            $sql = "INSERT INTO users (username) VALUES (?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $user);

            if ($stmt->execute()) {
                header("Location: register.php?message=Registration successful!&type=success");
                exit();
            } else {
                header("Location: register.php?message=Error registering user&type=error");
                exit();
            }
        }
    } else {
        header("Location: register.php?message=Username is required&type=error");
        exit();
    }
}
$sql = "INSERT INTO users (username, testscore) VALUES (?, 0)";


$conn->close();
?>

