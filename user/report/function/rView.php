<?php
//connects to connection.php
include('../../../connection.php');

extract($_POST);
//getting report data from specific row
if (isset($_POST['reportIDSend'])) {
  $get_report = "SELECT * FROM report WHERE id = $reportIDSend";
  $result = $connection->query($get_report);
  $response = array();
  while ($row = mysqli_fetch_assoc($result)) {
    $response = $row;
  }
  echo json_encode($response);
} else {
  $response['status'] = 200;
  $response['message'] = "Invalid or data not found";
}

//getting witness 1 data from specific row (existing)
if (isset($_POST['caseIDSend'])) {
  $get_witness = "SELECT * FROM witness WHERE case_no = $caseIDSend AND wNo = 1";
  $Wresult = $connection->query($get_witness);
  $Wresponse = array();
  while ($Wrow = mysqli_fetch_assoc($Wresult)) {
    $Wresponse = $Wrow;
  }
  echo json_encode($Wresponse);
} else {
  $Wresponse['status'] = 200;
  $Wresponse['message'] = "Invalid or data not found";
}

//getting witness 2 data from specific row (existing)
if (isset($_POST['caseIDSend2'])) {
  $get_witness = "SELECT * FROM witness WHERE case_no = $caseIDSend2 AND wNo = 2";
  $Wresult = $connection->query($get_witness);
  $Wresponse = array();
  while ($Wrow = mysqli_fetch_assoc($Wresult)) {
    $Wresponse = $Wrow;
  }
  echo json_encode($Wresponse);
} else {
  $Wresponse['status'] = 200;
  $Wresponse['message'] = "Invalid or data not found";
}

//update report if there is NO witness
if (isset($_POST['edit_hiddenIDSend'])) {
  $edit_report = "UPDATE report SET typeOfReport = '$edit_cTypeOfReportSend', cFullName = '$edit_cFullNameSend', cAddress = '$edit_cAddressSend', cAge = '$edit_cAgeSend', cContactNo = '$edit_cContactSend', cPlace = '$edit_cPlaceSend', cComplaint = '$edit_cComplaintSend', witness = '$edit_witnessSend',
                  sFullName = '$edit_sFullNameSend', sAddress = '$edit_sAddressSend', sAge = '$edit_sAgeSend', sContactNo = '$edit_sContactSend', sPlace = '$edit_sPlaceSend', sStatement = '$edit_sStatementSend', dateTimeIssued = '$edit_sDateIssuedSend', dateTimeEnd = '$edit_sDateEndSend', status = '$edit_statusSend'
                  WHERE id = $edit_hiddenIDSend";
  $delete_witness = "DELETE FROM witness WHERE case_no = $edit_caseNoSend";
  $Eresult = $connection->query($edit_report);
  $Dresult = $connection->query($delete_witness);
}

//update report if there is A witness
if (isset($_POST['wedit_hiddenIDSend'])) {
  $edit_reportw = "UPDATE report SET typeOfReport = '$wedit_cTypeOfReportSend', cFullName = '$wedit_cFullNameSend', cAddress = '$wedit_cAddressSend', cAge = '$wedit_cAgeSend', cContactNo = '$wedit_cContactSend', cPlace = '$wedit_cPlaceSend', cComplaint = '$wedit_cComplaintSend', witness = '$wedit_witnessSend',
                  sFullName = '$wedit_sFullNameSend', sAddress = '$wedit_sAddressSend', sAge = '$wedit_sAgeSend', sContactNo = '$wedit_sContactSend', sPlace = '$wedit_sPlaceSend', sStatement = '$wedit_sStatementSend', dateTimeIssued = '$wedit_sDateIssuedSend', dateTimeEnd = '$wedit_sDateEndSend', status = '$wedit_statusSend'
                  WHERE id = $wedit_hiddenIDSend";
  $Eresultw = $connection->query($edit_reportw);
  if ($wedit_witnessSend2 == "No") {
    echo 'witness 1';
    $insert_witnessEdit = "INSERT INTO witness (case_no, wNo, wFullName, wAddress, wAge, wContactNo, wPlace, wStatement, id)
                           VALUES ('$wedit_caseNoSend', '1', '$wedit_wNameSend', '$wedit_wAddressSend', '$wedit_wAgeSend', '$wedit_wContactSend', '$wedit_wPlaceSend', '$wedit_wStatementSend', '$wedit_hiddenIDWSend')
                           ON DUPLICATE KEY UPDATE wFullName = '$wedit_wNameSend', wAddress = '$wedit_wAddressSend', wAge = '$wedit_wAgeSend', wContactNo = '$wedit_wContactSend', wPlace = '$wedit_wPlaceSend', wStatement = '$wedit_wStatementSend'";
    $Eresultw1 = $connection->query($insert_witnessEdit);
    $dlt_witnessEdit2 = "DELETE FROM witness WHERE wNo = 2 AND case_no = $wedit_caseNoSend";
    $Eresultw2Dlt = $connection->query($dlt_witnessEdit2);
  } else {
    echo 'witness 2';
    $insert_witnessEdit = "INSERT INTO witness (case_no, wNo, wFullName, wAddress, wAge, wContactNo, wPlace, wStatement, id)
                           VALUES ('$wedit_caseNoSend', '1', '$wedit_wNameSend', '$wedit_wAddressSend', '$wedit_wAgeSend', '$wedit_wContactSend', '$wedit_wPlaceSend', '$wedit_wStatementSend', '$wedit_hiddenIDWSend')
                           ON DUPLICATE KEY UPDATE wFullName = '$wedit_wNameSend', wAddress = '$wedit_wAddressSend', wAge = '$wedit_wAgeSend', wContactNo = '$wedit_wContactSend', wPlace = '$wedit_wPlaceSend', wStatement = '$wedit_wStatementSend'";
    
    $insert_witnessEdit2 = "INSERT INTO witness (case_no, wNo, wFullName, wAddress, wAge, wContactNo, wPlace, wStatement, id)
                           VALUES ('$wedit_caseNoSend', '2', '$wedit_wNameSend2', '$wedit_wAddressSend2', '$wedit_wAgeSend2', '$wedit_wContactSend2', '$wedit_wPlaceSend2', '$wedit_wStatementSend2', '$wedit_hiddenIDWSend2')
                           ON DUPLICATE KEY UPDATE wFullName = '$wedit_wNameSend2', wAddress = '$wedit_wAddressSend2', wAge = '$wedit_wAgeSend2', wContactNo = '$wedit_wContactSend2', wPlace = '$wedit_wPlaceSend2', wStatement = '$wedit_wStatementSend2'";
    $Eresultw1 = $connection->query($insert_witnessEdit);
    $Eresultw2 = $connection->query($insert_witnessEdit2);

  }
}
