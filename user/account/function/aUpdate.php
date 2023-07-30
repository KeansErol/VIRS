<?php
//connects to connection.php
include('../../../connection.php');

extract($_POST);

//update username
if (isset($_POST['accIDUserSend'])) {
  $edit_username = "UPDATE account SET username = '$newUsernameSend' WHERE id = $accIDUserSend";
  $result = $connection->query($edit_username);
  echo $result;
}

//update password
if (isset($_POST['accIDPwSend'])) {
  //checking old password
  $get_oldPW = mysqli_query($connection, "SELECT * FROM account WHERE password = '$oldPasswordSend'");
  $old_result = mysqli_fetch_array($get_oldPW);

  //if old password is not found, return true
  if ($old_result > 0) {
    echo 'true';
    $edit_password = "UPDATE account SET password = '$newPasswordSend' WHERE id = $accIDPwSend AND password = '$oldPasswordSend'";
    $result = $connection->query($edit_password);
  }
  else {
    //if old password is found, return error
    echo 'false';
  }
}