<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Dokter;
use App\Models\Poli;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index() {
        $dokters = Dokter::all();
        $polis = Poli::all();
        $jumlahAntrean = [];

        foreach ($dokters as $dokter) {
            $jumlahAntrean[$dokter->id_dokter] = $dokter->antreans->count();
        }
        return view('dokter.index')->with('dokters', $dokters)->with('jumlahAntrean', $jumlahAntrean)->with('polis', $polis);
    }

    public function store(Request $request){
        $data = $request->validate([
            'id_poli' => 'required',
            'nama' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'jam_buka' => 'required',
            'jam_tutup' => 'required',
        ]);

        Dokter::create($data);

        return redirect()->route('dokter.index')->with('success', 'Data dokter berhasil ditambahkan.');
    }

    public function update(Request $request, $id_dokter) {
        $dokter = Dokter::find($id_dokter);
        $dokter->id_poli = $request->input('id_poli');
        $dokter->nama = $request->input('nama');
        $dokter->no_hp = $request->input('no_hp');
        $dokter->alamat = $request->input('alamat');
        $dokter->jam_buka = $request->input('jam_buka');
        $dokter->jam_tutup = $request->input('jam_tutup');
        $dokter->save();
        return redirect()->route('dokter.index');
    }

    public function destroy($id_dokter) {
        $dokter = Dokter::find($id_dokter);
        if (!$dokter) {
            return redirect()->route('dokter.index')->with('error', 'Data dokter tidak ditemukan.');
        }
        try {
            $dokter->antreans()->delete();
            $dokter->delete();
            return redirect()->route('dokter.index')->with('success', 'Data dokter berhasil dihapus.');
        } 
        catch (\Exception $e) {
            return redirect()->route('dokter.index')->with('error', 'Terjadi kesalahan saat menghapus data dokter: ' . $e->getMessage());
        }
    }

    public function detail($id_dokter) {
        $dokter = Dokter::find($id_dokter);
        $antreans = $dokter->antreans;
        $jumlahAntrean = $dokter->antreans->count();
        return view('dokter.detail', compact('dokter', 'id_dokter', 'antreans', 'jumlahAntrean'));
    }
}