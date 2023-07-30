<!-- certificate report modal -->
<div class="modal fade" id="certificateReport" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #0d6efd; color: #fff">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- modal content -->
        <div class="row mb-3" style="margin: 0 10px;">
          <button type="button" class="btn" style="background-color: rgb(16, 164, 0);; color: white;" onclick="printComplainantStatement()"><i class="fa-solid fa-file-arrow-up"></i> Complainant Statement</button>
        </div>
        <div class="row mb-3" id="gen-cert-witness" style="margin: 0 10px;">
          <button type="button" class="btn" style="background-color: rgb(0, 153, 164); color: white;" onclick="printWitnessStatement()"><i class="fa-solid fa-file-arrow-up"></i> Witness #1 Statement</button>
        </div>
        <div class="row mb-3" id="gen-cert-witness2" style="margin: 0 10px;">
          <button type="button" class="btn" style="background-color: rgb(0, 153, 164); color: white;" onclick="printWitnessStatement2()"><i class="fa-solid fa-file-arrow-up"></i> Witness #2 Statement</button>
        </div>
        <div class="row mb-3" style="margin: 0 10px;">
          <button type="button" class="btn" style="background-color: rgb(164, 106, 0); color: white;" onclick="printSuspectStatement()"><i class="fa-solid fa-file-arrow-up"></i> Complainee Statement</button>
        </div>
        <div class="row mb-3" style="margin: 0 10px;">
          <button type="button" class="btn" style="background-color: #da7245; color: white;" onclick="printCertOfFileAction()"><i class="fa-solid fa-file-import"></i> Certificate of File Action</button>
        </div>
        <div class="row mb-3" style="margin: 0 10px;">
          <button type="button" class="btn" style="background-color: #782525; color: white;" onclick="agreementLetter()"><i class="fa-solid fa-file-circle-check"></i> Agreement Letter</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- certificate report modal -->





















<!-- agreement letter modal -->
<div class="modal modal-lg fade" id="agreementLetter" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #0d6efd; color: #fff">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- modal content -->
        <label class="col-form-label"><b>Nature of Complaint</b></label>
        <div class="row mb-3">
          <div class="col-sm-12">
            <textarea rows="3" class="form-control" name="natureOfComplaint" id="natureOfComplaint" placeholder="Enter nature of complaint here"></textarea>
          </div>
        </div>
        <label class="col-form-label"><b>Agreement Letter for Complainant and Complainee</b></label>
        <div class="row mb-3">
          <div class="col-sm-12">
            <textarea rows="3" class="form-control" name="agrStatement" id="agrStatement" placeholder="Enter agreement of both parties here"></textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" onclick="printAgreementLetter()"><i class="fa-solid fa-print"></i>Print</button>
      </div>
    </div>
  </div>
</div>
<!-- agreement letter modal -->

















<!-- ADD STATEMENT FUNCTIONS -->
<script>
  //open agreement letter modal
  function agreementLetter() {
    $("#agreementLetter").modal('show');
  }
</script>
<!-- ADD STATEMENT FUNCTIONS -->











