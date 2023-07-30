<!-- view brgy official modal -->
<div class="modal modal-lg fade" id="viewBrgyOfficials" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #0d6efd; color: #fff">
        <h1 class="modal-title fs-2" id="exampleModalToggleLabel">Barangay Offical Details</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- modal content -->
        <input type="hidden" id="vBOHidden_id">
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Position</b></label>
          <div class="col-sm-8" style="margin-top: 7px;">
            <label id="vboPosition">label</label>
          </div>
        </div>

        <hr />

        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Name</b></label>
          <div class="col-sm-8" style="margin-top: 7px;">
            <label id="vboName">label</label>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#editBrgyOfficials" data-bs-toggle="modal"><i class="fa-regular fa-pen-to-square"></i> Edit</button>
      </div>
    </div>
  </div>
</div>
<!-- view brgy official modal -->






<!-- edit brgy official modal -->
<div class="modal modal-lg fade" id="editBrgyOfficials" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #0d6efd; color: #fff">
        <h1 class="modal-title fs-2" id="staticBackdropLabel"><b>Update Barangay Official</b></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- modal content -->
      <div class="modal-body">
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Position</b></label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="eboPosition" id="eboPosition" value="" disabled>
          </div>
        </div>

        <hr />

        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Name</b></label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="eboName" id="eboName" value="" placeholder="Enter brgy official name" required>
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-target="#viewBrgyOfficials" data-bs-toggle="modal">Back</button>
        <button type="submit" onclick="editBrgyOfficials()" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i> Update</button>
        <input type="hidden" id="eBOHidden_id">
      </div>
    </div>
  </div>
  <!-- edit brgy official modal -->



  
  <script>
    //edit brgy official
    function editBrgyOfficials() {
      var boedit_position = $('#eboPosition').val();
      var boedit_name = $('#eboName').val();
      var bedit_hiddenID = $('#eBOHidden_id').val();

      if (boedit_name == "") {
        swal({
          title: "Warning!",
          text: "All fields are required.",
          icon: "warning",
          button: "OK",
        });
      } else {
        $.post("function/boView.php", {
          boedit_positionSend: boedit_position,
          boedit_nameSend: boedit_name,
          bedit_hiddenIDSend: bedit_hiddenID
        }, function(editResult) {
          console.log(editResult)
          swal({
            title: "Success!",
            text: "Barangay Official Successfully Updated.",
            icon: "success",
            button: "OK"
          }).then(function() {
            //closes modal and reloads the page
            $('#editBrgyOfficials').modal('hide');
            setTimeout(() => {
              location.reload();
            }, 300);
          });
        });
      }
    }
  </script>