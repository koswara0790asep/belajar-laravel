@extends('layouts.master')

@section('title', 'Daftar Siswa')

@section('content')


<div class="card p-2 mt-2">
    <table class="table datatable">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>ID_Kelas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->student_id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->class_id }}</td>
                    {{-- <td>{{ $student->class->class_name }}</td> --}}
                </tr>
            @endforeach
        </tbody>
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>ID_Kelas</th>
            </tr>
        </thead>
        
    </table>
</div>
@endsection