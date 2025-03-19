<!-- login.php -->
<?php
session_start(); // Start the session

// Database connection (Update with your credentials)
$host = "localhost"; 
$username = "root"; // Default MySQL username
$password = ""; // Default MySQL password
$database = "handcricket"; // Your database name

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = trim($_POST['username']); // Get username from form

    if (!empty($user)) {
        // Prepare and execute SQL query
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $user);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Username exists, login successful
            $_SESSION['username'] = $user; // Store session
            header("Location: welcome.php"); // Redirect to welcome page
            exit();
        } else {
            // Username does not exist, show error
            header("Location: index.php?error=Invalid Username");
            exit();
        }
    } else {
        header("Location: index.php?error=Username is required");
        exit();
    }
}

$conn->close();
?>
