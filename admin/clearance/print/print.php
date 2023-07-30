<!-- print details -->
<div style="display: none;">
  <div class="print_out_certificate">
    <!-- brgy officials (sidebar) -->
    <div style="position: absolute; line-height: 15px; margin: 172px 0 0 42px; width: 138px; font-size: 13px; text-align: center;">
      <div style="display: flex; flex-direction:column; row-gap: 10px;">
        <?php
        $sql = "SELECT * FROM brgy_officials WHERE position = 'Punong Barangay'";
        $result = $connection->query($sql);
        while ($punongBrgy = $result->fetch_assoc()) :
        ?>
          <div><?php echo $punongBrgy['name'] ?><br /><label style="font-size: 10px; margin-top: 1px; line-height: 9px;"><?php echo $punongBrgy['position'] ?></label></div>
        <?php endwhile; ?>

        <label style="border-top: 1px solid gray; border-bottom: 1px solid gray; margin: 0 3px;">BARANGAY KAGAWAD</label>

        <?php
        $sql = "SELECT * FROM brgy_officials WHERE position = 'Human Rights, Public Order and Good Governance'";
        $result = $connection->query($sql);
        while ($punongBrgy = $result->fetch_assoc()) :
        ?>
          <div><?php echo $punongBrgy['name'] ?><br /><label style="font-size: 10px; margin-top: 1px; line-height: 9px;"><?php echo $punongBrgy['position'] ?></label></div>
        <?php endwhile; ?>

        <?php
        $sql = "SELECT * FROM brgy_officials WHERE position = 'Public Works, Infrastructure'";
        $result = $connection->query($sql);
        while ($punongBrgy = $result->fetch_assoc()) :
        ?>
          <div><?php echo $punongBrgy['name'] ?><br /><label style="font-size: 10px; margin-top: 1px; line-height: 9px;"><?php echo $punongBrgy['position'] ?></label></div>
        <?php endwhile; ?>

        <?php
        $sql = "SELECT * FROM brgy_officials WHERE position = 'Appropriations'";
        $result = $connection->query($sql);
        while ($punongBrgy = $result->fetch_assoc()) :
        ?>
          <div><?php echo $punongBrgy['name'] ?><br /><label style="font-size: 10px; margin-top: 1px; line-height: 9px;"><?php echo $punongBrgy['position'] ?></label></div>
        <?php endwhile; ?>

        <?php
        $sql = "SELECT * FROM brgy_officials WHERE position = 'Livelihood, Employment and Cooperation Development'";
        $result = $connection->query($sql);
        while ($punongBrgy = $result->fetch_assoc()) :
        ?>
          <div><?php echo $punongBrgy['name'] ?><br /><label style="font-size: 10px; margin-top: 1px; line-height: 9px;"><?php echo $punongBrgy['position'] ?></label></div>
        <?php endwhile; ?>

        <?php
        $sql = "SELECT * FROM brgy_officials WHERE position = 'Environmental Protection'";
        $result = $connection->query($sql);
        while ($punongBrgy = $result->fetch_assoc()) :
        ?>
          <div><?php echo $punongBrgy['name'] ?><br /><label style="font-size: 10px; margin-top: 1px; line-height: 9px;"><?php echo $punongBrgy['position'] ?></label></div>
        <?php endwhile; ?>

        <?php
        $sql = "SELECT * FROM brgy_officials WHERE position = 'Health and Sanitation'";
        $result = $connection->query($sql);
        while ($punongBrgy = $result->fetch_assoc()) :
        ?>
          <div><?php echo $punongBrgy['name'] ?><br /><label style="font-size: 10px; margin-top: 1px; line-height: 9px;"><?php echo $punongBrgy['position'] ?></label></div>
        <?php endwhile; ?>

        <?php
        $sql = "SELECT * FROM brgy_officials WHERE position = 'Women and Family Welfare'";
        $result = $connection->query($sql);
        while ($punongBrgy = $result->fetch_assoc()) :
        ?>
          <div><?php echo $punongBrgy['name'] ?><br /><label style="font-size: 10px; margin-top: 1px; line-height: 9px;"><?php echo $punongBrgy['position'] ?></label></div>
        <?php endwhile; ?>

        <label style="border-top: 1px solid gray; border-bottom: 1px solid gray; margin: 0 3px;">SK CHAIR</label>
        
        <?php
        $sql = "SELECT * FROM brgy_officials WHERE position = 'Education, Youth and Sports Development'";
        $result = $connection->query($sql);
        while ($punongBrgy = $result->fetch_assoc()) :
        ?>
          <div><?php echo $punongBrgy['name'] ?><br /><label style="font-size: 10px; margin-top: 1px; line-height: 9px;"><?php echo $punongBrgy['position'] ?></label></div>
        <?php endwhile; ?>

        <label style="border-top: 1px solid gray; border-bottom: 1px solid gray; font-size: 12px; margin: 0 3px;">BARANGAY OFFICIALS</label>

        <?php
        $sql = "SELECT * FROM brgy_officials WHERE position = 'Barangay Secretary'";
        $result = $connection->query($sql);
        while ($punongBrgy = $result->fetch_assoc()) :
        ?>
          <div><?php echo $punongBrgy['name'] ?><br /><label style="font-size: 10px; margin-top: 1px; line-height: 9px;"><?php echo $punongBrgy['position'] ?></label></div>
        <?php endwhile; ?>

        <?php
        $sql = "SELECT * FROM brgy_officials WHERE position = 'Barangay Treasurer'";
        $result = $connection->query($sql);
        while ($punongBrgy = $result->fetch_assoc()) :
        ?>
          <div><?php echo $punongBrgy['name'] ?><br /><label style="font-size: 10px; margin-top: 1px; line-height: 9px;"><?php echo $punongBrgy['position'] ?></label></div>
        <?php endwhile; ?>

        <?php
        $sql = "SELECT * FROM brgy_officials WHERE position = 'Barangay Clerk'";
        $result = $connection->query($sql);
        while ($punongBrgy = $result->fetch_assoc()) :
        ?>
          <div><?php echo $punongBrgy['name'] ?><br /><label style="font-size: 10px; margin-top: 1px; line-height: 9px;"><?php echo $punongBrgy['position'] ?></label></div>
        <?php endwhile; ?>

        <?php
        $sql = "SELECT * FROM brgy_officials WHERE position = 'Barangay Chief Tanod'";
        $result = $connection->query($sql);
        while ($punongBrgy = $result->fetch_assoc()) :
        ?>
          <div><?php echo $punongBrgy['name'] ?><br /><label style="font-size: 10px; margin-top: 1px; line-height: 9px;"><?php echo $punongBrgy['position'] ?></label></div>
        <?php endwhile; ?>
      </div>
    </div>
    <!-- brgy officials (sidebar) -->

    <!-- content -->
    <div style="position: absolute; line-height: 0; margin: 340px 0 0 220px; width: 460px;">
      <p><label style="font-size: 12px;">FULL NAME:</label> <label style="font-size: 11px;" id="pName">label</label></p>
      <p><label style="font-size: 12px;">ADDRESS:</label> <label style="font-size: 11px;" id="pAddress">label</label></p>
      <p><label style="font-size: 12px;">DOB/POB:</label> <label style="font-size: 11px;" id="pDob">label</label></p>
      <p><label style="font-size: 12px;">SEX:</label> <label style="font-size: 11px;" id="pSex">label</label></p>
      <p><label style="font-size: 12px;">CIVIL STATUS:</label> <label style="font-size: 11px;" id="pCivil">label</label></p>
      <p><label style="font-size: 12px;">RESIDENCY STATUS:</label> <label style="font-size: 11px;" id="pResidency">label</label></p>
      <p><label style="font-size: 12px;">NATIONALITY:</label> <label style="font-size: 11px;" id="pNationality">label</label></p>
      <p><label style="font-size: 12px;">PURPOSE:</label> <label style="font-size: 11px;" id="pPurpose">label</label></p>
      <p><label style="font-size: 12px;">CTC/BRGY.ID NO:</label> <label style="font-size: 11px;" id="pCtc">label</label></p>
      <p><label style="font-size: 12px;">PLACE OF ISSUE:</label> <label style="font-size: 11px;" id="pPlace">label</label></p>
      <p><label style="font-size: 12px;">DATE OF ISSUE:</label> <label style="font-size: 11px;" id="pDate">label</label></p>
      <p><label style="font-size: 12px;">CLEARANCE FEE: ₱</label> <label style="font-size: 11px;" id="pClearance">label</label></p>
      <p><label style="font-size: 12px;">BC CONTROLL NO:</label> <label style="font-size: 11px;" id="pBC">label</label></p>
    </div>
    <!-- content -->

    <!-- punong brgy name footer -->
    <div style="position: absolute; line-height: 0; margin: 740px 0 0 220px; width: 460px; text-align: center;">
      <?php
      $sql = "SELECT * FROM brgy_officials WHERE position = 'Punong Barangay'";
      $result = $connection->query($sql);
      while ($punongBrgy1 = $result->fetch_assoc()) :
      ?>
        <p style="font-size: 20px;"><?php echo $punongBrgy1['name'] ?></p>
      <?php endwhile; ?>
    </div>
    <!-- punong brgy name footer -->
  </div>
</div>
<!-- print details -->