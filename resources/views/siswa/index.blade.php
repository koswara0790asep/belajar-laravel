@extends('layout')

@section('content')
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>ID_Kelas</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Gender</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->nama }}</td>
                <td>{{ $student->id_kelas }}</td>
                <td>{{ $student->tanggal_lahir }}</td>
                <td>{{ $student->alamat }}</td>
                <td>{{ $student->gender }}</td>
            </tr>
        @endforeach
    </tbody>
    <thead>
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>ID_Kelas</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Gender</th>
        </tr>
    </thead>
    
</table>
@endsection