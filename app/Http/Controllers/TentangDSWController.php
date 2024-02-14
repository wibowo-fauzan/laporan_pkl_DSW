<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangDSWController extends Controller
{
    public function index() {
        return view('page.tentangDSW');
    }
}
