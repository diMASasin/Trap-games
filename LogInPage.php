<?php
    header('Content-Type: text/html;charset=utf-8');
    $host = 'localhost';
    $db_name = 'masasick_trap';
    $user = 'masasick_trap';
    $password = 'Ltma*8mh';
        
    $connection = mysqli_connect($host, $user, $password, $db_name);

    if(isset($_POST['submit']))
    {
        $query = mysqli_query($connection,"SELECT ID, Password FROM
        Users WHERE Mail='".$_POST['email']."' LIMIT 1");

        $data = mysqli_fetch_assoc($query);
        $err;
        
        if($data['Password'] === $_POST['password'])
        {
            setcookie('ID', $data['ID'], time()+60*60*24*30, '/');
            echo $_COOKIE['ID'];
            header("Location: /index.php"); exit();
        }
        else
        {
            $err = 1;
        }
    }
    //$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <link rel="stylesheet" href="css/LogIn.css">
    <link type="image/x-icon" href="../img/favicon.ico" rel="shortcut icon">
</head>
<body>
    <main class="main">
        <span class="main__LogInWindow">
            <a href="/index.php">
                <img src="../img/Logo.png" alt="Logo">
            </a>
            <a href="/index.php" class="main__LogoText">
                <img src="../img/LogoText.png" alt="LogoText">
            </a>

            <p>Войти с помощью учетной<br>записи <b>TrapGames</b></p>
            <form method="POST">
                <input name="email" required placeholder="Адрес электронной почты" class="main__input main__emailInput">
                <input name="password" type="password" required placeholder="Пароль" class="main__input main__passwordInput">
                <input name="submit" type="submit" value="ВОЙТИ ПРЯМО СЕЙЧАС" class="main__button"></input>
            </form>
            <?php
            if($err === 1)
                echo '<p class="main__userAlreadyExist">Неверная почта/пароль!</p>';
            ?>
            <p class="main__HaveNoAccount">У вас нет учетной записи <b>TrapGames?</b></p>
            <a href="../Registration/RegistrationPage.php" class="main__Register">Зарегистрироваться</a>
        </span>
    </main>
</body>