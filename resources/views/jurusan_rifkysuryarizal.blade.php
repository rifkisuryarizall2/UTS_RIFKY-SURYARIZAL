@extends('layouts.app_rifkysuryarizal')

@section('title', 'Data Jurusan')

@section('content')
    <h1>Data Jurusan</h1>

    <table border="1" cellspacing="0" cellpadding="2">
        <tr><th>No</th><th>Kode</th><th>Nama Jurusan</th></tr>
        @foreach ($data as $row)
            <tr><td>{{ $loop->iteration }}</td><td>{{ $row->kode_jurusan }}</td><td>{{ $row->nama_jurusan }}</td></tr>
        @endforeach
    </table>
@endsection
