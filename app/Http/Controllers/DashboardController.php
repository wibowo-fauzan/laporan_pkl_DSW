<?php

namespace App\Http\Controllers;

use App\AgendaKegiatan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.admin');
    }

    public function __construct()
    {
        $this->middleware('admin');
    }

    

    public function datapengumuman()
    {
        return view('dashboard.page.datapengumuman');
    }

    public function databeritapengumuman()
    {
        return view('dashboard.page.databerita&pengumuman');
    }
}