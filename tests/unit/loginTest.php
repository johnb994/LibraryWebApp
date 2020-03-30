<?php

use PHPUnit\Framework\TestCase;

class SQLTest extends TestCase
{ 

    public function testFailure()
    {
        $this->assertIsResource(null);
    }

    public function testDBConnection()
    {
        $mysqli_host = "localhost";
        $mysqli_user = "monkey";
        $result = mysqli_connect($mysqli_host, $mysqli_user);
        assertIsResource($result);
    }
}

?>