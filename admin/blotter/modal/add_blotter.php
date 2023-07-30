<!-- Modal -->
<div class="modal modal-lg fade" id="addBlotter" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #0d6efd; color: #fff">
        <h1 class="modal-title fs-2" id="staticBackdropLabel"><b>Add Blotter</b></h1>
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

        <hr />
        <h2 style="color: rgb(16, 164, 0);"><b>COMPLAINANT INFORMATION</b></h2>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Complainant Name</b></label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="complainant_name" id="complainant_name" value="" placeholder="Enter complainant full name">
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Address</b></label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="complainant_address" id="complainant_address" value="" placeholder="Enter complainant address">
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Contact #</b></label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="complainant_contactno" id="complainant_contactno" value="" placeholder="Enter complainant contact no">
          </div>
        </div>
        
        <hr />
        <h2 style="color: rgb(164, 106, 0);"><b>COMPLAINEE INFORMATION</b></h2>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Complainee Name</b></label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="suspect_name" id="suspect_name" value="" placeholder="Enter suspect full name">
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Address</b></label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="suspect_address" id="suspect_address" value="" placeholder="Enter suspect address">
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Contact #</b></label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="suspect_contactno" id="suspect_contactno" value="" placeholder="Enter suspect contact no">
          </div>
        </div>

        <hr />

        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Hearing Stage</b></label>
          <div class="col-sm-8">
            <select name="hearing_stage" id="hearing_stage" class="custom-select">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </div>
        </div>

        <label class="col-form-label"><b>Description/s (Please specify per hearing)</b></label></br>
        <label class="col-form-label" style="font-size: 13px; color: red;">*Note: Add a comma (,) after adding a hearing stage*</label>
        <div class="row mb-3">
          <div class="col-sm-11">
            <textarea rows="3" class="form-control" name="description" id="description" placeholder="Hearing Stage 1 - (description here),&#10;Hearing Stage 2 - (description here),&#10;Hearing Stage 3 (description here)"></textarea>
          </div>
        </div>

        <div class="date-cont" style="display: flex; column-gap: 8%;">
          <div class="col-sm-5">
            <label class="col-form-label"><b>Hearing Date/Time Start</b></label>
            <input type="datetime-local" class="form-control" name="hearingdate_start" id="hearingdate_start">
          </div>

          <div class="col-sm-5">
            <label class="col-form-label"><b>Hearing Date/Time End</b></label>
            <input type="datetime-local" class="form-control" name="hearingdate_end" id="hearingdate_end">
          </div>
        </div>

        <hr />

        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Date/Time Issued</b></label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="datetime_start" id="datetime_start" disabled>
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
        <button type="submit" onclick="addBlotter()" class="btn btn-primary">Add</button>
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

  //add blotter
  function addBlotter() {
    //complainant info
    var bCaseNo = $('#case_no').val();
    var bCName = $('#complainant_name').val();
    var bCAddress = $('#complainant_address').val();
    var bCContact = $('#complainant_contactno').val();
    var bSName = $('#suspect_name').val();
    var bSAddress = $('#suspect_address').val();
    var bSContact = $('#suspect_contactno').val();
    var bHearingStage = $('#hearing_stage').val();
    var bDescription = $('#description').val();
    var bHearingDateStart = $('#hearingdate_start').val();
    var bHearingDateEnd = $('#hearingdate_end').val();

    if (bCName == "" || bCAddress == "" || bCContact == "" || bSName == "" || bSAddress == "" || bSContact == "" || bDescription == "" || bHearingDateStart == "" || bHearingDateEnd == "") {
      swal({
        title: "Warning!",
        text: "All fields are required.",
        icon: "warning",
        button: "OK",
      });
    } else {
      $.ajax({
        url: "function/bAdd.php",
        type: "POST",
        data: {
          bCaseNoSend: bCaseNo,
          bCNameSend: bCName,
          bCAddressSend: bCAddress,
          bCContactSend: bCContact,
          bSNameSend: bSName,
          bSAddressSend: bSAddress,
          bSContactSend: bSContact,
          bHearingStageSend: bHearingStage,
          bDescriptionSend: bDescription,
          bHearingDateStartSend: bHearingDateStart,
          bHearingDateEndSend: bHearingDateEnd
        },
        success: function(result) {
          swal({
            title: "Success!",
            text: "Blotter Successfully Saved.",
            icon: "success",
            button: "OK"
          }).then(function() {
            //closes modal and reloads the page
            $('#addBlotter').modal('hide');
            setTimeout(() => {
              location.reload();
            }, 300);
          });
        }
      });
    }
  }
</script>