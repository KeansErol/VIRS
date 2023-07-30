<?php
//connects to connection.php
include('../../../connection.php');

extract($_POST);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  //add blotter
  $insert_blotter = "INSERT INTO blotter (case_no, cFullName, cAddress, cContactNo, sFullName, sAddress, sContactNo, hearingStage, hearingDescription, hearingDateStart, hearingDateEnd, dateTimeIssued, status) 
                    VALUES ('$bCaseNoSend', '$bCNameSend', '$bCAddressSend', '$bCContactSend', '$bSNameSend', '$bSAddressSend', '$bSContactSend', '$bHearingStageSend', '$bDescriptionSend', '$bHearingDateStartSend', '$bHearingDateEndSend', now(), 'Active')";
  $result = $connection->query($insert_blotter);
}
