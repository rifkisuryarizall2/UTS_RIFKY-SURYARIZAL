<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class JadwalControllerRifkySuryarizal extends Controller
{
    public function index()
    {
        $data = DB::table('t_jadwal_rifkysuryarizal as j')
            ->join('t_kelas_rifkysuryarizal as k', 'k.id', '=', 'j.kelas_id')
            ->join('t_pelajaran_rifkysuryarizal as p', 'p.id', '=', 'j.pelajaran_id')
            ->join('t_guru_rifkysuryarizal as g', 'g.id', '=', 'j.guru_id')
            ->select('k.nama_kelas', 'p.nama_pelajaran', 'g.nama_guru', 'j.hari', 'j.jam_mulai', 'j.jam_selesai')
            ->orderBy('j.id')->get();

        return view('jadwal_rifkysuryarizal', compact('data'));
    }
}
