<!-- Modal -->
<div class="modal modal-lg fade" id="addReport" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #0d6efd; color: #fff">
        <h1 class="modal-title fs-2" id="staticBackdropLabel"><b>Add Report</b></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- modal content -->
      <div class="modal-body">
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Case #</b></label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="case_no" id="case_no" value="" placeholder="Enter case no." disabled>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Type of Report</b></label>
          <div class="col-sm-8">
            <select name="type_of_report" id="type_of_report" class="custom-select">
              <option value="Incident">Incident</option>
              <option value="Violation">Violation</option>
            </select>
          </div>
        </div>

        <hr />

        <!-- COMPLAINANT SECTION -->
        <h2 style="color: rgb(16, 164, 0);"><b>COMPLAINANT INFORMATION</b></h2>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label"><b>Name</b></label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="complainant_name" id="complainant_name" value="" placeholder="Enter complainant full name">
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label"><b>Address</b></label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="complainant_address" id="complainant_address" value="" placeholder="Enter complainant address">
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label"><b>Age</b></label>
          <div class="col-sm-3">
            <input type="number" class="form-control" name="complainant_age" id="complainant_age" value="" placeholder="Enter age">
          </div>
          <label class="col-sm-2 col-form-label"><b>Contact #</b></label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="complainant_contact" id="complainant_contact" value="" placeholder="Enter contact no.">
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label"><b>Place</b></label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="complainant_place" id="complainant_place" value="" placeholder="Where did it happen?">
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Complaint/s</b></label>
          <div class="col-sm-8">
            <textarea rows="3" class="form-control" name="complainant_complaint" id="complainant_complaint" placeholder="What happened? (complainant)"></textarea>
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Witness?</b></label>
          <div class="col-sm-8">
            <select name="witness" id="witness" class="custom-select" onchange='funcWitnessAdd(this)'>
              <option value="No">No</option>
              <option value="Yes">Yes</option>
            </select>
          </div>
        </div>
        <!-- COMPLAINANT SECTION -->

        <!-- WITNESS SECTION -->
        <div id="witness-section" style="display: none;">
          <hr />
          <h2 style="color: rgb(0, 153, 164);"><b>WITNESS #1 INFORMATION</b></h2>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label"><b>Name</b></label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="witness_name" id="witness_name" value="" placeholder="Enter witness full name">
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label"><b>Address</b></label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="witness_address" id="witness_address" value="" placeholder="Enter witness address">
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label"><b>Age</b></label>
            <div class="col-sm-3">
              <input type="number" class="form-control" name="witness_age" id="witness_age" value="" placeholder="Enter age">
            </div>
            <label class="col-sm-2 col-form-label"><b>Contact #</b></label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="witness_contact" id="witness_contact" value="" placeholder="Enter contact no.">
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label"><b>Place</b></label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="witness_place" id="witness_place" value="" placeholder="Where did it happen?">
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-3 col-form-label"><b>Statement/s</b></label>
            <div class="col-sm-8">
              <textarea rows="3" class="form-control" name="witness_statement" id="witness_statement" placeholder="What happened? (witness)"></textarea>
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-4 col-form-label"><b>Add one more witness?</b></label>
            <div class="col-sm-7">
              <select name="witness2" id="witness2" class="custom-select" onchange='funcWitnessAdd2(this)'>
                <option value="No">No</option>
                <option value="Yes">Yes</option>
              </select>
            </div>
          </div>

          <div id="witness-section-2" style="display: none;">
            <hr />
            <h2 style="color: rgb(0, 153, 164);"><b>WITNESS #2 INFORMATION</b></h2>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label"><b>Name</b></label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="witness_name2" id="witness_name2" value="" placeholder="Enter witness full name">
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label"><b>Address</b></label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="witness_address2" id="witness_address2" value="" placeholder="Enter witness address">
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label"><b>Age</b></label>
              <div class="col-sm-3">
                <input type="number" class="form-control" name="witness_age2" id="witness_age2" value="" placeholder="Enter age">
              </div>
              <label class="col-sm-2 col-form-label"><b>Contact #</b></label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="witness_contact2" id="witness_contact2" value="" placeholder="Enter contact no.">
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label"><b>Place</b></label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="witness_place2" id="witness_place2" value="" placeholder="Where did it happen?">
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-3 col-form-label"><b>Statement/s</b></label>
              <div class="col-sm-8">
                <textarea rows="3" class="form-control" name="witness_statement2" id="witness_statement2" placeholder="What happened? (witness)"></textarea>
              </div>
            </div>
          </div>
        </div>
        <!-- WITNESS SECTION -->

        <!-- SUSPECT SECTION -->
        <hr />
        <h2 style="color: rgb(164, 106, 0);"><b>COMPLAINEE INFORMATION</b></h2>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label"><b>Name</b></label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="suspect_name" id="suspect_name" value="" placeholder="Enter suspect full name">
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label"><b>Address</b></label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="suspect_address" id="suspect_address" value="" placeholder="Enter suspect address">
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label"><b>Age</b></label>
          <div class="col-sm-3">
            <input type="number" class="form-control" name="suspect_age" id="suspect_age" value="" placeholder="Enter age">
          </div>
          <label class="col-sm-2 col-form-label"><b>Contact #</b></label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="suspect_contact" id="suspect_contact" value="" placeholder="Enter contact no.">
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label"><b>Place</b></label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="suspect_place" id="suspect_place" value="" placeholder="Where did it happen?">
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Statement/s</b></label>
          <div class="col-sm-8">
            <textarea rows="3" class="form-control" name="suspect_statement" id="suspect_statement" placeholder="What happened? (suspect)"></textarea>
          </div>
        </div>
        <!-- SUSPECT SECTION -->

        <hr />
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Date/Time Issued</b></label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="datetime_start" id="datetime_start" disabled>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Date/Time End</b></label>
          <div class="col-sm-8">
            <input type="datetime-local" class="form-control" name="datetime_end" id="datetime_end">
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Status</b></label>
          <div class="col-sm-8">
            <select name="status" id="status" class="custom-select" disabled>
              <option value="Active">Active</option>
              <option value="Closed">Closed</option>
            </select>
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button type="submit" onclick="addReport()" class="btn btn-primary">Add</button>
      </div>

    </div>
  </div>