<!-- PRINT FUNCTIONS -->
<script>
  //print complainant statement
  function printComplainantStatement() {
    $('body').prepend('<div id="preloader"></div>')
    var _h = $('head').clone()
    var _p = $('.print_out_complainant').clone()
    var _el = $('<div>')
    _el.append(_h)
    _el.append("<div style='display: flex; justify-content: space-between;'><img src='../../assets/images/BayanLuma1Logo.png' width='100px'><h5 style='margin: 18px 0 0 0; font-size: 15px; text-align: center;'>REPUBLIC OF THE PHILIPPINES</br>PROVINCE OF CAVITE</br>CITY OF IMUS</br>BARANGAY BAYAN LUMA I</h5><img src='../../assets/images/LungsodNgImusLogo.png' width='100px'></div>");
    _el.append("</br><h5 class='text-center' style='margin-bottom: 40px;'>COMPLAINANT STATEMENT</h5>")
    _el.append(_p)
    var nw = window.open("", "_blank", "width=5000, top=0, left=0")
    nw.document.write(_el.html())
    nw.document.close()
    setTimeout(() => {
      nw.print()
      setTimeout(() => {
        nw.close()
        $('#preloader').fadeOut('fast', function() {
          $(this).remove();
        })
        $('#compStatement').val("");
        $('#complainantStatement').modal('hide');
      }, 200);
    }, 500);
  }

  //print witness statement
  function printWitnessStatement() {
    $('body').prepend('<div id="preloader"></div>')
    var _h = $('head').clone()
    var _p = $('.print_out_witness').clone()
    var _el = $('<div>')
    _el.append(_h)
    _el.append("<div style='display: flex; justify-content: space-between;'><img src='../../assets/images/BayanLuma1Logo.png' width='100px'><h5 style='margin: 18px 0 0 0; font-size: 15px; text-align: center;'>REPUBLIC OF THE PHILIPPINES</br>PROVINCE OF CAVITE</br>CITY OF IMUS</br>BARANGAY BAYAN LUMA I</h5><img src='../../assets/images/LungsodNgImusLogo.png' width='100px'></div>");
    _el.append("</br><h5 class='text-center' style='margin-bottom: 40px;'>WITNESS #1 STATEMENT</h5>")
    _el.append(_p)
    var nw = window.open("", "_blank", "width=5000, top=0, left=0")
    nw.document.write(_el.html())
    nw.document.close()
    setTimeout(() => {
      nw.print()
      setTimeout(() => {
        nw.close()
        $('#preloader').fadeOut('fast', function() {
          $(this).remove();
        })
        $('#witStatement').val("");
        $('#witnessStatement').modal('hide');
      }, 200);
    }, 500);
  }

  //print witness statement 2
  function printWitnessStatement2() {
    $('body').prepend('<div id="preloader"></div>')
    var _h = $('head').clone()
    var _p = $('.print_out_witness2').clone()
    var _el = $('<div>')
    _el.append(_h)
    _el.append("<div style='display: flex; justify-content: space-between;'><img src='../../assets/images/BayanLuma1Logo.png' width='100px'><h5 style='margin: 18px 0 0 0; font-size: 15px; text-align: center;'>REPUBLIC OF THE PHILIPPINES</br>PROVINCE OF CAVITE</br>CITY OF IMUS</br>BARANGAY BAYAN LUMA I</h5><img src='../../assets/images/LungsodNgImusLogo.png' width='100px'></div>");
    _el.append("</br><h5 class='text-center' style='margin-bottom: 40px;'>WITNESS #2 STATEMENT</h5>")
    _el.append(_p)
    var nw = window.open("", "_blank", "width=5000, top=0, left=0")
    nw.document.write(_el.html())
    nw.document.close()
    setTimeout(() => {
      nw.print()
      setTimeout(() => {
        nw.close()
        $('#preloader').fadeOut('fast', function() {
          $(this).remove();
        })
        $('#witStatement2').val("");
        $('#witnessStatement2').modal('hide');
      }, 200);
    }, 500);
  }

  //print complainee statement
  function printSuspectStatement() {
    $('body').prepend('<div id="preloader"></div>')
    var _h = $('head').clone()
    var _p = $('.print_out_suspect').clone()
    var _el = $('<div>')
    _el.append(_h)
    _el.append("<div style='display: flex; justify-content: space-between;'><img src='../../assets/images/BayanLuma1Logo.png' width='100px'><h5 style='margin: 18px 0 0 0; font-size: 15px; text-align: center;'>REPUBLIC OF THE PHILIPPINES</br>PROVINCE OF CAVITE</br>CITY OF IMUS</br>BARANGAY BAYAN LUMA I</h5><img src='../../assets/images/LungsodNgImusLogo.png' width='100px'></div>");
    _el.append("</br><h5 class='text-center' style='margin-bottom: 40px;'>COMPLAINEE STATEMENT</h5>")
    _el.append(_p)
    var nw = window.open("", "_blank", "width=5000, top=0, left=0")
    nw.document.write(_el.html())
    nw.document.close()
    setTimeout(() => {
      nw.print()
      setTimeout(() => {
        nw.close()
        $('#preloader').fadeOut('fast', function() {
          $(this).remove();
        })
        $('#susStatement').val("");
        $('#suspectStatement').modal('hide');
      }, 200);
    }, 500);
  }

  //print cert of file action
  function printCertOfFileAction() {
    $('body').prepend('<div id="preloader"></div>')
    var _h = $('head').clone()
    var _p = $('.print_out_certOfFileAction').clone()
    var _el = $('<div>')
    _el.append(_h)
    _el.append("<div style='display: flex; justify-content: space-between;'><img src='../../assets/images/BayanLuma1Logo.png' width='100px'><h5 style='margin: 18px 0 0 0; font-size: 15px; text-align: center;'>REPUBLIC OF THE PHILIPPINES</br>PROVINCE OF CAVITE</br>CITY OF IMUS</br>BARANGAY BAYAN LUMA I</h5><img src='../../assets/images/LungsodNgImusLogo.png' width='100px'></div>");
    _el.append("</br><h5 class='text-center' style='margin-bottom: 40px;'>CERTIFICATE OF FILE ACTION</h5>")
    _el.append(_p)
    var nw = window.open("", "_blank", "width=5000, top=0, left=0")
    nw.document.write(_el.html())
    nw.document.close()
    setTimeout(() => {
      nw.print()
      setTimeout(() => {
        nw.close()
        $('#preloader').fadeOut('fast', function() {
          $(this).remove();
        })
      }, 200);
    }, 500);
  }

  //print agreement letter
  function printAgreementLetter() {
    var natureOfComplaint = $('#natureOfComplaint').val();
    var agrStatement = $('#agrStatement').val();

    if (natureOfComplaint == "") {
      swal({
        title: "Warning!",
        text: "Nature of Statement is required.",
        icon: "warning",
        button: "OK",
      });
    }
    else {
      if (agrStatement == "") {
        document.getElementById('pAgrUpon').style.display = 'none';
        //read complaint info
        document.getElementById('pAgrNatureOfComplaint').innerHTML = natureOfComplaint;
        document.getElementById('pAgrStatement').innerHTML = agrStatement;

        $('body').prepend('<div id="preloader"></div>')
        var _h = $('head').clone()
        var _p = $('.print_out_agreement').clone()
        var _el = $('<div>')
        _el.append(_h)
        _el.append("<div style='display: flex; justify-content: space-between;'><img src='../../assets/images/BayanLuma1Logo.png' width='100px'><h5 style='margin: 18px 0 0 0; font-size: 15px; text-align: center;'>REPUBLIC OF THE PHILIPPINES</br>PROVINCE OF CAVITE</br>CITY OF IMUS</br>BARANGAY BAYAN LUMA I</h5><img src='../../assets/images/LungsodNgImusLogo.png' width='100px'></div>");
        _el.append("</br><h5 class='text-center' style='margin-bottom: 40px;'>Agreement Letter</h5>")
        _el.append(_p)
        var nw = window.open("", "_blank", "width=5000, top=0, left=0")
        nw.document.write(_el.html())
        nw.document.close()
        setTimeout(() => {
          nw.print()
          setTimeout(() => {
            nw.close()
            $('#preloader').fadeOut('fast', function() {
              $(this).remove();
            })
            $('#natureOfComplaint').val("");
            $('#agrStatement').val("");
            $('#agreementLetter').modal('hide');
          }, 200);
        }, 500);
      } else {
        document.getElementById('pAgrUpon').style.display = 'block';
        //read complaint info
        document.getElementById('pAgrNatureOfComplaint').innerHTML = natureOfComplaint;
        document.getElementById('pAgrStatement').innerHTML = agrStatement;

        $('body').prepend('<div id="preloader"></div>')
        var _h = $('head').clone()
        var _p = $('.print_out_agreement').clone()
        var _el = $('<div>')
        _el.append(_h)
        _el.append("<div style='display: flex; justify-content: space-between;'><img src='../../assets/images/BayanLuma1Logo.png' width='100px'><h5 style='margin: 18px 0 0 0; font-size: 15px; text-align: center;'>REPUBLIC OF THE PHILIPPINES</br>PROVINCE OF CAVITE</br>CITY OF IMUS</br>BARANGAY BAYAN LUMA I</h5><img src='../../assets/images/LungsodNgImusLogo.png' width='100px'></div>");
        _el.append("</br><h5 class='text-center' style='margin-bottom: 40px;'>Agreement Letter</h5>")
        _el.append(_p)
        var nw = window.open("", "_blank", "width=5000, top=0, left=0")
        nw.document.write(_el.html())
        nw.document.close()
        setTimeout(() => {
          nw.print()
          setTimeout(() => {
            nw.close()
            $('#preloader').fadeOut('fast', function() {
              $(this).remove();
            })
            $('#natureOfComplaint').val("");
            $('#agrStatement').val("");
            $('#agreementLetter').modal('hide');
          }, 200);
        }, 500);
      }
    }
  }
</script>
<!-- PRINT FUNCTIONS -->