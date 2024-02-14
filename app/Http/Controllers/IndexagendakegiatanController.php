<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class IndexagendakegiatanController extends Controller
{
    public function showDetails($id)
    {
        // Ambil data agenda berdasarkan ID
        $agenda = Agenda::findOrFail($id);

        // Ambil semua data agenda
        $agendas = Agenda::latest()->take(2)->get();

        // Tampilkan data di view atau lakukan operasi lainnya
        return view('indexblog.indexagendakegiatan', ['agenda' => $agenda, 'agendas' => $agendas]);
    }
}