<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "loginsystemvpl";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);
// $mysqli = new mysqli($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}