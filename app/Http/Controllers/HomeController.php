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
        return view("homescreen");
    }
}