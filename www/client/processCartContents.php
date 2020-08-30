<?php
include('private/sql.php');

$arr = json_decode(file_get_contents("php://input"));
$name = $_SESSION['name'];
$email = $_SESSION['email'];
/*
foreach ($arr as $value) {
    sql = "INSERT INTO orders VALUES (" 
}*/
?>
