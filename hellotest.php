<?php



$link = mysqli_connect("localhost","root","password");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

//echo $link->client_info;

//echo "hello php";

//mysqli_query("create database if not exists test2 default character set utf8");
$result = mysqli_query("SHOW DATABASES;");

//if (!$result) {
//    echo "DB Error, could not list tables\n";
//    echo 'MySQL Error: ' . mysqli_error($link);
//    exit;
//}
//
//var_dump($result);
//
//while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
//    echo $row[0];
//    echo "<br>";
//}
?>