<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengumuman; // Import the Pengumuman model

class PengumumanController extends Controller
{
    public function index()
    {
        $latestpengumumans = Pengumuman::latest()->first();
        $pengumumans = Pengumuman::latest()->paginate(6);
        return view('page.pengumuman', compact('latestpengumumans', 'pengumumans'));
    }
}