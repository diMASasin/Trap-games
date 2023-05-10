<?php
    header('Content-Type: text/html;charset=utf-8');
    $host = 'localhost';
    $db_name = 'masasick_trap';
    $user = 'masasick_trap';
    $password = 'Ltma*8mh';
        
    $connection = mysqli_connect($host, $user, $password, $db_name);
    $query = "SELECT * FROM games";
    $result = mysqli_query($connection, $query);
    define('DB_NAME', 'masasick_trap');
    define('DB_USER', 'masasick_trap');
    define('DB_PASSWORD', 'Ltma*8mh');
    define('DB_HOST', 'localhost');
    $pdo = new PDO("mysql:host=" . DB_HOST . "; dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    
    while($row = $result->fetch_assoc())
    {
        echo $row['id'];
        echo $row['name'];
        echo $row['likes_count'];
        echo '<img src = "data:image/png;base64,' . base64_encode($row['image']) . '" width = "50px" height = "50px"/>';
    }
?>