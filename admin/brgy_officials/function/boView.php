<?php
//connects to connection.php
include('../../../connection.php');

extract($_POST);
//getting brgy official data from specific row
if (isset($_POST['bOfficialSend'])) {
  $get_brgyOfficial = "SELECT * FROM brgy_officials WHERE id = $bOfficialSend";
  $result = $connection->query($get_brgyOfficial);
  $response = array();
  while ($row = mysqli_fetch_assoc($result)) {
    $response = $row;
  }
  echo json_encode($response);
} else {
  $response['status'] = 200;
  $response['message'] = "Invalid or data not found";
}

//update brgy official
if (isset($_POST['bedit_hiddenIDSend'])) {
  $edit_brgyOfficial = "UPDATE brgy_officials SET name = '$boedit_nameSend' WHERE id = $bedit_hiddenIDSend";
  $Eresult = $connection->query($edit_brgyOfficial);
}