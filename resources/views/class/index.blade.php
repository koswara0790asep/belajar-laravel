@extends('layouts.master')

@section('title', 'Daftar Kelas')

@section('content')

<h1>Daftar Kelas</h1>
<div class="card p-2 mt-2">
    <table class="table datatable">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Kelas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classes as $class)
                <tr>
                    <td>{{ $class->class_id }}</td>
                    <td>{{ $class->class_name }}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>#</th>
                <th>Nama Kelas</th>
            </tr>
        </tfoot>
    </table>
</div>

@endsection