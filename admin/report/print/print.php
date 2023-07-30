<!-- TABLE TO BE PRINTED (hidden from the page) -->
<div class="board" style="display: none;">
  <table class="table table-striped print_out">
    <thead>
      <tr>
        <th>Case #</th>
        <th>Name</th>
        <th>Date</th>
        <th>Type of Report</th>
      </tr>
    </thead>
    <tbody>
      <?php
      //connects to connection.php
      require_once('../../connection.php');

      $i = 1;
      $sql = "SELECT * FROM report";
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
          <td>
            Start: <p><?php echo date("M d, Y | h:i A", strtotime($row['dateTimeIssued'])) ?></p>
            End: <p><?php echo date("M d, Y | h:i A", strtotime($row['dateTimeEnd'])) ?></p>
          </td>
          <td style="text-align: center;">
            <p><?php echo $row['typeOfReport'] ?></p>
          </td>
        </tr>

      <?php endwhile; ?>
    </tbody>
  </table>
</div>
<!-- TABLE TO BE PRINTED (hidden from the page) -->













<!-- print details that has NO witness (hidden from page) -->
<div style="display: none;">
  <div class="print_out_specific_noWitness">
    <input type="hidden" id="vPReportHidden_id">
    <div style="display: flex; justify-content: space-between;">
      <div>
        <label>Case #:</label> <label id="vPCase_no">label</label>
      </div>
      <div>
        <label>Type of Report:</label> <label id="vPTypeOfReport">label</label>
      </div>
    </div>

    <hr />

    <!-- COMPLAINANT SECTION -->
    <h3 style="color: rgb(16, 164, 0);">COMPLAINANT INFORMATION</h3>
    <p>Name: <label id="vPCName">label</label></p>
    <p>Address: <label id="vPCAddress">label</label></p>
    <p>Age: <label id="vPCAge">label</label></p>
    <p>Contact #: <label id="vPCContact">label</label></p>
    <p>Place: <label id="vPCPlace">label</label></p>
    <p>Complaint: <label id="vPCComplaint">label</label></p>
    <p>Witness: <label id="vPCWitness">label</label></p>

    <!-- COMPLAINANT SECTION -->

    <hr />

    <!-- COMPLAINEE SECTION -->
    <h3 style="color: rgb(164, 106, 0);">COMPLAINEE INFORMATION</h3>
    <p>Name: <label id="vPSName">label</label></p>
    <p>Address: <label id="vPSAddress">label</label></p>
    <p>Age: <label id="vPSAge">label</label></p>
    <p>Contact #: <label id="vPSContact">label</label></p>
    <p>Place: <label id="vPSPlace">label</label></p>
    <p>Complaint: <label id="vPSStatement">label</label></p>
    <!-- COMPLAINEE SECTION -->

    <hr />
    <p>Date/Time Issued: <label id="vPDateIssued">label</label></p>
    <div style="display: flex; justify-content: space-between;">
      <div>
        <label>Date/Time End:</label> <label id="vPDateEnd">label</label>
      </div>
      <div>
        <label>Status:</label> <label id="vPStatus">label</label>
      </div>
    </div>
  </div>
</div>
<!-- print details that has NO witness (hidden from page) -->













