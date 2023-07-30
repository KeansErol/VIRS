<?php
//connects to connection.php
include('../../../connection.php');

extract($_POST);

//update password
if (isset($_POST['accIDSend'])) {
  //resets password
  $reset_password = "UPDATE account SET password = 'password123' WHERE id = $accIDSend";
  $result = $connection->query($reset_password);
}