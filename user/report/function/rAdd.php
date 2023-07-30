<?php
//connects to connection.php
include('../../../connection.php');

extract($_POST);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if ($rWitnessSend == "No") {
    echo 'no witness';
    //add report
    $insert_report = "INSERT INTO report (case_no, typeOfReport, cFullName, cAddress, cAge, cContactNo, cPlace, cComplaint, witness, sFullName, sAddress, sAge, sContactNo, sPlace, sStatement, dateTimeIssued, dateTimeEnd, status) 
                      VALUES ('$rCaseNoSend', '$rTypeSend', '$rCNameSend', '$rCAddressSend', '$rCAgeSend', '$rCContactSend', '$rCPlaceSend', '$rCComplaintSend', '$rWitnessSend', '$rSNameSend', '$rSAddressSend', '$rSAgeSend', '$rSContactSend', '$rSPlaceSend', '$rSStatementSend', now(), '$rDateEndSend', 'Active')";
    $result = $connection->query($insert_report);
  } else {
    $insert_report = "INSERT INTO report (case_no, typeOfReport, cFullName, cAddress, cAge, cContactNo, cPlace, cComplaint, witness, sFullName, sAddress, sAge, sContactNo, sPlace, sStatement, dateTimeIssued, dateTimeEnd, status) 
                      VALUES ('$rCaseNoSend', '$rTypeSend', '$rCNameSend', '$rCAddressSend', '$rCAgeSend', '$rCContactSend', '$rCPlaceSend', '$rCComplaintSend', '$rWitnessSend', '$rSNameSend', '$rSAddressSend', '$rSAgeSend', '$rSContactSend', '$rSPlaceSend', '$rSStatementSend', now(), '$rDateEndSend', 'Active')";
    $result = $connection->query($insert_report);

    if ($rWitnessSend2 == "No") {
      echo 'witness 1';
      $insert_witness = "INSERT INTO witness (case_no, wNo, wFullName, wAddress, wAge, wContactNo, wPlace, wStatement)
                         VALUES ('$rCaseNoSend', '1', '$rWNameSend', '$rWAddressSend', '$rWAgeSend', '$rWContactSend', '$rWPlaceSend', '$rWStatementSend')";

      $resultWitness = $connection->query($insert_witness);
    } else {
      echo 'witness 2';
      $insert_witness = "INSERT INTO witness (case_no, wNo, wFullName, wAddress, wAge, wContactNo, wPlace, wStatement)
                         VALUES ('$rCaseNoSend', '1', '$rWNameSend', '$rWAddressSend', '$rWAgeSend', '$rWContactSend', '$rWPlaceSend', '$rWStatementSend')";
      $insert_witness2 = "INSERT INTO witness (case_no, wNo, wFullName, wAddress, wAge, wContactNo, wPlace, wStatement)
                         VALUES ('$rCaseNoSend', '2', '$rWNameSend2', '$rWAddressSend2', '$rWAgeSend2', '$rWContactSend2', '$rWPlaceSend2', '$rWStatementSend2')";

      $resultWitness = $connection->query($insert_witness);
      $resultWitness2 = $connection->query($insert_witness2);
    }
  }
}
