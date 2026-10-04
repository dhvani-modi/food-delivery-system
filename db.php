<?php

$conn = mysqli_connect("localhost", "root", "", "foodsystem");

if(!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

?>