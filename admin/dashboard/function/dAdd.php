<?php
//connects to connection.php
include('../../../connection.php');

extract($_POST);

//check duplicate eo branch name
$username = $_POST['aUsernameSend'];
$check = $connection->query("SELECT * FROM account WHERE username = '$username'")->num_rows;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if ($check > 0) {
    echo 'duplicate';
    exit();
  }
  else {
    //add blotter
    echo 'success';
    $add_account = "INSERT INTO account (fullName, username, password, account_type) 
                      VALUES ('$aFullNameSend', '$aUsernameSend', '$aPasswordSend', '$aAccTypeSend')";
    $result = $connection->query($add_account);
  }
}
