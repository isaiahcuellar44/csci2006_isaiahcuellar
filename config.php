<?php

function connectDatabase(){
  $servername = "localhost";
  $username = "artShopCS";
  $password = "simplePassword";
  $dbname = "csci2006_artshop";

  $conn = new mysqli($servername, $username, $password, $dbname);

  //Handle connection errors
  if ($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
  }

  return $conn;
}
//Connect to the database

?>
