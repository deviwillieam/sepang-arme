<!-- The text field -->
<script>
  function myFunction() {
    /* Get the text field */
    var copyText = document.getElementById("myInput");

    /* Select the text field */
    copyText.select();
    copyText.setSelectionRange(0, 99999); /* For mobile devices */

    /* Copy the text inside the text field */
    navigator.clipboard.writeText(copyText.value);

    /* Alert the copied text */
    alert("form link telah di copy");
  }
</script>

<style>
  .d-none {
    display: none;
  }

  .d-none2 {
    display: none;
  }
</style>

<script>
  function checkAnswer(x) {
    console.log(x.value); {
      if (x.value == "Tidak Menyokong")
        document.getElementById('code').classList.remove('d-none');
      else {
        document.getElementById('code').classList.add('d-none');
      }
      if (x.value == "Menyokong Parti Bersatu")
        document.getElementById('code2').classList.remove('d-none2');
      else {
        document.getElementById('code2').classList.add('d-none2');
      }

    }
  }
</script>





<marquee direction="right" behavior="alternate" style="border:Red 1px SOLID">
  ⋆·˚ ༘ *ೃ⁀➷✧.*ੈ✩‧₊˚˚<b> Data will be update automatically on <i>12:00 PM</i>, If data not update please click refresh in Power BI Dashboard </b>⋆·˚ ༘ *ೃ⁀➷✧.*ੈ✩‧₊˚˚
</marquee>

<input type="text" value="login.armestudio.co.id/form_share" id="myInput">

<!-- The button used to copy the text -->
<button id="btn-login" class="btn btn-danger py-3 " onclick="myFunction()">Copy form link</button>
<button id="btn-login" class="btn btn-danger py-3 " onclick=" window.open('raw-data', '_blank'); return false;">Lihat Raw Data</button>

<br></br>
<br></br>
<!-- <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdfRG3KN1TwwhHthBei7PAX5DgLIg9nHUXuXOyio5T8YPt0sw/viewform?embedded=true" width="100%" height="1818" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe> -->



<div class="container" style="
   width: 80%;
    display: block;
    margin-left: 10%;
    margin-right: 10%;
    max-width: 80%;
    text-align: left;
