<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::with(['tour', 'user'])->get();
        return view('packages.index', compact('packages'));
    }

    public function create()
    {
        $tours = Tour::all(); // Fetch all tours for the dropdown
        return view('packages.create', compact('tours'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'tour_id' => 'required|exists:tours,id',
            'duration' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Create a new package instance
        $package = new Package($request->all());
        $package->user_id = Auth::id(); // Set the creator

        // Handle the image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('packages', 'public'); // Store in storage/app/public/packages
            $package->image = $imagePath; // Save the path to the image
        }

        $package->save(); // Save the package to the database

        return redirect()->route('packages.index')->with('success', 'Package created successfully!');
    }


    public function show(Package $package)
    {
        return view('packages.show', compact('package'));
    }

    public function edit(Package $package)
    {
        $tours = Tour::all(); // Fetch all tours for the dropdown
        return view('packages.edit', compact('package', 'tours'));
    }

    public function update(Request $request, Package $package)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'tour_id' => 'required|exists:tours,id',
        'duration' => 'required|integer',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Store the new image if provided
    if ($request->hasFile('image')) {
        // Delete the old image if it exists
        if ($package->image) {
            Storage::delete($package->image);
        }

        // Store the new image
        $path = $request->file('image')->store('images/packages', 'public');
        $package->image = $path;
    }

    // Update the package with the rest of the data
    $package->update($request->except('image')); // Exclude image from mass assignment

    return redirect()->route('packages.index')->with('success', 'Package updated successfully!');
}


    public function destroy(Package $package)
    {
        $package->delete();
        return redirect()->route('packages.index')->with('success', 'Package deleted successfully!');
    }
}
