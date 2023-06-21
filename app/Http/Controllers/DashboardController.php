<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pasien;
use App\Models\Dokter;
use App\Models\Poli;
use App\Models\Antrean;

class DashboardController extends Controller
{
    public function index() {
        $jumlahPasien = Pasien::count();
        $jumlahDokter = Dokter::count();
        $jumlahPoli = Poli::count();
        $jumlahAntrean = Antrean::count();

        return view('dashboard.index')->with('jumlahPasien', $jumlahPasien)->with('jumlahDokter', $jumlahDokter)->with('jumlahPoli', $jumlahPoli)->with('jumlahAntrean', $jumlahAntrean);
    }
}