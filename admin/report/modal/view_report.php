<!-- view report modal -->
<div class="modal modal-lg fade" id="viewReport" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #0d6efd; color: #fff">
        <h1 class="modal-title fs-2" id="exampleModalToggleLabel">Report Details</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- modal content -->
        <input type="hidden" id="vReportHidden_id">

        <div style="display: flex; justify-content: space-between;">
          <div style="white-space: nowrap; margin-right: 20px;">
            <label><b>Case #:</b></label> <label id="vCase_no">label</label>
          </div>
          <div style="white-space: nowrap; margin-left: 20px;">
            <label><b>Type of Report:</b></label> <label id="vTypeOfReport">label</label>
          </div>
        </div>

        <hr />

        <!-- COMPLAINANT SECTION -->
        <h2 style="color: rgb(16, 164, 0);"><b>COMPLAINANT INFORMATION</b></h2>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Name</b></label>
          <div class="col-sm-9" style="margin-top: 7px;">
            <label id="vCName">label</label>
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Address</b></label>
          <div class="col-sm-9" style="margin-top: 7px;">
            <label id="vCAddress">label</label>
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Age</b></label>
          <div class="col-sm-9" style="margin-top: 7px;">
            <label id="vCAge">label</label>
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Contact #</b></label>
          <div class="col-sm-9" style="margin-top: 7px;">
            <label id="vCContact">label</label>
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Place</b></label>
          <div class="col-sm-9" style="margin-top: 7px;">
            <label id="vCPlace">label</label>
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Complaint/s</b></label>
          <div class="col-sm-8" style="margin-top: 7px;">
            <label id="vCComplaint">label</label>
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Witness</b></label>
          <div class="col-sm-8" style="margin-top: 7px;">
            <label id="vCWitness">label</label>
          </div>
        </div>
        <!-- COMPLAINANT SECTION -->


        <!-- WITNESS SECTION -->
        <div id="view-witness-section" style="display: none;">
          <hr />
          <h2 style="color: rgb(0, 153, 164);"><b>WITNESS #1 INFORMATION</b></h2>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label"><b>Name</b></label>
            <div class="col-sm-9" style="margin-top: 7px;">
              <label id="vWName">label</label>
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-3 col-form-label"><b>Address</b></label>
            <div class="col-sm-9" style="margin-top: 7px;">
              <label id="vWAdress">label</label>
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-3 col-form-label"><b>Age</b></label>
            <div class="col-sm-9" style="margin-top: 7px;">
              <label id="vWAge">label</label>
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-3 col-form-label"><b>Contact #</b></label>
            <div class="col-sm-9" style="margin-top: 7px;">
              <label id="vWContact">label</label>
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-3 col-form-label"><b>Place</b></label>
            <div class="col-sm-9" style="margin-top: 7px;">
              <label id="vWPlace">label</label>
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-3 col-form-label"><b>Statement/s</b></label>
            <div class="col-sm-8" style="margin-top: 7px;">
              <label id="vWStatement">label</label>
            </div>
          </div>
          <div id="view-witness-section2" style="display: none;">
            <hr />
            <h2 style="color: rgb(0, 153, 164);"><b>WITNESS #2 INFORMATION</b></h2>
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label"><b>Name</b></label>
              <div class="col-sm-9" style="margin-top: 7px;">
                <label id="vWName2">label</label>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-3 col-form-label"><b>Address</b></label>
              <div class="col-sm-9" style="margin-top: 7px;">
                <label id="vWAdress2">label</label>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-3 col-form-label"><b>Age</b></label>
              <div class="col-sm-9" style="margin-top: 7px;">
                <label id="vWAge2">label</label>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-3 col-form-label"><b>Contact #</b></label>
              <div class="col-sm-9" style="margin-top: 7px;">
                <label id="vWContact2">label</label>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-3 col-form-label"><b>Place</b></label>
              <div class="col-sm-9" style="margin-top: 7px;">
                <label id="vWPlace2">label</label>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-3 col-form-label"><b>Statement/s</b></label>
              <div class="col-sm-8" style="margin-top: 7px;">
                <label id="vWStatement2">label</label>
              </div>
            </div>
          </div>
        </div>
        <!-- WITNESS SECTION -->

        <hr />

        <!-- COMPLAINEE SECTION -->
        <h2 style="color: rgb(164, 106, 0);"><b>COMPLAINEE INFORMATION</b></h2>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Name</b></label>
          <div class="col-sm-9" style="margin-top: 7px;">
            <label id="vSName">label</label>
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Address</b></label>
          <div class="col-sm-9" style="margin-top: 7px;">
            <label id="vSAddress">label</label>
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Age</b></label>
          <div class="col-sm-9" style="margin-top: 7px;">
            <label id="vSAge">label</label>
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Contact #</b></label>
          <div class="col-sm-9" style="margin-top: 7px;">
            <label id="vSContact">label</label>
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Place</b></label>
          <div class="col-sm-9" style="margin-top: 7px;">
            <label id="vSPlace">label</label>
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Statement/s</b></label>
          <div class="col-sm-8" style="margin-top: 7px;">
            <label id="vSStatement">label</label>
          </div>
        </div>
        <!-- COMPLAINEE SECTION -->

        <hr />
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Date/Time Issued</b></label>
          <div class="col-sm-8" style="margin-top: 7px;">
            <label id="vDateIssued">label</label>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Date/Time End</b></label>
          <div class="col-sm-8" style="margin-top: 7px;">
            <label id="vDateEnd">label</label>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Status</b></label>
          <div class="col-sm-8" style="margin-top: 7px;">
            <label id="vStatus">label</label>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" onclick="printSpecificReport()"><i class="fa-solid fa-print"></i> Print</button>
        <button class="btn btn-primary" data-bs-target="#editReport" data-bs-toggle="modal"><i class="fa-regular fa-pen-to-square"></i> Edit</button>
      </div>
    </div>
  </div>
