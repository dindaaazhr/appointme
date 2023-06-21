<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Antrean;
use App\Models\Dokter;
use App\Models\Pasien;
use Illuminate\Http\Request;

class AntreanController extends Controller
{
    public function index() {
        $antreans = Antrean::all();
        $dokters = Dokter::all();
        $pasiens = Pasien::all();
        return view('antrean.index')->with('antreans', $antreans)->with('dokters', $dokters)->with('pasiens', $pasiens);
    }

    public function store(Request $request){
        $data = $request->validate([
            'id_pasien' => 'required',
            'id_dokter' => 'required',
            'jam_temu' => 'required',
            'status' => 'required',
        ]);

        Antrean::create($data);

        return redirect()->route('antrean.index')->with('success', 'Data antrean berhasil ditambahkan.');
    }

    public function update(Request $request, $id_antrean) {
        $antrean = Antrean::find($id_antrean);
        $antrean->id_pasien = $request->input('id_pasien');
        $antrean->id_dokter = $request->input('id_dokter');
        $antrean->jam_temu = $request->input('jam_temu');
        $antrean->status = $request->input('status');
        $antrean->save();
        return redirect()->route('antrean.index');
    }

    public function destroy($id_antrean) {
        $antrean = Antrean::find($id_antrean);
        if (!$antrean) {
            return redirect()->route('antrean.index')->with('error', 'Data antrean tidak ditemukan.');
        }
        try {
            $antrean->delete();
            return redirect()->route('antrean.index')->with('success', 'Data antrean berhasil dihapus.');
        } 
        catch (\Exception $e) {
            return redirect()->route('antrean.index')->with('error', 'Terjadi kesalahan saat menghapus data antrean: ' . $e->getMessage());
        }
    }
}