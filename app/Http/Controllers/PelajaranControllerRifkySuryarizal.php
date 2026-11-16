<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PelajaranControllerRifkySuryarizal extends Controller
{
    public function index()
    {
        $data = DB::table('t_pelajaran_rifkysuryarizal')->orderBy('id')->get();

        return view('pelajaran_rifkysuryarizal', compact('data'));
    }
}
