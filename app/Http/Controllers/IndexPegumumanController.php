<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class IndexPengumumanController extends Controller
{
    public function showDetails($id)
    {
        $latestpengumumans = Pengumuman::latest()->first();
        $pengumumans = Pengumuman::latest()->paginate(6);
        // Lakukan query untuk mendapatkan pengumuman berdasarkan $id
        $pengumuman = Pengumuman::find($id);

        return view('indexblog.indexpengumuman', compact('latestpengumumans', 'pengumumans', 'pengumuman'));
    }
}
