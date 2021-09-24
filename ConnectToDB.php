<?php
$servername = "localhost";
$username = "mketabff";
$password = "c4E6Rd30gw";
$DBname = "mketabff_site2";

$connection = new mysqli($servername,$username,$password,$DBname);
               mysqli_set_charset( $connection, 'utf8' );

if ($connection->connect_error){
    exit("Connection Failed: ".$connection->connect_error);
}