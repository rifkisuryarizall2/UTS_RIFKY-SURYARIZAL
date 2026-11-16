@extends('layouts.app_rifkysuryarizal')

@section('title', 'Data Praktikum')

@section('content')
    <h1>Data Praktikum</h1>

    <table border="1" cellspacing="0" cellpadding="2">
        <tr><th>No</th><th>NIS</th><th>Nama Siswa</th><th>Pelajaran</th><th>Judul Praktikum</th><th>Tanggal</th><th>Nilai</th><th>Semester</th></tr>
        @foreach ($data as $row)
            <tr><td>{{ $loop->iteration }}</td><td>{{ $row->nis }}</td><td>{{ $row->nama_siswa }}</td><td>{{ $row->nama_pelajaran }}</td><td>{{ $row->judul_praktikum }}</td><td>{{ $row->tanggal }}</td><td>{{ $row->nilai }}</td><td>{{ $row->semester }}</td></tr>
        @endforeach
    </table>
@endsection
