<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\BeritaAtikel;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home($id)
    {
        // Ambil data Pengumuman berdasarkan ID
        $pengumuman = Pengumuman::findOrFail($id);
        $pengumumans = Pengumuman::where('id', '!=', $id)->latest()->take(2)->get();

        // Ambil data BeritaArtikel berdasarkan ID
        $beritaArtikel = BeritaAtikel::findOrFail($id);
        $beritaArtikels = BeritaAtikel::where('id', '!=', $id)->latest()->take(2)->get();

        // Ambil data agenda berdasarkan ID
        $agenda = Agenda::findOrFail($id);
        $agendas = Agenda::latest()->take(2)->get();

        // Tampilkan data di view atau lakukan operasi lainnya
        return view('homescreen', [
            'pengumuman' => $pengumuman,
            'pengumumans' => $pengumumans,
            'beritaArtikel' => $beritaArtikel,
            'beritaArtikels' => $beritaArtikels,
            'agenda' => $agenda,
            'agendas' => $agendas
        ]);
    }
}