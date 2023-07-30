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

  <title>About Us</title>
</head>

<body class="about-us-body">
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
          <li class=""><a href="../clearance/clearance.php"><i class="fa-solid fa-folder-open"></i>Clearance</a></li>
          <li class=""><a href="../about/about_virs.php"><i class="fa-solid fa-computer"></i>About VIRS</a></li>
          <li class="active"><a href="#"><i class="fa-solid fa-graduation-cap"></i>Developers</a></li>
        </div>
      </div>
    </div>
  </section>

  <!-- container -->
  <section id="interface">

    <!-- topbar -->
    <?php include('../nav/topbar.php') ?>

    <!-- main content -->
    <div class="about-us-container">
      <div class="profile-card">
        <div class="top-section">
          <div class="pic">
            <img src="../../assets/images/keans.jpg" />
          </div>
          <div class="name">
            Austria, Keans Erol T.
          </div>
        </div>
        <div class="course">
          B.S. Information Technology <br />
          <span>Major in Web Development</span>
        </div>
        <div class="bottom-section">
          <div class="contactno">
            09756824759
            <span>Contact No.</span>
          </div>
          <div class="border"></div>
          <div class="email">
            erolaustria@gmail.com
            <span>E-Mail</span>
          </div>
        </div>
      </div>

      <div class="profile-card">
        <div class="top-section">
          <div class="pic">
            <img src="../../assets/images/christian.jpg" />
          </div>
          <div class="name">
            Imperial, Christian Joseph C.
          </div>
        </div>
        <div class="course">
          B.S. Information Technology <br />
          <span>Major in Web Development</span>
        </div>
        <div class="bottom-section">
          <div class="contactno">
            09178414882
            <span>Contact No.</span>
          </div>
          <div class="border"></div>
          <div class="email">
            christianjosephimperial@gmail.com
            <span>E-Mail</span>
          </div>
        </div>
      </div>

      <div class="profile-card">
        <div class="top-section">
          <div class="pic">
            <img src="../../assets/images/aeron.jpg" />
          </div>
          <div class="name">
            Montalbo, Aeron Gabriel A.
          </div>
        </div>
        <div class="course">
          B.S. Information Technology <br />
          <span>Major in Web Development</span>
        </div>
        <div class="bottom-section">
          <div class="contactno">
            09777184266
            <span>Contact No.</span>
          </div>
          <div class="border"></div>
          <div class="email">
            aeronmontalbo800@gmail.com
            <span>E-Mail</span>
          </div>
        </div>
      </div>
      <div class="lasalle">
        <img src="../../assets/images/dlsud-logo.png" width="35px" style="margin-right: 5px;">
        De La Salle University - Dasmariñas
      </div>
    </div>
  </section>

  <!-- import cdn file -->
  <?php require('../../assets/js.php') ?>

  <script>
    $(document).ready(function() {
      $('#sortTbl').DataTable();
    });

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