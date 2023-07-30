<?php
//connects to connection.php
include('../../../connection.php');

extract($_POST);

//update password
if (isset($_POST['accIDSend'])) {
  //resets password
  $delete = "DELETE FROM account WHERE id = $accIDSend";
  $result = $connection->query($delete);
}