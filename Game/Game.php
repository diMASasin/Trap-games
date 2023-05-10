<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RobotRunner</title>
    <link rel="stylesheet" href="css/Game.css">
    <script src="js/like.js" defer></script>
    <link type="image/x-icon" href="../img/favicon.ico" rel="shortcut icon">
</head>
<body>
    <?php include '../header.php';?>

    <main class="main">
        <iframe src="https://dimasasin.github.io/RobotRunnerVK_DirectGames/" class="main__gameFrame">Ваш браузер не поддерживает плавающие фреймы!</iframe>
        <h1>Robot Runner</h1>
        
        <div class="main__like"></div>
        <p class="main__amount">198</p>
        <div class="main__dislike"></div>

        <p class="main__comments">Комментарии</p>
        
        <div class="border">
            <input placeholder="Введите текст комментария..." class="main__input"></input>
            <a class="EnterArrow" href="#"><img src="img/EnterArrow.png" alt=""></a>
        </div>

        <div class="main__comment">
            <p class="main__comment__name">Вася Пупкин 228</p>
            <p class="comm">Лучшая игра в мире. Как же я люблю в нее играть :0 :)))))</p>
            <div class="main__comment__line"> <img src="img/LineComments.png" alt="comment"></div>
        </div>

        <div class="main__comment">
            <p class="main__comment__name">Павел Шампанов</p>
            <p class="comm">Люблю эту игру меньше чем Brawl Stars, но это не делает её плохой, она прекрасна :0 </p>
            <div class="main__comment__line"> <img src="img/LineComments.png" alt="comment"></div>
        </div>
    </main>

    <?php include '../footer.php';?>
</body>
</html>