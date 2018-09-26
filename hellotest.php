<?php

$link = mysqli_connect("localhost","root","password");
mysqli_query("create database if not exists test2 default character set utf8");
$result = mysqli_query("show databases");

while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    echo $row[0];
    echo "<br>";
}
?>