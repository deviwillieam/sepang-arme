<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SheetDBController;
use SheetDB\SheetDB;

class SheetDBController extends Controller
{

    public function getfromSheet()
    {

        $sheetdb = new SheetDB('x2ucdyu6z03a7');
        return view('pages/dashboard-tambah5', [
            // Specify the base layout.
            // Eg: 'side-menu', 'simple-menu', 'top-menu', 'login'
            // The default value is 'side-menu'

            // 'layout' => 'side-menu'
        ]);
        // dd($sheetdb->get());
    }

    public function submit_form(Request $request)
    {

        $sheetdb = new SheetDB('x2ucdyu6z03a7');

        return view('pages/dashboard-tambah5', [
            // Specify the base layout.
            // Eg: 'side-menu', 'simple-menu', 'top-menu', 'login'
            // The default value is 'side-menu'

            // 'layout' => 'side-menu'
        ]);

        // dd($sheetdb->get());
    }

    public function raw_data()
    {
        return view('pages/dashboard-raw-data');
    }

    public function raw_data2()
    {
        return view('pages/dashboard-raw-data2');
    }

    public function form_luar()
    {
        return view('pages/dashboard_form');
    }
    public function form_luar2()
    {
        return view('pages/dashboard_form2');
    }
}
