<!-- testcricket.php -->
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
    die("User not logged in.");  // Ensure user is logged in
}

$username = $_SESSION['username'];

// Fetch the test score of the logged-in user
$sql = "SELECT testscore FROM users WHERE username = '$username'";
$result = $conn->query($sql);
$testscore = ($result->num_rows > 0) ? $result->fetch_assoc()["testscore"] : 0;

$conn->close();
?>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("testscore").innerText = <?php echo $testscore; ?>;
    });
</script>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hANd Cricket</title>
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRaWHssNQzdAUIdYvFQm-tIVCikHpOxTURvKw&s" type="image/x-icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        h1 {
            color: chartreuse;
            font-size: 60px;
        }
        .container {
            margin-top: 50px;
        }
        .score {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .buttons {
            margin-bottom: 20px;
        }
        .buttons button {
            padding: 10px 20px;
            font-size: 18px;
            margin: 5px;
            cursor: pointer;
            border-radius: 50%;
            border-color: black;
            border: solid;
            border-width: 3px;
            width: 60px;
            height:60px;
            background-color: rgb(107, 232, 107);
            font-size: 25px;
        }
        .replay-button{
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: orange;
            color:white;
            font-size: 16px;
            cursor: pointer;

        }

        .result {
            font-size: 24px;
            color: crimson;
        }
        .fresult{
            font-size: 50px;
            color: dodgerblue;
            font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;

        }
        .back{
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: red;
            color:white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
            position:fixed;
            top:10px;
            left:10px;

        }
        .duck{
            font-family:cursive;
            color:red;
            font-size: 40px;
        }
        .next-level{
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color:rgb(8, 135, 30);
            color:white;
            font-size: 16px;
            cursor: pointer

        }

        #popup {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      justify-content: center;
      align-items: center;
    }
    #popup img {
      max-width: 140%;
      max-height: 140%;
    }
        #popupvs {
            display: none; 
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            justify-content: center;
            background-color:  rgb(0, 0, 0, 0.7);
            align-items: center;
            z-index: 1000;
        }


        #popupvs img {
            max-width: 80%;
            max-height: 80%;
        }
    </style>
</head>
<body>
    <div>
        <a href="./levels_batting.php">
            <button class="back">Back</button>
        </a>
    </div>
    <div id="popupvs">
        <img src="./vs.png">
    </div>
<div class="container">
    <h1 >
        𝗵<span style="color:blue;">𝗔𝗡</span>𝗱 
𝗰𝗿𝗶𝗰𝗸𝗲𝘁
    </h1>
    <div id="newhighscore" style="font-size: 30px; color:rgb(220, 20, 60); font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;"></div>
    <p style="font-size: 30px;">High Score:<span id="testscore"></span></p>
    <p style="font-size: 30px;" >You are batting.</p>
    <p style="font-family: fantasy;font-size:30px;">TEST CRICKET</p>
    <div class="score">
        <p>Your Score: <span id="playerScore">0</span></p>
    </div>
    <div class="buttons">
        <button onclick="playGame(1)">1</button>
        <button onclick="playGame(2)">2</button>
        <button onclick="playGame(3)">3</button>
        <button onclick="playGame(4)">4</button>
        <button onclick="playGame(5)">5</button>
        <button id="showGifButton" onclick="playGame(6)">6</button>
        <div id="popup">
            <img src="./sixer.gif">
          </div>
    </div>
    <div class="result" id="result"></div>
    <div id="replay">
        <a href="./testcricket.php"><button class="replay-button">Replay</button></a>
    </div><br>


<script>
    function showPopup() {
            const popup = document.getElementById('popupvs');
            popupvs.style.display = 'flex';
            setTimeout(function() {
                popupvs.style.display = 'none'; 
            }, 1500); 
        }
        window.onload = showPopup;
        let playerScore = 0;
let isOut = false;  // Track if the player is out
let testscore = <?php echo $testscore; ?>;


function playGame(playerChoice) {
    if (isOut) return; // Stop the game if the player is already out

    const computerChoice = Math.floor(Math.random() * 6) + 1;

    if (playerChoice === computerChoice) {
        document.getElementById('result').innerText = `OUT! You chose ${playerChoice}. Computer chose ${computerChoice}. Final Score: ${playerScore}`;
        
        // Save score in the database
        fetch("update.php", {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: "score=" + playerScore
        });

        isOut = true;
        if(playerScore > testscore){
            testscore=playerScore;
            document.getElementById("testscore").innerText = testscore;
            document.getElementById('newhighscore').innerText =`NEW HIGH SCORE`;
            showHighScorePopup()
        }
    } else {
        playerScore += playerChoice;
        document.getElementById('playerScore').innerText = playerScore;
        document.getElementById('result').innerText = `You chose ${playerChoice}. Computer chose ${computerChoice}.`;

        // Show Sixer GIF only when player is NOT out
        if (playerChoice === 6) {
            popup.style.display = 'flex';
            setTimeout(() => {
                popup.style.display = 'none'; 
            }, 1500);
        }
    }
}
function showHighScorePopup() {
    const popup = document.createElement("div");
    popup.innerHTML = `<div style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background:rgb(255, 235, 205); padding: 20px; border-radius: 10px; font-size: 50px; font-weight: bold;">New High Score: ${testscore}!</div>`;
    document.body.appendChild(popup);
    
    setTimeout(() => { document.body.removeChild(popup); }, 4000);
}


      
   
</script>

</body>
</html>