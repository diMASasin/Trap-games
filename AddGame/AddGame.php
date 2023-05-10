<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавление Игры</title>
    <link rel="stylesheet" href="css/main.css">
    <link type="image/x-icon" href="../img/favicon.ico" rel="shortcut icon">
</head>
</html>

<body>
    <?php include '../header.php';?>

    <main class="main">
        <div class="main__Headline"><h1>Загрузить игру</h1></div>

        <input placeholder="Введите название" class="main__inputField main__enterName"></input>

        <input placeholder="Ссылка на iFrame" class="main__inputField main__linkiFrame"></input>

        <div class="main__Cover">
            <div class="main__CoverUploading">
                <div><label class="main__coverLabel">Обложка</label></div>
                <div><input type="file" class="main__ChooseFile"></input></div>
            </div>
            <img src="img/NoImage.png" alt="TRAP Games" class="main__coverGame"></img>
        </div>

        <button class="main__button">Добавить игру</button>

    </main>

    <?php include '../footer.php';?>
</body>