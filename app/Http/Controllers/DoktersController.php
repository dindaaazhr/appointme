<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;
use App\Models\Poli;

class DoktersController extends Controller
{
    public function index() {
        $dokters = Dokter::all();
        return view('pasiens.doctor')->with('dokters', $dokters);
    }

    public function detail($id_poli) {
        $poli = Poli::find($id_poli);
        $dokters = $poli->dokters;
        return view('pasiens.doctor', compact('poli', 'id_poli', 'dokters'));
    }

}
