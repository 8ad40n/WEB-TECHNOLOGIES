<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practice";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    // echo "Connection was successful";
}
?>