</div>
<!-- view report modal -->


















<!-- edit report modal -->
<div class="modal modal-lg fade" id="editReport" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #0d6efd; color: #fff">
        <h1 class="modal-title fs-2" id="staticBackdropLabel"><b>Update Report</b></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- modal content -->
      <div class="modal-body">
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Case #</b></label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="ecase_no" id="ecase_no" value="" placeholder="Enter case no." disabled>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Type of Report</b></label>
          <div class="col-sm-8">
            <select name="etype_of_report" id="etype_of_report" class="custom-select">
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
            <input type="text" class="form-control" name="ecomplainant_name" id="ecomplainant_name" value="" placeholder="Enter complainant full name">
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label"><b>Address</b></label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="ecomplainant_address" id="ecomplainant_address" value="" placeholder="Enter complainant address">
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label"><b>Age</b></label>
          <div class="col-sm-3">
            <input type="number" class="form-control" name="ecomplainant_age" id="ecomplainant_age" value="" placeholder="Enter age">
          </div>
          <label class="col-sm-2 col-form-label"><b>Contact #</b></label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="ecomplainant_contact" id="ecomplainant_contact" value="" placeholder="Enter contact no.">
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label"><b>Place</b></label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="ecomplainant_place" id="ecomplainant_place" value="" placeholder="Where did it happen?">
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Complaint/s</b></label>
          <div class="col-sm-8">
            <textarea rows="3" class="form-control" name="ecomplainant_complaint" id="ecomplainant_complaint" placeholder="What happened? (complainant)"></textarea>
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Witness?</b></label>
          <div class="col-sm-8">
            <select name="ewitness" id="ewitness" class="custom-select" onchange='funcWitness(this)'>
              <option value="No">No</option>
              <option value="Yes">Yes</option>
            </select>
          </div>
        </div>
        <!-- COMPLAINANT SECTION -->

        <!-- WITNESS SECTION -->
        <div id="edit-witness-section" style="display: none;">
          <hr />
          <h2 style="color: rgb(0, 153, 164);"><b>WITNESS #1 INFORMATION</b></h2>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label"><b>Name</b></label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="ewitness_name" id="ewitness_name" value="" placeholder="Enter witness full name">
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label"><b>Address</b></label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="ewitness_address" id="ewitness_address" value="" placeholder="Enter witness address">
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label"><b>Age</b></label>
            <div class="col-sm-3">
              <input type="number" class="form-control" name="ewitness_age" id="ewitness_age" value="" placeholder="Enter age">
            </div>
            <label class="col-sm-2 col-form-label"><b>Contact #</b></label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="ewitness_contact" id="ewitness_contact" value="" placeholder="Enter contact no.">
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label"><b>Place</b></label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="ewitness_place" id="ewitness_place" value="" placeholder="Where did it happen?">
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-3 col-form-label"><b>Statement/s</b></label>
            <div class="col-sm-8">
              <textarea rows="3" class="form-control" name="ewitness_statement" id="ewitness_statement" placeholder="What happened? (witness)"></textarea>
            </div>
          </div>
          <input type="hidden" id="wedit_hiddenIDWitness">

          <div class="row mb-3">
            <label class="col-sm-4 col-form-label"><b>Add one more witness?</b></label>
            <div class="col-sm-7">
              <select name="ewitness2" id="ewitness2" class="custom-select" onchange='funcWitnessEdit2(this)'>
                <option value="No">No</option>
                <option value="Yes">Yes</option>
              </select>
            </div>
          </div>

          <div id="edit-witness-section2" style="display: none;">
            <hr />
            <h2 style="color: rgb(0, 153, 164);"><b>WITNESS #2 INFORMATION</b></h2>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label"><b>Name</b></label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="ewitness_name2" id="ewitness_name2" value="" placeholder="Enter witness full name">
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label"><b>Address</b></label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="ewitness_address2" id="ewitness_address2" value="" placeholder="Enter witness address">
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label"><b>Age</b></label>
              <div class="col-sm-3">
                <input type="number" class="form-control" name="ewitness_age2" id="ewitness_age2" value="" placeholder="Enter age">
              </div>
              <label class="col-sm-2 col-form-label"><b>Contact #</b></label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="ewitness_contact2" id="ewitness_contact2" value="" placeholder="Enter contact no.">
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label"><b>Place</b></label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="ewitness_place2" id="ewitness_place2" value="" placeholder="Where did it happen?">
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-3 col-form-label"><b>Statement/s</b></label>
              <div class="col-sm-8">
                <textarea rows="3" class="form-control" name="ewitness_statement2" id="ewitness_statement2" placeholder="What happened? (witness)"></textarea>
              </div>
            </div>
            <input type="hidden" id="wedit_hiddenIDWitness2">
          </div>
        </div>
        <!-- WITNESS SECTION -->

        <!-- SUSPECT SECTION -->
        <hr />
        <h2 style="color: rgb(164, 106, 0);"><b>COMPLAINEE INFORMATION</b></h2>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label"><b>Name</b></label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="esuspect_name" id="esuspect_name" value="" placeholder="Enter suspect full name">
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label"><b>Address</b></label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="esuspect_address" id="esuspect_address" value="" placeholder="Enter suspect address">
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label"><b>Age</b></label>
          <div class="col-sm-3">
            <input type="number" class="form-control" name="esuspect_age" id="esuspect_age" value="" placeholder="Enter age">
          </div>
          <label class="col-sm-2 col-form-label"><b>Contact #</b></label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="esuspect_contact" id="esuspect_contact" value="" placeholder="Enter contact no.">
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label"><b>Place</b></label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="esuspect_place" id="esuspect_place" value="" placeholder="Where did it happen?">
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Statement/s</b></label>
          <div class="col-sm-8">
            <textarea rows="3" class="form-control" name="esuspect_statement" id="esuspect_statement" placeholder="What happened? (suspect)"></textarea>
          </div>
        </div>
        <!-- SUSPECT SECTION -->

        <hr />
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Date/Time Issued</b></label>
          <div class="col-sm-8">
            <input type="datetime-local" class="form-control" name="edatetime_start" id="edatetime_start" step="1">
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Date/Time End</b></label>
          <div class="col-sm-8">
            <input type="datetime-local" class="form-control" name="edatetime_end" id="edatetime_end" step="1">
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Status</b></label>
          <div class="col-sm-8">
            <select name="estatus" id="estatus" class="custom-select">
              <option value="Active">Active</option>
              <option value="Closed">Closed</option>
            </select>
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-target="#viewReport" data-bs-toggle="modal">Back</button>
        <button type="submit" onclick="editReport()" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i> Update</button>
        <input type="hidden" id="eReportHidden_id">
      </div>
    </div>
  </div>
