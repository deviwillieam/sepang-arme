<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class iFrameController extends Controller
{
    //
    public function iframe_edit()
    {
        return view('pages/iframe_edit_vw');
    }

    public function insert_iframe(Request $request)
    {

        $daftar_pemilih = $request->input('daftar_pemilih');
        $penerima_bantuan = $request->input('penerima_bantuan');
        $maklumat_pribadi = $request->input('maklumat_pribadi');
        $pusat_daerah = $request->input('pusat_daerah');
        $dashboard = $request->input('dashboard');
        $data = array('daftar_pemilih' => $daftar_pemilih, "penerima_bantuan" => $penerima_bantuan, "maklumat_pribadi" => $maklumat_pribadi, "pusat_daerah" => $pusat_daerah, 'dashboard' => $dashboard);
        DB::table('form_edit')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "iframe_edit">Click Here</a> to go back.';
    }


    public function index()
    {
        $users = DB::select('select * from form_edit');
        return view('pages/iframe_edit_vw', ['users' => $users]);
    }
}
