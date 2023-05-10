<?php
    header('Content-Type: text/html;charset=utf-8');
    $host = 'localhost';
    $db_name = 'masasick_trap';
    $user = 'masasick_trap';
    $password = 'Ltma*8mh';
        
    $connection = mysqli_connect($host, $user, $password, $db_name);
    
    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $login = $_POST['login'];
        $password = $_POST['password'];
        $err;
        
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
        {
            $same_email = mysqli_query($connection, "SELECT ID FROM Users WHERE Mail='".mysqli_real_escape_string($connection, $email)."'");
            if(mysqli_num_rows($same_email) === 0)
            {
                $same_login = mysqli_query($connection, "SELECT ID FROM Users WHERE Login='".mysqli_real_escape_string($connection, $login)."'");
                if(mysqli_num_rows($same_login) === 0)
                {
                    $sql = "INSERT INTO Users SET Mail='".$email."',
                    Login='".$login."', Password='".$password."'";
                    
                    mysqli_query($connection,$sql);
                    
                    header("Location: ../LogInPage.php"); exit();
                }
                else
                {
                    $err = 3; 
                }
            }
            else
            {
                $err = 2; 
            }
        }
        else
        {
            $err = 1;    
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="css/Registration.css">
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

            <p><b>Зарегестрируйтесь</b></p>
            <form method="POST">
                <input name="email" required placeholder="Адрес электронной почты" class="main__input main__emailInput">
                <input name="login" required placeholder="Логин" class="main__input main__loginInput">
                <input name="password" type="password" required placeholder="Пароль" class="main__input main__passwordInput">
                <input name="submit" type="submit" value="ЗАРЕГЕСТРИРОВАТЬСЯ" class="main__button"></input>
            </form>
            <?php 
            if($err === 1)
                echo '<p class="main__userAlreadyExist">Неверная форма электронной почты!</p>';
            else if($err === 2)
                echo '<p class="main__userAlreadyExist">Пользователь с таким адресом электронной почты уже существует!</p>';
            else if($err === 3)
                echo '<p class="main__userAlreadyExist">Такой логин уже существует! Выбирите другой.</p>';
            ?>
            <p class="main__HaveNoAccount">Уже есть учетная запись <b>TrapGames?</b></p>
            <a href="/LogInPage.php" class="main__Register">Войти</a>
        </span>
    </main>
</body>
</html>