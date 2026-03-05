@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <h1 class="mb-4">Daftar User / Admin</h1>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Dibuat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $u)
            <tr>
                <td>{{ $u->id }}</td>
                <td>{{ $u->name }}</td>
                <td>{{ $u->email }}</td>
                <td>{{ $u->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection