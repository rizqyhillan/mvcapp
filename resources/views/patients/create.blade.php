@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">

            <h1 class="mb-4">Tambah Pasien</h1>

            <form action="{{ route('patients.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Jenis Hewan</label>
                    <select name="pet_type" class="form-control">
                        <option value="">-- Pilih --</option>
                        <option value="Kucing">Kucing</option>
                        <option value="Anjing">Anjing</option>
                        <option value="Kelinci">Kelinci</option>
                        <option value="Hamster">Hamster</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Umur</label>
                    <input type="number" name="age" class="form-control" value="{{ old('age') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <input type="text" name="address" class="form-control" value="{{ old('address') }}">
                </div>

                <button class="btn btn-success" onclick="return confirm ('Apakah anda sudah yakin untuk menyimpan?')">Simpan</button>
                <a href="{{ route('patients.index') }}" class="btn btn-secondary">Batal</a>
            </form>

        </div>
    </div>
</div>
@endsection