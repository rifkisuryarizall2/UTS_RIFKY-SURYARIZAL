@extends('layouts.app_rifkysuryarizal')

@section('title', 'Data Siswa')

@section('content')
    <h1>Data Siswa</h1>

    <table border="1" cellspacing="0" cellpadding="2">
        <tr><th>No</th><th>NIS</th><th>Nama Siswa</th></tr>
        @foreach ($data as $row)
            <tr><td>{{ $loop->iteration }}</td><td>{{ $row->nis }}</td><td>{{ $row->nama_siswa }}</td></tr>
        @endforeach
    </table>
@endsection
