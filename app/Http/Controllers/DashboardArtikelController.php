<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            return view('dashboard.artikels',[
                'artikels' => Artikel::where('user_id', auth()->user()->id)->get()
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.create',[
            'kategoris' => Kategori::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedata = $request->validate([
            'judul' => ['required','max:255'],
            'link' => ['required','unique:artikels'],
            'kategori_id' => 'required',
            'isi' => 'required'
        ]);

        $validatedata['user_id'] = auth()->user()->id;
        Artikel::create($validatedata);
        return redirect('dashboard/artikel')->with('success','berhasil membuat artikel');
    }

    /**
     * Display the specified resource.
     */
    public function show(Artikel $artikel)
    {
        return view('dashboard.artikel',[
            'artikel' => $artikel
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artikel $artikel)
    {
        return view('dashboard.edit',[
            'artikel' => $artikel,
            'kategoris' => Kategori::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artikel $artikel)
    {
        $rules = [
            'judul' => ['required','max:255'],
            'kategori_id' => 'required',
            'isi' => 'required'
        ];

        if($request->link != $artikel->link){
            $rules['link'] = ['required','unique:artikels'];
        }

        $validatedata = $request->validate($rules);
        $validatedata['user_id'] = auth()->user()->id;
        Artikel::where('id', $artikel->id)->update($validatedata);
        return redirect('dashboard/artikel')->with('success','berhasil update artikel');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artikel $artikel)
    {
        Artikel::destroy($artikel->id);
        return redirect('dashboard/artikel')->with('success','berhasil membuat artikel');
    }

    public function checkLink(Request $request){
        $link = SlugService::createSlug(Artikel::class, 'link', $request->judul);
        return response()->json(['link' => $link]);
    }
}
