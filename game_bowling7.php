<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hANd Cricket Game</title>
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
    #popupImagewin {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-width: 80%;
            max-height: 80%;
            padding: 20px;
            z-index: 1000;
        }
        #popupImagelose {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-width: 80%;
            max-height: 80%;
            padding: 20px;
            z-index: 1000;
        }
        #popupImagelose {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-width: 80%;
            max-height: 80%;
            padding: 20px;
            z-index: 1000;
        }
        #popupImagelose {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-width: 80%;
            max-height: 80%;
            padding: 20px;
            z-index: 1000;
        }
        #popupImagetied {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-width: 80%;
            max-height: 80%;
            padding: 20px;
            z-index: 1000;
        }



        #overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color:  rgb(0, 0, 0, 0.7);
            z-index: 999;
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
        <a href="./levels_bowling.php">
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
    <p style="font-size: 30px;" >You are bowling.</p>
    <p style="font-family: fantasy;font-size:30px;">LEVEL 7</p>
    <p style="font-size: 30px;"> Your score = 40 </p>
    <div class="score">
        <p>Computer Score: <span id="computerScore">0</span></p>
    </div>
    <div class="buttons">
        <button onclick="playGame(1)">1</button>
        <button onclick="playGame(2)">2</button>
        <button onclick="playGame(3)">3</button>
        <button onclick="playGame(4)">4</button>
        <button onclick="playGame(5)">5</button>
        <button onclick="playGame(6)">6</button>
    </div>
    <div class="result" id="result"></div>
    <div class="fresult" id="fresult"></div>
    <div id="overlay"></div>
    <img id="popupImagewin" src="./youwin.png">
    <img id="popupImagelose" src="./youlose.png">
    <img id="popupImagetied" src="./matcktied.png">
    <div id="duck" class="duck"></div>
    <div id="replay">
        <a href="./game_bowling7.php"><button class="replay-button">Replay</button></a>
    </div><br>
    <div>
        <a href="./game_bowling8.php"><button class="next-level">Next level</button></a>
    </div>



<script>
     function showPopup() {
            const popup = document.getElementById('popupvs');
            popupvs.style.display = 'flex';
            setTimeout(function() {
                popupvs.style.display = 'none'; 
            }, 1500); 
        }

        window.onload = showPopup;
    let computerScore = 0;
    playerScore=40;
    condition=312;

    function playGame(playerChoice) {
        const computerChoice = Math.floor(Math.random() * 6) + 1;

        if (computerChoice === playerChoice) {
            condition++;
            if (computerScore < playerScore)
            {   document.getElementById('result').innerText = `Computer is out! You chose ${playerChoice}. Computer chose ${computerChoice}. Final Score: ${computerScore}`;
                document.getElementById('fresult').innerText =`You win.`;
                showPopupImagewin()
                playGame=0;
            }
            else if (computerScore==playerScore)
            {   document.getElementById('result').innerText = `Computer is out! You chose ${playerChoice}. Computer chose ${computerChoice}. Final Score: ${computerScore}`;
                document.getElementById('fresult').innerText =`Match tied.`;
                showPopupImagetied()
                playGame=0;
            } 
        }
        else {
            computerScore += computerChoice;
            document.getElementById('computerScore').innerText = computerScore;
            document.getElementById('result').innerText = `You chose ${playerChoice}. Computer chose ${computerChoice}.`;
            if(playerScore < computerScore){
                condition++;
                document.getElementById('result').innerText = ` Final Score: ${computerScore}`;
                document.getElementById('fresult').innerText =`You lose.`;
                showPopupImagelose()
                playGame=0;
            }
    }
    if(computerScore==0)
        {
            document.getElementById('duck').innerText =`It's a DUCK.`;
        }
}
    
    
const showGifButton = document.getElementById('showGifButton');
    const popup = document.getElementById('popup');
    showGifButton.addEventListener('click', () => {
        if(condition===312){
      popup.style.display = 'flex';
      setTimeout(() => {
        popup.style.display = 'none'; 
      }, 1500);
      }
    });
      

function showPopupImagewin() {
            const popupImagewin = document.getElementById('popupImagewin');
            const overlay = document.getElementById('overlay');
            popupImagewin.style.display = 'block';
            overlay.style.display = 'block';
            setTimeout(() => {
        popupImagewin.style.display = 'none'; 
      }, 1500);
      setTimeout(() => {
        overlay.style.display = 'none'; 
      }, 1500);
        }

        document.getElementById('overlay').addEventListener('click', function () {
            const popupImagewin = document.getElementById('popupImagewin');
            const overlay = document.getElementById('overlay');
            popupImagewin.style.display = 'none';
            overlay.style.display = 'none';
        });

function showPopupImagelose() {
            const popupImagelose = document.getElementById('popupImagelose');
            const overlay = document.getElementById('overlay');
            popupImagelose.style.display = 'block';
            overlay.style.display = 'block';
            setTimeout(() => {
        popupImagelose.style.display = 'none'; 
      }, 1500);
      setTimeout(() => {
        overlay.style.display = 'none'; 
      }, 1500);
            
        }

        document.getElementById('overlay').addEventListener('click', function () {
            const popupImagelose = document.getElementById('popupImagelose');
            const overlay = document.getElementById('overlay');
            popupImagelose.style.display = 'none';
            overlay.style.display = 'none';
        });

function showPopupImagetied() {
            const popupImagetied = document.getElementById('popupImagetied');
            const overlay = document.getElementById('overlay');
            popupImagetied.style.display = 'block';
            overlay.style.display = 'block';
            setTimeout(() => {
        popupImagetied.style.display = 'none'; 
      }, 1500);
      setTimeout(() => {
        overlay.style.display = 'none'; 
      }, 1500);
            
        }

        document.getElementById('overlay').addEventListener('click', function () {
            const popupImagetied = document.getElementById('popupImagetied');
            const overlay = document.getElementById('overlay');
            popupImagetied.style.display = 'none';
            overlay.style.display = 'none';
        });
        
   

   
</script>

</body>
</html>