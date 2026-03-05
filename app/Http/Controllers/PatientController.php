<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    public function index()
    {
        $patients = DB::table('patients')->get();
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

        DB::table('patients')->insert($validated);

        return redirect()->route('patients.index')
            ->with('success', 'Data pasien berhasil ditambahkan');
    }

    public function edit($id)
    {
        $patient = DB::table('patients')->where('id', $id->id)->first();
        return view('patients.edit', compact('patient'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'pet_type' => 'required',
            'age' => 'required|numeric',
            'address' => 'required',
        ]);

        DB::table('patients')->where('id', $id)->update($validated);

        return redirect()->route('patients.index')
            ->with('success', 'Data pasien berhasil diupdate');
    }

    public function destroy($id)
    {
        DB::table('patients')->where('id', $id)->delete();

        return redirect()->route('patients.index')
            ->with('success', 'Data pasien berhasil dihapus');
    }
}