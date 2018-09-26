<?php



$link = mysqli_connect("localhost","root","password");

//echo $link->client_info;

//echo "hello php";

//mysqli_query("create database if not exists test2 default character set utf8");
$result = mysqli_query("SHOW TABLES");

if (!$result) {
    echo "DB Error, could not list tables\n";
    echo 'MySQL Error: ' . mysqli_error($link);
    exit;
}

var_dump($result);
//
//while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
//    echo $row[0];
//    echo "<br>";
//}
?>