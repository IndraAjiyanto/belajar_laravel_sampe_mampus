<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        return view('penulises',[
            "tittle" => "Penulis",
            "active" => "penulis",
            "penulises" => User::all()
        ]);
    }

    public function show(User $penulis){
        return view('artikels',[
            'tittle' => "Penulis $penulis->nama",
            'penulis' => $penulis,
            "active" => "penulis",
            'artikels' => $penulis->artikel->load(['penulis', 'kategori'])
        ]);
    }
}
