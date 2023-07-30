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

  <title>Report</title>
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
          <li class="active"><a href="#"><i class="fa-solid fa-file-lines"></i>Report</a></li>
          <li class=""><a href="../blotter/blotter.php"><i class="fa-solid fa-clipboard"></i>Blotter</a></li>
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
      <h3 class="i-name">Report</h3>
    </div>

    <button type="button" class="add-btn" onclick="addModal()"><span class="btn-wrap"><i class="add-icon fa-sharp fa-solid fa-plus"></i>Add</span></button>
    <button type="button" class="print-btn" onclick="printReport()"><i class="print-icon fa-solid fa-print"></i>Print</button>

    <div class="board">
      <table class="table table-striped" id="sortTbl">
        <thead>
          <tr>
            <th>Case #</th>
            <th>Name</th>
            <th>Date</th>
            <th>Type of Report</th>
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

          $sql = "SELECT * FROM report";
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
                <td>
                  <h5>Start: <p><?php echo date("M d, Y | h:i A", strtotime($row['dateTimeIssued'])) ?></p>
                  </h5>
                  <h5>End: <p><?php echo date("M d, Y | h:i A", strtotime($row['dateTimeEnd'])) ?></p>
                  </h5>
                </td>
                <td>
                  <p><?php echo $row['typeOfReport'] ?></p>
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
                  <button type="button" class="btn btn-primary" title="View" onclick="viewModal(<?php echo $row['id'] ?>, <?php echo $i - 1 ?>, '<?php echo date('M d, Y | h:i A', strtotime($row['dateTimeIssued'])) ?>', '<?php echo date('M d, Y | h:i A', strtotime($row['dateTimeEnd'])) ?>')"><i class="fa-solid fa-eye"></i></button>
                  <button type="button" class="btn" style="background-color: #183153; color: white;" title="Generate Papers" onclick="certificates(<?php echo $row['id'] ?>, <?php echo $i - 1 ?>, '<?php echo date('M d, Y | h:i A', strtotime($row['dateTimeIssued'])) ?>', '<?php echo $getrow['name'] ?>')"><i class="fa-solid fa-file-circle-plus"></i></button>
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
  <?php include('modal/add_report.php') ?>
  <?php include('modal/certificate_report.php') ?>
  <?php include('modal/view_report.php') ?>
  <!-- import print file -->
  <?php include('print/print.php') ?>
  <!-- import cdn file -->
  <?php require('../../assets/js.php') ?>

  <script>
    $(document).ready(function() {
      $('#sortTbl').DataTable();
    });

    //print all report
    function printReport() {
      $('body').prepend('<div id="preloader"></div>')
      var _h = $('head').clone()
      var _p = $('.print_out').clone()
      var _el = $('<div>')
      _el.append(_h)
      _el.append("<div style='display: flex; justify-content: space-between;'><img src='../../assets/images/BayanLuma1Logo.png' width='100px'><h5 style='margin: 18px 0 0 0; font-size: 15px; text-align: center;'>REPUBLIC OF THE PHILIPPINES</br>PROVINCE OF CAVITE</br>CITY OF IMUS</br>BARANGAY BAYAN LUMA I</h5><img src='../../assets/images/LungsodNgImusLogo.png' width='100px'></div>");
      _el.append("</br><h5 class='text-center' style='margin-bottom: 40px;'>LIST OF REPORT CASES</h5>")
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

    //open certificate modal
    function certificates(reportID, caseID, currDateIssued, punongBrgy) {
      //DECLARATION FOR GENERATE CERTIFICATE
      $.post("function/rView.php", {
        reportIDSend: reportID
      }, function(result) {
        var userId = JSON.parse(result);

        //read complainant statement info
        document.getElementById('pCompName').innerHTML = userId.cFullName;
        document.getElementById('pCompDateIssued').innerHTML = currDateIssued;
        document.getElementById('pCompNameFooter').innerHTML = userId.cFullName;
        document.getElementById('pCompPunongBrgyFooter').innerHTML = punongBrgy;

        
        //read complaint statement
        document.getElementById('pCompStatement').innerHTML = userId.cComplaint;

        if (userId.witness == "Yes") {
          //displays witness div
          document.getElementById('gen-cert-witness').style.display = 'block';
          //read witness info
          $.post("function/rView.php", {
            caseIDSend: caseID
          }, function(Wresult) {
            var userWId = JSON.parse(Wresult);

            //read witness info
            document.getElementById('pWitName').innerHTML = userWId.wFullName;
            document.getElementById('pWitDateIssued').innerHTML = currDateIssued;
            document.getElementById('pWitNameFooter').innerHTML = userWId.wFullName;
            document.getElementById('pWitPunongBrgyFooter').innerHTML = punongBrgy;
            
            //read witness statement
            document.getElementById('pWitStatement').innerHTML = userWId.wStatement;

            //witness 2
            $.post("function/rView.php", {
              caseIDSend2: caseID
            }, function(Wresult2) {
              var userWId2 = JSON.parse(Wresult2);

              if (userWId2.wNo == 2) {
                //displays witness 2 div
                document.getElementById('gen-cert-witness2').style.display = 'block';

                //read witness 2 info
                document.getElementById('pWitName2').innerHTML = userWId2.wFullName;
                document.getElementById('pWitDateIssued2').innerHTML = currDateIssued;
                document.getElementById('pWitNameFooter2').innerHTML = userWId2.wFullName;
                document.getElementById('pWitPunongBrgyFooter2').innerHTML = punongBrgy;
                
                //read witness 2 statement
                document.getElementById('pWitStatement2').innerHTML = userWId2.wStatement;
              } else {
                document.getElementById('gen-cert-witness2').style.display = 'none';
              }
            });
          });
        } else {
          document.getElementById('gen-cert-witness').style.display = 'none';
          document.getElementById('gen-cert-witness2').style.display = 'none';
        }

        document.getElementById('pSusName').innerHTML = userId.sFullName;
        document.getElementById('pSusDateIssued').innerHTML = currDateIssued;
        document.getElementById('pSusNameFooter').innerHTML = userId.sFullName;
        document.getElementById('pSusPunongBrgyFooter').innerHTML = punongBrgy;
        
        //read suspect statement
        document.getElementById('pSusStatement').innerHTML = userId.sStatement;

        document.getElementById('pCoaComplainant').innerHTML = userId.cFullName;
        document.getElementById('pCoaSuspect').innerHTML = userId.sFullName;
        document.getElementById('pSusNameFooter').innerHTML = userId.sFullName;
        document.getElementById('pCoaPunongBrgyFooter').innerHTML = punongBrgy;

        document.getElementById('pAgrCName').innerHTML = userId.cFullName;
        document.getElementById('pAgrSName').innerHTML = userId.sFullName;
        document.getElementById('pAgrPunongBrgyFooter').innerHTML = punongBrgy;

        $("#certificateReport").modal('show');
      });
    }

    //open add_report modal
    function addModal() {
      $('#case_no').val(<?php echo $i ?>);
      $("#addReport").modal('show');
    };

    //open view_report modal
    function viewModal(reportID, caseID, viewDateIssued, viewDateEnd) {
      //DECLARATION FOR VIEW MODAL
      $('#vReportHidden_id').val(reportID);

      $.post("function/rView.php", {
        reportIDSend: reportID
      }, function(result) {
        var userId = JSON.parse(result);

        //read complaint info
        document.getElementById('vCase_no').innerHTML = userId.case_no;
        document.getElementById('vTypeOfReport').innerHTML = userId.typeOfReport;
        document.getElementById('vCName').innerHTML = userId.cFullName;
        document.getElementById('vCAddress').innerHTML = userId.cAddress;
        document.getElementById('vCAge').innerHTML = userId.cAge;
        document.getElementById('vCContact').innerHTML = userId.cContactNo;
        document.getElementById('vCPlace').innerHTML = userId.cPlace;
        document.getElementById('vCComplaint').innerHTML = userId.cComplaint;
        document.getElementById('vCWitness').innerHTML = userId.witness;

        if (userId.witness == "Yes") {
          //displays witness 1 div
          document.getElementById('view-witness-section').style.display = 'block';

          //witness 1
          $.post("function/rView.php", {
            caseIDSend: caseID
          }, function(Wresult) {
            var userWId = JSON.parse(Wresult);

            //read witness 1 info
            document.getElementById('vWName').innerHTML = userWId.wFullName;
            document.getElementById('vWAdress').innerHTML = userWId.wAddress;
            document.getElementById('vWAge').innerHTML = userWId.wAge;
            document.getElementById('vWContact').innerHTML = userWId.wContactNo;
            document.getElementById('vWPlace').innerHTML = userWId.wPlace;
            document.getElementById('vWStatement').innerHTML = userWId.wStatement;

            //witness 2
            $.post("function/rView.php", {
              caseIDSend2: caseID
            }, function(Wresult2) {
              var userWId2 = JSON.parse(Wresult2);

              if (userWId2.wNo == 2) {
                //displays witness 2 div
                document.getElementById('view-witness-section2').style.display = 'block';

                //read witness 2 info
                document.getElementById('vWName2').innerHTML = userWId2.wFullName;
                document.getElementById('vWAdress2').innerHTML = userWId2.wAddress;
                document.getElementById('vWAge2').innerHTML = userWId2.wAge;
                document.getElementById('vWContact2').innerHTML = userWId2.wContactNo;
                document.getElementById('vWPlace2').innerHTML = userWId2.wPlace;
                document.getElementById('vWStatement2').innerHTML = userWId2.wStatement;
              } else {
                document.getElementById('view-witness-section2').style.display = 'none';
              }
            });
          });
        } else {
          document.getElementById('view-witness-section').style.display = 'none';
        }

        //read suspect info
        document.getElementById('vSName').innerHTML = userId.sFullName;
        document.getElementById('vSAddress').innerHTML = userId.sAddress;
        document.getElementById('vSAge').innerHTML = userId.sAge;
        document.getElementById('vSContact').innerHTML = userId.sContactNo;
        document.getElementById('vSPlace').innerHTML = userId.sPlace;
        document.getElementById('vSStatement').innerHTML = userId.sStatement;

        document.getElementById('vDateIssued').innerHTML = viewDateIssued;
        document.getElementById('vDateEnd').innerHTML = viewDateEnd;
        document.getElementById('vStatus').innerHTML = userId.status;
      });





      //DECLARATION FOR VIEW PRINT MODAL (NO WITNESS)
      $('#vPReportHidden_id').val(reportID);

      $.post("function/rView.php", {
        reportIDSend: reportID
      }, function(result) {
        var userId = JSON.parse(result);

        //read complaint info
        document.getElementById('vPCase_no').innerHTML = userId.case_no;
        document.getElementById('vPTypeOfReport').innerHTML = userId.typeOfReport;
        document.getElementById('vPCName').innerHTML = userId.cFullName;
        document.getElementById('vPCAddress').innerHTML = userId.cAddress;
        document.getElementById('vPCAge').innerHTML = userId.cAge;
        document.getElementById('vPCContact').innerHTML = userId.cContactNo;
        document.getElementById('vPCPlace').innerHTML = userId.cPlace;
        document.getElementById('vPCComplaint').innerHTML = userId.cComplaint;
        document.getElementById('vPCWitness').innerHTML = userId.witness;

        //read suspect info
        document.getElementById('vPSName').innerHTML = userId.sFullName;
        document.getElementById('vPSAddress').innerHTML = userId.sAddress;
        document.getElementById('vPSAge').innerHTML = userId.sAge;
        document.getElementById('vPSContact').innerHTML = userId.sContactNo;
        document.getElementById('vPSPlace').innerHTML = userId.sPlace;
        document.getElementById('vPSStatement').innerHTML = userId.sStatement;

        document.getElementById('vPDateIssued').innerHTML = viewDateIssued;
        document.getElementById('vPDateEnd').innerHTML = viewDateEnd;
        document.getElementById('vPStatus').innerHTML = userId.status;
      });



      //DECLARATION FOR VIEW PRINT MODAL (WITH WITNESS)
      $('#vPWReportHidden_id').val(reportID);

      $.post("function/rView.php", {
        reportIDSend: reportID
      }, function(result) {
        var userId = JSON.parse(result);

        //read complaint info
        document.getElementById('vPWCase_no').innerHTML = userId.case_no;
        document.getElementById('vPWTypeOfReport').innerHTML = userId.typeOfReport;
        document.getElementById('vPWCName').innerHTML = userId.cFullName;
        document.getElementById('vPWCAddress').innerHTML = userId.cAddress;
        document.getElementById('vPWCAge').innerHTML = userId.cAge;
        document.getElementById('vPWCContact').innerHTML = userId.cContactNo;
        document.getElementById('vPWCPlace').innerHTML = userId.cPlace;
        document.getElementById('vPWCComplaint').innerHTML = userId.cComplaint;
        document.getElementById('vPWCWitness').innerHTML = userId.witness;

        if (userId.witness == "Yes") {
          //read witness info
          $.post("function/rView.php", {
            caseIDSend: caseID
          }, function(Wresult) {
            var userWId = JSON.parse(Wresult);

            //read witness info
            document.getElementById('vPWWName').innerHTML = userWId.wFullName;
            document.getElementById('vPWWAdress').innerHTML = userWId.wAddress;
            document.getElementById('vPWWAge').innerHTML = userWId.wAge;
            document.getElementById('vPWWContact').innerHTML = userWId.wContactNo;
            document.getElementById('vPWWPlace').innerHTML = userWId.wPlace;
            document.getElementById('vPWWStatement').innerHTML = userWId.wStatement;

            //witness 2
            $.post("function/rView.php", {
              caseIDSend2: caseID
            }, function(Wresult2) {
              var userWId2 = JSON.parse(Wresult2);

              if (userWId2.wNo == 2) {
                //displays witness 2 div
                document.getElementById('view-witness-section2print').style.display = 'block';

                //read witness 2 info
                document.getElementById('vPWWName2').innerHTML = userWId2.wFullName;
                document.getElementById('vPWWAdress2').innerHTML = userWId2.wAddress;
                document.getElementById('vPWWAge2').innerHTML = userWId2.wAge;
                document.getElementById('vPWWContact2').innerHTML = userWId2.wContactNo;
                document.getElementById('vPWWPlace2').innerHTML = userWId2.wPlace;
                document.getElementById('vPWWStatement2').innerHTML = userWId2.wStatement;
              } else {
                document.getElementById('view-witness-section2print').style.display = 'none';
              }
            });
          });
        } else {
          document.getElementById('view-witness-section').style.display = 'none';
        }

        //read suspect info
        document.getElementById('vPWSName').innerHTML = userId.sFullName;
        document.getElementById('vPWSAddress').innerHTML = userId.sAddress;
        document.getElementById('vPWSAge').innerHTML = userId.sAge;
        document.getElementById('vPWSContact').innerHTML = userId.sContactNo;
        document.getElementById('vPWSPlace').innerHTML = userId.sPlace;
        document.getElementById('vPWSStatement').innerHTML = userId.sStatement;

        document.getElementById('vPWDateIssued').innerHTML = viewDateIssued;
        document.getElementById('vPWDateEnd').innerHTML = viewDateEnd;
        document.getElementById('vPWStatus').innerHTML = userId.status;
      });



      //DECLARATION FOR EDIT MODAL
      $('#eReportHidden_id').val(reportID);

      $.post("function/rView.php", {
        reportIDSend: reportID
      }, function(result) {
        var userId = JSON.parse(result);

        //read complaint info
        $('#ecase_no').val(userId.case_no);
        $('#etype_of_report').val(userId.typeOfReport);
        $('#ecomplainant_name').val(userId.cFullName);
        $('#ecomplainant_address').val(userId.cAddress);
        $('#ecomplainant_age').val(userId.cAge);
        $('#ecomplainant_contact').val(userId.cContactNo);
        $('#ecomplainant_place').val(userId.cPlace);
        $('#ecomplainant_complaint').val(userId.cComplaint);
        $('#ewitness').val(userId.witness);

        if (userId.witness == "Yes") {
          //displays witness div
          document.getElementById('edit-witness-section').style.display = 'block';
          //read witness info
          $.post("function/rView.php", {
            caseIDSend: caseID
          }, function(Wresult) {
            var userWId = JSON.parse(Wresult);

            //read witness info
            $('#ewitness_name').val(userWId.wFullName);
            $('#ewitness_address').val(userWId.wAddress);
            $('#ewitness_age').val(userWId.wAge);
            $('#ewitness_contact').val(userWId.wContactNo);
            $('#ewitness_place').val(userWId.wPlace);
            $('#ewitness_statement').val(userWId.wStatement);
            $('#wedit_hiddenIDWitness').val(userWId.id);

            //witness 2
            $.post("function/rView.php", {
              caseIDSend2: caseID
            }, function(Wresult2) {
              var userWId2 = JSON.parse(Wresult2);

              if (userWId2.wNo == 2) {
                //displays witness 2 div
                document.getElementById('edit-witness-section2').style.display = 'block';

                //read witness 2 info
                $('#ewitness2').val("Yes");
                $('#ewitness_name2').val(userWId2.wFullName);
                $('#ewitness_address2').val(userWId2.wAddress);
                $('#ewitness_age2').val(userWId2.wAge);
                $('#ewitness_contact2').val(userWId2.wContactNo);
                $('#ewitness_place2').val(userWId2.wPlace);
                $('#ewitness_statement2').val(userWId2.wStatement);
                $('#wedit_hiddenIDWitness2').val(userWId2.id);
              } else {
                document.getElementById('edit-witness-section2').style.display = 'none';
              }
            });
          });
        } else {
          document.getElementById('edit-witness-section').style.display = 'none';
        }

        //read suspect info
        $('#esuspect_name').val(userId.sFullName);
        $('#esuspect_address').val(userId.sAddress);
        $('#esuspect_age').val(userId.sAge);
        $('#esuspect_contact').val(userId.sContactNo);
        $('#esuspect_place').val(userId.sPlace);
        $('#esuspect_statement').val(userId.sStatement);

        $('#edatetime_start').val(userId.dateTimeIssued);
        $('#edatetime_end').val(userId.dateTimeEnd);
        $('#estatus').val(userId.status);
      });

      $("#viewReport").modal('show');
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