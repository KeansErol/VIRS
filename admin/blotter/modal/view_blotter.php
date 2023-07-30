<!-- view blotter modal -->
<div class="modal modal-lg fade" id="viewBlotter" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #0d6efd; color: #fff">
        <h1 class="modal-title fs-2" id="exampleModalToggleLabel">Blotter Details</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- modal content -->
        <input type="hidden" id="vBlotterHidden_id">
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Case #</b></label>
          <div class="col-sm-8" style="margin-top: 7px;">
            <label id="bCaseNo">label</label>
          </div>
        </div>

        <hr />

        <h2 style="color: rgb(16, 164, 0);"><b>COMPLAINANT INFORMATION</b></h2>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Complainant Name</b></label>
          <div class="col-sm-8" style="margin-top: 7px;">
            <label id="bCName">label</label>
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Address</b></label>
          <div class="col-sm-8" style="margin-top: 7px;">
            <label id="bCAddress">label</label>
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Contact No</b></label>
          <div class="col-sm-8" style="margin-top: 7px;">
            <label id="bCContact">label</label>
          </div>
        </div>

        <hr />
        <h2 style="color: rgb(164, 106, 0);"><b>COMPLAINEE INFORMATION</b></h2>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Complainee Name</b></label>
          <div class="col-sm-8" style="margin-top: 7px;">
            <label id="bSName">label</label>
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Address</b></label>
          <div class="col-sm-8" style="margin-top: 7px;">
            <label id="bSAddress">label</label>
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Contact No</b></label>
          <div class="col-sm-8" style="margin-top: 7px;">
            <label id="bSContact">label</label>
          </div>
        </div>
        
        <hr />

        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Hearing Stage</b></label>
          <div class="col-sm-8" style="margin-top: 7px;">
            <label id="bHearing_stage">label</label>
          </div>
        </div>

        <label class="col-form-label"><b>Description/s per hearing</b></label>
        <div class="row mb-3">
          <div class="col-sm-11" style="margin-top: 7px; margin-left: 15px">
            <label id="bDescription">label</label>
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-5 col-form-label"><b>Hearing Date/Time Start</b></label>
          <div class="col-sm-5" style="margin-top: 7px;">
            <label id="bHearingDate_start">label</label>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-5 col-form-label"><b>Hearing Date/Time End</b></label>
          <div class="col-sm-5" style="margin-top: 7px;">
            <label id="bHearingDate_end">label</label>
          </div>
        </div>

        <hr />

        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Date/Time Issued</b></label>
          <div class="col-sm-8" style="margin-top: 7px;">
            <label id="bDatetime_start">label</label>
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Status</b></label>
          <div class="col-sm-8" style="margin-top: 7px;">
            <label id="bStatus">label</label>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" onclick="printSpecificBlotter()"><i class="fa-solid fa-print"></i> Print</button>
        <button class="btn btn-primary" data-bs-target="#editBlotter" data-bs-toggle="modal"><i class="fa-regular fa-pen-to-square"></i> Edit</button>
      </div>
    </div>
  </div>
</div>
<!-- view blotter modal -->






<!-- edit blotter modal -->
<div class="modal modal-lg fade" id="editBlotter" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #0d6efd; color: #fff">
        <h1 class="modal-title fs-2" id="staticBackdropLabel"><b>Update Blotter</b></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- modal content -->
      <div class="modal-body">
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Case #</b></label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="bcase_no" id="bcase_no" value="" placeholder="Enter case no." disabled>
          </div>
        </div>

        <hr />
        <h2 style="color: rgb(16, 164, 0);"><b>COMPLAINANT INFORMATION</b></h2>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Complainant Name</b></label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="bcomplainant_name" id="bcomplainant_name" value="" placeholder="Enter complainant full name" required>
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Address</b></label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="bcomplainant_address" id="bcomplainant_address" value="" placeholder="Enter complainant address" required>
          </div>
        </div>
        
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Contact #</b></label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="bcomplainant_contactno" id="bcomplainant_contactno" value="" placeholder="Enter complainant contact no" required>
          </div>
        </div>
        
        <hr />
        <h2 style="color: rgb(164, 106, 0);"><b>COMPLAINEE INFORMATION</b></h2>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Complainee Name</b></label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="bsuspect_name" id="bsuspect_name" value="" placeholder="Enter suspect full name" required>
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Address</b></label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="bsuspect_address" id="bsuspect_address" value="" placeholder="Enter suspect address" required>
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Contact #</b></label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="bsuspect_contactno" id="bsuspect_contactno" value="" placeholder="Enter suspect contact no" required>
          </div>
        </div>

        <hr />
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Hearing Stage</b></label>
          <div class="col-sm-8">
            <select name="bhearing_stage" id="bhearing_stage" class="custom-select">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </div>
        </div>

        <label class="col-form-label"><b>Description/s (Please specify per hearing)</b></label>
        <label class="col-form-label" style="font-size: 13px; color: red;">*Note: Add a comma (,) after adding a hearing stage*</label>
        <div class="row mb-3">
          <div class="col-sm-11">
            <textarea rows="3" class="form-control" name="bdescription" id="bdescription" placeholder="Hearing Stage 1 - (description here)&#10;Hearing Stage 2 - (description here)&#10;Hearing Stage 3 (description here)" required></textarea>
          </div>
        </div>

        <div class="date-cont" style="display: flex; column-gap: 8%;">
          <div class="col-sm-5">
            <label class="col-form-label"><b>Hearing Date/Time Start</b></label>
            <input type="datetime-local" class="form-control" name="bhearingdate_start" id="bhearingdate_start" step="1" required>
          </div>

          <div class="col-sm-5">
            <label class="col-form-label"><b>Hearing Date/Time End</b></label>
            <input type="datetime-local" class="form-control" name="bhearingdate_end" id="bhearingdate_end" step="1" required>
          </div>
        </div>

        </br>

        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Date/Time Issued</b></label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="bdatetime_start" id="bdatetime_start" disabled>
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Status</b></label>
          <div class="col-sm-8">
            <select name="bstatus" id="bstatus" class="custom-select">
              <option value="Active">Active</option>
              <option value="Closed">Closed</option>
            </select>
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-target="#viewBlotter" data-bs-toggle="modal">Back</button>
        <button type="submit" onclick="editBlotter()" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i> Update</button>
        <input type="hidden" id="eBlotterHidden_id">
      </div>
    </div>
  </div>
