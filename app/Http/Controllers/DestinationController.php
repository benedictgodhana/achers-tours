<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DestinationController extends Controller
{
    /**
     * Display a listing of destinations.
     */
    public function index()
    {
        $destinations = Destination::all();
        return view('destinations.index', compact('destinations'));
    }

    /**
     * Show the form for creating a new destination.
     */
    public function create()
    {
        return view('destinations.create');
    }

    /**
     * Store a newly created destination in storage.
     */
    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $destination = new Destination($validated);
    $destination->user_id = auth()->id();

    // Handle image upload
    if ($request->hasFile('image')) {
        // Store the image and get the path
        $path = $request->file('image')->store('destinations', 'public');
        $destination->image = $path;
    }

    $destination->save();

    return redirect()->route('destinations.index')->with('success', 'Destination created successfully.');
}

    /**
     * Display the specified destination and its tours.
     */
    public function show(Destination $destination)
    {
        $tours = $destination->tours;
        return view('destinations.show', compact('destination', 'tours'));
    }

    /**
     * Show the form for editing the specified destination.
     */
    public function edit(Destination $destination)
    {
        return view('destinations.edit', compact('destination'));
    }

    /**
     * Update the specified destination in storage.
     */
    public function update(Request $request, Destination $destination)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $destination->fill($validated);

        // Handle image update
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('destinations', 'public');
            $destination->image = $path;
        }

        $destination->save();

        return redirect()->route('destinations.index')->with('success', 'Destination updated successfully.');
    }

    /**
     * Remove the specified destination from storage.
     */
    public function destroy(Destination $destination)
    {
        $destination->delete();
        return redirect()->route('destinations.index')->with('success', 'Destination deleted successfully.');
    }
}
