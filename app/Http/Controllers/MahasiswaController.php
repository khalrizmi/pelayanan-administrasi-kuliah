<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Mahasiswa;
use App\Models\Pembayaran;
use App\Models\Semester;
use Illuminate\Http\Request;

class MahasiswaController
{
    public function index()
    {
        $mahasiswas = Mahasiswa::all();

        return view('mahasiswa.index', compact('mahasiswas'));
    }

    public function show($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $pembayarans = Pembayaran::where('mahasiswa_id', $id)->get();

        return view('mahasiswa.show', compact('mahasiswa', 'pembayarans'));
    }

    public function create()
    {
        $jurusans = Jurusan::all();
        $semesters = Semester::all();

        return view('mahasiswa.create', compact('jurusans', 'semesters'));
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $jurusans = Jurusan::all();
        $semesters = Semester::all();

        return view('mahasiswa.edit', compact('mahasiswa', 'jurusans', 'semesters'));
    }

    public function store(Request $request)
    {
        $checkNim = Mahasiswa::where('nim', $request->nim)->count();

        if ($checkNim > 0)
            return back()->withErrors(['msg' => $request->nim . ' sudah dipakai']);

        Mahasiswa::query()->create([
            'jurusan_id' => $request->jurusan_id,
            'semester_id' => $request->semester_id,
            'nim' => $request->nim,
            'nama' => $request->nama,
            'nomor_telepon' => $request->nomor_telepon
        ]);

        return redirect()->route('mahasiswa.index');
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        $checkNim = Mahasiswa::where('nim', $request->nim)->count();

        if ($checkNim > 0 && $mahasiswa->nim != $request->nim)
            return back()->withErrors(['msg' => $request->nim . ' sudah dipakai']);

        $mahasiswa->update([
            'jurusan_id' => $request->jurusan_id,
            'semester_id' => $request->semester_id,
            'nim' => $request->nim,
            'nama' => $request->nama,
            'nomor_telepon' => $request->nomor_telepon
        ]);

        return redirect()->route('mahasiswa.index');
    }

    public function destroy($id)
    {
        Mahasiswa::where('id', $id)->delete();
        Pembayaran::where('mahasiswa_id', $id)->delete();

        return redirect()->route('mahasiswa.index');
    }

}
