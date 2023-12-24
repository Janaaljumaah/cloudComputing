<?php


$servername = "34.72.54.72";
$username = "root";
$password = "Jana2004";
$database = "tasks-management";

$connection = new mysqli($servername, $username, $password, $database);

if ($connection->connect_error) {
         printf("Connection failed: %s\n", $connection->connect_error);
         exit();
      } else {
        echo "";
      }
 ?> 
