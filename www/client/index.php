<?php
$scriptList = array('js/jquery-3.5.1.min.js');
include('private/header.php');
include('private/sql.php');

$sql = "SELECT * FROM item";
$result = mysql_query($sql);
?>