</div>
<!-- edit blotter modal -->

<script>
  function printSpecificBlotter() {
    //prints blotter
    var _h = $('head').clone()
    var _p = $('.print_out_blotter').clone()
    var _el = $('<div>')
    _el.append(_h)
    _el.append("<div style='display: flex; justify-content: space-between;'><img src='../../assets/images/BayanLuma1Logo.png' width='100px'><h5 style='margin: 18px 0 0 0; font-size: 15px; text-align: center;'>REPUBLIC OF THE PHILIPPINES</br>PROVINCE OF CAVITE</br>CITY OF IMUS</br>BARANGAY BAYAN LUMA I</h5><img src='../../assets/images/LungsodNgImusLogo.png' width='100px'></div>");
    _el.append("</br><h5 class='text-center' style='margin-bottom: 40px;'>BLOTTER RECORD</h5>")
    _el.append("<hr/>")
    _el.append(_p)
    _el.append("<hr/>")
    var nw = window.open("", "_blank", "width=5000, top=0, left=0")
    nw.document.write(_el.html())
    nw.document.close()
    setTimeout(() => {
      nw.print()
      setTimeout(() => {
        nw.close();
      }, 200);
    }, 500);
  }

  //edit blotter
  function editBlotter() {
    var bedit_caseNo = $('#bcase_no').val();
    var bedit_cName = $('#bcomplainant_name').val();
    var bedit_cAddress = $('#bcomplainant_address').val();
    var bedit_cContact = $('#bcomplainant_contactno').val();
    var bedit_sName = $('#bsuspect_name').val();
    var bedit_sAddress = $('#bsuspect_address').val();
    var bedit_sContact = $('#bsuspect_contactno').val();
    var bedit_hearingStage = $('#bhearing_stage').val();
    var bedit_description = $('#bdescription').val();
    var bedit_hDateStart = $('#bhearingdate_start').val();
    var bedit_hDateEnd = $('#bhearingdate_end').val();
    var bedit_status = $('#bstatus').val();
    var bedit_hiddenID = $('#eBlotterHidden_id').val();

    if (bedit_cName == "" || bedit_cAddress == "" || bedit_cContact == "" || bedit_sName == "" || bedit_sAddress == "" || bedit_sContact == "" || bedit_description == "" || bedit_hDateStart == "" || bedit_hDateEnd == "") {
      swal({
        title: "Warning!",
        text: "All fields are required.",
        icon: "warning",
        button: "OK",
      });
    } else {
      $.post("function/bView.php", {
        bedit_caseNoSend: bedit_caseNo,
        bedit_cNameSend: bedit_cName,
        bedit_cAddressSend: bedit_cAddress,
        bedit_cContactSend: bedit_cContact,
        bedit_sNameSend: bedit_sName,
        bedit_sAddressSend: bedit_sAddress,
        bedit_sContactSend: bedit_sContact,
        bedit_hearingStageSend: bedit_hearingStage,
        bedit_descriptionSend: bedit_description,
        bedit_hDateStartSend: bedit_hDateStart,
        bedit_hDateEndSend: bedit_hDateEnd,
        bedit_statusSend: bedit_status,
        bedit_hiddenIDSend: bedit_hiddenID
      }, function(editResult) {
        console.log(editResult)
        swal({
          title: "Success!",
          text: "Blotter Successfully Updated.",
          icon: "success",
          button: "OK"
        }).then(function() {
          //closes modal and reloads the page
          $('#editBlotter').modal('hide');
          setTimeout(() => {
            location.reload();
          }, 300);
        });
      });
    }
  }
</script>