">
  <div class="row">
    <div class="col-md-4 col-md-offset-6">
      <!-- BEGIN: Balloon Block Editor -->
      <div class="container mt-4">
        @if(session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
        @endif

        <div class="intro-y box">
          <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
            <h2 class="font-medium text-base mr-auto">Form Data Bantuan</h2>
          </div>
          <div id="input" class="p-5">
            <form onsubmit="return validation();" class="validate-form" name="form" id="sheetdb-form" method="post" action="https://sheetdb.io/api/v1/x2ucdyu6z03a7">
              <div class="input-form">
                <input id="demo" type="hidden" name="data[Timestamp]" value="d">

                <div>
                  <label for="regular-form-1" class="form-label w-full flex flex-col sm:flex-row">Nama Penuh *</label>
                  <input id="Nama Penuh" name="data[Nama Penuh]" type="text" class="form-control" placeholder="Nama Anda" required>
                </div><br>
                <div>
                  <label for="regular-form-1" class="form-label w-full flex flex-col sm:flex-row">No Kad Pengenalan *
                    <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Diperlukan, paling sedikit 10 angka</span>
                  </label>
                  <input id="validation-form-1" name="data[No Kad Pengenalan]" type="number" class="form-control" minlength="10" placeholder="Kad Pengenalan" required>
                </div><br>
                <div>
                  <label for="regular-form-1" class="form-label w-full flex flex-col sm:flex-row">No Handphone *</label>
                  <input id="regular-form-1" name="data[No Handphone]" type="number" class="form-control" placeholder="Handphone" required>
                </div><br>
                <div>
                  <label for="regular-form-1" class="form-label w-full flex flex-col sm:flex-row">Alamat *</label>
                  <textarea id="validation-form-6" name="data[Alamat]" type="text" class="form-control" placeholder="Alamat" required></textarea>
                </div><br>
                <div>
                  <label for="regular-form-1" class="form-label w-full flex flex-col sm:flex-row">DUN *</label>
                  <select class="form-select mt-2 sm:mr-2" name="data[DUN]" aria-label="Default select example" required>
                    <option value="">Pilih</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                    <option>E</option>
                    <option>F</option>
                  </select>
                </div><br>
                <div>
                  <label for="regular-form-1" class="form-label w-full flex flex-col sm:flex-row">Pusat Daerah Mengundi *</label>
                  <select class="form-select mt-2 sm:mr-2" name="data[Pusat Daerah Mengundi]" aria-label="Default select example" required>
                    <option value="">Pilih</option>
                    <option>PDM1 </option>
                    <option>PDM2 </option>
                    <option>PDM3 </option>
                  </select>
                </div><br>
                <div>
                  <label for="regular-form-1" class="form-label w-full flex flex-col sm:flex-row">Culaan *</label>
                  <select class="form-select mt-2 sm:mr-2" name="data[Culaan]" aria-label="Default select example" required>
                    <option value="">Pilih</option>
                    <option>Candidate A </option>
                    <option>Candidate B</option>
                    <option>Candidate C</option>
                    <option>Candidate D</option>
                    <option>Tidak Tahu</option>
                  </select>
                </div><br>
                <div>
                  <label for="regular-form-1" class="form-label w-full flex flex-col sm:flex-row">Sokongan *</label>
                  <select id="sokongan" name="data[Sokongan]" class="form-select mt-2 sm:mr-2" aria-label="Default select example" onchange="checkAnswer(this)" required>
                    <option value="">Pilih</option>
                    <option value="Menyokong Parti Bersatu">Menyokong Parti Bersatu</option>
                    <option value="Tidak Menyokong">Tidak Menyokong</option>
                  </select>
                </div><br>
                <div id="code2" class="d-none2">
                  <label for="regular-form-1" class="form-label w-full flex flex-col sm:flex-row">Harapan untuk kemajuan bangsa dan negara melaui Parti Bersatu</label>
                  <input id="regular-form-1" name="data[Isi Harapan ]" type="text" class="form-control" placeholder="Input text">
                </div><br>
                <div id="code" class="d-none">
                  <label for="regular-form-1" class="form-label w-full flex flex-col sm:flex-row">Alasan tidak menyokong Parti Bersatu</label>
                  <input id="regular-form-1" name="data[Beri Alasan]" type="text" class="form-control" placeholder="Input text">
                </div><br>
                <div class="col text-center">
                  <button type="submit" onclick="getDate()" class="btn btn-danger py-3 ">Submit</button>
                </div>
              </div>
            </form>


            <!-- END: Balloon Block Editor -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="success-notification-content" class="toastify-content hidden flex">
  <i class="text-success" data-lucide="check-circle"></i>
  <div class="ml-4 mr-4">
    <div class="font-medium">Data berhasil ditambahkan!</div>
    <div class="text-slate-500 mt-1">
      Terimakasih!
    </div>
  </div>
</div>
<!-- END: Success Notification Content -->
<!-- BEGIN: Failed Notification Content -->
<div id="failed-notification-content" class="toastify-content hidden flex">
  <i class="text-danger" data-lucide="x-circle"></i>
  <div class="ml-4 mr-4">
    <div class="font-medium">Data gagal ditambahkan!</div>
    <div class="text-slate-500 mt-1">
      Sila semak kembali maklumat anda
    </div>
  </div>
</div>


<script>
  function validation() {
    let check = document.forms["form"]["data[Nama Penuh]", "data[Alamat]", "data[No Handphone]", "data[sokongan]", "data[DUN]", "data[Pusat Daerah Mengundi]", "data[Culaan]", "data[Sokongan]"].value;
    let x = document.forms["form"]["data[No Kad Pengenalan]"].value;
    if (check == "") {
      alert("Maklumat Tidak Lengkap");
    } else if (x.length < 10) {
      alert("Kad pengenalan paling sedikit 10 angka");
    } else {
      var form = document.getElementById('sheetdb-form');
      form.addEventListener("submit", e => {
        e.preventDefault();
        fetch(form.action, {
          method: "POST",
          body: new FormData(document.getElementById("sheetdb-form")),
        }).then(
          response => response.json()
        ).then((html) => {
          // you can put any JS code here
          alert("Tambah Data Berhasil")
          window.location.href = 'https://login.armestudio.co.id';
        });
      });
    }
  }
</script>


<script>
  function getDate() {
    var now = new Date();
    d = ((now.getMonth() + 1) + '/' + (now.getDate()) + '/' + now.getFullYear() + " " + now.getHours() + ':' +
      ((now.getMinutes() < 10) ? ("0" + now.getMinutes()) : (now.getMinutes())) + ':' + ((now.getSeconds() < 10) ? ("0" + now
        .getSeconds()) : (now.getSeconds())));
    document.getElementById("demo").innerHTML = d;
    document.getElementById("demo").value = d;
  }
</script>