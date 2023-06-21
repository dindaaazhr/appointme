<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use Illuminate\Support\Facades\Auth;
use App\Model\User;

class PasiensController extends Controller
{
    //
    public function index() {
        $pasiens = pasien::all();
        return view('pasiens.profil')->with('pasiens', $pasiens);
    }

    
        // Mengubah data pasien update.blade.php
        public function edit($id_pasien)
        {
            $pasien = Pasien::find($id_pasien);
            return view('pasiens.profil')->with('pasien', $pasien);
        }
    
        public function update(Request $request, $id_pasien)
        {
            $request->validate([
                'nama' => 'required',
                'jenis_kelamin' => 'required',
                'tempat_lahir' => 'required',
                'tanggal_lahir' => 'required',
                'alamat' => 'required'
            ]);
        
            $pasien = Pasien::findOrFail($id_pasien);
            $pasien->nama = $request->input('nama');
            $pasien->jenis_kelamin = $request->input('jenis_kelamin');
            $pasien->tempat_lahir = $request->input('tempat_lahir');
            $pasien->tanggal_lahir = $request->input('tanggal_lahir');
            $pasien->alamat = $request->input('alamat');
            $pasien->save();
        
            return redirect()->route('pasiens.profil')->with('success', 'Data pasien berhasil diubah.');
        }        


    public function destroy($id_pasien)
    {
        $pasien = pasien::find($id_pasien);
        $pasien->delete();
        return redirect()->route('pasiens.profil')->with('success', 'Data pasien berhasil dihapus.');
    }

    public function detail() {
        $id_pasien = Auth::user()->id_pasien;
        $pasien = Pasien::find($id_pasien);
        $antreans = $pasien->antreans;
        return view('pasiens.antrean', compact('pasien', 'id_pasien', 'antreans'));
    }
    
}
