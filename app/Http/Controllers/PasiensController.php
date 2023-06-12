<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pasien;

class PasiensController extends Controller
{
    public function index() {
        $pasiens = pasien::all();
        return view('pasiens.index')->with('pasiens', $pasiens);
    }
}
