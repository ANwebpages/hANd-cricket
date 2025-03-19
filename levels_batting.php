<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hANd cricket</title>
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRaWHssNQzdAUIdYvFQm-tIVCikHpOxTURvKw&s" type="image/x-icon">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        .button-container {
            display: flex;
            flex-direction: column;
            gap: 10px;
            align-items: center;
        }
        .level-button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .level-button:hover {
            background-color: #45a049;
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
    </style>
</head>
<body>
    <div>
        <a href="./selection.php">
            <button class="back">Back</button>
        </a>
    </div>
    <div class="button-container">
        <a href="./testcricket.php"><button class="level-button">Test Cricket</button></>
        <a href="./game_batting1.php"><button class="level-button">Level 1</button></a>
        <a href="./game_batting2.php"><button class="level-button">Level 2</button></a>
        <a href="./game_batting3.php"><button class="level-button">Level 3</button></a>
        <a href="./game_batting4.php"><button class="level-button">Level 4</button></a>
        <a href="./game_batting5.php"><button class="level-button">Level 5</button></a>
        <a href="./game_batting6.php"><button class="level-button">Level 6</button></a>
        <a href="./game_batting7.php"><button class="level-button">Level 7</button></a>
        <a href="./game_batting8.php"><button class="level-button">Level 8</button></a>
        <a href="./game_batting9.php"><button class="level-button">Level 9</button></a>
        <a href="./game_batting10.php"><button class="level-button">Level 10</button></a>
    </div>

</body>
</html> 
