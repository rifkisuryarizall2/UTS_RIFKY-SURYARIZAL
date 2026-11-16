<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class NilaiControllerRifkySuryarizal extends Controller
{
    public function index()
    {
        $data = DB::table('t_nilai_rifkysuryarizal as n')
            ->join('t_siswa_rifkysuryarizal as s', 's.id', '=', 'n.siswa_id')
            ->join('t_pelajaran_rifkysuryarizal as p', 'p.id', '=', 'n.pelajaran_id')
            ->select('s.nis', 's.nama_siswa', 'p.nama_pelajaran', 'n.tugas', 'n.uts', 'n.uas', 'n.semester',
                DB::raw('ROUND(n.tugas*0.2 + n.uts*0.3 + n.uas*0.5, 2) as nilai_akhir'))
            ->orderBy('n.id')->get();

        return view('nilai_rifkysuryarizal', compact('data'));
    }
}
