<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hANd cricket</title>
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRaWHssNQzdAUIdYvFQm-tIVCikHpOxTURvKw&s" type="image/x-icon">
    <style>
        .rectangle1{
            border: blue 2px solid ;
            border-radius: 40px;
            border-width: 8px;
            height: 180px;
            width: 400px;
            background-image: url(https://www.wikihow.com/images/thumb/a/a4/Improve-Your-Batting-in-Cricket-Step-2-Version-6.jpg/v4-460px-Improve-Your-Batting-in-Cricket-Step-2-Version-6.jpg.webp);
            background-size: 260px;
            background-repeat: no-repeat;
            background-color: aqua;
            cursor: pointer

        }
        .rectangle2{
            border: blue 2px solid ;
            border-radius: 40px;
            border-width: 8px;
            height: 180px;
            width: 400px;
            background-image: url(https://i.pinimg.com/736x/e6/54/b1/e654b1b4e4543da6a725acab9488185f.jpg);
            background-repeat: no-repeat;
            background-color: aqua;
            background-size: 260px;
            cursor: pointer
        }
        .display{
            display: flex;
            flex-direction: column;
            gap: 40px;
            align-items: center;

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
        <a href="./rules.php">
            <button class="back">Back</button>
        </a>
    </div><br><br><br><br>
    <div class="display">
    <a href="./levels_batting.php">
        <button class="rectangle1">
             <span style="font-size: 30px;text-align:right;"><strong><pre>Batting</pre></strong></span>
        </button>
    </a>
    <a href="./levels_bowling.php">
        <button class="rectangle2">
            <span style="font-size: 30px;text-align:right;"><strong><pre>Bowling</pre></strong></span>
        </button>
    </a>

    </div>
</body>
</html>