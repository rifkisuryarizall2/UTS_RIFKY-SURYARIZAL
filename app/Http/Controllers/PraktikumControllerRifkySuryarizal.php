<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PraktikumControllerRifkySuryarizal extends Controller
{
    public function index()
    {
        $data = DB::table('t_praktikum_rifkysuryarizal as pr')
            ->join('t_siswa_rifkysuryarizal as s', 's.id', '=', 'pr.siswa_id')
            ->join('t_pelajaran_rifkysuryarizal as p', 'p.id', '=', 'pr.pelajaran_id')
            ->select('s.nis', 's.nama_siswa', 'p.nama_pelajaran', 'pr.judul_praktikum', 'pr.tanggal', 'pr.nilai', 'pr.semester')
            ->orderBy('pr.id')->get();

        return view('praktikum_rifkysuryarizal', compact('data'));
    }
}
