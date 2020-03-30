<?php

$mysql_host = 'localhost';
$mysql_user = 'root';

if (!@mysqli_connect($mysql_host, $mysql_user)) {
    die('(1) Cannot connect to database!');
} else {
    if (@mysqli_select_db('librarywebapp')) {
        echo 'Connection Success!';
    } else {
        die('(2) Cannot connect to database!');
    }
}
