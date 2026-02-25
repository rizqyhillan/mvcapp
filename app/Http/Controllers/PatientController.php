<?php

namespace App\Http\Controllers;

use App\Models\patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $patients = patient::all();
        return view('patients.index', compact('patients'));
    }

    public function create()
    {
        return view('patients.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'pet_type' => 'required',
            'age' => 'required|numeric',
            'address' => 'required',
        ]);

        patient::create($validated);

        return redirect()->route('patients.index')
            ->with('success', 'Data pasien berhasil ditambahkan');
    }

    public function edit(patient $patient)
    {
        return view('patients.edit', compact('patient'));
    }

    public function update(Request $request, patient $patient)
    {
        $validated = $request->validate([
            'name' => 'required',
            'pet_type' => 'required',
            'age' => 'required|numeric',
            'address' => 'required',
        ]);

        $patient->update($validated);

        return redirect()->route('patients.index')
            ->with('success', 'Data pasien berhasil diupdate');
    }

    public function destroy(patient $patient)
    {
        $patient->delete();

        return redirect()->route('patients.index')
            ->with('success', 'Data pasien berhasil dihapus');
    }
}