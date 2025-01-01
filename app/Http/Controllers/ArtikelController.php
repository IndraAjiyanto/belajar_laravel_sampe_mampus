<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    public function index(){
        return view('artikels',[
            "tittle" => "Artikel",
            "active" => "artikel",
            "artikels" => Artikel::latest()->get()
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
