<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class SiswaControllerRifkySuryarizal extends Controller
{
    public function index()
    {
        $data = DB::table('t_siswa_rifkysuryarizal')->orderBy('nis')->get();

        return view('siswa_rifkysuryarizal', compact('data'));
    }
}
