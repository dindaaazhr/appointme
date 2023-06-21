<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Poli;
use Illuminate\Http\Request;

class PoliController extends Controller
{
    public function index() {
        $polis = Poli::all();
        $jumlahDokter = [];

        foreach ($polis as $poli) {
            $jumlahDokter[$poli->id_poli] = $poli->dokters->count();
        }
        return view('poli.index')->with('polis', $polis)->with('jumlahDokter', $jumlahDokter);
    }

    public function store(Request $request){
        $data = $request->validate([
            'nama' => 'required',
            'kepala' => 'required',
        ]);

        Poli::create($data);

        return redirect()->route('poli.index')->with('success', 'Data poli berhasil ditambahkan.');
    }

    public function update(Request $request, $id_poli) {
        $poli = Poli::find($id_poli);
        $poli->nama = $request->input('nama');
        $poli->kepala = $request->input('kepala');
        $poli->save();
        return redirect()->route('poli.index');
    }

    public function destroy($id_poli) {
        $poli = Poli::find($id_poli);
        if (!$poli) {
            return redirect()->route('poli.index')->with('error', 'Data poli tidak ditemukan.');
        }
        try {
            foreach ($poli->dokters as $dokter) {
                $dokter->antreans()->delete();
            }
            $poli->dokters()->delete();
            $poli->delete();
            return redirect()->route('poli.index')->with('success', 'Data poli berhasil dihapus.');
        } 
        catch (\Exception $e) {
            return redirect()->route('poli.index')->with('error', 'Terjadi kesalahan saat menghapus data poli: ' . $e->getMessage());
        }
    }

    public function detail($id_poli) {
        $poli = Poli::find($id_poli);
        $dokters = $poli->dokters;
        $jumlahDokter = $poli->dokters->count();
        return view('poli.detail', compact('poli', 'id_poli', 'dokters', 'jumlahDokter'));
    }
}