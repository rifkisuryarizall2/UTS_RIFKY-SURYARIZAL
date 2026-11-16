@extends('layouts.app_rifkysuryarizal')

@section('title', 'Data Pelajaran')

@section('content')
    <h1>Data Pelajaran</h1>

    <table border="1" cellspacing="0" cellpadding="2">
        <tr><th>No</th><th>Kode</th><th>Nama Pelajaran</th></tr>
        @foreach ($data as $row)
            <tr><td>{{ $loop->iteration }}</td><td>{{ $row->kode_pelajaran }}</td><td>{{ $row->nama_pelajaran }}</td></tr>
        @endforeach
    </table>
@endsection
