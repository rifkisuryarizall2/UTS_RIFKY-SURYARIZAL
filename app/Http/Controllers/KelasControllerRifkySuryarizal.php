<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class KelasControllerRifkySuryarizal extends Controller
{
    public function index()
    {
        $data = DB::table('t_kelas_rifkysuryarizal as k')
            ->leftJoin('t_jurusan_rifkysuryarizal as j', 'j.id', '=', 'k.jurusan_id')
            ->leftJoin('t_guru_rifkysuryarizal as g', 'g.id', '=', 'k.guru_id')
            ->leftJoin('t_kurikulum_rifkysuryarizal as r', 'r.id', '=', 'k.kurikulum_id')
            ->select('k.kode_kelas', 'k.nama_kelas', 'j.nama_jurusan', 'g.nama_guru as wali_kelas', 'r.nama_kurikulum')
            ->orderBy('k.id')->get();

        return view('kelas_rifkysuryarizal', compact('data'));
    }
}
