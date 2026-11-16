<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class JurusanControllerRifkySuryarizal extends Controller
{
    public function index()
    {
        $data = DB::table('t_jurusan_rifkysuryarizal')->orderBy('id')->get();

        return view('jurusan_rifkysuryarizal', compact('data'));
    }
}
