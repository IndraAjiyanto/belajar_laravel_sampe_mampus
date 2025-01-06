<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistrasiController extends Controller
{
    public function index(){
        return view('registrasi.index', [
            'tittle' => 'Registrasi',
            'active' => 'login'
        ]);
    }

    public function store(Request $request){
        $validatedata = $request->validate([
            'nama' => ['required','max:255'],
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'min:5', 'max:255']
        ]);

        $validatedata['password'] = Hash::make($validatedata['password']);
        $request->session()->flash('success', 'Berhasil Registrasi');
        User::create($validatedata);
        return redirect('/login');
    }
}
