@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h1 class="mb-0">Data Pasien</h1>
                <a href="{{ route('patients.create') }}" class="btn btn-primary">
                    Tambah
                </a>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-light">
                        <tr>
                            <th>Nama</th>
                            <th>Jenis Hewan</th>
                            <th>Umur</th>
                            <th>Alamat</th>
                            <th width="180">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($patients as $p)
                        <tr>
                            <td>{{ $p->name }}</td>
                            <td>
                                <span class="badge bg-info text-dark">
                                    {{ $p->pet_type }}
                                </span>
                            </td>
                            <td>{{ $p->age }}</td>
                            <td>{{ $p->address }}</td>
                            <td>
                                <a href="{{ route('patients.edit', $p->id) }}" class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <form action="{{ route('patients.destroy', $p->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin mau hapus?')">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                        @if($patients->isEmpty())
                        <tr>
                            <td colspan="5" class="text-center text-muted">
                                Belum ada data pasien
                            </td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
@endsection