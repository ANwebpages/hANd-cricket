<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hANd cricket</title>
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRaWHssNQzdAUIdYvFQm-tIVCikHpOxTURvKw&s" type="image/x-icon">
    <h1>
        𝗵<span style="color:blue;">𝗔𝗡</span>𝗱 𝗰𝗿𝗶𝗰𝗸𝗲𝘁
    </h1>
    <style>
        h1{
        color: chartreuse;
        text-align: center;
        font-size: 70px;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            justify-content: center;
            display:flex;
            flex-direction:column;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        h2 {
            margin-bottom: 20px;
        }
        input {
            width: 90%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .login-btn {
            background-color: #28a745;
            color: white;
        }
        .signup-btn {
            background-color: #007bff;
            color: white;
        }
        button:hover {
            opacity: 0.8;
        }
        .error{
            background:#F2DEDE;
            color:#A94442;
            padding:10px;
            width:95%;
            border-radius:5px;
        }
    </style>
</head>
<body>
    <div class="login-container">
    <?php
if (isset($_GET['error'])) {
    echo "<p class='error'>" . htmlspecialchars($_GET['error']) . "</p>";
}
?>
    <form action="login.php" method="POST">
        <h2>Username*</h2>
        <input type="text" name="username" id="username" placeholder="Enter Username" required>
        <button type="submit" class="login-btn">Login</button>
    </form>
    <a href="./register.php"><button class="signup-btn">New User? Sign Up</button></a>
    </div>

</body>
</html>
