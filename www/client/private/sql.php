<?php
    $db_host = '192.168.2.12';
    $db_name = 'fvision';
    $db_user = 'webuser';
    $db_password = 'insecure_db_pw';
    $connect = new mysqli($db_host, $db_user, $db_passwd, $db_name);

    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>