</div>

<script>
  $(document).ready(function() {
    const date = new Date();

    const options = {
      year: 'numeric',
      month: 'long',
      day: 'numeric',
    };

    $("#datetime_start").val(date.toLocaleString('en-IN', options) + " | " + date.toLocaleTimeString([], {
      hour: '2-digit',
      minute: '2-digit'
    }));
  })

  //function for witness dropdown
  function funcWitnessAdd(event) {
    if (event.options[event.selectedIndex].value == 'No') {
      //hide witness section
      document.getElementById('witness-section').style.display = 'none';
      //reset witness textbox values when hidden
      $("#witness_name").val("");
      $("#witness_address").val("");
      $("#witness_age").val("");
      $("#witness_contact").val("");
      $("#witness_place").val("");
      $("#witness_statement").val("");
    } else {
      //show witness section
      document.getElementById('witness-section').style.display = 'block';
      $("#witness_name").val("");
      $("#witness_address").val("");
      $("#witness_age").val("");
      $("#witness_contact").val("");
      $("#witness_place").val("");
      $("#witness_statement").val("");
    }
  }

  //function for witness 2 dropdown
  function funcWitnessAdd2(event) {
    if (event.options[event.selectedIndex].value == 'No') {
      //hide witness section
      document.getElementById('witness-section-2').style.display = 'none';
      //reset witness textbox values when hidden
      $("#witness_name2").val("");
      $("#witness_address2").val("");
      $("#witness_age2").val("");
      $("#witness_contact2").val("");
      $("#witness_place2").val("");
      $("#witness_statement2").val("");
    } else {
      //show witness section
      document.getElementById('witness-section-2').style.display = 'block';
      $("#witness_name2").val("");
      $("#witness_address2").val("");
      $("#witness_age2").val("");
      $("#witness_contact2").val("");
      $("#witness_place2").val("");
      $("#witness_statement2").val("");
    }
  }

  //add report
  function addReport() {
    //complainant info
    var rCaseNo = $('#case_no').val();
    var rType = $('#type_of_report').val();
    var rCName = $('#complainant_name').val();
    var rCAddress = $('#complainant_address').val();
    var rCAge = $('#complainant_age').val();
    var rCContact = $('#complainant_contact').val();
    var rCPlace = $('#complainant_place').val();
    var rCComplaint = $('#complainant_complaint').val();
    var rWitness = $('#witness').val();
    var rWitness2 = $('#witness2').val();

    //check if witness 1 is visible
    var rWNameV1 = $('#witness_name').is(':visible');
    var rWAddressV1 = $('#witness_address').is(':visible');
    var rWAgeV1 = $('#witness_age').is(':visible');
    var rWContactV1 = $('#witness_contact').is(':visible');
    var rWPlaceV1 = $('#witness_place').is(':visible');
    var rWStatementV1 = $('#witness_statement').is(':visible');

    //check if witness 2 is visible
    var rWNameV2 = $('#witness_name2').is(':visible');
    var rWAddressV2 = $('#witness_address2').is(':visible');
    var rWAgeV2 = $('#witness_age2').is(':visible');
    var rWContactV2 = $('#witness_contact2').is(':visible');
    var rWPlaceV2 = $('#witness_place2').is(':visible');
    var rWStatementV2 = $('#witness_statement2').is(':visible');

    //witness info
    var rWName = $('#witness_name').val();
    var rWAddress = $('#witness_address').val();
    var rWAge = $('#witness_age').val();
    var rWContact = $('#witness_contact').val();
    var rWPlace = $('#witness_place').val();
    var rWStatement = $('#witness_statement').val();

    //witness 2 info
    var rWName2 = $('#witness_name2').val();
    var rWAddress2 = $('#witness_address2').val();
    var rWAge2 = $('#witness_age2').val();
    var rWContact2 = $('#witness_contact2').val();
    var rWPlace2 = $('#witness_place2').val();
    var rWStatement2 = $('#witness_statement2').val();

    //suspect info
    var rSName = $('#suspect_name').val();
    var rSAddress = $('#suspect_address').val();
    var rSAge = $('#suspect_age').val();
    var rSContact = $('#suspect_contact').val();
    var rSPlace = $('#suspect_place').val();
    var rSStatement = $('#suspect_statement').val();

    var rDateEnd = $('#datetime_end').val();
    var rStatus = $('#status').val();

    if (rCName == "" || rCAddress == "" || rCAge == "" || rCContact == "" || rCPlace == "" || rCComplaint == "" ||
      rSName == "" || rSAddress == "" || rSAge == "" || rSContact == "" || rSPlace == "" || rSStatement == "" ||
      rDateEnd == "") {
      swal({
        title: "Warning!",
        text: "All fields are required.",
        icon: "warning",
        button: "OK",
      });
    } else if (rWNameV1 && rWName == "" || rWAddressV1 && rWAddress == "" || rWAgeV1 && rWAge == "" || rWContactV1 && rWContact == "" ||
      rWPlaceV1 && rWPlace == "" || rWStatementV1 && rWStatement == "") {
      swal({
        title: "Warning!",
        text: "All fields are required.",
        icon: "warning",
        button: "OK",
      });
    } else if (rWNameV2 && rWName2 == "" || rWAddressV2 && rWAddress2 == "" || rWAgeV2 && rWAge2 == "" || rWContactV2 && rWContact2 == "" ||
      rWPlaceV2 && rWPlace2 == "" || rWStatementV2 && rWStatement2 == "") {
      swal({
        title: "Warning!",
        text: "All fields are required.",
        icon: "warning",
        button: "OK",
      });
    } else {
      $.ajax({
        url: "function/rAdd.php",
        type: "POST",
        data: {
          rCaseNoSend: rCaseNo,
          rTypeSend: rType,
          rCNameSend: rCName,
          rCAddressSend: rCAddress,
          rCAgeSend: rCAge,
          rCContactSend: rCContact,
          rCPlaceSend: rCPlace,
          rCComplaintSend: rCComplaint,
          rWitnessSend: rWitness,
          rWitnessSend2: rWitness2,
          rWNameSend: rWName,
          rWAddressSend: rWAddress,
          rWAgeSend: rWAge,
          rWContactSend: rWContact,
          rWPlaceSend: rWPlace,
          rWStatementSend: rWStatement,
          rWNameSend2: rWName2,
          rWAddressSend2: rWAddress2,
          rWAgeSend2: rWAge2,
          rWContactSend2: rWContact2,
          rWPlaceSend2: rWPlace2,
          rWStatementSend2: rWStatement2,
          rSNameSend: rSName,
          rSAddressSend: rSAddress,
          rSAgeSend: rSAge,
          rSContactSend: rSContact,
          rSPlaceSend: rSPlace,
          rSStatementSend: rSStatement,
          rDateEndSend: rDateEnd,
          rStatusSend: rStatus
        },
        success: function(result) {
          console.log(result)
          swal({
            title: "Success!",
            text: "Report Successfully Saved.",
            icon: "success",
            button: "OK"
          }).then(function() {
            //closes modal and reloads the page
            $('#addReport').modal('hide');
            setTimeout(() => {
              location.reload();
            }, 300);
          });
        }
      });
    }
  }
</script>