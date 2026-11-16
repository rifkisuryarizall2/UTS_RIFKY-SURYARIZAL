@extends('layouts.app_rifkysuryarizal')

@section('title', 'Data Nilai')

@section('content')
    <h1>Data Nilai</h1>

    <table border="1" cellspacing="0" cellpadding="2">
        <tr><th>No</th><th>NIS</th><th>Nama Siswa</th><th>Pelajaran</th><th>Tugas</th><th>UTS</th><th>UAS</th><th>Nilai Akhir</th><th>Semester</th></tr>
        @foreach ($data as $row)
            <tr><td>{{ $loop->iteration }}</td><td>{{ $row->nis }}</td><td>{{ $row->nama_siswa }}</td><td>{{ $row->nama_pelajaran }}</td><td>{{ $row->tugas }}</td><td>{{ $row->uts }}</td><td>{{ $row->uas }}</td><td>{{ $row->nilai_akhir }}</td><td>{{ $row->semester }}</td></tr>
        @endforeach
    </table>
@endsection
