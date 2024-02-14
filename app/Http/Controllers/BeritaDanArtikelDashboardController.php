<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BeritaAtikel;
use Illuminate\Support\Facades\Storage;

class BeritaDanArtikelDashboardController extends Controller
{
    public function index()
    {
        $beritaArtikels = BeritaAtikel::latest()->paginate(10);
        return view('dashboard.page.databerita&artikel', compact('beritaArtikels'));
    }

    public function create()
    {
        return view('dashboard.beritadanartikel.create-beritadanartikel');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'date' => 'required|date',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('beritaAtikel', 'public');

            BeritaAtikel::create([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'image' => $imagePath,
                'date' => $request->input('date'),
            ]);

            return redirect()->route('beritadanartikel.index')
                ->with('success', 'Berita created successfully');
        } else {
            return redirect()->route('beritadanartikel.index')
                ->with('error', 'Image upload failed. Please try again.');
        }
    }


    public function show(BeritaAtikel $beritaAtikel)
    {
        return view('dashboard.beritadanartikel.show', compact('beritaAtikel'));
    }

    public function edit(BeritaAtikel $beritaAtikel)
    {
        return view('dashboard.beritadanartikel.edit-beritadanartikel', compact('beritaAtikel'));
    }

    public function update(Request $request, BeritaAtikel $beritaAtikel)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'date' => 'required|date',
        ]);

        $imagePath = $beritaAtikel->image; // Initialize $imagePath with the current image path

        $beritaAtikel->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'date' => $request->input('date'),
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($beritaAtikel->image);

            $imagePath = $request->file('image')->store('beritaAtikel', 'public');
            $beritaAtikel->update(['image' => $imagePath]);
        }

        return redirect()->route('beritadanartikel.index')
            ->with('success', 'Berita updated successfully');
    }


    public function destroy(BeritaAtikel $beritaAtikel)
    {
        $imagePath = $beritaAtikel->image;

        $beritaAtikel->delete();

        if ($imagePath) {
            Storage::disk('public')->delete($imagePath);
        }

        return redirect()->route('beritadanartikel.index')
            ->with('success', 'Berita deleted successfully');
    }
}
