<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PasienController extends Controller
{
    public function index() {
        $pasiens = Pasien::all();
        return view('pasien.index')->with('pasiens', $pasiens);
    }

    public function store(Request $request){
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
        ]);

        $data['password'] = Hash::make($data['password']);
        Pasien::create($data);

        return redirect()->route('pasien.index')->with('success', 'Data pasien berhasil ditambahkan.');
    }

    public function update(Request $request, $id_pasien) {
        $pasien = Pasien::find($id_pasien);
        $pasien->email = $request->input('email');
        if ($request->filled('password')) {
            $pasien->password = Hash::make($request->input('password'));
        }
        $pasien->nama = $request->input('nama');
        $pasien->jenis_kelamin = $request->input('jenis_kelamin');
        $pasien->tempat_lahir = $request->input('tempat_lahir');
        $pasien->tanggal_lahir = $request->input('tanggal_lahir');
        $pasien->alamat = $request->input('alamat');
        $pasien->save();
        return redirect()->route('pasien.index');
    }

    public function destroy($id_pasien) {
        $pasien = Pasien::find($id_pasien);
        if (!$pasien) {
            return redirect()->route('pasien.index')->with('error', 'Data pasien tidak ditemukan.');
        }
        try {
            $pasien->antreans()->delete();
            $pasien->delete();
            return redirect()->route('pasien.index')->with('success', 'Data pasien berhasil dihapus.');
        } 
        catch (\Exception $e) {
            return redirect()->route('pasien.index')->with('error', 'Terjadi kesalahan saat menghapus data pasien: ' . $e->getMessage());
        }
    }

    public function detail($id_pasien) {
        $pasien = Pasien::find($id_pasien);
        $antreans = $pasien->antreans;
        return view('pasien.detail', compact('pasien', 'id_pasien', 'antreans'));
    }
}