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

  <title>Brgy Officials</title>
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
          <li class="active"><a href="../brgy_officials/brgy_officials.php"><i class="fa-solid fa-users"></i>Officials</a></li>
          <li class=""><a href="../report/report.php"><i class="fa-solid fa-file-lines"></i>Report</a></li>
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
    <!-- main content -->
    <div class="head-border">
      <h3 class="i-name">Barangay Officials</h3>
    </div>

    <button type="button" class="print-btn" onclick="printBrgyOfficial()"><i class="print-icon fa-solid fa-print"></i>Print</button>

    <div class="board">
      <table class="table table-striped" id="sortTbl">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          //connects to connection.php
          require_once('../../connection.php');

          $i = 1;
          $sql = "SELECT * FROM brgy_officials";
          //executes the sql
          $result = $connection->query($sql);

          //statement if sql is wrong
          if (!$result) {
            die("Invalid query: " . $connection->error);
          }

          while ($row = $result->fetch_assoc()) :
          ?>
            <tr>
              <td style="width: 100px;">
                <p><?php echo $i++ ?></p>
              </td>
              <td>
                <h5><?php echo $row['name'] ?><p><?php echo $row['position'] ?></p>
                </h5>
              </td>
              <td style="width: 50px; text-align: center; white-space: nowrap">
                <button type="button" class="btn btn-primary" title="View" onclick="viewModal(<?php echo $row['id'] ?>)"><i class="fa-solid fa-eye"></i></button>
              </td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  </section>

  <!-- import modal file -->
  <?php require('modal/view_brgy_officials.php') ?>
  <!-- import print file -->
  <?php include('print/print.php') ?>
  <!-- import cdn file -->
  <?php require('../../assets/js.php') ?>

  <script>
    $(document).ready(function() {
      $('#sortTbl').DataTable();
    });

    //print all brgy official
    function printBrgyOfficial() {
      $('body').prepend('<div id="preloader"></div>')
      var _h = $('head').clone()
      var _p = $('.print_out').clone()
      var _el = $('<div>')
      _el.append(_h)
      _el.append("<div style='display: flex; justify-content: space-between;'><img src='../../assets/images/BayanLuma1Logo.png' width='100px'><h5 style='margin: 18px 0 0 0; font-size: 15px; text-align: center;'>REPUBLIC OF THE PHILIPPINES</br>PROVINCE OF CAVITE</br>CITY OF IMUS</br>BARANGAY BAYAN LUMA I</h5><img src='../../assets/images/LungsodNgImusLogo.png' width='100px'></div>");
      _el.append("</br><h5 class='text-center' style='margin-bottom: 40px;'>LIST OF BARANGAY OFFICIALS</h5>")
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

    //open view modal
    function viewModal(bOfficial) {
      //DECLARATION FOR VIEW MODAL
      $('#vBOHidden_id').val(bOfficial);

      $.post("function/boView.php", {
        bOfficialSend: bOfficial
      }, function(result) {
        var userId = JSON.parse(result);

        //read brgy official info
        document.getElementById('vboPosition').innerHTML = userId.position;;
        document.getElementById('vboName').innerHTML = userId.name
      });

      //DECLARATION FOR EDIT MODAL
      $('#eBOHidden_id').val(bOfficial);

      $.post("function/boView.php", {
        bOfficialSend: bOfficial
      }, function(result) {
        var userId = JSON.parse(result);

        //read complaint info
        $('#eboPosition').val(userId.position);
        $('#eboName').val(userId.name);
      });

      $("#viewBrgyOfficials").modal('show');
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