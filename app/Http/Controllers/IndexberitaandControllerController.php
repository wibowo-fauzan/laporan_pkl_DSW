<?php

namespace App\Http\Controllers;

use App\Models\BeritaAtikel;
use Illuminate\Http\Request;

class IndexberitaandControllerController extends Controller
{
    public function showDetails()
    {
        $latestBerita = BeritaAtikel::latest()->first();
        $beritaArtikels = BeritaAtikel::latest()->paginate(6);
        return view('indexblog.indexberitaandartikel', compact('beritaArtikels', 'latestBerita'));
    }
}
