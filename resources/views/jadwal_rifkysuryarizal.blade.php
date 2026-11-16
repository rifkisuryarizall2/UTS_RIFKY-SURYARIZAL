@extends('layouts.app_rifkysuryarizal')

@section('title', 'Data Jadwal Pelajaran')

@section('content')
    <h1>Data Jadwal Pelajaran</h1>

    <table border="1" cellspacing="0" cellpadding="2">
        <tr><th>No</th><th>Kelas</th><th>Pelajaran</th><th>Guru</th><th>Hari</th><th>Mulai</th><th>Selesai</th></tr>
        @foreach ($data as $row)
            <tr><td>{{ $loop->iteration }}</td><td>{{ $row->nama_kelas }}</td><td>{{ $row->nama_pelajaran }}</td><td>{{ $row->nama_guru }}</td><td>{{ $row->hari }}</td><td>{{ $row->jam_mulai }}</td><td>{{ $row->jam_selesai }}</td></tr>
        @endforeach
    </table>
@endsection
