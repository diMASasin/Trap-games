<?php
    header('Content-Type: text/html;charset=utf-8');
    $host = 'localhost';
    $db_name = 'masasick_trap';
    $user = 'masasick_trap';
    $password = 'Ltma*8mh';
        
    $connection = mysqli_connect($host, $user, $password, $db_name);
    
    if (isset($_COOKIE['ID']))
    {
        //$query = mysqli_query($link, "SELECT *,INET_NTOA(user_ip) AS
        //user_ip FROM Users WHERE ID = '".intval($_COOKIE['ID'])."' LIMIT 1");
        $query = mysqli_query($connection, "SELECT * FROM Users WHERE ID = '".$_COOKIE['ID']."' LIMIT 1");
    
        $userdata = mysqli_fetch_assoc($query);
        
        if(($userdata['ID'] !== $_COOKIE['ID']))
        {
            setcookie("ID", "", time() - 3600*24*30*12, "/");
            print "Hm, something wrong";
        }
        else
        {
            echo '<p class="header__greetings">' . 'Hello, ';
            echo $userdata['Login'];
        }
    }
    else
    {
        echo'
        <span class="header__LogIn">
            <a href="/LogInPage.php">
                <img src="/img/Login.png" alt="TRAP Games"></img>
            </a>
            <a href="/LogInPage.php" class="header__LogInText">Вход</a>
        </span>';
    }
?>