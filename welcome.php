<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hANd cricket</title>
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRaWHssNQzdAUIdYvFQm-tIVCikHpOxTURvKw&s" type="image/x-icon">
    <style>
        h1{
            color: chartreuse;
            text-align: center;
            font-size: 70px;
        }
        .ready{
            position: fixed;
            left: 30%;
            top: 20%;
        }
        .logout-btn {
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: red;
            color: white;
            padding: 10px 20px;
            border-radius: 20px;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
        }
        .logout-btn:hover {
            background-color: darkred;
        }
        body {
            background-image: url(https://media.istockphoto.com/id/518752243/photo/cricket-player-batsman-silhouette.jpg?s=612x612&w=0&k=20&c=LRKp8KcgXpe3ArBMHNNLhE-Yo1k1TFt4PpYmSbuRDGQ=);
            background-repeat: no-repeat;
            background-size: 700px, auto;
            background-blend-mode: soft-light;
        } 
        @media (min-device-width: 600px) {
            body {
                background-image: url(https://img.freepik.com/free-vector/hand-drawn-ipl-cricket-illustration_23-2149213601.jpg);
                background-size: cover;
                background-repeat: no-repeat;
            }
            .ready {
                position: fixed;
                left: 40%;
                top: 50%;
            }
        }
    </style>
</head>
<body>
    <a href="./logout.php" class="logout-btn">Logout</a>

    <h1>
        𝗵<span style="color:blue;">𝗔𝗡</span>𝗱 𝗰𝗿𝗶𝗰𝗸𝗲𝘁
    </h1>
    <div class="ready">
        <a href="./rules.php">
            <button style="color:white; background-color:rgb(237, 9, 176); border-radius: 70px; width: 180px; height: 60px; cursor: pointer;">
                <span style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 30px;"> Ready </span>
            </button>
        </a>
    </div>
</body>
</html>