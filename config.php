<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "british_bank";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Could not connect to the database due to the following error: " . mysqli_connect_error());
} else {
    echo "Connected";
}
