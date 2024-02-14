<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendidikanDSWController extends Controller
{
    public function pendidikandsw() {
        return view('layanandsw.pendidiandsw');
    }
}
