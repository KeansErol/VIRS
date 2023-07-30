<?php
//connects to connection.php
include('../../../connection.php');

extract($_POST);
//getting blotter data from specific row
if (isset($_POST['blotterIDSend'])) {
  $get_blotter = "SELECT * FROM blotter WHERE id = $blotterIDSend";
  $result = $connection->query($get_blotter);
  $response = array();
  while ($row = mysqli_fetch_assoc($result)) {
    $response = $row;
  }
  echo json_encode($response);
} else {
  $response['status'] = 200;
  $response['message'] = "Invalid or data not found";
}

//update blotter
if (isset($_POST['bedit_hiddenIDSend'])) {
  $edit_blotter = "UPDATE blotter SET case_no = '$bedit_caseNoSend', cFullName = '$bedit_cNameSend', cAddress = '$bedit_cAddressSend', cContactNo = '$bedit_cContactSend', sFullName = '$bedit_sNameSend', sAddress = '$bedit_sAddressSend', sContactNo = '$bedit_sContactSend', hearingStage = '$bedit_hearingStageSend',
                   hearingDescription = '$bedit_descriptionSend', hearingDateStart = '$bedit_hDateStartSend', hearingDateEnd = '$bedit_hDateEndSend', status = '$bedit_statusSend'
                   WHERE id = $bedit_hiddenIDSend";
  $bresult = $connection->query($edit_blotter);
}