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

    
public function update(Request $request, Testimonial $testimonial)
{
    // Ensure the user is authenticated
    $userId = auth()->id(); // Get the authenticated user's ID

    $request->validate([
        'name' => 'sometimes|required|string|max:255',
        'email' => 'sometimes|nullable|email',
        'message' => 'sometimes|required|string',
        'is_approved' => 'sometimes|required|boolean',
    ]);

    // Update the fields if they exist in the request
    if ($request->has('name')) {
        $testimonial->name = $request->input('name');
    }
    if ($request->has('email')) {
        $testimonial->email = $request->input('email');
    }
    if ($request->has('message')) {
        $testimonial->message = $request->input('message');
    }
    if ($request->has('is_approved')) {
        $testimonial->is_approved = $request->input('is_approved');
    }

    // Update the user_id to the current authenticated user
    $testimonial->user_id = $userId;

    // Save the changes
    $testimonial->save();

    // Redirect back to the testimonials index with a success message
    return redirect()->route('testimonials.index')->with('success', 'Testimonial updated successfully.');
}


    // Delete a testimonial
    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();

        return redirect()->route('testimonials.index')->with('success', 'Testimonial Deleted successfully.');

    }
}

