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
        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|email',
            'message' => 'sometimes|required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'is_approved' => 'sometimes|required|boolean',
            'user_id' => 'sometimes|required|integer|exists:users,id',
        ]);

        // Update specific fields only if they exist in the request
        $testimonial->name = $request->input('name', $testimonial->name);
        $testimonial->email = $request->input('email', $testimonial->email);
        $testimonial->message = $request->input('message', $testimonial->message);

        // Update image if it exists
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('testimonials', 'public');
            $testimonial->image = $path;  // Update image path
        }

        // Update is_approved if it exists
        $testimonial->is_approved = $request->input('is_approved', $testimonial->is_approved);

        // Set user_id to the currently authenticated user
        $testimonial->user_id = $request->user_id ?? auth()->id();

        $testimonial->save();  // Save the testimonial

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