</div>
<!-- edit report modal -->












<script>
  //function for witness dropdown
  function funcWitness(event) {
    if (event.options[event.selectedIndex].value == 'No') {
      //hide witness section
      document.getElementById('edit-witness-section').style.display = 'none';
      //reset witness textbox values when hidden
      $("#ewitness_name").val("");
      $("#ewitness_address").val("");
      $("#ewitness_age").val("");
      $("#ewitness_contact").val("");
      $("#ewitness_place").val("");
      $("#ewitness_statement").val("");
    } else {
      //show witness section
      document.getElementById('edit-witness-section').style.display = 'block';
      //reset witness textbox values when hidden
      $("#ewitness_name").val("");
      $("#ewitness_address").val("");
      $("#ewitness_age").val("");
      $("#ewitness_contact").val("");
      $("#ewitness_place").val("");
      $("#ewitness_statement").val("");
    }
  }
  
  //function for witness 2 dropdown
  function funcWitnessEdit2(event) {
    if (event.options[event.selectedIndex].value == 'No') {
      //show witness 2 section
      document.getElementById('edit-witness-section2').style.display = 'none';
      //reset witness textbox values when hidden
      $("#ewitness_name2").val("");
      $("#ewitness_address2").val("");
      $("#ewitness_age2").val("");
      $("#ewitness_contact2").val("");
      $("#ewitness_place2").val("");
      $("#ewitness_statement2").val("");
    } else {
      //show witness 2 section
      document.getElementById('edit-witness-section2').style.display = 'block';
      $("#ewitness_name2").val("");
      $("#ewitness_address2").val("");
      $("#ewitness_age2").val("");
      $("#ewitness_contact2").val("");
      $("#ewitness_place2").val("");
      $("#ewitness_statement2").val("");
    }
  }

  //print specific report
  function printSpecificReport() {
    //prints report with no witness
    if ($('#view-witness-section').is(':hidden')) {
      var _h = $('head').clone()
      var _p = $('.print_out_specific_noWitness').clone()
      var _el = $('<div>')
      _el.append(_h)
      _el.append("<div style='display: flex; justify-content: space-between;'><img src='../../assets/images/BayanLuma1Logo.png' width='100px'><h5 style='margin: 18px 0 0 0; font-size: 15px; text-align: center;'>REPUBLIC OF THE PHILIPPINES</br>PROVINCE OF CAVITE</br>CITY OF IMUS</br>BARANGAY BAYAN LUMA I</h5><img src='../../assets/images/LungsodNgImusLogo.png' width='100px'></div>");
      _el.append("</br><h5 class='text-center' style='margin-bottom: 40px;'>CASE REPORT</h5>")
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
    //prints report with witness
    else {
      var _h = $('head').clone()
      var _p = $('.print_out_specific_hasWitness').clone()
      var _el = $('<div>')
      _el.append(_h)
      _el.append("<div style='display: flex; justify-content: space-between;'><img src='../../assets/images/BayanLuma1Logo.png' width='100px'><h5 style='margin: 18px 0 0 0; font-size: 15px; text-align: center;'>REPUBLIC OF THE PHILIPPINES</br>PROVINCE OF CAVITE</br>CITY OF IMUS</br>BARANGAY BAYAN LUMA I</h5><img src='../../assets/images/LungsodNgImusLogo.png' width='100px'></div>");
      _el.append("</br><h5 class='text-center' style='margin-bottom: 40px;'>CASE REPORT</h5>")
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
  }

  //edit report
  function editReport() {
    var edit_caseNo = $('#ecase_no').val();
    var edit_cTypeOfReport = $('#etype_of_report').val();
    var edit_cFullName = $('#ecomplainant_name').val();
    var edit_cAddress = $('#ecomplainant_address').val();
    var edit_cAge = $('#ecomplainant_age').val();
    var edit_cContact = $('#ecomplainant_contact').val();
    var edit_cPlace = $('#ecomplainant_place').val();
    var edit_cComplaint = $('#ecomplainant_complaint').val();
    var edit_witness = $('#ewitness').val();
    var edit_witness2 = $('#ewitness2').val();

    var edit_wNameV1 = $('#ewitness_name').is(':visible');
    var edit_wAddressV1 = $('#ewitness_address').is(':visible');
    var edit_wAgeV1 = $('#ewitness_age').is(':visible');
    var edit_wContactV1 = $('#ewitness_contact').is(':visible');
    var edit_wPlaceV1 = $('#ewitness_place').is(':visible');
    var edit_wStatementV1 = $('#ewitness_statement').is(':visible');

    var edit_wNameV2 = $('#ewitness_name2').is(':visible');
    var edit_wAddressV2 = $('#ewitness_address2').is(':visible');
    var edit_wAgeV2 = $('#ewitness_age2').is(':visible');
    var edit_wContactV2 = $('#ewitness_contact2').is(':visible');
    var edit_wPlaceV2 = $('#ewitness_place2').is(':visible');
    var edit_wStatementV2 = $('#ewitness_statement2').is(':visible');

    var edit_wName = $('#ewitness_name').val();
    var edit_wAddress = $('#ewitness_address').val();
    var edit_wAge = $('#ewitness_age').val();
    var edit_wContact = $('#ewitness_contact').val();
    var edit_wPlace = $('#ewitness_place').val();
    var edit_wStatement = $('#ewitness_statement').val();
    var edit_hiddenIDW = $('#wedit_hiddenIDWitness').val();
    
    var edit_wName2 = $('#ewitness_name2').val();
    var edit_wAddress2 = $('#ewitness_address2').val();
    var edit_wAge2 = $('#ewitness_age2').val();
    var edit_wContact2 = $('#ewitness_contact2').val();
    var edit_wPlace2 = $('#ewitness_place2').val();
    var edit_wStatement2 = $('#ewitness_statement2').val();
    var edit_hiddenIDW2 = $('#wedit_hiddenIDWitness2').val();

    var edit_sFullName = $('#esuspect_name').val();
    var edit_sAddress = $('#esuspect_address').val();
    var edit_sAge = $('#esuspect_age').val();
    var edit_sContact = $('#esuspect_contact').val();
    var edit_sPlace = $('#esuspect_place').val();
    var edit_sStatement = $('#esuspect_statement').val();

    var edit_sDateIssued = $('#edatetime_start').val();
    var edit_sDateEnd = $('#edatetime_end').val();
    var edit_status = $('#estatus').val();

    var edit_hiddenID = $('#eReportHidden_id').val();

    //condition if there is NO witness
    if ($('#edit-witness-section').is(':hidden')) {
      if (edit_cFullName == "" || edit_cAddress == "" || edit_cAge == "" || edit_cContact == "" || edit_cPlace == "" || edit_cComplaint == "" ||
        edit_sFullName == "" || edit_sAddress == "" || edit_sAge == "" || edit_sContact == "" || edit_sPlace == "" || edit_sStatement == "" ||
        edit_sDateIssued == "" || edit_sDateEnd == "") {
        swal({
          title: "Warning!",
          text: "All fields are required.",
          icon: "warning",
          button: "OK",
        });
      } else if (edit_wNameV1 && edit_wName == "" || edit_wAddressV1 && edit_wAddress == "" || edit_wAgeV1 && edit_wAge == "" || edit_wContactV1 && edit_wContact == "" ||
        edit_wPlaceV1 && edit_wPlace == "" || edit_wStatementV1 && edit_wStatement == "") {
        swal({
          title: "Warning!",
          text: "All fields are required.",
          icon: "warning",
          button: "OK",
        });
      } else if (edit_wNameV2 && edit_wName2 == "" || edit_wAddressV2 && edit_wAddress2 == "" || edit_wAgeV2 && edit_wAge2 == "" || edit_wContactV2 && edit_wContact2 == "" ||
        edit_wPlaceV2 && edit_wPlace2 == "" || edit_wStatementV2 && edit_wStatement2 == "") {
        swal({
          title: "Warning!",
          text: "All fields are required.",
          icon: "warning",
          button: "OK",
        });
      } else {
        $.post("function/rView.php", {
          edit_caseNoSend: edit_caseNo,
          edit_cTypeOfReportSend: edit_cTypeOfReport,
          edit_cFullNameSend: edit_cFullName,
          edit_cAddressSend: edit_cAddress,
          edit_cAgeSend: edit_cAge,
          edit_cContactSend: edit_cContact,
          edit_cPlaceSend: edit_cPlace,
          edit_cComplaintSend: edit_cComplaint,
          edit_witnessSend: edit_witness,
          edit_sFullNameSend: edit_sFullName,
          edit_sAddressSend: edit_sAddress,
          edit_sAgeSend: edit_sAge,
          edit_sContactSend: edit_sContact,
          edit_sPlaceSend: edit_sPlace,
          edit_sStatementSend: edit_sStatement,
          edit_sDateIssuedSend: edit_sDateIssued,
          edit_sDateEndSend: edit_sDateEnd,
          edit_statusSend: edit_status,
          edit_hiddenIDSend: edit_hiddenID
        }, function(editResult) {
          console.log(editResult)
          swal({
            title: "Success!",
            text: "Report Successfully Updated.",
            icon: "success",
            button: "OK"
          }).then(function() {
            //closes modal and reloads the page
            $('#editReport').modal('hide');
            setTimeout(() => {
              location.reload();
            }, 300);
          });
        });
      }
    }
    //condition if there is A witness
    else {
      if (edit_cFullName == "" || edit_cAddress == "" || edit_cAge == "" || edit_cContact == "" || edit_cPlace == "" || edit_cComplaint == "" ||
        edit_wName == "" || edit_wAddress == "" || edit_wAge == "" || edit_wContact == "" || edit_wPlace == "" || edit_wStatement == "" ||
        edit_sFullName == "" || edit_sAddress == "" || edit_sAge == "" || edit_sContact == "" || edit_sPlace == "" || edit_sStatement == "" ||
        edit_sDateIssued == "" || edit_sDateEnd == "") {
        swal({
          title: "Warning!",
          text: "All fields are required.",
          icon: "warning",
          button: "OK",
        });
      } else if (edit_wNameV1 && edit_wName == "" || edit_wAddressV1 && edit_wAddress == "" || edit_wAgeV1 && edit_wAge == "" || edit_wContactV1 && edit_wContact == "" ||
        edit_wPlaceV1 && edit_wPlace == "" || edit_wStatementV1 && edit_wStatement == "") {
        swal({
          title: "Warning!",
          text: "All fields are required.",
          icon: "warning",
          button: "OK",
        });
      } else if (edit_wNameV2 && edit_wName2 == "" || edit_wAddressV2 && edit_wAddress2 == "" || edit_wAgeV2 && edit_wAge2 == "" || edit_wContactV2 && edit_wContact2 == "" ||
        edit_wPlaceV2 && edit_wPlace2 == "" || edit_wStatementV2 && edit_wStatement2 == "") {
        swal({
          title: "Warning!",
          text: "All fields are required.",
          icon: "warning",
          button: "OK",
        });
      } else {
        $.post("function/rView.php", {
          wedit_caseNoSend: edit_caseNo,
          wedit_cTypeOfReportSend: edit_cTypeOfReport,
          wedit_cFullNameSend: edit_cFullName,
          wedit_cAddressSend: edit_cAddress,
          wedit_cAgeSend: edit_cAge,
          wedit_cContactSend: edit_cContact,
          wedit_cPlaceSend: edit_cPlace,
          wedit_cComplaintSend: edit_cComplaint,
          wedit_witnessSend: edit_witness,
          wedit_witnessSend2: edit_witness2,
          wedit_wNameSend: edit_wName,
          wedit_wAddressSend: edit_wAddress,
          wedit_wAgeSend: edit_wAge,
          wedit_wContactSend: edit_wContact,
          wedit_wPlaceSend: edit_wPlace,
          wedit_wStatementSend: edit_wStatement,
          wedit_wNameSend2: edit_wName2,
          wedit_wAddressSend2: edit_wAddress2,
          wedit_wAgeSend2: edit_wAge2,
          wedit_wContactSend2: edit_wContact2,
          wedit_wPlaceSend2: edit_wPlace2,
          wedit_wStatementSend2: edit_wStatement2,
          wedit_sFullNameSend: edit_sFullName,
          wedit_sAddressSend: edit_sAddress,
          wedit_sAgeSend: edit_sAge,
          wedit_sContactSend: edit_sContact,
          wedit_sPlaceSend: edit_sPlace,
          wedit_sStatementSend: edit_sStatement,
          wedit_sDateIssuedSend: edit_sDateIssued,
          wedit_sDateEndSend: edit_sDateEnd,
          wedit_statusSend: edit_status,
          wedit_hiddenIDSend: edit_hiddenID,
          wedit_hiddenIDWSend: edit_hiddenIDW,
          wedit_hiddenIDWSend2: edit_hiddenIDW2
        }, function(weditResult) {
          console.log(weditResult)
          swal({
            title: "Success!",
            text: "Report Successfully Updated.",
            icon: "success",
            button: "OK"
          }).then(function() {
            //closes modal and reloads the page
            $('#editReport').modal('hide');
            setTimeout(() => {
              location.reload();
            }, 300);
          });
        });
      }
    }
  }
</script>