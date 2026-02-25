@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">

            <h1 class="mb-4">Edit Pasien</h1>

            <form action="{{ route('patients.update', $patient->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="name"
                        value="{{ old('name', $patient->name) }}"
                        class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Jenis Hewan</label>
                    <select name="pet_type" class="form-control">
                        <option value="Kucing" {{ $patient->pet_type == 'Kucing' ? 'selected' : '' }}>Kucing</option>
                        <option value="Anjing" {{ $patient->pet_type == 'Anjing' ? 'selected' : '' }}>Anjing</option>
                        <option value="Kelinci" {{ $patient->pet_type == 'Kelinci' ? 'selected' : '' }}>Kelinci</option>
                        <option value="Hamster" {{ $patient->pet_type == 'Hamster' ? 'selected' : '' }}>Hamster</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Umur</label>
                    <input type="number" name="age"
                        value="{{ old('age', $patient->age) }}"
                        class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <input type="text" name="address"
                        value="{{ old('address', $patient->address) }}"
                        class="form-control">
                </div>

                <button class="btn btn-success">Update</button>
                <a href="{{ route('patients.index') }}" class="btn btn-secondary">Batal</a>
            </form>

        </div>
    </div>
</div>
@endsection