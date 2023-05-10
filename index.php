<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная Страница</title>
    <link rel="stylesheet" href="css/main.css">
    <script src="js/Slider.js" defer></script>
    <link type="image/x-icon" href="img/favicon.ico" rel="shortcut icon">
</head>
</html>

<body>
    <?php include 'header.php';?>

    <main class="main">

        <div class="main__Best">
            <img class="main__ArrowLeft" src="main_img/ArrowLeft.png" alt="TRAP Games"></img>
            <ol class="selector__list">
                <li class="selector__item">
                    <a href="Game/Game.php" class="main_BestGameLinkActive">
                        <img  class="main_BestGameImage" src="main_img/GTA.png" alt="TRAP Games"></img>
                        <p class="main__BestHeadline">Grand Theft Auto V</p>
                    </a>
                </li>
                <li class="selector__item">
                    <a href="Game/Game.php" class="main_BestGameLinkActive">
                        <img  class="main_BestGameImage" src="main_img/gachi.png" alt="TRAP Games"></img>
                        <p class="main__BestHeadline">Gachi Dungeon Master</p>
                    </a>
                </li>
                <li class="selector__item">
                    <a href="Game/Game.php" class="main_BestGameLinkActive">
                        <img  class="main_BestGameImage" src="main_img/WEDNESDAY!.png" alt="TRAP Games"></img>
                        <p class="main__BestHeadline">Wednesday</p>
                    </a>
                </li>
            </ol>
            <img class="main__ArrowRight" src="main_img/ArrowRight.png" alt="TRAP Games"></img>
        </div>

        <img class="main__Line" src="main_img/Line.png" alt="">

        <h1 class="main__GameFor">Игры для настоящих мужчин</h1>

        <div class="main__Container">
            <div class="main__Game">
                <a href="Game/Game.php">
                    <img class="main__Game_img" src="main_img/Game 1.png" alt="TRAP Games"></img>
                    <div><p class="main__GameHeadline">Dying Light 2</p></div>
                </a>
            </div>

            <div class="main__Game">
                <a href="Game/Game.php">
                    <img class="main__Game_img" src="main_img/Game 2.png" alt="TRAP Games"></img>
                    <div><p class="main__GameHeadline">Cuphead</p></div>
                </a>
            </div>

            <div class="main__Game">
                <a href="Game/Game.php">
                    <img class="main__Game_img" src="main_img/Game 3.png" alt="TRAP Games"></img>
                    <div><p class="main__GameHeadline">Minecraft</p></div>
                </a>
            </div>

            <div class="main__Game">
                <a href="Game/Game.php">
                    <img class="main__Game_img" src="main_img/Game 4.png" alt="TRAP Games"></img>
                    <div><p class="main__GameHeadline">Counter-Strike: Global Offensive</p></div>
                </a>
            </div>

            <div class="main__Game">
                <a href="Game/Game.php">
                    <img class="main__Game_img" src="main_img/Game 5.png" alt="TRAP Games"></img>
                    <div><p class="main__GameHeadline">Winx Club</p></div>
                </a>
            </div>

            <div class="main__Game">
                <a href="Game/Game.php">
                    <img class="main__Game_img" src="main_img/Game 6.png" alt="TRAP Games"></img>
                    <div><p class="main__GameHeadline">Among Us</p></div>
                </a>
            </div>
        </div>
    </main>

    <?php include 'footer.php';?>
</body>
</html>
