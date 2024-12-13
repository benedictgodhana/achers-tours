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
    public function index(Request $request)
    {
        // Get the search query from the request, if any
        $search = $request->input('search');

        // Query the destinations, applying a search filter if present
        $destinations = Destination::when($search, function ($query) use ($search) {
            return $query->where('name', 'like', '%' . $search . '%')
                         ->orWhere('description', 'like', '%' . $search . '%');
        })->paginate(4  ); // Adjust the number to 5 for pagination

        // Return the view with the paginated results and the search query
        return view('destinations.index', compact('destinations', 'search'));
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
        // Validate the request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // image file validation
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $originalFilename = $request->file('image')->getClientOriginalName(); // Get original file name
            $filename = time() . '_' . $originalFilename; // Add timestamp to avoid overwriting
            $imagePath = $request->file('image')->storeAs('destinations', $filename, 'public'); // Save to public/storage/destinations with custom name

            // Save to database
            Destination::create([
                'name' => $request->name,
                'description' => $request->description,
                'image' => $imagePath,  // Store the image path in the database
                'user_id' => auth()->id(), // Store authenticated user ID
            ]);
        }

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
