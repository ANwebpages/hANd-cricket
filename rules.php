<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hANd cricket</title>
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRaWHssNQzdAUIdYvFQm-tIVCikHpOxTURvKw&s" type="image/x-icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: snow;
            text-align: center;
            color: white;
        }
        .container {
            max-width: 600px;
            padding: 20px;
            background-color: royalblue;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .back {
            position: absolute;
            top: 10px;
            left: 10px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: crimson;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }
        .back:hover {
            background-color: darkred;
        }
        h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        ol {
            text-align: left;
            font-size: 20px;
        }
        li {
            margin: 10px 0;
        }
        .start-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 15px 30px;
            border: none;
            border-radius: 50px;
            background-color: rgb(2, 164, 2);
            color: white;
            font-size: 20px;
            cursor: pointer;
            transition: 0.3s;
        }
        .start-btn:hover {
            background-color: darkgreen;
        }
        @media (max-width: 600px) {
            .container {
                width: 90%;
            }
            h1 {
                font-size: 28px;
            }
            ol {
                font-size: 18px;
            }
            .start-btn {
                font-size: 18px;
                padding: 12px 25px;
            }
        }
    </style>
</head>
<body>
    <a href="./welcome.php">
        <button class="back">Back</button>
    </a>
    <div class="container">
        <h1><u>Game Rules</u></h1>
        <ol>
            <li>Computer plays with you.</li>
            <li>Select batting or bowling.</li>
            <li>If your choice and computer choice are the same, the batsman is out.</li>
            <li>Runs will be counted.</li>
        </ol>
        <a href="./selection.php">
            <button class="start-btn">Let's Start</button>
        </a>
    </div>
</body>
</html>