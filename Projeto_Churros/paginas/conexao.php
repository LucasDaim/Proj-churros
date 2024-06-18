<?php

define('HOST','db-churros.clws4w6i2zdr.us-east-1.rds.amazonaws.com');
define('USER','root');
define('PASS','25891825lu');
define('BASE','churros');

$conn = new mysqli(HOST,USER,PASS,BASE);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
