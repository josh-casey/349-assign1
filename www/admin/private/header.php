<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>ADMIN SERVER</title>
        <?php
        if (isset($scriptList) && is_array($scriptList)){
   foreach ($scriptList as $script){
        echo "<script src = '$script'></script>";
     }
        }
        ?>
        <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<header>
        <h1>ORDERS</h1>

</header>