<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\InformationCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::paginate(4);
        return view('blog.index', compact('blogs'));
    }


    public function create()
    {
        $categories = InformationCategory::all(); // Fetch all categories from the database
        return view('blog.create', compact('categories')); // Pass categories to the view
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'category' => 'required|exists:information_categories,id', // Ensure the category exists
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        Blog::create([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category, // use category_id
            'image' => $imagePath,
            'author' => Auth::user()->name, // Use the name of the logged-in user
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
    }


    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }


    public function edit($id)
    {
        $categories = InformationCategory::all(); // Fetch all categories from the database

        $blog = Blog::findOrFail($id); // Retrieve the blog or show a 404 error
        return view('blog.edit', compact('blog','categories')); // Return the edit view with the blog data
    }

    /**
     * Update the specified blog in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $blog = Blog::findOrFail($id);
        $blog->update($request->only(['title', 'content']));

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully!');
    }


    public function show($id)
    {
        $categories = InformationCategory::all();
        $blog = Blog::find($id); // Retrieve the blog post by ID, handle the case when not found

        if (!$blog) {
            abort(404, 'Blog not found.');
        }

        $relatedBlogs = Blog::where('category_id', $blog->category_id)
                            ->where('id', '!=', $id) // Exclude the current blog from the related blogs
                            ->latest()
                            ->take(3)
                            ->get();

        // Get all blogs from the same category to display within the view
        $categoryBlogs = Blog::where('category_id', $blog->category_id)
                             ->where('id', '!=', $id) // Exclude the current blog from the list
                             ->latest()
                             ->get();

        $noInformationMessage = 'No information found for this category'; // Default message

        return view('blog.show', compact('blog', 'relatedBlogs', 'categoryBlogs', 'categories', 'noInformationMessage')); // Pass the current blog, related blogs, and message to the view
    }


    public function category($category)
    {
        // Fetch blogs based on the selected category
        $blogs = Blog::where('category', $category)->get();

        // Pass the filtered blogs to the view
        return view('blogs.index', compact('blogs'));
    }


    public function storeComment(Request $request, Blog $blog)
{
    $request->validate([
        'author' => 'required|string',
        'email' => 'required|email',
        'content' => 'required|string',
    ]);

    // Create the comment associated with the blog post
    $blog->comments()->create([
        'author' => $request->author, // Name from the form
        'email' => $request->email,   // Email from the form
        'content' => $request->content, // Comment content
    ]);

    return redirect()->back()->with('success', 'Your comment has been posted!');
}


public function categoryPage($id)
{
    $categories = InformationCategory::findOrFail($id);
    $blogs = Blog::where('category_id', $id)->get(); // Fetch blogs for the category

    if ($blogs->isEmpty()) {
        abort(404, 'No blogs found for this category.');
    }

    return view('category.show', compact('categories', 'blogs'));
}


}
