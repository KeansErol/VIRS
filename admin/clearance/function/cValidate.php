<?php 
//connects to connection.php
include('../../../connection.php');

extract($_POST);

//check if citizen has report case
$checkReport = $connection->query("SELECT * FROM report WHERE cFullName = '$gen_fullNameSend' AND status = 'Active' OR sFullName = '$gen_fullNameSend' AND status = 'Active'")->num_rows;
$checkBlotter = $connection->query("SELECT * FROM blotter WHERE cFullName = '$gen_fullNameSend' AND status = 'Active' OR sFullName = '$gen_fullNameSend' AND status = 'Active'")->num_rows;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if ($checkReport > 0 || $checkBlotter > 0) {
    echo 'exist';
    exit();
  }
  else {
    //generate clearance
    echo 'success';
    exit();
  }
}