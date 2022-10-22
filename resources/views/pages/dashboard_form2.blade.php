@extends('../layout/' . $layout)

@section('content')
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
  html {
    --tw-bg-opacity: 1;
    background-image: url("https://wallpaperaccess.com/full/1410668.jpg");
    background-repeat: no-repeat;
    background-size: 1920px 1100px;
  }

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




<marquee direction="right" behavior="alternate" bgcolor="white" style="border:white 1px SOLID">
  ⋆·˚ ༘ *ೃ⁀➷✧.*ੈ✩‧₊˚˚<b> Data will be update automatically on <i>12:00 PM</i>, If data not update please click refresh in Power BI Dashboard </b>⋆·˚ ༘ *ೃ⁀➷✧.*ੈ✩‧₊˚˚
</marquee>

<input type="text" value="login.armestudio.co.id/form_share" id="myInput">

<!-- The button used to copy the text -->
<button id="btn-login" class="btn btn-danger py-3 " onclick="myFunction()">Copy form link</button>
<!-- <button id="btn-login" class="btn btn-danger py-3 " onclick=" window.open('raw-data2', '_blank'); return false;">Lihat Raw Data</button> -->

<br></br>
<br></br>


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
            <h2 class="font-medium text-base mr-auto">Form Bantuan </h2>
          </div>
          <div id="input" class="p-5">
            <form onsubmit="return validation();" class="validate-form" name="form" id="sheetdb-form2" method="post" action="https://sheetdb.io/api/v1/5f0n7gyfuluog">
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
                  <label for="regular-form-1" class="form-label w-full flex flex-col sm:flex-row">Pilih Bantuan *</label>
                  <select class="form-select mt-2 sm:mr-2" name="data[Pilih Bantuan]" aria-label="Default select example" required>
                    <option value="">Pilih</option>
                    <option>Bantuan Sara Hidup (BSH)</option>
                    <option>Bantuan Ibu Tunggal</option>
                    <option>Bantuan Persekolahan</option>
                  </select>
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
  <i class="text-success" data-lucide="file-check-2"></i>
  <div class="ml-4 mr-4">
    <div class="font-medium">verifying</div>
    <div class="text-slate-500 mt-1">
      Click button submit until redirect to success pages
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
    let check = document.forms["form"]["data[Nama Penuh]", "data[Alamat]", "data[No Handphone]", "data[sokongan]", "data[Pilih Bantuan]"].value;
    let x = document.forms["form"]["data[No Kad Pengenalan]"].value;
    if (check == "") {
      alert("Maklumat Tidak Lengkap");
    } else if (x.length < 10) {
      alert("Kad pengenalan paling sedikit 10 angka");
    } else {
      var form = document.getElementById('sheetdb-form2');
      form.addEventListener("submit", e => {
        e.preventDefault();
        fetch(form.action, {
          method: "POST",
          body: new FormData(document.getElementById("sheetdb-form2")),
        }).then(
          response => response.json()
        ).then((html) => {
          // you can put any JS code here
          alert("Tambah Data Berhasil")
          window.location.href = 'thankyou';
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

@endsection