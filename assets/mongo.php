<?php

require_once __DIR__ . './vendor/autoload.php';

$databseConn = new MongoDB\Client("mongodb://localhost:27017");

$mydb = $databseConn->PhpMongo;

$userCollection = $mydb->Users;

?>