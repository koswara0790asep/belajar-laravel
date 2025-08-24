@extends('layouts.master')

@section('title', 'Daftar Siswa')

@section('content')

<div class="card p-2 mt-2">
    <table class="table datatable">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>TTL</th>
                <th>Alamat</th>
                <th>Gender</th>
                <th>Wali Kelas</th>
                <th>ID_Kelas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teachers as $teacher)
                <tr>
                    <td>{{ $teacher->teacher_id }}</td>
                    <td>{{ $teacher->name }}</td>
                    <td>{{ $teacher->date_of_birth }}</td>
                    <td>{{ $teacher->address }}</td>
                    {{-- <td style="color: {{ $teacher->gender == "Laki-Laki" ? 'blue' : 'pink' }}">{{ $teacher->gender }}</td> --}}
                    @if ($teacher->gender == "Laki-Laki")
                        <td style="color: blue">{{ $teacher->gender }}</td>
                    @else
                        <td style="color: pink">{{ $teacher->gender }}</td>
                    @endif
                    <td>{{ $teacher->homeroom_teacher }}</td>
                    {{-- <td>{{ $teacher->class->class_name ?? 'Bukan Wali' }}</td> --}}
                    <td>{{ $teacher->class_id ?? 'Kosong'}}</td>
                </tr>
            @endforeach
        </tbody>
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>TTL</th>
                <th>Alamat</th>
                <th>Gender</th>
                <th>Wali Kelas</th>
                <th>ID_Kelas</th>
            </tr>
        </thead>
        
    </table>
</div>
@endsection