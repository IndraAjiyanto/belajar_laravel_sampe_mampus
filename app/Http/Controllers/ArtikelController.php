<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\User;
use App\Models\Kategori;

class ArtikelController extends Controller
{
    public function index(){
        $tittle = '';
        if(request('kategori')){
            $kategori = Kategori::firstWhere('link_kategori', request('kategori'));
            $tittle = " in ". $kategori->nama;
        }
        if(request('penulis')){
            $penulis = User::firstWhere('username', request('penulis'));
            $tittle = " by ". $penulis->nama;
        }
        return view('artikels',[
            "tittle" => "Artikel" . $tittle,
            "active" => "artikel",
            "artikels" => Artikel::latest()->filter(request(['search', 'kategori', 'penulis']))->paginate(6)->withQueryString()
        ]);
    }

    public function show(Artikel $artikel){
        return view('artikel',[
            "tittle" => "Single Artikel",
            "active" => "artikel",
            "artikel" => $artikel
        ]);
    }
}
