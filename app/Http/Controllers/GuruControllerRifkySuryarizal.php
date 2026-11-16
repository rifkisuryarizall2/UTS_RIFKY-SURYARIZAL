<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class GuruControllerRifkySuryarizal extends Controller
{
    public function index()
    {
        $data = DB::table('t_guru_rifkysuryarizal')->orderBy('nip')->get();

        return view('guru_rifkysuryarizal', compact('data'));
    }
}
