<?php
// $servername = "localhost";
// $username = "root"; // default username for localhost is root
// $password = ""; // default password for localhost is empty
// $dbname = "crud"; // database name


$servername = "sql102.epizy.com";
$username = "epiz_26488424"; // default username for localhost is root
$password = "QThUKxeJ6hb"; // default password for localhost is empty
$dbname = "epiz_26488424_dlax_project"; // database name


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?> 