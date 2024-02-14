<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TngglBlnThnController extends Controller
{
    public function showEventCard()
    {
        $today = Carbon::now();

        return view('homescreen', compact('today'));
    }
}
