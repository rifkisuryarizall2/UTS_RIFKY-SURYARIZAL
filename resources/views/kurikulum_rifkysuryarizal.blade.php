@extends('layouts.app_rifkysuryarizal')

@section('title', 'Data Kurikulum')

@section('content')
    <h1>Data Kurikulum</h1>

    <table border="1" cellspacing="0" cellpadding="2">
        <tr><th>No</th><th>Kode</th><th>Nama Kurikulum</th><th>Tahun</th><th>Keterangan</th></tr>
        @foreach ($data as $row)
            <tr><td>{{ $loop->iteration }}</td><td>{{ $row->kode_kurikulum }}</td><td>{{ $row->nama_kurikulum }}</td><td>{{ $row->tahun }}</td><td>{{ $row->keterangan }}</td></tr>
        @endforeach
    </table>
@endsection
