<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AgendaKegiatanController extends Controller
{
    public function index()
    {
        $latestAgenda = Agenda::latest()->first();
        $agendas = Agenda::latest()->paginate(6);

        return view('page.agendakegiatan', compact('agendas', 'latestAgenda'));
    }
}