<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
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

    public function agenda()
    {
        // Fetch agenda data from the database
        $latestAgenda = Agenda::latest()->first();
        $agendas = Agenda::latest()->paginate(6);

        // Pass the agenda data to the view
        return view('homescreen', compact('agendas', 'latestAgenda'));
    }
}
