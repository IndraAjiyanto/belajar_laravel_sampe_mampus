<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index(){
        return view('kategories', [
            'tittle' => 'Kategori',
            'active' => 'kategori',
            'kategories' => Kategori::all()
        ]);
    }

    public function show(Kategori $kategori){
        return view('artikels', [
            'tittle' => "Kategori $kategori->nama",
            'active' => 'kategori',
            'kategori' => $kategori,
            'artikels' => $kategori->artikel->load(['penulis', 'kategori'])
        ]);
    }
}
