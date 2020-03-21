<?php

$mysql_host = 'localhost';
$mysql_user = 'root';

if (!@mysql_connect ($mysql_host, $mysql_user))
{
    die('(1) Cannot connect to database!');
}
else
{
    if (@mysql_select_db('librarywebapp'))
    {
        echo 'Connection Success!';
    }
    else
    {
        die('(2) Cannot connect to database!');
    }
}

?>