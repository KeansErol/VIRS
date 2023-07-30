<div class="navigation">
  <div class="n1">
    <div>
      <i id="menu-btn" class="fas fa-solid fa-bars"></i>
    </div>
  </div>

  <div class="profile">
  <?php
    //connects to connection.php
    require_once('../../connection.php');

    $i = 1;
    $username = $_SESSION['user_name'];
    $sql = "SELECT * FROM account WHERE id = '$username'";

    //executes the sql
    $result = $connection->query($sql);

    //statement if sql is wrong
    if (!$result) {
      die("Invalid query: " . $connection->error);
    }

    while ($row = $result->fetch_assoc()) :
    ?>
    <span><?php echo $row['username'] ?> (User)</span>
    
    <?php endwhile; ?>

    <img src="../../assets/images/account-icon.png" onclick="toggleMenu()">
    <!-- topright dropdown -->
    <div class="sub-menu-wrap" id="subMenu">
      <div class="sub-menu">
        <a href="../account/settings.php" class="sub-menu-link">
          <i class="fa-solid fa-unlock-keyhole"></i>
          <p>My Account</p>
        </a>

        <a href="../../login/logout.php" class="sub-menu-link">
          <i class="fa-solid fa-right-from-bracket"></i>
          <p>Logout</p>
        </a>
      </div>
    </div>
  </div>
</div>