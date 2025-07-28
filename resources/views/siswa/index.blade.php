@extends('layouts.master')

@section('title', 'Daftar Siswa')

@section('content')

<h4>
    @foreach ($days as $day)
        @if ($day != 'Sabtu')
            {{ $day }},
        @else
            {{ $day }}.
        @endif
    @endforeach
</h4>
<div class="card p-2 mt-2">
    <table class="table datatable">
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
                    {{-- <td style="color: {{ $student->gender == "Laki-Laki" ? 'blue' : 'pink' }}">{{ $student->gender }}</td> --}}
                    @if ($student->gender == "Laki-Laki")
                        <td style="color: blue">{{ $student->gender }}</td>
                    @else
                        <td style="color: pink">{{ $student->gender }}</td>
                    @endif
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
</div>
@endsection