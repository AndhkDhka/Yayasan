<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PpdbController extends Controller
{
    public function index()
    {
        return view('public.ppdb');
    }

    public function submit(Request $request)
    {
        // Validasi data
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'email' => 'required|email',
            'no_telp' => 'nullable|string',
        ]);

        // Simpan ke database (buat model Ppdb jika belum)
        // Ppdb::create($request->all());

        return redirect()->route('ppdb.index')->with('success', 'Pendaftaran berhasil dikirim!');
    }
}

