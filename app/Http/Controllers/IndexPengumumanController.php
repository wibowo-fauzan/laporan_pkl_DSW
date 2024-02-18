<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class IndexPengumumanController extends Controller
{
    public function showDetails($id)
    {
        // Ambil data Pengumuman berdasarkan ID
        $pengumuman = Pengumuman::findOrFail($id);

        // Ambil dua pengumuman terbaru selain yang diklik
        $pengumumans = Pengumuman::where('id', $id)->latest()->take(2)->get();

        return view('indexblog.indexpengumuman', compact('pengumuman', 'pengumumans'));
    }
}