<?php
include('../../connection.php');

session_start();

if (!isset($_SESSION['admin_name'])) {
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

  <title>Blotter</title>
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
          <li class=""><a href="../brgy_officials/brgy_officials.php"><i class="fa-solid fa-users"></i>Officials</a></li>
          <li class=""><a href="../report/report.php"><i class="fa-solid fa-file-lines"></i>Report</a></li>
          <li class="active"><a href="#"><i class="fa-solid fa-clipboard"></i>Blotter</a></li>
          <li class=""><a href="../clearance/clearance.php"><i class="fa-solid fa-folder-open"></i>Clearance</a></li>
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
      <h3 class="i-name">Blotter</h3>
    </div>

    <button type="button" class="add-btn" onclick="addModal()"><span class="btn-wrap"><i class="add-icon fa-sharp fa-solid fa-plus"></i>Add</span></button>
    <button type="button" class="print-btn" onclick="printBlotter()"><i class="print-icon fa-solid fa-print"></i>Print</button>

    <div class="board">
      <table class="table table-striped" id="sortTbl">
        <thead>
          <tr>
            <th>Case #</th>
            <th>Name</th>
            <th>Hearing Stage</th>
            <th>Hearing Date</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          //connects to connection.php
          require_once('../../connection.php');

          $i = 1;
          $getPunongBrgy = "SELECT * FROM brgy_officials WHERE position = 'Punong Barangay'";
          $getResult = $connection->query($getPunongBrgy);

          $sql = "SELECT * FROM blotter";
          $result = $connection->query($sql);

          //statement if sql is wrong
          if (!$result) {
            die("Invalid query: " . $connection->error);
          }


          while ($getrow = $getResult->fetch_assoc()) :
            while ($row = $result->fetch_assoc()) :
          ?>
              <tr>
                <td style="width: 100px;">
                  <p><?php echo $i++ ?></p>
                </td>
                <td>
                  <h5>Complainant Name: <p><?php echo $row['cFullName'] ?></p>
                  </h5>
                  <h5>Complainee Name: <p><?php echo $row['sFullName'] ?></p>
                  </h5>
                </td>
                <td style="width: 120px; text-align: center;">
                  <p><?php echo $row['hearingStage'] ?></p>
                </td>
                <td style="width: 200px;">
                  <h5>Start: <p><?php echo date("M d, Y | h:i A", strtotime($row['hearingDateStart'])) ?></p>
                  </h5>
                  <h5>End: <p><?php echo date("M d, Y | h:i A", strtotime($row['hearingDateEnd'])) ?></p>
                  </h5>
                </td>
                <td style="width: 70px; text-align: center;">
                  <?php
                  switch ($row['status']):
                    case 'Active':
                      echo '<p style="
                                display: inline-block; 
                                background-color: #20c997; 
                                color: white; 
                                border-radius: 20px; 
                                padding: 2px 10px;
                                ">Active</p>';
                      break;
                    case 'Closed':
                      echo '<p style="
                                display: inline-block; 
                                background-color: #c92020; 
                                color: white; 
                                border-radius: 20px; 
                                padding: 2px 10px;
                                ">Closed</p>';
                      break;
                  endswitch;
                  ?>
                </td>
                <td style="width: 50px; text-align: center; white-space: nowrap">
                  <button type="button" class="btn btn-primary" title="View" onclick="viewModal(<?php echo $row['id'] ?>, '<?php echo date('M d, Y | h:i A', strtotime($row['hearingDateStart'])) ?>', '<?php echo date('M d, Y | h:i A', strtotime($row['hearingDateEnd'])) ?>', '<?php echo date('M d, Y | h:i A', strtotime($row['dateTimeIssued'])) ?>')"><i class="fa-solid fa-eye"></i></button>
                  <button type="button" class="btn" style="background-color: #da7245; color: white;" title="Certificate of File Action" onclick="printCertOfFileActionBlotter(<?php echo $row['id'] ?>, '<?php echo $getrow['name'] ?>')"><i class="fa-solid fa-file-import"></i></button>
                </td>
              </tr>
          <?php
            endwhile;
          endwhile;
          ?>
        </tbody>
      </table>
    </div>
  </section>

  <!-- import modal files -->
  <?php include('modal/add_blotter.php') ?>
  <?php include('modal/view_blotter.php') ?>
  <!-- import print file -->
  <?php include('print/print.php') ?>
  <!-- import cdn file -->
  <?php require('../../assets/js.php') ?>

  <script>
    $(document).ready(function() {
      $('#sortTbl').DataTable();
    });

    //print all blotter
    function printBlotter() {
      $('body').prepend('<div id="preloader"></div>')
      var _h = $('head').clone()
      var _p = $('.print_out').clone()
      var _el = $('<div>')
      _el.append(_h)
      _el.append("<div style='display: flex; justify-content: space-between;'><img src='../../assets/images/BayanLuma1Logo.png' width='100px'><h5 style='margin: 18px 0 0 0; font-size: 15px; text-align: center;'>REPUBLIC OF THE PHILIPPINES</br>PROVINCE OF CAVITE</br>CITY OF IMUS</br>BARANGAY BAYAN LUMA I</h5><img src='../../assets/images/LungsodNgImusLogo.png' width='100px'></div>");
      _el.append("</br><h5 class='text-center' style='margin-bottom: 40px;'>LIST OF BLOTTER RECORDS</h5>")
      _el.append("<hr/>")
      _el.append(_p)
      _el.append("<hr/>")
      var nw = window.open("", "_blank", "width=5000, top=0, left=0")
      nw.document.write(_el.html())
      nw.document.close()
      setTimeout(() => {
        nw.print()
        setTimeout(() => {
          nw.close()
          $('#preloader').fadeOut('fast', function() {
            $(this).remove();
          })
        }, 200);
      }, 500);
    }

    //open add_blotter modal
    function addModal() {
      $('#case_no').val(<?php echo $i ?>);
      $("#addBlotter").modal('show');
    }

    function viewModal(blotterID, heardingDateStart, heardingDateEnd, dateIssued) {
      //DECLARATION FOR VIEW MODAL
      $('#vBlotterHidden_id').val(blotterID);

      $.post("function/bView.php", {
        blotterIDSend: blotterID
      }, function(result) {
        var userId = JSON.parse(result);

        //read complaint info
        document.getElementById('bCaseNo').innerHTML = userId.case_no;
        document.getElementById('bCName').innerHTML = userId.cFullName;
        document.getElementById('bCAddress').innerHTML = userId.cAddress;
        document.getElementById('bCContact').innerHTML = userId.cContactNo;
        document.getElementById('bSName').innerHTML = userId.sFullName;
        document.getElementById('bSAddress').innerHTML = userId.sAddress;
        document.getElementById('bSContact').innerHTML = userId.sContactNo;
        document.getElementById('bHearing_stage').innerHTML = userId.hearingStage;
        document.getElementById('bDescription').innerHTML = userId.hearingDescription.split(",").join("</br>");
        document.getElementById('bHearingDate_start').innerHTML = heardingDateStart;
        document.getElementById('bHearingDate_end').innerHTML = heardingDateEnd;
        document.getElementById('bDatetime_start').innerHTML = dateIssued;
        document.getElementById('bStatus').innerHTML = userId.status;
      });



      //DECLARATION FOR VIEW PRINT MODAL
      $('#vPBlotterHidden_id').val(blotterID);

      $.post("function/bView.php", {
        blotterIDSend: blotterID
      }, function(result) {
        var userId = JSON.parse(result);

        //read complaint info
        document.getElementById('vPBCase_no').innerHTML = userId.case_no;
        document.getElementById('vPBCname').innerHTML = userId.cFullName;
        document.getElementById('vPBCAddress').innerHTML = userId.cAddress;
        document.getElementById('vPBCContactNo').innerHTML = userId.cContactNo;
        document.getElementById('vPBSname').innerHTML = userId.sFullName;
        document.getElementById('vPBSAddress').innerHTML = userId.sAddress;
        document.getElementById('vPBSContactNo').innerHTML = userId.sContactNo;
        document.getElementById('vPBHStage').innerHTML = userId.hearingStage;
        document.getElementById('vPBDesc').innerHTML = userId.hearingDescription.split(",").join("</br>");
        document.getElementById('vPBHDateStart').innerHTML = heardingDateStart;
        document.getElementById('vPBHDateEnd').innerHTML = heardingDateEnd;
        document.getElementById('vPBDateIssued').innerHTML = dateIssued;
        document.getElementById('vPBStatus').innerHTML = userId.status;
      });




      //DECLARATION FOR EDIT MODAL
      $('#eBlotterHidden_id').val(blotterID);

      $.post("function/bView.php", {
        blotterIDSend: blotterID
      }, function(result) {
        var userId = JSON.parse(result);

        //read complaint info
        $('#bcase_no').val(userId.case_no);
        $('#bcomplainant_name').val(userId.cFullName);
        $('#bcomplainant_address').val(userId.cAddress);
        $('#bcomplainant_contactno').val(userId.cContactNo);
        $('#bsuspect_name').val(userId.sFullName);
        $('#bsuspect_address').val(userId.sAddress);
        $('#bsuspect_contactno').val(userId.sContactNo);
        $('#bhearing_stage').val(userId.hearingStage);
        $('#bdescription').val(userId.hearingDescription);
        $('#bhearingdate_start').val(userId.hearingDateStart);
        $('#bhearingdate_end').val(userId.hearingDateEnd);
        $('#bdatetime_start').val(userId.dateTimeIssued);
        $('#bstatus').val(userId.status);
      });

      $("#viewBlotter").modal('show');
    }

    //print cert of file action blotter
    function printCertOfFileActionBlotter(blotterIDP, punongBrgy) {
      $('#pBlotterHidden_id').val(blotterIDP);

      $.post("function/bView.php", {
        blotterIDSend: blotterIDP
      }, function(result) {
        var userId = JSON.parse(result);
        document.getElementById('pBCoaComplainant').innerHTML = userId.cFullName;
        document.getElementById('pBCoaSuspect').innerHTML = userId.sFullName;
        document.getElementById('pBPunongBrgyFooter').innerHTML = punongBrgy;

        $('body').prepend('<div id="preloader"></div>')
        var _h = $('head').clone()
        var _p = $('.print_out_certOfFileAction_blotter').clone()
        var _el = $('<div>')
        _el.append(_h)
        _el.append("<div style='display: flex; justify-content: space-between;'><img src='../../assets/images/BayanLuma1Logo.png' width='100px'><h5 style='margin: 18px 0 0 0; font-size: 15px; text-align: center;'>REPUBLIC OF THE PHILIPPINES</br>PROVINCE OF CAVITE</br>CITY OF IMUS</br>BARANGAY BAYAN LUMA I</h5><img src='../../assets/images/LungsodNgImusLogo.png' width='100px'></div>");
        _el.append("</br><h5 class='text-center' style='margin-bottom: 40px;'>CERTIFICATE OF FILE ACTION</h5>")
        _el.append(_p)
        var nw = window.open("", "_blank", "width=5000, top=0, left=0")
        nw.document.write(_el.html())
        nw.document.close()
        setTimeout(() => {
          nw.print()
          setTimeout(() => {
            nw.close()
            $('#preloader').fadeOut('fast', function() {
              $(this).remove();
            })
          }, 200);
        }, 500);
      });
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