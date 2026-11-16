<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class KurikulumControllerRifkySuryarizal extends Controller
{
    public function index()
    {
        $data = DB::table('t_kurikulum_rifkysuryarizal')->orderBy('id')->get();

        return view('kurikulum_rifkysuryarizal', compact('data'));
    }
}
