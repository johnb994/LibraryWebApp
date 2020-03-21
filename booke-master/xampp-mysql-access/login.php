<?php

$mysql_host = "localhost";
$mysql_user = "root";
$link = mysqli_connect($mysql_host, $mysql_user, "", "librarywebapp");

if (mysqli_connect_errno())
{
    printf("Connect failed: %s\n", mysqli_connect_error());
}

if($result = mysqli_query($link, "SELECT DATABASE()"))
{
    $row = mysqli_fetch_row($result);
    printf("Default database is %s \n", $row[0]);
    mysqli_free_result($result);
}


?>