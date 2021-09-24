<?php

include 'config.php';


$myfile = fopen("tn.txt", "r") or die("Unable to open file!");

while (! feof ($myfile)) 
  { 
    $tel=fgets($myfile);
    $sql = "INSERT INTO users (id,telnum)
        VALUES (NULL,$tel)";

    if ($connection->query($sql) == true) {
        $last_id = $connection->insert_id;
        echo "User Added with id $last_id";
    } else {
        echo("Error:" . $connection->error);
    }
    
}
$connection->close();
fclose($myfile);