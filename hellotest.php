<?php



$link = mysqli_connect("localhost","root","password");

echo $link->client_info;

//echo "hello php";

mysqli_query("create database if not exists test2 default character set utf8");
$result = mysqli_query("show databases");
echo  "field_count";
echo $result->field_count;
//
//while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
//    echo $row[0];
//    echo "<br>";
//}
?>