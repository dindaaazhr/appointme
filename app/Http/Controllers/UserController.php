<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register()
    {
        return view('auth/register');
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:pasiens',
            'password' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'role' => 'required',
            'password_confirm' => 'required|same:password',
        ]);

        $pasien = new User([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'role' => $request->role,
        ]);
        $pasien->save();

        return redirect()->route('login')->with('berhasil', 'Registrasi berhasil. Silahkan Login!');
    }



    public function login()
    {
        return view('auth/login');
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            if (Auth::user()->role == '1') {
                return redirect()->route('dashboard.index');
            }
            return redirect()->route('pasiens.home');
        }        
    
        return back()->withErrors([
            'password' => 'Email atau Password salah!',
        ]);
    }
    

    public function password()
    {
        $data['title'] = 'Change Password';
        return view('auth/password', $data);
    }

    public function password_action(Request $request)
    {
        $request->validate([
            'old_password' => 'required|current_password',
            'new_password' => 'required|confirmed',
        ]);
        $user = User::find(Auth::id());
        $user->password = Hash::make($request->new_password);
        $user->save();
        $request->session()->regenerate();
        return back()->with('success', 'Password changed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}