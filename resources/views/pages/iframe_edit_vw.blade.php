@extends('../layout/' . $layout)

@section('subhead')
<title>Tambah Data</title>
@endsection

@section('subcontent')



@foreach ($users as $user)
<!-- <td>{{ $user->daftar_pemilih }}</td> -->
@endforeach
<div class="container" style="
   width: 80%;
    display: block;
    margin-left: 10%;
    margin-right: 10%;
    max-width: 80%;
    text-align: left;
">
  <div class="intro-y box">
    <br><br>
    <h1 class="font-medium text-base mr-auto text-center ">Management Menu</h1>
    <br>
    <div class="items-center p-10 border-b  dark:border-darkmode-400">
      <form action="{{route('tambah_iframe')}}" method="post">

        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"><input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <div>
          <label for="regular-form-1" class="form-label">Dashboard</label>
          <input type="text" class="form-control" value="{{ $user->dashboard }}" name="dashboard">
        </div>
        <div class="mt-3">
          <label for="regular-form-1" class="form-label">Daftar Pemilih</label>
          <input type="text" class="form-control" value="{{ $user->daftar_pemilih }}" name="daftar_pemilih">
        </div>
        <div class="mt-3">
          <label for="regular-form-1" class="form-label">Penerima Bantuan</label>
          <input type="text" class="form-control" value="{{ $user->penerima_bantuan }}" name="penerima_bantuan">
        </div>
        <div class="mt-3">
          <label for="regular-form-1" class="form-label">Maklumat Pribadi</label>
          <input type="text" class="form-control" value="{{ $user->maklumat_pribadi }}" name="maklumat_pribadi">
        </div>
        <div class="mt-3">
          <label for="regular-form-1" class="form-label">Pusat Daerah Pengundi</label>
          <input type="text" class="form-control" value="{{ $user->pusat_daerah }}" name="pusat_daerah"><br><br>
        </div>
        <div class="col text-center">
          <button type="submit" value="Add student" class="btn btn-danger py-3 ">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection