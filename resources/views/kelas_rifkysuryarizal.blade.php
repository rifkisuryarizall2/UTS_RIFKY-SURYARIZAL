@extends('layouts.app_rifkysuryarizal')

@section('title', 'Data Kelas')

@section('content')
    <h1>Data Kelas</h1>

    <table border="1" cellspacing="0" cellpadding="2">
        <tr><th>No</th><th>Kode</th><th>Nama Kelas</th><th>Jurusan</th><th>Wali Kelas</th><th>Kurikulum</th></tr>
        @foreach ($data as $row)
            <tr><td>{{ $loop->iteration }}</td><td>{{ $row->kode_kelas }}</td><td>{{ $row->nama_kelas }}</td><td>{{ $row->nama_jurusan }}</td><td>{{ $row->wali_kelas }}</td><td>{{ $row->nama_kurikulum }}</td></tr>
        @endforeach
    </table>
@endsection
