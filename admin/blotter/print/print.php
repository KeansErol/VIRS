<!-- TABLE TO BE PRINTED (hidden from the page) -->
<div class="board" style="display: none;">
  <table class="table table-striped print_out" id="sortTbl">
    <thead>
      <tr>
        <th>Case #</th>
        <th>Name</th>
        <th>Hearing Stage</th>
        <th>Hearing Date</th>
      </tr>
    </thead>
    <tbody>
      <?php
      //connects to connection.php
      require_once('../../connection.php');

      $i = 1;
      $sql = "SELECT * FROM blotter";
      //executes the sql
      $result = $connection->query($sql);

      //statement if sql is wrong
      if (!$result) {
        die("Invalid query: " . $connection->error);
      }

      while ($row = $result->fetch_assoc()) :
      ?>
        <tr>
          <td>
            <p><?php echo $i++ ?></p>
          </td>
          <td>
            Complainant Name: <p><?php echo $row['cFullName'] ?></p>
            Complainee Name: <p><?php echo $row['sFullName'] ?></p>
          </td>
          <td style="width: 120px; text-align: center;">
            <p><?php echo $row['hearingStage'] ?></p>
          </td>
          <td style="width: 200px;">
            Start: <p><?php echo date("M d, Y | h:i A", strtotime($row['hearingDateStart'])) ?></p>
            End: <p><?php echo date("M d, Y | h:i A", strtotime($row['hearingDateEnd'])) ?></p>
          </td>
        </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</div>
<!-- TABLE TO BE PRINTED (hidden from the page) -->





















<!-- print details (hidden from page) -->
<div style="display: none;">
  <div class="print_out_blotter">
    <input type="hidden" id="vPBlotterHidden_id">
    <div style="display: flex; justify-content: space-between;">
      <div>
        <label>Case #:</label> <label id="vPBCase_no">label</label>
      </div>
    </div>

    <hr />
    <h3 style="color: rgb(16, 164, 0);">COMPLAINANT INFORMATION</h3>
    <p>Complainant Name: <label id="vPBCname">label</label></p>
    <p>Address: <label id="vPBCAddress">label</label></p>
    <p>Contact #: <label id="vPBCContactNo">label</label></p>
    <h3 style="color: rgb(164, 106, 0);">COMPLAINEE INFORMATION</h3>
    <p>Complainanee Name: <label id="vPBSname">label</label></p>
    <p>Address: <label id="vPBSAddress">label</label></p>
    <p>Contact #: <label id="vPBSContactNo">label</label></p>
    <hr />
    <p>Hearing Stage: <label id="vPBHStage">label</label></p>
    <p>Description/s per hearing:</p>&nbsp;&nbsp;<label id="vPBDesc">label</label></br></br>
    <p>Hearding Date/Time Start: <label id="vPBHDateStart">label</label></p>
    <p>Hearding Date/Time End: <label id="vPBHDateEnd">label</label></p>

    <hr />
    
    <p>Date/Time Issued: <label id="vPBDateIssued">label</label></p>
    <p>Status: <label id="vPBStatus">label</label></p>
  </div>
</div>
<!-- print details (hidden from page) -->

















<!-- print certificate of file action (hidden from page) -->
<div style="display: none;">
  <div class="print_out_certOfFileAction_blotter" style="margin: 0 80px 0 80px;">
    <input type="hidden" id="pBlotterHidden_id">
    I am writing to endorse the case of <label id="pBCoaComplainant">[name of complainant]</label> versus <label id="pBCoaSuspect">[name of suspect]</label> to be passed on to the
    higher court for further settlement.
    </br></br>
    Despite efforts to resolve the matter at the barangay level, the parties involved have been
    unable to reach a mutually acceptable resolution. As such, it is my belief that the case requires the attention and expertise of a
    higher court.
    </br></br>
    I highly recommend that this case be passed on to the appropriate court, where it can be given the thorough consideration
    and resolution that it deserves. I trust that the court will handle the case with fairness, impartiality, and in accordance with the law.
    </br></br>
    Thank you for your attention to this matter.
    </br></br></br></br>
    <div style="float: right;">
      <div class="right-foot" style=" text-align: center;">
        <label id="pBPunongBrgyFooter">Punong Name</label>
        <p>Punong Barangay</p>
      </div>
    </div>
    </br></br></br></br>
    <div style="font-size: 10px;">
      This certificate of file action was done at Barangay Bayan Luma I, Imus, Cavite this <label id="BcurrentDay">1</label> day of <label id="BcurrentMonth">January</label> <label id="BcurrentYear">2023</label>
    </div>
  </div>
</div>

<script>
  const month = ["January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"
  ];

  var today = new Date();
  document.getElementById('BcurrentDay').innerHTML = today.getDate();
  document.getElementById('BcurrentMonth').innerHTML = month[today.getMonth()];
  document.getElementById('BcurrentYear').innerHTML = today.getFullYear();
</script>
<!-- print certificate of file action (hidden from page) -->