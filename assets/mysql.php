<?php

$mysqlHost = "localhost";
$mysqlUsername = "root";
$mysqlPassword = "";
$mysqlDatabase = "phpmysql";

$mysqlConn = new mysqli($mysqlHost, $mysqlUsername, $mysqlPassword, $mysqlDatabase);

if ($mysqlConn->connect_error) {
    die("Connection failed: " . $mysqlConn->connect_error);
}

?>