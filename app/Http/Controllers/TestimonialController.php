<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    // Display all testimonials
    public function index()
{
    // Fetch all testimonials with pagination
    $testimonials = Testimonial::paginate(7); // Adjust the number as needed

    // Return the view and pass the testimonials to it
    return view('testimonials.index', compact('testimonials'));
}


public function create()
{
    // Fetch all testimonials with pagination

    // Return the view and pass the testimonials to it
    return view('testimonials.create');
}
public function store(Request $request)
{
    // Ensure the user is authenticated
    $userId = auth()->id(); // Get the authenticated user's ID

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'nullable|email',
        'message' => 'required|string',
    ]);

    // Add authenticated user_id to the request
    $testimonialData = $request->all();
    $testimonialData['user_id'] = $userId;

    // Create the testimonial
    $testimonial = Testimonial::create($testimonialData);

    // Redirect back to testimonials index with success message
    return redirect()->route('testimonials.index')->with('success', 'Testimonial created successfully.');
}



    // Show a specific testimonial
    public function show($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        return view('testimonials.show', compact('testimonial'));

    }


    // Show a specific testimonial
    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        return view('testimonials.edit', compact('testimonial'));

    }

   // Update a testimonial
public function update(Request $request, $id)
{
    $testimonial = Testimonial::findOrFail($id);

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'nullable|email',
        'message' => 'required|string',
        'image' => 'nullable|image|max:2048',
        'user_id' => 'required|exists:users,id',
        'is_approved' => 'required|boolean',
    ]);

    // Handle image upload and update if a new image is uploaded
    if ($request->hasFile('image')) {
        // Delete the old image if exists
        if ($testimonial->image) {
            Storage::delete($testimonial->image); // Delete the old image from storage
        }

        // Store the new image and get the path
        $path = $request->file('image')->store('testimonials');
        $testimonial->image = $path; // Update the image path
    }

    // Update other fields
    $testimonial->update([
        'name' => $request->name,
        'email' => $request->email,
        'message' => $request->message,
        'is_approved' => $request->is_approved,
    ]);

    return redirect()->route('testimonials.index')->with('success', 'Testimonial updated successfully.');
}


    // Delete a testimonial
    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();
        return response()->json(['message' => 'Testimonial deleted successfully']);
    }
}

