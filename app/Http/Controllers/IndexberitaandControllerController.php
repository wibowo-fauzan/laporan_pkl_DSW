<?php

namespace App\Http\Controllers;

use App\Models\BeritaAtikel;
use Illuminate\Http\Request;

class IndexberitaandControllerController extends Controller
{
    public function showDetails($id)
    {
        // Ambil data Pengumuman berdasarkan ID
        $beritaArtikel = BeritaAtikel::findOrFail($id);

        // Ambil dua pengumuman terbaru selain yang diklik
        $beritaArtikels = BeritaAtikel::where('id', $id)->latest()->take(2)->get();

        return view('indexblog.indexberitaandartikel', compact('beritaArtikel', 'beritaArtikels'));
    }
}
