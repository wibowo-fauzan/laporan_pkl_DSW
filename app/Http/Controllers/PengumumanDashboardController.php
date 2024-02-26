<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengumumanDashboardController extends Controller
{
    public function datapengumuman()
    {
        $pengumumans = Pengumuman::simplePaginate(4);
        return view('dashboard.page.datapengumuman', compact('pengumumans'));
    }

    public function create()
    {
        return view('dashboard.pengumuman.create-pengumuman');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'date' => 'required|date',
        ]);

        try {
            $imagePath = $request->file('image')->store('pengumuman', 'public');

            Pengumuman::create([
                'title' => $request->input('title'),
                'description' => nl2br($request->input('description')),
                'image' => $imagePath,
                'date' => $request->input('date'),
            ]);

            return redirect()->route('pengumuman.index')->with('success', 'Pengumuman created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('pengumuman.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        return view('dashboard.pengumuman.edit-pengumuman', compact('pengumuman'));
    }

    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'title' => 'required',
    //         'description' => 'required',
    //         'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    //         'date' => 'required|date',
    //     ]);

    //     $pengumuman = Pengumuman::findOrFail($id);

    //     if (!$pengumuman) {
    //         return redirect()->route('pengumuman.index')->with('error', 'Pengumuman not found.');
    //     }

    //     try {
    //         $pengumuman->update([
    //             'title' => $request->input('title'),
    //             'description' => nl2br($request->input('description')),
    //             'date' => $request->input('date'),
    //         ]);

    //         if ($request->hasFile('image')) {
    //             Storage::disk('public')->delete($pengumuman->image);
    //             $imagePath = $request->file('image')->store('pengumuman', 'public');
    //             $pengumuman->update(['image' => $imagePath]);
    //         }

    //         return redirect()->route('pengumuman.index')->with('success', 'Pengumuman updated successfully.');
    //     } catch (\Exception $e) {
    //         return redirect()->route('pengumuman.index')->with('error', 'Error: ' . $e->getMessage());
    //     }
    // }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'date' => 'required|date', // Validate the date field
        ]);

        $agenda = Pengumuman::findOrFail($id);

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

        return redirect()->route('pengumuman.index')->with('success', 'Agenda updated successfully.');
    }

    public function destroy($id)
    {
        try {
            Pengumuman::destroy($id);
            return redirect()->route('pengumuman.index')->with('success', 'Pengumuman deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('pengumuman.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
}