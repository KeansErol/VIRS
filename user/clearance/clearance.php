<?php
include('../../connection.php');

session_start();

if (!isset($_SESSION['user_name'])) {
  header('location: ../../login/login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- set icon -->
  <link rel="icon" type="image/x-icon" href="../../assets/images/BayanLuma1Logo.png">

  <link rel="stylesheet" href="../style.css">

  <!-- import css file -->
  <?php require('../../assets/css.php') ?>
  <!-- import cdn file -->
  <?php require('../../assets/js.php') ?>

  <title>Clearance</title>
</head>

<body class="body">
  <!-- sidebar -->
  <section id="menu">
    <div class="logo-container">
      <div class="logo">
        <img src="../../assets/images/BayanLuma1Logo.png">
      </div>
    </div>

    <div class="scrollable-sidebar">
      <div class="scrollable-sidebar-inner">
        <div class="items">
          <li class=""><a href="../dashboard/dashboard.php"><i class="fa-solid fa-table-columns"></i>Dashboard</a></li>
          <li class=""><a href="../report/report.php"><i class="fa-solid fa-file-lines"></i>Report</a></li>
          <li class=""><a href="../blotter/blotter.php"><i class="fa-solid fa-clipboard"></i>Blotter</a></li>
          <li class="active"><a href="#"><i class="fa-solid fa-folder-open"></i>Clearance</a></li>
          <li class=""><a href="../about/about_virs.php"><i class="fa-solid fa-computer"></i>About VIRS</a></li>
          <li class=""><a href="../about/about_us.php"><i class="fa-solid fa-graduation-cap"></i>Developers</a></li>
        </div>
      </div>
    </div>
  </section>

  <!-- container -->
  <section id="interface">

    <!-- topbar -->
    <?php include('../nav/topbar.php') ?>

    <!-- main content -->
    <div class="head-border">
      <h3 class="i-name">Clearance</h3>
    </div>

    <form method="POST">
      <button type="submit" class="add-btn" onclick="generateCertificate()"><span class="btn-wrap"><i class="fa-sharp fa-solid fa-plus"></i> Generate</span></button>
      <div class="clearance-board">
        <div class="clearance-container">
          <label class="col-sm-3 col-form-label"><b>Full Name:</b></label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="cFullName" id="cFullName" value="" placeholder="Enter full name" required>
          </div>
        </div>

        <div class="clearance-container">
          <label class="col-sm-3 col-form-label"><b>Address:</b></label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="cAddress" id="cAddress" value="" placeholder="Enter address" required>
          </div>
        </div>

        <div class="clearance-container">
          <label class="col-sm-3 col-form-label"><b>DOB/POB:</b></label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="cDob" id="cDob" value="" placeholder="Enter DOB/POB" required>
          </div>
        </div>

        <div class="clearance-container">
          <label class="col-sm-3 col-form-label"><b>Sex:</b></label>
          <div class="col-sm-9">
            <select name="cSex" id="cSex" class="custom-select">
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>
        </div>

        <div class="clearance-container">
          <label class="col-sm-3 col-form-label"><b>Civil Status:</b></label>
          <div class="col-sm-9">
            <select name="cCivilStatus" id="cCivilStatus" class="custom-select">
              <option value="Single">Single</option>
              <option value="Married">Married</option>
              <option value="Divorced">Divorced</option>
              <option value="Separated">Separated</option>
              <option value="Widowed">Widowed</option>
            </select>
          </div>
        </div>

        <div class="clearance-container">
          <label class="col-sm-3 col-form-label"><b>Residency Status:</b></label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="cResidencyStatus" id="cResidencyStatus" value="" placeholder="Enter residency status" required>
          </div>
        </div>

        <div class="clearance-container">
          <label class="col-sm-3 col-form-label"><b>Nationality:</b></label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="cNationality" id="cNationality" value="" placeholder="Enter nationality" required>
          </div>
        </div>

        <div class="clearance-container">
          <label class="col-sm-3 col-form-label"><b>Purpose:</b></label>
          <div class="col-sm-9">
            <textarea rows="3" class="form-control" name="cPurpose" id="cPurpose" placeholder="Enter purpose" required></textarea>
          </div>
        </div>

        <div class="clearance-container">
          <label class="col-sm-3 col-form-label"><b>CTC/BRGY.ID No:</b></label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="cCtc" id="cCtc" value="" placeholder="Enter CTC/Brgy ID" required>
          </div>
        </div>

        <div class="clearance-container">
          <label class="col-sm-3 col-form-label"><b>Place of Issue:</b></label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="cPlaceOfIssue" id="cPlaceOfIssue" value="Brgy Bayan Luma I" placeholder="Enter place of issue" disabled>
          </div>
        </div>

        <div class="clearance-container">
          <label class="col-sm-3 col-form-label"><b>Date of Issue:</b></label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="cDateOfIssue" id="cDateOfIssue" value="" disabled>
          </div>
        </div>

        <div class="clearance-container">
          <label class="col-sm-3 col-form-label"><b>Clearance Fee:</b></label>
          <div class="col-sm-9">
            <input type="number" class="form-control" name="cClearanceFee" id="cClearanceFee" value="" placeholder="Enter clearance fee" required>
          </div>
        </div>

        <div class="clearance-container">
          <label class="col-sm-3 col-form-label"><b>BC Control No:</b></label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="cBCControlNo" id="cBCControlNo" value="" placeholder="Enter BC Control no" required>
          </div>
        </div>
      </div>
    </form>
  </section>

  <!-- import cdn file -->
  <?php require('../../assets/js.php') ?>
  <!-- import print file -->
  <?php include('print/print.php') ?>

  <script>
    $(document).ready(function() {
      $('#sortTbl').DataTable();
    });

    $(document).ready(function() {
      const date = new Date();

      const options = {
        year: 'numeric',
        month: 'long',
        day: 'numeric',
      };

      $("#cDateOfIssue").val(date.toLocaleString('en-IN', options));
    })

    //generate certificate
    function generateCertificate() {

      $("form").on("submit", function(event) {
        event.preventDefault();

        //getting textbox values
        var gen_fullName = $('#cFullName').val();
        var gen_address = $('#cAddress').val();
        var gen_dob = $('#cDob').val();
        var gen_sex = $('#cSex').val();
        var gen_civil = $('#cCivilStatus').val();
        var gen_residency = $('#cResidencyStatus').val();
        var gen_nationality = $('#cNationality').val();
        var gen_purpose = $('#cPurpose').val();
        var gen_ctc = $('#cCtc').val();
        var gen_place = $('#cPlaceOfIssue').val();
        var gen_date = $('#cDateOfIssue').val();
        var gen_clearance = $('#cClearanceFee').val();
        var gen_bcControl = $('#cBCControlNo').val();

        //DECLARATION FOR VIEW MODAL
        document.getElementById('pName').innerHTML = gen_fullName;
        document.getElementById('pAddress').innerHTML = gen_address;
        document.getElementById('pDob').innerHTML = gen_dob;
        document.getElementById('pSex').innerHTML = gen_sex;
        document.getElementById('pCivil').innerHTML = gen_civil;
        document.getElementById('pResidency').innerHTML = gen_residency;
        document.getElementById('pNationality').innerHTML = gen_nationality;
        document.getElementById('pPurpose').innerHTML = gen_purpose;
        document.getElementById('pCtc').innerHTML = gen_ctc;
        document.getElementById('pPlace').innerHTML = gen_place;
        document.getElementById('pDate').innerHTML = gen_date;
        document.getElementById('pClearance').innerHTML = gen_clearance;
        document.getElementById('pBC').innerHTML = gen_bcControl;

        var _h = $('head').clone()
        var _p = $('.print_out_certificate').clone()
        var _el = $('<div>')
        _el.append(_h)
        _el.append("<img src='../../assets/images/brgy-clearance-template.png' height='100%' width='100%' style='position: absolute;'>");
        _el.append(_p)
        var nw = window.open("", "_blank", "width=5000, top=0, left=0")
        nw.document.write(_el.html())
        nw.document.close()
        setTimeout(() => {
          nw.print()
          setTimeout(() => {
            nw.close();
          }, 200);
        }, 500);
      })
    }

    //user dropdown menu on topright
    $('#menu-btn').click(function() {
      $('#menu').toggleClass("active");
    })

    let subMenu = document.getElementById("subMenu")

    function toggleMenu() {
      subMenu.classList.toggle("open-menu");
    }
  </script>
</body>

</html>