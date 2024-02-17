<?php

namespace App\Http\Controllers;

use App\AgendaKegiatan;
use App\Models\Agenda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AgendakegiatanDashboardController extends Controller
{
    // agenda_kegiatan_controller

    public function dataagenda()
    {
        $agendas = Agenda::simplePaginate(4);
        return view('dashboard.page.dataagenda', compact('agendas'));
    }


    public function create()
    {
        return view('dashboard.agenda-kegiatan.create-agendakegiatan');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'date' => 'required|date', // Add the validation rule for the date field
        ]);

        // Upload image to public/agendakegiatan directory
        $imagePath = $request->file('image')->store('agendakegiatan', 'public');

        // Create agenda with the image path and date
        Agenda::create([
            'title' => $request->input('title'),
            'description' => nl2br($request->input('description')),
            'image' => $imagePath,
            'date' => $request->input('date'),
        ]);

        return redirect()->route('agendas.index')->with('success', 'Agenda created successfully.');
    }


    public function show($id)
    {
        $agenda = Agenda::findOrFail($id);
        return view('dashboard.agenda-kegiatan.view-agendakegiatan', compact('agenda'));
    }

    public function edit($id)
    {
        $agenda = Agenda::findOrFail($id);
        return view('dashboard.agenda-kegiatan.edit-agendakegiatan', compact('agenda'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'date' => 'required|date', // Validate the date field
        ]);

        $agenda = Agenda::findOrFail($id);

        $imagePath = $request->file('image')->store('agendakegiatan', 'public');

        // Update title, description, and date
        $agenda->update([
            'title' => $request->input('title'),
            'description' => nl2br($request->input('description')),
            'image' => $imagePath,
            'date' => $request->input('date'),
        ]);

        // Update image if a new one is provided
        if ($request->hasFile('image')) {
            // Delete the old image
            Storage::disk('public')->delete($agenda->image);

            // Upload the new image
            $imagePath = $request->file('image')->store('agendakegiatan', 'public');
            $agenda->update(['image' => $imagePath]);
        }

        return redirect()->route('agendas.index')->with('success', 'Agenda updated successfully.');
    }


    public function destroy($id)
    {
        $agenda = Agenda::findOrFail($id);

        // Delete the image file
        Storage::disk('public')->delete($agenda->image);

        $agenda->delete();

        return redirect()->route('agendas.index')->with('success', 'Agenda deleted successfully.');
    }
}
