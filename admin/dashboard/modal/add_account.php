<!-- Modal -->
<div class="modal fade" id="addAccount" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #0d6efd; color: #fff">
        <h1 class="modal-title fs-2" id="staticBackdropLabel"><b>Add Account</b></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- modal content -->
      <div class="modal-body">
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Full Name</b></label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="full_name" id="full_name" value="" placeholder="Enter full name">
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Username</b></label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="username" id="username" value="" placeholder="Enter username">
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-3 col-form-label"><b>Password</b></label>
          <div class="col-sm-8">
            <input type="password" class="form-control" name="password" id="password" value="" placeholder="Enter password">
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-4 col-form-label"><b>Account Type</b></label>
          <div class="col-sm-7">
            <select name="account_type" id="account_type" class="custom-select">
              <option value="user">user</option>
              <option value="admin">admin</option>
            </select>
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button type="submit" onclick="addAccount()" class="btn btn-primary">Add</button>
      </div>
    </div>
  </div>
</div>

<script>
  //add blotter
  function addAccount() {
    var aFullName = $('#full_name').val();
    var aUsername = $('#username').val();
    var aPassword = $('#password').val();
    var aAccType = $('#account_type').val();

    if (aFullName == "" || aUsername == "" || aPassword == "" || aAccType == "") {
      swal({
        title: "Warning!",
        text: "All fields are required.",
        icon: "warning",
        button: "OK",
      });
    } else {
      $.ajax({
        url: "function/dAdd.php",
        type: "POST",
        data: {
          aFullNameSend: aFullName,
          aUsernameSend: aUsername,
          aPasswordSend: aPassword,
          aAccTypeSend: aAccType
        },
        success: function(result) {
          if (result == "duplicate") {
            swal({
              title: "Name Taken!",
              text: "Username already exists.",
              icon: "warning",
              button: "OK",
            });
          } 
          else {
            swal({
              title: "Success!",
              text: "Account Successfully Added.",
              icon: "success",
              button: "OK"
            }).then(function() {
              //closes modal and reloads the page
              $('#addAccount').modal('hide');
              setTimeout(() => {
                location.reload();
              }, 300);
            });
          }
        }
      });
    }
  }
</script>