<!-- print details that HAS a witness (hidden from page) -->
<div style="display: none;">
  <div class="print_out_specific_hasWitness">
    <input type="hidden" id="vPWReportHidden_id">
    <div style="display: flex; justify-content: space-between;">
      <div>
        <label>Case #:</label> <label id="vPWCase_no">label</label>
      </div>
      <div>
        <label>Type of Report:</label> <label id="vPWTypeOfReport">label</label>
      </div>
    </div>

    <hr />

    <!-- COMPLAINANT SECTION -->
    <h3 style="color: rgb(16, 164, 0);">COMPLAINANT INFORMATION</h3>
    <p>Name: <label id="vPWCName">label</label></p>
    <p>Address: <label id="vPWCAddress">label</label></p>
    <p>Age: <label id="vPWCAge">label</label></p>
    <p>Contact #: <label id="vPWCContact">label</label></p>
    <p>Place: <label id="vPWCPlace">label</label></p>
    <p>Complaint: <label id="vPWCComplaint">label</label></p>
    <p>Witness: <label id="vPWCWitness">label</label></p>
    <!-- COMPLAINANT SECTION -->


    <!-- WITNESS SECTION -->
    <hr />
    <h3 style="color: rgb(0, 153, 164);">WITNESS #1 INFORMATION</h3>
    <p>Name: <label id="vPWWName">label</label></p>
    <p>Address: <label id="vPWWAdress">label</label></p>
    <p>Age: <label id="vPWWAge">label</label></p>
    <p>Contact #: <label id="vPWWContact">label</label></p>
    <p>Place: <label id="vPWWPlace">label</label></p>
    <p>Statement: <label id="vPWWStatement">label</label></p>
    <div id="view-witness-section2print" style="display: none;">
      <hr />
      <h3 style="color: rgb(0, 153, 164);">WITNESS #2 INFORMATION</h3>
      <p>Name: <label id="vPWWName2">label</label></p>
      <p>Address: <label id="vPWWAdress2">label</label></p>
      <p>Age: <label id="vPWWAge2">label</label></p>
      <p>Contact #: <label id="vPWWContact2">label</label></p>
      <p>Place: <label id="vPWWPlace2">label</label></p>
      <p>Statement: <label id="vPWWStatement2">label</label></p>
    </div>
    <!-- WITNESS SECTION -->

    <hr />

    <!-- COMPLAINEE SECTION -->
    <h3 style="color: rgb(164, 106, 0);">COMPLAINEE INFORMATION</h3>
    <p>Name: <label id="vPWSName">label</label></p>
    <p>Address: <label id="vPWSAddress">label</label></p>
    <p>Age: <label id="vPWSAge">label</label></p>
    <p>Contact #: <label id="vPWSContact">label</label></p>
    <p>Place: <label id="vPWSPlace">label</label></p>
    <p>Complaint: <label id="vPWSStatement">label</label></p>
    <!-- COMPLAINEE SECTION -->

    <hr />
    <p>Date/Time Issued: <label id="vPWDateIssued">label</label></p>
    <div style="display: flex; justify-content: space-between;">
      <div>
        <label>Date/Time End:</label> <label id="vPWDateEnd">label</label>
      </div>
      <div>
        <label>Status:</label> <label id="vPWStatus">label</label>
      </div>
    </div>
  </div>
</div>
<!-- print details that HAS a witness (hidden from page) -->

















<!-- print complainant statement (hidden from page) -->
<div style="display: none;">
  <div class="print_out_complainant" style="margin: 0 80px 0 80px; text-align: justify;">
    Name: <label id="pCompName">name of complainant</label></br>
    Date: <label id="pCompDateIssued">date/time</label></br></br></br>
    <label id="pCompStatement">compstatement</label></br></br></br></br>
    <div style="display: flex; justify-content: space-between; text-align: center;">
      <div class="left-foot">
        <label id="pCompNameFooter">CompName</label>
        <p>Complainant Name</p>
      </div>
      <div class="right-foot">
        <label id="pCompPunongBrgyFooter">Punong Name</label>
        <p>Punong Barangay</p>
      </div>
    </div>
  </div>
</div>
<!-- print complainant statement (hidden from page) -->











<!-- print witness statement (hidden from page) -->
<div style="display: none;">
  <div class="print_out_witness" style="margin: 0 80px 0 80px; text-align: justify;">
    Name: <label id="pWitName">name of witness</label></br>
    Date: <label id="pWitDateIssued">date/time</label></br></br></br>
    <label id="pWitStatement">Witstatement</label></br></br></br></br>
    <div style="display: flex; justify-content: space-between; text-align: center;">
      <div class="left-foot">
        <label id="pWitNameFooter">WitName</label>
        <p>Witness Name</p>
      </div>
      <div class="right-foot">
        <label id="pWitPunongBrgyFooter">Punong Name</label>
        <p>Punong Barangay</p>
      </div>
    </div>
  </div>
</div>
<!-- print witness statement (hidden from page) -->









