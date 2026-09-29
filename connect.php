<?php

$conn = mysqli_connect("localhost", "root", "", "mysitedb");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connection successful";

?>
