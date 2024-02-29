<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaHomeController extends Controller
{
    public function agenda()
    {
        // Fetch agenda data from the database
        $latestAgenda = Agenda::latest()->first();
        $agendas = Agenda::latest()->paginate(6);

        // Pass the agenda data to the view
        return view('homescreen', compact('agendas', 'latestAgenda'));
    }
}