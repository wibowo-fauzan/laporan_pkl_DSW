<?php

namespace App\Http\Controllers;

use App\Models\BeritaAtikel;
use Illuminate\Http\Request;

class BeritaDanArtikelCotroller extends Controller
{
    public function index()
    {
        $latestBerita = BeritaAtikel::latest()->first();
        $beritaArtikels = BeritaAtikel::latest()->paginate(6);
        return view('page.beritaartikel', compact('beritaArtikels'));
    }
}
