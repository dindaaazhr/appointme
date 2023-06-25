<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;
use App\Models\Poli;

class DoktersController extends Controller
{
    public function index(Request $request) {
        $polis = Poli::all();
        $dokterSelect = Dokter::query();
    
        $poliId = $request->input('poli');
    
        if ($poliId) {
            $dokterSelect->whereHas('polis', function ($query) use ($poliId) {
                $query->where('id_poli', $poliId);
            });
        }
    
        $dokters = $dokterSelect->get();
    
        return view('pasiens.doctor', compact('dokters', 'polis', 'poliId'));
    }

    public function detail($id_poli) {
        $poli = Poli::find($id_poli);
        $dokters = $poli->dokters;
        return view('pasiens.doctor', compact('poli', 'id_poli', 'dokters'));
    }

}