<!-- print witness statement 2 (hidden from page) -->
<div style="display: none;">
  <div class="print_out_witness2" style="margin: 0 80px 0 80px; text-align: justify;">
    Name: <label id="pWitName2">name of witness</label></br>
    Date: <label id="pWitDateIssued2">date/time</label></br></br></br>
    <label id="pWitStatement2">Witstatement</label></br></br></br></br>
    <div style="display: flex; justify-content: space-between; text-align: center;">
      <div class="left-foot">
        <label id="pWitNameFooter2">WitName</label>
        <p>Witness Name</p>
      </div>
      <div class="right-foot">
        <label id="pWitPunongBrgyFooter2">Punong Name</label>
        <p>Punong Barangay</p>
      </div>
    </div>
  </div>
</div>
<!-- print witness statement 2 (hidden from page) -->











<!-- print suspect statement (hidden from page) -->
<div style="display: none;">
  <div class="print_out_suspect" style="margin: 0 80px 0 80px; text-align: justify;">
    Name: <label id="pSusName">name of suspect</label></br>
    Date: <label id="pSusDateIssued">date/time</label></br></br></br>
    <label id="pSusStatement">Suspect statement</label></br></br></br></br>
    <div style="display: flex; justify-content: space-between; text-align: center;">
      <div class="left-foot">
        <label id="pSusNameFooter">SusName</label>
        <p>Complainee Name</p>
      </div>
      <div class="right-foot">
        <label id="pSusPunongBrgyFooter">Punong Name</label>
        <p>Punong Barangay</p>
      </div>
    </div>
  </div>
</div>
<!-- print suspect statement (hidden from page) -->









<!-- print certificate of file action (hidden from page) -->
<div style="display: none;">
  <div class="print_out_certOfFileAction" style="margin: 0 80px 0 80px; text-align: justify;">
    I am writing to endorse the case of <label id="pCoaComplainant">[name of complainant]</label> versus <label id="pCoaSuspect">[name of suspect]</label> to be passed on to the
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
      <div class="right-foot" style="text-align: center;">
        <label id="pCoaPunongBrgyFooter">Punong Name</label>
        <p>Punong Barangay</p>
      </div>
    </div>
    </br></br></br></br>
    <div style="font-size: 10px;">
      This certificate of file action was done at Barangay Bayan Luma I, Imus, Cavite this <label id="currentDay">1</label> day of <label id="currentMonth">January</label> <label id="currentYear">2023</label>
    </div>
  </div>
</div>

<script>
  const month = ["January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"
  ];

  var today = new Date();
  document.getElementById('currentDay').innerHTML = today.getDate();
  document.getElementById('currentMonth').innerHTML = month[today.getMonth()];
  document.getElementById('currentYear').innerHTML = today.getFullYear();
</script>
<!-- print certificate of file action (hidden from page) -->











<!-- print agreement letter (hidden from page) -->
<div style="display: none;">
  <div class="print_out_agreement" style="margin: 0 80px 0 80px; text-align: justify;">
    Dear <label id="pAgrCName">name of complainant</label> and <label id="pAgrSName">name of complainant</label>,
    </br></br>
    We are pleased to inform you that the issue regarding <label id="pAgrNatureOfComplaint">nature of compaint</label> has been resolved
    amicably between the two of you.
    </br></br>
    After conducting a thorough investigation, we have found that there was a misunderstanding between
    you both. We are glad that you were able to sit down and talk things out, and that you were able to come to an agreement.
    <div id="pAgrUpon">
      </br></br>
      <label id="pAgrStatement">[what they agreed upon]</label>
    </div>
    </br></br>
    As a Barangay official, we would like to commend both of you for your cooperation in resolving this issue. We appreciate
    your willingness to work together to find a solution that benefits both parties.
    </br></br>
    Moving forward, we hope that this resolution will foster better communication and understanding between you both, and that
    you will continue to live in peace and harmony in our community.
    </br></br></br>
    Thank you for your attention to this matter.
    </br></br>
    <div style="float: right;">
      <span style="float: right;">Sincerely,</span></br>
      <div style="text-align: center;">
        <label id="pAgrPunongBrgyFooter">Punong Name</label>
      </div>
    </div>
  </div>
</div>
</div>
<!-- print agreement letter (hidden from page) -->