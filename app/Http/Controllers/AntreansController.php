<?php

namespace App\Http\Controllers;

use App\Models\Antrean;
use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Poli;
use Illuminate\Http\Request;

class AntreansController extends Controller
{
    //
    public function index() {
        $antreans = Antrean::all();
        $dokters = Dokter::all();
        $polis = Poli::all();
        $pasiens = Pasien::all();
        return view('pasiens.antrean')->with('antreans', $antreans)->with('dokters', $dokters)->with('polis', $polis)->with('pasiens', $pasiens);
    }

    public function detail() {
        $dokters = Dokter::all();
        return view('pasiens.janji', compact('dokters'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_dokter' => 'required',
            'id_pasien' => 'required',
            'jam_temu' => 'required',
            'status' => 'required',
        ]);

        $antrean = new Antrean([
            'id_dokter' => $request->input('id_dokter'),
            'id_pasien' => $request->input('id_pasien'),
            'jam_temu' => $request->input('jam_temu'),
            'status' => $request->input('status'),
        ]);
        $antrean->save();

        return redirect()->route('pasiens.antreans')->with('success', 'Data berhasil ditambahkan.');
    }
    
}
