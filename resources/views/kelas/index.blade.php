@extends('layouts.master')

@section('title', 'Daftar Kelas')

@section('content')

<h1>Daftar Kelas</h1>
<div class="card p-2 mt-2">
    <table class="table datatable">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Jumlah Siswa</th>
                <th>Wali Kelas</th>
                <th>Ketua Kelas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classes as $class)
                <tr>
                    <td>{{ $class->id }}</td>
                    <td>{{ $class->nama }}</td>
                    <td>{{ $class->jml_siswa }}</td>
                    <td>{{ $class->wali_kelas }}</td>
                    <td>{{ $class->ketua_kelas }}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Jumlah Siswa</th>
                <th>Wali Kelas</th>
                <th>Ketua Kelas</th>
            </tr>
        </tfoot>
    </table>
</div>

@endsection