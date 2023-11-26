<?php
function getConnection()
{
	$server="localhost";
    $username="root";
    $password="";
    $dbname="practice";
    $conn=new mysqli($server,$username,$password,$dbname);
    return $conn;
}

?>