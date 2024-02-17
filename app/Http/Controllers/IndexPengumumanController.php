<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class IndexPengumumanController extends Controller
{
    public function showDetails()
    {
        $latestpengumumans = Pengumuman::latest()->first();
        $pengumumans = Pengumuman::latest()->paginate(6);
        return view('indexblog.indexpengumuman', compact('latestpengumumans', 'pengumumans'));
    }
}
