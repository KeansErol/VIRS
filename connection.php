<?php
ob_start();
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "virs_db";

  //create connection
  $connection = new mysqli($servername, $username, $password, $database);

  //check connection
  if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
  }
ob_flush();
?>