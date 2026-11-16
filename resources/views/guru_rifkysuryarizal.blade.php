@extends('layouts.app_rifkysuryarizal')

@section('title', 'Data Guru')

@section('content')
    <h1>Data Guru</h1>

    <table border="1" cellspacing="0" cellpadding="2">
        <tr><th>No</th><th>NIP</th><th>Nama Guru</th><th>L/P</th></tr>
        @foreach ($data as $row)
            <tr><td>{{ $loop->iteration }}</td><td>{{ $row->nip }}</td><td>{{ $row->nama_guru }}</td><td>{{ $row->jenis_kelamin }}</td></tr>
        @endforeach
    </table>
@endsection
